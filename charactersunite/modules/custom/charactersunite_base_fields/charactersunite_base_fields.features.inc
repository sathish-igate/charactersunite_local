<?php
/**
 * @file
 * charactersunite_base_fields.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_base_fields_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function charactersunite_base_fields_node_info() {
  $items = array(
    'characters_unite' => array(
      'name' => t('Characters unite'),
      'base' => 'node_content',
      'description' => t('A common content type with all the common fields. All the fields created here will be used across all content types as existing fields for ease of use.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
