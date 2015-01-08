<?php
/**
 * @file
 * charactersunite_biography.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_biography_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function charactersunite_biography_node_info() {
  $items = array(
    'biography' => array(
      'name' => t('Biography'),
      'base' => 'node_content',
      'description' => t('This content type is used to add contents for "Partners, Award Winners and Bridging the Divide Champions"'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
