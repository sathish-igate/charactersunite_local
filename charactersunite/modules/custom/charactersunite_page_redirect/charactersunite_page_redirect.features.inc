<?php
/**
 * @file
 * charactersunite_page_redirect.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_page_redirect_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function charactersunite_page_redirect_node_info() {
  $items = array(
    'page_redirect' => array(
      'name' => t('Page redirect'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
