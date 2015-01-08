<?php
/**
 * @file
 * charactersunite_issues.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_issues_ctools_plugin_api($module = NULL, $api = NULL) {
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
function charactersunite_issues_node_info() {
  $items = array(
    'issues' => array(
      'name' => t('Issues'),
      'base' => 'node_content',
      'description' => t('This content type is used to create Issues content'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
