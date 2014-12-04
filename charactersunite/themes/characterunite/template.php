<?php

/**
 * Implements hook_preprocess_maintenance_page().
 */
function characterunite_preprocess_maintenance_page(&$variables) {
  // By default, site_name is set to Drupal if no db connection is available
  // or during site installation. Setting site_name to an empty string makes
  // the site and update pages look cleaner.
  // @see template_preprocess_maintenance_page
  if (!$variables['db_is_active']) {
    $variables['site_name'] = '';
  }
}

/**
 * Override or insert variables into the maintenance page template.
 */
function characterunite_process_maintenance_page(&$variables) {
  // Always print the site name and slogan, but if they are toggled off, we'll
  // just hide them visually.
  $variables['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
  if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['hide_site_slogan']) {
    // If toggle_site_slogan is FALSE, the site_slogan will be empty, so we rebuild it.
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered
 */
function characterunite_preprocess_node(&$variables, $hook) {
  $node = $variables['node'];
  $language = $node->language;

  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
  // Get a list of all the regions for this theme
  foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {
    // Get the content for each region and add it to the $region variable
    if ($blocks = block_get_blocks_by_region($region_key)) {
      $variables['region'][$region_key] = $blocks;
    }
    else {
      $variables['region'][$region_key] = array();
    }
  }

  /** Video Section Start **/
  if(!(empty($node->field_video_section))) {
    $field_video_sections = field_get_items('node', $node, 'field_video_section');
    if (!empty($field_video_sections)) {
      $field_video_section_items = array();
      foreach ($field_video_sections as $field_video_section) {
        $field_video_section_items[] = entity_revision_load('field_collection_item', $field_video_section['revision_id']); //load current revision of collection
      }
      foreach ($field_video_section_items as $item) {
        $field_video = characterunite_reset(field_get_items('field_collection_item', $item, 'field_video_id'));
        $variables['field_video_id'] = (isset($field_video['value'])?$field_video['value']:'');

        $transcript_title = characterunite_reset(field_get_items('field_collection_item', $item, 'field_transcript_title'));
        $variables['field_transcript_title'] = (isset($transcript_title['value'])?$transcript_title['value']:'');

        $transcript_description = characterunite_reset(field_get_items('field_collection_item', $item, 'field_transcript_description'));
        $variables['field_transcript_description'] = (isset($transcript_description['value'])?$transcript_description['value']:'');

        $transcript_more_link = characterunite_reset(field_get_items('field_collection_item', $item, 'field_transcript_more_link'));
        $variables['field_transcript_more_link'] = (isset($transcript_more_link['value'])?$transcript_more_link['value']:'');

        $video_description = characterunite_reset(field_get_items('field_collection_item', $item, 'field_video_description'));
        $variables['field_video_description'] = (isset($video_description['value'])?$video_description['value']:'');
      }
    }
  }
  /** Video Section End **/

  /** Black Box Section Start **/
  if(!(empty($node->field_black_box_section))) {
    $field_black_box = field_get_items('node', $node, 'field_black_box_section');
    if (!empty($field_black_box)) {
      $field_black_box_section_items = array();
      foreach ($field_black_box as $field_black_box_section) {
        $field_black_box_section_items[] = entity_revision_load('field_collection_item', $field_black_box_section['revision_id']); //load current revision of collection
      }
      foreach ($field_black_box_section_items as $item) {
        $black_box_title = characterunite_reset(field_get_items('field_collection_item', $item, 'field_black_box_title'));
        $variables['field_black_box_title'] = (isset($black_box_title['value'])?$black_box_title['value']:'');

        $black_box_title_2 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_black_box_title_2'));
        $variables['field_black_box_title_2'] = (isset($black_box_title_2['value'])?$black_box_title_2['value']:'');

        $black_box_description = characterunite_reset(field_get_items('field_collection_item', $item, 'field_black_box_description'));
        $field_black_box_description = (isset($black_box_description['value'])?$black_box_description['value']:'');

        $black_box_more_link = characterunite_reset(field_get_items('field_collection_item', $item, 'field_black_box_more_link'));
        $variables['field_black_box_more_link'] = (isset($black_box_more_link['value'])?$black_box_more_link['value']:'');
      }
      if ($field_black_box_description != '' && ($field_black_box_description == strip_tags($field_black_box_description))) {
        $variables['field_black_box_description'] = '<p>'.$field_black_box_description.'</p>';
      }
      else {
        $variables['field_black_box_description'] = $field_black_box_description;
      }
    }
  }
  /** Black Box Section End **/
  
  /** Description Section Start **/
  if(!(empty($node->field_description_section))) {
    $field_description_sections = field_get_items('node', $node, 'field_description_section');
    if (!empty($field_description_sections)) {
      $field_description_section_items = array();
      foreach ($field_description_sections as $field_description_section) {
        $field_description_section_items[] = entity_revision_load('field_collection_item', $field_description_section['revision_id']); //load current revision of collection
      }
      foreach ($field_description_section_items as $item) {
        $ds_title_1 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_ds_title_1'));
        $variables['field_ds_title_1'] = (isset($ds_title_1['value'])?$ds_title_1['value']:'');

        $ds_title_2 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_ds_title_2'));
        $variables['field_ds_title_2'] = (isset($ds_title_2['value'])?$ds_title_2['value']:'');

        $ds_body = characterunite_reset(field_get_items('field_collection_item', $item, 'field_ds_body'));
        $variables['field_ds_body'] = (isset($ds_body['value'])?$ds_body['value']:'');

        $ds_link_url = characterunite_reset(field_get_items('field_collection_item', $item, 'field_ds_link'));
        $field_ds_link_url = (isset($ds_link_url['url'])?($ds_link_url['url']):'');
        $field_ds_link_label = (isset($ds_link_url['title'])?($ds_link_url['title']):'');
        $field_ds_link_target = (isset($ds_link_url['attributes']['target'])?($ds_link_url['attributes']['target']):'');

        $ds_position = characterunite_reset(field_get_items('field_collection_item', $item, 'field_ds_position'));
        $variables['field_ds_position'] = (isset($ds_position['tid'])?taxonomy_term_load($ds_position['tid'])->name:'');
      }
      if ($field_ds_link_url != '') {
        $variables['ds_link_tag'] = l($field_ds_link_label, $field_ds_link_url, array('attributes' => array('target' => $field_ds_link_target)));
      }    
    }
  }
  /** Description Section End **/


  /** Related Videos Section Start **/
  $related_videos_left = $related_videos_right = array(); 
  if(!(empty($node->field_related_videos_section))) {
    $field_related_videos_sections = field_get_items('node', $node, 'field_related_videos_section');
    if (!empty($field_related_videos_sections)) {
      $field_related_videos_section_items = array();
      foreach ($field_related_videos_sections as $field_related_videos_section) {
        $field_related_videos_section_items[] = entity_revision_load('field_collection_item', $field_related_videos_section['revision_id']); //load current revision of collection
      }
      foreach ($field_related_videos_section_items as $item) {
        $related_videos_title_1 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_related_videos_title_1'));
        $field_related_videos_title_1 = (isset($related_videos_title_1['value'])?$related_videos_title_1['value']:'');

        $related_videos_title_2 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_related_videos_title_2'));
        $field_related_videos_title_2 = (isset($related_videos_title_2['value'])?$related_videos_title_2['value']:'');

        $related_videos_description = characterunite_reset(field_get_items('field_collection_item', $item, 'field_related_videos_description'));
        $field_related_videos_description = (isset($related_videos_description['value'])?$related_videos_description['value']:'');

        $related_videos_link = characterunite_reset(field_get_items('field_collection_item', $item, 'field_related_videos_link'));
        $field_related_videos_link_url = (isset($related_videos_link['url'])?($related_videos_link['url']):'');
        $field_related_videos_link_label = (isset($related_videos_link['title'])?$related_videos_link['title']:'');
        $field_related_videos_link_target = (isset($related_videos_link['attributes']['target'])?($related_videos_link['attributes']['target']):'');

        $related_videos_position = characterunite_reset(field_get_items('field_collection_item', $item, 'field_related_videos_position'));
        $field_related_videos_position = (isset($related_videos_position['tid'])?taxonomy_term_load($related_videos_position['tid'])->name:'');

        if ($field_related_videos_title_1 != '' || $field_related_videos_title_2 != '') {
          $related_videos_link_tag = '';
          if ($field_related_videos_link_url != '') {
            $related_videos_link_tag = '<p>'.l($field_related_videos_link_label, $field_related_videos_link_url, array('attributes' => array('target' => $field_related_videos_link_target, 'class' => 'uppercase'))).'</p>';
          }
          if (strtolower($field_related_videos_position) != 'right') {
            $related_videos_left .= '
            <div class="mod full clearfix mod top-space">
              <div class="mainstageHeader">
                <h2 class="blackhead blackheadsmall">'.$field_related_videos_title_1.' <strong>'.$field_related_videos_title_2.'</strong></h2>
              </div>
              <section class="copy clearfix">
              '.$field_related_videos_description.'
              '.$related_videos_link_tag;
          }
          else {
            $related_videos_right .= '
              <div class="mod">
                <div class="mainstageHeader">
                  <h2 class="blackhead blackheadsmall">'.$field_related_videos_title_1.' <strong>'.$field_related_videos_title_2.'</strong></h2>
                </div>
                <div class="initiativeRightBody copy">
                  '.$field_related_videos_description.'
                  '.$related_videos_link_tag.'
                  <div class="mainstageVideos clearfix">
            ';
          }
        
          $field_related_videos_iterations = field_get_items('field_collection_item', $item, 'field_related_videos_iteration');
          if (!empty($field_related_videos_iterations)) {
            $field_related_videos_iteration_items = array();
            foreach ($field_related_videos_iterations as $field_related_videos_iteration) {
              $field_related_videos_iteration_items[] = entity_revision_load('field_collection_item', $field_related_videos_iteration['revision_id']); //load current revision of collection
            }
            $a = 0;
            foreach ($field_related_videos_iteration_items as $iteration_item) {
              $rvi_video_title = characterunite_reset(field_get_items('field_collection_item', $iteration_item, 'field_rvi_video_title'));
              $field_rvi_video_title = (isset($rvi_video_title['value'])?$rvi_video_title['value']:'');  

              $rvi_video_info = characterunite_reset(field_get_items('field_collection_item', $iteration_item, 'field_rvi_video_info'));
              $field_rvi_video_info = (isset($rvi_video_info['value'])?$rvi_video_info['value']:'');  

              $rvi_video_thumbnail = characterunite_reset(field_get_items('field_collection_item', $iteration_item, 'field_rvi_video_thumbnail'));
              $field_rvi_video_thumbnail = (isset($rvi_video_thumbnail['uri'])?$rvi_video_thumbnail['uri']:'');

              $rvi_video_link = characterunite_reset(field_get_items('field_collection_item', $iteration_item, 'field_rvi_video_link'));
              $field_rvi_video_link_url = (isset($rvi_video_link['url'])?$rvi_video_link['url']:'');  
              $field_rvi_video_link_label = (isset($rvi_video_link['title'])?$rvi_video_link['title']:'');  
              $field_rvi_video_link_target = (isset($rvi_video_link['attributes']['target'])?$rvi_video_link['attributes']['target']:'_self');

              if (substr($field_rvi_video_link_url, 0, 4) != 'http' && substr($field_rvi_video_link_url, 0, 1) != '/') {
                $field_rvi_video_link_url = '/'.$field_rvi_video_link_url;
              }
              $class = ((($a+1)%2 == 0)?'even':'odd');
              if (strtolower($field_related_videos_position) != 'right') {
                $related_videos_left .='
                   <div class="relatedVideos clearfix">
                  <a href="'.$field_rvi_video_link_url.'" class="relatedVideosImage" target="'.$field_rvi_video_link_target.'">
                    <img alt="'.$field_rvi_video_title.'" src="'.file_create_url($field_rvi_video_thumbnail).'">
                    <div class="playButton25"></div>
                  </a>
                  <div class="relatedVideosText">
                    <h2>'.substr($field_rvi_video_title,0, 45).'</h2>
                    <p>'.$field_rvi_video_info.'</p>
                    '.l($field_rvi_video_link_label, $field_rvi_video_link_url, array('attributes' => array('target' => $field_rvi_video_link_target))).'
                  </div>
                  </div>
                ';
              }
              else {
                $related_videos_right .='
                   <div class="relatedVideos clearfix '.$class.'">
                  <a href="'.$field_rvi_video_link_url.'" class="relatedVideosImage" target="'.$field_rvi_video_link_target.'">
                    <img alt="'.$field_rvi_video_title.'" src="'.file_create_url($field_rvi_video_thumbnail).'">
                    <div class="playButton25"></div>
                  </a>
                  <div class="relatedVideosText">
                    <h2>'.substr($field_rvi_video_title,0, 45).'</h2>
                    <p>'.$field_rvi_video_info.'</p>
                    '.l($field_rvi_video_link_label, $field_rvi_video_link_url, array('attributes' => array('target' => $field_rvi_video_link_target))).'
                  </div>
                  </div>
                ';
              }
              $a++;
            }
          }
          if (strtolower($field_related_videos_position) != 'right') {
            $related_videos_left .= '
              </section>
            </div>';
          }
          else {
            $related_videos_right .= '</div>
                </div>
              </div>';
          }
        }
      }
    }
  }
  /** Related Videos Section End **/
}

/**
 * Implements theme_menu_tree().
 */
function characterunite_menu_tree($variables) {
  return '<ul class="sf-menu clearfix">' . $variables['tree'] . '</ul>';
}

// Ouptuts site breadcrumbs with current page title appended onto trail
function characterunite_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $crumbs = '<div class="breadcrumb">';
    $array_size = count($breadcrumb);
    $i = 0;
    while ( $i < $array_size) {
      $crumbs .= '<span class="breadcrumb-' . $i;
      if ($i == 0) {
        $crumbs .= ' first';
      }
      $crumbs .=  '">' . str_replace(".", "", $breadcrumb[$i]) . '</span>&nbsp;&gt;&nbsp;';
      $i++;
    }
    $crumbs .= '<span class="active">'. drupal_get_title() .'</span></div>';
    return $crumbs;
  }
}
function characterunite_reset($array) {
  if (is_array($array))
  return reset($array);
}
