<?php
/**
 * @file
 * charactersunite_image_landing_page.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_image_landing_page_ctools_plugin_api($module = NULL, $api = NULL) {
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
function charactersunite_image_landing_page_node_info() {
  $items = array(
    'image_landing_page' => array(
      'name' => t('Image Landing Page'),
      'base' => 'node_content',
      'description' => t('This content type is used to create contents for "initiatives/storytelling-tour/overview and programming/the-space-between/overview"'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
