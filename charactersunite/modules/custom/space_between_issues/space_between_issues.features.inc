<?php
/**
 * @file
 * space_between_issues.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function space_between_issues_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function space_between_issues_node_info() {
  $items = array(
    'space_between_issues' => array(
      'name' => t('Space Between Issues'),
      'base' => 'node_content',
      'description' => t('This content type is used to create content for "Programming / The Space Between / Issues"'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
