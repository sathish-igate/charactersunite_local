<?php
/**
 * @file
 * charactersunite_unite.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function charactersunite_unite_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_content_bottom|node|unite|form';
  $field_group->group_name = 'group_content_bottom';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'unite';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Content Bottom',
    'weight' => '7',
    'children' => array(
      0 => 'field_unite_social_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-content-bottom field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_content_bottom|node|unite|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_content_middle|node|unite|form';
  $field_group->group_name = 'group_content_middle';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'unite';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Content Middle',
    'weight' => '6',
    'children' => array(
      0 => 'field_unite_video_id',
      1 => 'field_unite_video_description',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-content-middle field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_content_middle|node|unite|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_content_top|node|unite|form';
  $field_group->group_name = 'group_content_top';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'unite';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Content Top',
    'weight' => '5',
    'children' => array(
      0 => 'field_unite_billboard',
      1 => 'field_unite_billboard_banner',
      2 => 'field_unite_billboard_link',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-content-top field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_content_top|node|unite|form'] = $field_group;

  return $export;
}
