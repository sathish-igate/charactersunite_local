<?php
/**
 * @file
 * charactersunite_panels.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function charactersunite_panels_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
}
