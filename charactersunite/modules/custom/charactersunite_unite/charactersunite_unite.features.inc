<?php
/**
 * @file
 * charactersunite_unite.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_unite_ctools_plugin_api($module = NULL, $api = NULL) {
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
function charactersunite_unite_node_info() {
  $items = array(
    'unite' => array(
      'name' => t('Unite'),
      'base' => 'node_content',
      'description' => t('Content type used to create a separate page for #UniteLIVE: Unite Against Bullying'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
