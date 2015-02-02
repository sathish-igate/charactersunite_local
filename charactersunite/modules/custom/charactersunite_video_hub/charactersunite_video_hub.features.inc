<?php
/**
 * @file
 * charactersunite_video_hub.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_video_hub_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function charactersunite_video_hub_node_info() {
  $items = array(
    'video_hub' => array(
      'name' => t('Video Hub'),
      'base' => 'node_content',
      'description' => t('This content type is used to add contents for "i-wont-stand-for/videos, initiatives/storytelling-tour/mainstage-showcases, initiatives/storytelling-tour/student-stories, initiatives/town-hall/local-contest-winners"'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
