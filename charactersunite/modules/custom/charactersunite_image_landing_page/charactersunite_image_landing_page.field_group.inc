<?php
/**
 * @file
 * charactersunite_image_landing_page.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function charactersunite_image_landing_page_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_black_box_information|node|image_landing_page|form';
  $field_group->group_name = 'group_black_box_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'image_landing_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Black Box Information',
    'weight' => '14',
    'children' => array(
      0 => 'field_black_box_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-black-box-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_black_box_information|node|image_landing_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_description_information|node|image_landing_page|form';
  $field_group->group_name = 'group_description_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'image_landing_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Description Information',
    'weight' => '13',
    'children' => array(
      0 => 'field_description_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-description-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_description_information|node|image_landing_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_file_download_information|node|image_landing_page|form';
  $field_group->group_name = 'group_file_download_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'image_landing_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'File Download Information',
    'weight' => '11',
    'children' => array(
      0 => 'field_file_download_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-file-download-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_file_download_information|node|image_landing_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_gallery_information|node|image_landing_page|form';
  $field_group->group_name = 'group_gallery_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'image_landing_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Gallery Information',
    'weight' => '12',
    'children' => array(
      0 => 'field_ilp_photo_gallery_title',
      1 => 'field_ilp_photo_gallery_images',
      2 => 'field_ilp_photo_gallery_link',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-gallery-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_gallery_information|node|image_landing_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_half_module_information|node|image_landing_page|form';
  $field_group->group_name = 'group_half_module_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'image_landing_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Half Module Information',
    'weight' => '10',
    'children' => array(
      0 => 'field_half_module_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-half-module-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_half_module_information|node|image_landing_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_image_information|node|image_landing_page|form';
  $field_group->group_name = 'group_image_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'image_landing_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Image Information',
    'weight' => '7',
    'children' => array(
      0 => 'field_ilp_image',
      1 => 'field_ilp_image_title',
      2 => 'field_ilp_image_description',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-image-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_image_information|node|image_landing_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_link_information|node|image_landing_page|form';
  $field_group->group_name = 'group_link_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'image_landing_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Related Link Information',
    'weight' => '15',
    'children' => array(
      0 => 'field_link_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-link-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_link_information|node|image_landing_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_related_images_information|node|image_landing_page|form';
  $field_group->group_name = 'group_related_images_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'image_landing_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Related Images Information',
    'weight' => '9',
    'children' => array(
      0 => 'field_related_image_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-related-images-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_related_images_information|node|image_landing_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_related_videos_information|node|image_landing_page|form';
  $field_group->group_name = 'group_related_videos_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'image_landing_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Related Videos Information',
    'weight' => '8',
    'children' => array(
      0 => 'field_related_videos_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-related-videos-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_related_videos_information|node|image_landing_page|form'] = $field_group;

  return $export;
}
