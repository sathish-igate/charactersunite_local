<?php
/**
 * @file
 * charactersunite_announcement.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_announcement_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function charactersunite_announcement_node_info() {
  $items = array(
    'announcement' => array(
      'name' => t('Announcement'),
      'base' => 'node_content',
      'description' => t('This content type is used to add content for Announcement'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
