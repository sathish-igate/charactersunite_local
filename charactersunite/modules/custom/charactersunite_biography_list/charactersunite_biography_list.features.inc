<?php
/**
 * @file
 * charactersunite_biography_list.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_biography_list_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function charactersunite_biography_list_node_info() {
  $items = array(
    'biography_list' => array(
      'name' => t('Biography List'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
