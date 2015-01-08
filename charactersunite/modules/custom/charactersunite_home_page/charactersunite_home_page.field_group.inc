<?php
/**
 * @file
 * charactersunite_home_page.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function charactersunite_home_page_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_scroller|node|home_page|form';
  $field_group->group_name = 'group_scroller';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'home_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Scroller',
    'weight' => '5',
    'children' => array(
      0 => 'field_home_scroll_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-scroller field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_scroller|node|home_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_sections|node|home_page|form';
  $field_group->group_name = 'group_sections';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'home_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Sections',
    'weight' => '6',
    'children' => array(
      0 => 'field_home_image_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-sections field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_sections|node|home_page|form'] = $field_group;

  return $export;
}
