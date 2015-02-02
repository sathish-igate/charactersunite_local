<?php
/**
 * @file
 * charactersunite_base_fields.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function charactersunite_base_fields_taxonomy_default_vocabularies() {
  return array(
    'section_position' => array(
      'name' => 'Section Position',
      'machine_name' => 'section_position',
      'description' => '',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
