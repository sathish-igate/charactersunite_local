<?php

/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
function aurora_cu_preprocess_maintenance_page(&$vars, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  // aurora_cu_preprocess_html($variables, $hook);
  // aurora_cu_preprocess_page($variables, $hook);

  // This preprocessor will also be used if the db is inactive. To ensure your
  // theme is used, add the following line to your settings.php file:
  // $conf['maintenance_theme'] = 'aurora_cu';
  // Also, check $vars['db_is_active'] before doing any db queries.
}


/**
 * Implements hook_preprocess_html()
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */


function aurora_cu_preprocess_page(&$vars) {
  global $base_path, $base_url;
  $theme_path = drupal_get_path('theme', 'aurora_cu');
  drupal_add_js(libraries_get_path('flexslider') . '/jquery.flexslider-min.js', array('group' => JS_THEME, 'every_page' => TRUE));
  drupal_add_js(libraries_get_path('jRespond') . '/jRespond.min.js', array('group' => JS_THEME, 'every_page' => TRUE));
  drupal_add_js($theme_path . '/javascripts/social-filter-dropdown.js',array('weight' => -5));
  drupal_add_js($theme_path . '/javascripts/filter-dropdown.js');
  drupal_add_js($theme_path . '/javascripts/font-feature-detection.js');
  drupal_add_js($theme_path . '/javascripts/tableheader.js');
  $icomoon_ie_fix = array(
    '#tag' => 'script',
    '#attributes' => array(
      'src' => $base_url .'/'. $theme_path . '/javascripts/icomoon-gte-ie7.js',
    ),
    '#prefix' => '<!--[if lte IE 9]>',
    '#suffix' => '</script><![endif]-->',
  );  
}


/**
 * Implements hook_views_pre_render().
 */
function aurora_cu_views_pre_render(&$view) {
  $views_prerender_function = 'aurora_cu_views_pre_render_' . $view->name . '__' . $view->current_display;
  if (function_exists($views_prerender_function)) {
   $views_prerender_function($view);
  }
}





/**
 * Override of theme_field();
 * see theme_field() for available variables
 * aspot mobile image
 */
function aurora_cu_field__field_cu_aspot_desktop($vars) {
  // polyfill
  drupal_add_js(drupal_get_path('theme', 'aurora_usa') . '/javascripts/matchmedia.js', 'file');
  drupal_add_js(drupal_get_path('theme', 'aurora_usa') . '/javascripts/picturefill.js', 'file');
  $output = '';
  $filepath = $vars['items'][0]['#item']['uri'];
  $output .= '<div data-src="' . image_style_url('aspot', $filepath) . '" data-media="(min-width: 960px)"></div>';
  $output .= '<!--[if (IE 8) & (!IEMobile)]>';
  $output .= '<div data-src="' . image_style_url('aspot', $filepath) . '"></div>';
  $output .= '<![endif]-->';

  //$output .= '<noscript>';
  $output .= theme('image_style', array('style_name' => 'aspot', 'path' => $filepath, 'alt' => '', 'title' => ''));
  //$output .= '</noscript>';

  return $output;
}
/**
 * Override or insert variables into the field template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("field" in this case.)
 */
