<?php
/**
 * @file
 * charactersunite_press.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_press_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function charactersunite_press_node_info() {
  $items = array(
    'press' => array(
      'name' => t('Press'),
      'base' => 'node_content',
      'description' => t('This content type is used to create "Announcements, News, Resources"'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
