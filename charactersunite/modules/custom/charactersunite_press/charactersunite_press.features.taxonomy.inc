<?php
/**
 * @file
 * charactersunite_press.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function charactersunite_press_taxonomy_default_vocabularies() {
  return array(
    'press_type' => array(
      'name' => 'Press Type',
      'machine_name' => 'press_type',
      'description' => '',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
