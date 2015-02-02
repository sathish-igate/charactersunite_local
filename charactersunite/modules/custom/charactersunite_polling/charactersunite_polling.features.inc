<?php
/**
 * @file
 * charactersunite_polling.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_polling_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function charactersunite_polling_node_info() {
  $items = array(
    'polling' => array(
      'name' => t('Polling'),
      'base' => 'node_content',
      'description' => t('This content type is used to create content for "HOME  > ABOUT  > NEWS AND INFO  > POLLING"'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
