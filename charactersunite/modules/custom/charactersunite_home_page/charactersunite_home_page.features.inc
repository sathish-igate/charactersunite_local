<?php
/**
 * @file
 * charactersunite_home_page.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_home_page_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function charactersunite_home_page_node_info() {
  $items = array(
    'home_page' => array(
      'name' => t('Home Page'),
      'base' => 'node_content',
      'description' => t('This content type is used to create content for Home Page(Main Landing Page)'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
