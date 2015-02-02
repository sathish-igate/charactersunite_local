<?php
/**
 * @file
 * charactersunite_tab_page.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_tab_page_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function charactersunite_tab_page_node_info() {
  $items = array(
    'tab_page' => array(
      'name' => t('Tab Page'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
