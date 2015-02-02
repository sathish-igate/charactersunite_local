<?php
/**
 * @file
 * charactersunite_issues.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function charactersunite_issues_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_banner_information|node|issues|form';
  $field_group->group_name = 'group_banner_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'issues';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Banner Information',
    'weight' => '8',
    'children' => array(
      0 => 'field_issues_banner',
      1 => 'field_issues_banner_link',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-banner-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_banner_information|node|issues|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_black_box_information|node|issues|form';
  $field_group->group_name = 'group_black_box_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'issues';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Black Box Information',
    'weight' => '15',
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
  $export['group_black_box_information|node|issues|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_facts_information|node|issues|form';
  $field_group->group_name = 'group_facts_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'issues';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Facts Information',
    'weight' => '12',
    'children' => array(
      0 => 'field_issues_facts_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-facts-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_facts_information|node|issues|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_related_images_information|node|issues|form';
  $field_group->group_name = 'group_related_images_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'issues';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Related Images Information',
    'weight' => '14',
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
  $export['group_related_images_information|node|issues|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_related_videos_information|node|issues|form';
  $field_group->group_name = 'group_related_videos_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'issues';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Related Videos Information',
    'weight' => '13',
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
  $export['group_related_videos_information|node|issues|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_take_action_information|node|issues|form';
  $field_group->group_name = 'group_take_action_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'issues';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Take Action Information',
    'weight' => '10',
    'children' => array(
      0 => 'field_issues_takeaction_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-take-action-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_take_action_information|node|issues|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_video_information|node|issues|form';
  $field_group->group_name = 'group_video_information';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'issues';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Video Information',
    'weight' => '7',
    'children' => array(
      0 => 'field_video_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-video-information field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_video_information|node|issues|form'] = $field_group;

  return $export;
}
