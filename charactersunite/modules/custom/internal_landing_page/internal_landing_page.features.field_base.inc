<?php
/**
 * @file
 * internal_landing_page.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function internal_landing_page_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_internal_landing_hidden'
  $field_bases['field_internal_landing_hidden'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_internal_landing_hidden',
    'foreign keys' => array(),
    'indexes' => array(),
    'locked' => 0,
    'module' => 'field_hidden',
    'settings' => array(
      'max_length' => 255,
    ),
    'translatable' => 0,
    'type' => 'field_hidden_text',
  );

  return $field_bases;
}
