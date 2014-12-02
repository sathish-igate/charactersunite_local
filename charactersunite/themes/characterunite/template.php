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
 * Override or insert variables into the node template.
 */
function characterunite_preprocess_node(&$variables) {
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
/*
function characterunite_menu_item_link($link) {
  // Local tasks for view and edit nodes shouldn't be displayed.
  if ($link['type'] & MENU_LOCAL_TASK && ($link['path'] === 'node/%/edit' || $link['path'] === 'node/%/view')) {
    return '';
  }
  else {
    if (empty($link['localized_options'])) {
      $link['localized_options'] = array();
    }

    return l($link['title'], $link['href'], $link['localized_options']);
  }
}

function characterunite_menu_local_task($link, $active = FALSE) {
  // Don't return a <li> element if $link is empty
  if ($link === '') {
    return '';
  }
  else {
    return '<li '. ($active ? 'class="active" ' : '') .'>'. $link ."</li>\n";  
  }
}*/