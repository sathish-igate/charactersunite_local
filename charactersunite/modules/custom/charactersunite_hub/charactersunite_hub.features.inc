<?php
/**
 * @file
 * charactersunite_hub.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_hub_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function charactersunite_hub_node_info() {
  $items = array(
    'hub' => array(
      'name' => t('Hub'),
      'base' => 'node_content',
      'description' => t('Used to create Issues, Initiatives, Programming, Programming/PSAS Pages. Which has only list of video thumbnails, titles and link.'),
      'has_title' => '1',
      'title_label' => t('Page Title'),
      'help' => '',
    ),
  );
  return $items;
}