function aurora_cu_preprocess_field(&$vars, $hook) {

  if (isset($vars['element']['#object']->type)) {
    if (($vars['element']['#object']->type == 'media_gallery') && ($vars['element']['#field_name'] == 'field_media_items')) {
      append_cover_to_media($vars);
      // REMOVED in favor of node titles
      // append_count_to_caption($vars);
    }
  }

  switch ($vars['element']['#field_name']) {
    // homepage aspots
    case 'field_cu_hp_arefs':
      $vars['classes_array'][] = drupal_html_class('slides');
    break;
    case 'field_hp_promos':
      drupal_add_js(drupal_get_path('theme', 'aurora_usa') . '/javascripts/jquery.touchSwipe.min.js');
      drupal_add_js(drupal_get_path('theme', 'aurora_usa') . '/javascripts/jquery.carouFredSel.min.js');
      //drupal_add_js(drupal_get_path('theme', 'aurora_usa') . '/javascripts/home-carousel.js');
      foreach ($vars['items'] as $delta => $item) {
        $vars['item_attributes_array'][$delta]['class'] = 'carousel-item';
      }
    break;

    case 'field_role':
      if (isset($vars['element']['#view_mode']) && strip_tags($vars['element'][0]['#markup']) == 'Character') {
        switch ($vars['element']['#view_mode']) {
          case 'cast_carousel':
            // modify role field text
            if(isset($vars['element']['#object']->field_usa_actor_name) && !(empty($vars['element']['#object']->field_usa_actor_name))) {
              $actor_name = $vars['element']['#object']->field_usa_actor_name[LANGUAGE_NONE][0]['value'];
              $vars['items'][0]['#markup'] = t('played by') . ' ' . $actor_name;
            } else {
              $vars['items'][0]['#markup'] = '';
            }

            break;
          case 'follow_social':
            //remove role field
            // hide title with js because ds will not let us properly preprocess
            drupal_add_js(drupal_get_path('theme', 'aurora_usa') . '/javascripts/social-character.js');
            unset($vars['items'][0]);
            break;
        }
      }
      if (isset($vars['element']['#view_mode']) && strip_tags($vars['element'][0]['#markup']) == 'Self') {
        switch ($vars['element']['#view_mode']) {
          case 'follow_social':
            //remove role field
            unset($vars['items'][0]);
            break;
        }
      }
      break;
    // ACTOR NAME IN PEOPLE NODES
    case 'field_usa_actor_name':
       if (isset($vars['element']['#view_mode'])) {
        switch ($vars['element']['#view_mode']) {
          case 'cast_carousel':
            // remove as adding to field role so in same div
            unset($vars['items'][0]);
            break;
          case 'follow_social':
            // link actor name
            $nid = $vars['element']['#object']->nid;
            $name = $vars['element']['#items'][0]['safe_value'];
            $vars['items'][0]['#markup'] = l($name, 'node/' . $nid, array('html' => TRUE));
            break;
        }
      }
      break;
    case 'title':
      if (isset($vars['element']['#view_mode'])) {
        switch($vars['element']['#view_mode']) {
          case 'vid_teaser_episode':
            unset($vars['items'][0]);
            break;
          case 'block_cover_title_lg':
            if ($vars['element']['#bundle'] == 'media_gallery' ) {
              $title = strip_tags($vars['element'][0]['#markup']);
              $vars['items'][0]['#markup'] =  '<h2>' . $title . ' ' . t('gallery') . '</h2>';
            }
            break;
        }
      }
      break;
    case 'field_usa_character_thumb':
      // making thumb clickable
      if (isset($vars['element']['#view_mode'])) {
        switch($vars['element']['#view_mode']) {
          case 'follow_social' :
            $node = $vars['element']['#object'];
            $url = drupal_lookup_path('alias', "node/" . $node->nid);
            $thumb = $vars['items'][0];
            $vars['items'][0] = l(render($thumb), $url, array('html' => TRUE));
            break;
          }
        }
      break;
    // AIRDATE IN VIDEOS
    case 'field_video_air_date':
      // change display
      if (isset($vars['element']['#view_mode'])) {
        switch($vars['element']['#view_mode']) {
          case 'full' :
            $airtime = $vars['element']['#items'][0]['value'];
            $air_custom = date('n/d/Y', $airtime);
            $vars['items'][0]['#markup'] = '(' . $air_custom . ')';
            break;
          case 'vid_teaser_episode':
            $title = $vars['element']['#object']->title;
            $airtime = $vars['element']['#items'][0]['value'];
            $air_custom = date('n/d/Y', $airtime);
            $vars['classes_array'][] = drupal_html_class('field-name-title');
            $vars['items'][0]['#markup'] = $title . ' (' . $air_custom . ')';
            break;
          }
        }
      break;
    // episode num IN VIDEOS
    case 'field_episode_number':
      // change display
      if (($vars['element']['#object']->type == 'usa_video') || ($vars['element']['#object']->type == 'usa_tve_video')) {
        if (isset($vars['element']['#view_mode'])) {
          switch($vars['element']['#view_mode']) {
            case 'full' :
            case 'vid_teaser_show_episode':
              $episode = $vars['element']['#items'][0]['safe_value'];
              $vars['items'][0]['#markup'] = $episode ? t('Episode ') . $episode : '';
              break;
            }
          }
        }
      break;
    // season num IN VIDEOS
    case 'field_season_id':
      // change display
      if (($vars['element']['#object']->type == 'usa_video') || ($vars['element']['#object']->type == 'usa_tve_video')) {
        if (isset($vars['element']['#view_mode'])) {
          switch($vars['element']['#view_mode']) {
            case 'full' :
            case 'vid_teaser_show_episode':
              $season = $vars['element']['#items'][0]['safe_value'];
                $vars['items'][0]['#markup'] = $season ? t('Season ') . $season : '';
                break;
            }
          }
        }
      break;
    // SHOW TITLE WITHIN VIDEO TEASERS
    case 'field_show':
      // change display
      if (isset($vars['element']['#view_mode'])) {
        switch($vars['element']['#view_mode']) {
          case 'vid_teaser_episode':
          case 'vid_teaser_general':
          $vars['items'][0]['#prefix'] = '<h4>';
          $vars['items'][0]['#suffix'] = '</h4>';
            break;
          }
        }
      break;
    // DURATION WITHIN VIDEO TEASERS
    case 'field_video_duration':
      // change display
      $duration = $vars['element']['#items'][0]['value'];
      $duration_custom = gmdate("H:i:s", $duration);
      $vars['items'][0]['#markup'] = $duration_custom;
      break;
    // PROMO line 1 text on
    case 'field_promo_text_line_1':
    case 'field_promo_text_line_1_wide':
      // change display
      if (isset($vars['element']['#view_mode'])) {
        switch($vars['element']['#view_mode']) {
          case 'promo_teaser':
          case 'promo_teaser_large':
          $vars['items'][0]['#prefix'] = '<h3>';
          $vars['items'][0]['#suffix'] = '</h3>';
            break;
          }
        }
      break;
    // display title for shows
    //
    case 'field_display_title':
      // change display
      if (isset($vars['element']['#view_mode'])) {
        switch($vars['element']['#view_mode']) {
          case 'block_cover_title':
          $vars['items'][0]['#prefix'] = '<h4>';
          $vars['items'][0]['#suffix'] = '</h4>';
            break;
          case 'follow_social':
          $vars['items'][0]['#prefix'] = '<div><h4>';
          $vars['items'][0]['#suffix'] = '</h4></div>';
            break;
          }
        }
      break;
  }
}