<?php
/**
 * @file
 * charactersunite_photo_gallery.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function charactersunite_photo_gallery_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_gallery_information|node|photo_gallery|form';
  $field_group->group_name = 'group_gallery_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'photo_gallery';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Gallery Information',
    'weight' => '5',
    'children' => array(
      0 => 'field_photo_gallery_section',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-gallery-information field-group-fieldset',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_gallery_information|node|photo_gallery|form'] = $field_group;

  return $export;
}
