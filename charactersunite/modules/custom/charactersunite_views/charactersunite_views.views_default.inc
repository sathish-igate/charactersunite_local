<?php
/**
 * @file
 * charactersunite_views.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function charactersunite_views_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'announcement';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Announcement';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Announcement';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'announcement' => 'announcement',
  );

  /* Display: Announcement List */
  $handler = $view->new_display('page', 'Announcement List', 'page_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Announcements';
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['css_class'] = 'announcements_list';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['inline'] = array(
    'nid' => 'nid',
    'field_press_detail_name' => 'field_press_detail_name',
    'field_press_detail_date' => 'field_press_detail_date',
  );
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['label'] = '';
  $handler->display->display_options['fields']['nid']['exclude'] = TRUE;
  $handler->display->display_options['fields']['nid']['element_label_colon'] = FALSE;
  /* Field: Content: Headline */
  $handler->display->display_options['fields']['field_press_detail_name']['id'] = 'field_press_detail_name';
  $handler->display->display_options['fields']['field_press_detail_name']['table'] = 'field_data_field_press_detail_name';
  $handler->display->display_options['fields']['field_press_detail_name']['field'] = 'field_press_detail_name';
  $handler->display->display_options['fields']['field_press_detail_name']['label'] = '';
  $handler->display->display_options['fields']['field_press_detail_name']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_press_detail_name']['alter']['path'] = 'node/[nid]';
  $handler->display->display_options['fields']['field_press_detail_name']['element_type'] = 'strong';
  $handler->display->display_options['fields']['field_press_detail_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_press_detail_name']['element_default_classes'] = FALSE;
  /* Field: Content: Date */
  $handler->display->display_options['fields']['field_press_detail_date']['id'] = 'field_press_detail_date';
  $handler->display->display_options['fields']['field_press_detail_date']['table'] = 'field_data_field_press_detail_date';
  $handler->display->display_options['fields']['field_press_detail_date']['field'] = 'field_press_detail_date';
  $handler->display->display_options['fields']['field_press_detail_date']['label'] = '';
  $handler->display->display_options['fields']['field_press_detail_date']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_press_detail_date']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_press_detail_date']['settings'] = array(
    'format_type' => 'announcement_date',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
  );
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Date (field_press_detail_date) */
  $handler->display->display_options['sorts']['field_press_detail_date_value']['id'] = 'field_press_detail_date_value';
  $handler->display->display_options['sorts']['field_press_detail_date_value']['table'] = 'field_data_field_press_detail_date';
  $handler->display->display_options['sorts']['field_press_detail_date_value']['field'] = 'field_press_detail_date_value';
  $handler->display->display_options['sorts']['field_press_detail_date_value']['order'] = 'DESC';
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  $handler->display->display_options['path'] = 'content/news-and-info/announcement';
  $export['announcement'] = $view;

  $view = new view();
  $view->name = 'home_page';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Home Page';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'home_page' => 'home_page',
  );

  /* Display: Homepage Scroll */
  $handler = $view->new_display('panel_pane', 'Homepage Scroll', 'panel_pane_1');
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Content: Scroll Section (field_home_scroll_section) */
  $handler->display->display_options['relationships']['field_home_scroll_section_value']['id'] = 'field_home_scroll_section_value';
  $handler->display->display_options['relationships']['field_home_scroll_section_value']['table'] = 'field_data_field_home_scroll_section';
  $handler->display->display_options['relationships']['field_home_scroll_section_value']['field'] = 'field_home_scroll_section_value';
  $handler->display->display_options['relationships']['field_home_scroll_section_value']['required'] = TRUE;
  $handler->display->display_options['relationships']['field_home_scroll_section_value']['delta'] = '-1';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Field collection item: Title */
  $handler->display->display_options['fields']['field_home_scroll_title']['id'] = 'field_home_scroll_title';
  $handler->display->display_options['fields']['field_home_scroll_title']['table'] = 'field_data_field_home_scroll_title';
  $handler->display->display_options['fields']['field_home_scroll_title']['field'] = 'field_home_scroll_title';
  $handler->display->display_options['fields']['field_home_scroll_title']['relationship'] = 'field_home_scroll_section_value';
  $handler->display->display_options['fields']['field_home_scroll_title']['label'] = '';
  $handler->display->display_options['fields']['field_home_scroll_title']['element_type'] = 'h2';
  $handler->display->display_options['fields']['field_home_scroll_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_home_scroll_title']['element_default_classes'] = FALSE;
  /* Field: Field collection item: Description */
  $handler->display->display_options['fields']['field_home_scroll_info']['id'] = 'field_home_scroll_info';
  $handler->display->display_options['fields']['field_home_scroll_info']['table'] = 'field_data_field_home_scroll_info';
  $handler->display->display_options['fields']['field_home_scroll_info']['field'] = 'field_home_scroll_info';
  $handler->display->display_options['fields']['field_home_scroll_info']['relationship'] = 'field_home_scroll_section_value';
  $handler->display->display_options['fields']['field_home_scroll_info']['label'] = '';
  $handler->display->display_options['fields']['field_home_scroll_info']['element_type'] = 'p';
  $handler->display->display_options['fields']['field_home_scroll_info']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_home_scroll_info']['element_default_classes'] = FALSE;
  /* Field: Field collection item: Link */
  $handler->display->display_options['fields']['field_home_scroll_link']['id'] = 'field_home_scroll_link';
  $handler->display->display_options['fields']['field_home_scroll_link']['table'] = 'field_data_field_home_scroll_link';
  $handler->display->display_options['fields']['field_home_scroll_link']['field'] = 'field_home_scroll_link';
  $handler->display->display_options['fields']['field_home_scroll_link']['relationship'] = 'field_home_scroll_section_value';
  $handler->display->display_options['fields']['field_home_scroll_link']['label'] = '';
  $handler->display->display_options['fields']['field_home_scroll_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_home_scroll_link']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_home_scroll_link']['click_sort_column'] = 'url';
  /* Field: Field collection item: Image */
  $handler->display->display_options['fields']['field_home_scroll_image']['id'] = 'field_home_scroll_image';
  $handler->display->display_options['fields']['field_home_scroll_image']['table'] = 'field_data_field_home_scroll_image';
  $handler->display->display_options['fields']['field_home_scroll_image']['field'] = 'field_home_scroll_image';
  $handler->display->display_options['fields']['field_home_scroll_image']['relationship'] = 'field_home_scroll_section_value';
  $handler->display->display_options['fields']['field_home_scroll_image']['label'] = '';
  $handler->display->display_options['fields']['field_home_scroll_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_home_scroll_image']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_home_scroll_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_home_scroll_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: Content: Nid */
  $handler->display->display_options['arguments']['nid']['id'] = 'nid';
  $handler->display->display_options['arguments']['nid']['table'] = 'node';
  $handler->display->display_options['arguments']['nid']['field'] = 'nid';
  $handler->display->display_options['arguments']['nid']['default_action'] = 'default';
  $handler->display->display_options['arguments']['nid']['default_argument_type'] = 'node';
  $handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['nid']['validate']['type'] = 'node';
  $handler->display->display_options['arguments']['nid']['validate_options']['types'] = array(
    'home_page' => 'home_page',
  );

  /* Display: Homepage Sections */
  $handler = $view->new_display('panel_pane', 'Homepage Sections', 'panel_pane_2');
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Content: Image Section (field_home_image_section) */
  $handler->display->display_options['relationships']['field_home_image_section_value']['id'] = 'field_home_image_section_value';
  $handler->display->display_options['relationships']['field_home_image_section_value']['table'] = 'field_data_field_home_image_section';
  $handler->display->display_options['relationships']['field_home_image_section_value']['field'] = 'field_home_image_section_value';
  $handler->display->display_options['relationships']['field_home_image_section_value']['required'] = TRUE;
  $handler->display->display_options['relationships']['field_home_image_section_value']['delta'] = '-1';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Field collection item: Title */
  $handler->display->display_options['fields']['field_home_image_title']['id'] = 'field_home_image_title';
  $handler->display->display_options['fields']['field_home_image_title']['table'] = 'field_data_field_home_image_title';
  $handler->display->display_options['fields']['field_home_image_title']['field'] = 'field_home_image_title';
  $handler->display->display_options['fields']['field_home_image_title']['relationship'] = 'field_home_image_section_value';
  $handler->display->display_options['fields']['field_home_image_title']['label'] = '';
  $handler->display->display_options['fields']['field_home_image_title']['element_type'] = 'h2';
  $handler->display->display_options['fields']['field_home_image_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_home_image_title']['element_default_classes'] = FALSE;
  /* Field: Field collection item: Description */
  $handler->display->display_options['fields']['field_home_image_info']['id'] = 'field_home_image_info';
  $handler->display->display_options['fields']['field_home_image_info']['table'] = 'field_data_field_home_image_info';
  $handler->display->display_options['fields']['field_home_image_info']['field'] = 'field_home_image_info';
  $handler->display->display_options['fields']['field_home_image_info']['relationship'] = 'field_home_image_section_value';
  $handler->display->display_options['fields']['field_home_image_info']['label'] = '';
  $handler->display->display_options['fields']['field_home_image_info']['element_type'] = 'p';
  $handler->display->display_options['fields']['field_home_image_info']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_home_image_info']['element_default_classes'] = FALSE;
  /* Field: Field collection item: Link */
  $handler->display->display_options['fields']['field_home_image_link']['id'] = 'field_home_image_link';
  $handler->display->display_options['fields']['field_home_image_link']['table'] = 'field_data_field_home_image_link';
  $handler->display->display_options['fields']['field_home_image_link']['field'] = 'field_home_image_link';
  $handler->display->display_options['fields']['field_home_image_link']['relationship'] = 'field_home_image_section_value';
  $handler->display->display_options['fields']['field_home_image_link']['label'] = '';
  $handler->display->display_options['fields']['field_home_image_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_home_image_link']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_home_image_link']['click_sort_column'] = 'url';
  /* Field: Field collection item: Image */
  $handler->display->display_options['fields']['field_home_image_file']['id'] = 'field_home_image_file';
  $handler->display->display_options['fields']['field_home_image_file']['table'] = 'field_data_field_home_image_file';
  $handler->display->display_options['fields']['field_home_image_file']['field'] = 'field_home_image_file';
  $handler->display->display_options['fields']['field_home_image_file']['relationship'] = 'field_home_image_section_value';
  $handler->display->display_options['fields']['field_home_image_file']['label'] = '';
  $handler->display->display_options['fields']['field_home_image_file']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_home_image_file']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_home_image_file']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_home_image_file']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: Content: Nid */
  $handler->display->display_options['arguments']['nid']['id'] = 'nid';
  $handler->display->display_options['arguments']['nid']['table'] = 'node';
  $handler->display->display_options['arguments']['nid']['field'] = 'nid';
  $handler->display->display_options['arguments']['nid']['default_action'] = 'default';
  $handler->display->display_options['arguments']['nid']['default_argument_type'] = 'node';
  $handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['nid']['validate']['type'] = 'node';
  $handler->display->display_options['arguments']['nid']['validate_options']['types'] = array(
    'home_page' => 'home_page',
  );
  $export['home_page'] = $view;

  $view = new view();
  $view->name = 'hub';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Hub';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['css_class'] = 'hub-page';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['row_class'] = 'hub-page-row';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  /* Relationship: Content: Hub Section (field_hub_section) */
  $handler->display->display_options['relationships']['field_hub_section_value']['id'] = 'field_hub_section_value';
  $handler->display->display_options['relationships']['field_hub_section_value']['table'] = 'field_data_field_hub_section';
  $handler->display->display_options['relationships']['field_hub_section_value']['field'] = 'field_hub_section_value';
  $handler->display->display_options['relationships']['field_hub_section_value']['required'] = TRUE;
  $handler->display->display_options['relationships']['field_hub_section_value']['delta'] = '-1';
  /* Field: Field collection item: Link */
  $handler->display->display_options['fields']['field_hub_link_1']['id'] = 'field_hub_link_1';
  $handler->display->display_options['fields']['field_hub_link_1']['table'] = 'field_data_field_hub_link';
  $handler->display->display_options['fields']['field_hub_link_1']['field'] = 'field_hub_link';
  $handler->display->display_options['fields']['field_hub_link_1']['relationship'] = 'field_hub_section_value';
  $handler->display->display_options['fields']['field_hub_link_1']['label'] = '';
  $handler->display->display_options['fields']['field_hub_link_1']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_hub_link_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_hub_link_1']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_hub_link_1']['type'] = 'link_url';
  /* Field: Field collection item: Thumbnail */
  $handler->display->display_options['fields']['field_hub_thumbnail']['id'] = 'field_hub_thumbnail';
  $handler->display->display_options['fields']['field_hub_thumbnail']['table'] = 'field_data_field_hub_thumbnail';
  $handler->display->display_options['fields']['field_hub_thumbnail']['field'] = 'field_hub_thumbnail';
  $handler->display->display_options['fields']['field_hub_thumbnail']['relationship'] = 'field_hub_section_value';
  $handler->display->display_options['fields']['field_hub_thumbnail']['label'] = '';
  $handler->display->display_options['fields']['field_hub_thumbnail']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_hub_thumbnail']['alter']['path'] = '[field_hub_link_1]';
  $handler->display->display_options['fields']['field_hub_thumbnail']['element_type'] = 'em';
  $handler->display->display_options['fields']['field_hub_thumbnail']['element_class'] = 'issueVideo';
  $handler->display->display_options['fields']['field_hub_thumbnail']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_hub_thumbnail']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_hub_thumbnail']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_hub_thumbnail']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Field collection item: Label */
  $handler->display->display_options['fields']['field_hub_title']['id'] = 'field_hub_title';
  $handler->display->display_options['fields']['field_hub_title']['table'] = 'field_data_field_hub_title';
  $handler->display->display_options['fields']['field_hub_title']['field'] = 'field_hub_title';
  $handler->display->display_options['fields']['field_hub_title']['relationship'] = 'field_hub_section_value';
  $handler->display->display_options['fields']['field_hub_title']['label'] = '';
  $handler->display->display_options['fields']['field_hub_title']['element_type'] = 'h2';
  $handler->display->display_options['fields']['field_hub_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_hub_title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_hub_title']['hide_empty'] = TRUE;
  /* Field: Field collection item: Link */
  $handler->display->display_options['fields']['field_hub_link']['id'] = 'field_hub_link';
  $handler->display->display_options['fields']['field_hub_link']['table'] = 'field_data_field_hub_link';
  $handler->display->display_options['fields']['field_hub_link']['field'] = 'field_hub_link';
  $handler->display->display_options['fields']['field_hub_link']['relationship'] = 'field_hub_section_value';
  $handler->display->display_options['fields']['field_hub_link']['label'] = '';
  $handler->display->display_options['fields']['field_hub_link']['element_type'] = '0';
  $handler->display->display_options['fields']['field_hub_link']['element_class'] = 'uppercase f-small';
  $handler->display->display_options['fields']['field_hub_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_hub_link']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_hub_link']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_hub_link']['click_sort_column'] = 'url';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Contextual filter: Content: Nid */
  $handler->display->display_options['arguments']['nid']['id'] = 'nid';
  $handler->display->display_options['arguments']['nid']['table'] = 'node';
  $handler->display->display_options['arguments']['nid']['field'] = 'nid';
  $handler->display->display_options['arguments']['nid']['default_action'] = 'default';
  $handler->display->display_options['arguments']['nid']['default_argument_type'] = 'node';
  $handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['nid']['specify_validation'] = TRUE;
  $handler->display->display_options['arguments']['nid']['validate']['type'] = 'node';
  $handler->display->display_options['arguments']['nid']['validate_options']['types'] = array(
    'hub' => 'hub',
  );
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'hub' => 'hub',
  );

  /* Display: Hub */
  $handler = $view->new_display('panel_pane', 'Hub', 'panel_pane_1');
  $export['hub'] = $view;

  $view = new view();
  $view->name = 'news_and_info';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'News and Info';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'ANNOUNCEMENTS';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Relationship: Content: Press Section (field_press_section) */
  $handler->display->display_options['relationships']['field_press_section_value']['id'] = 'field_press_section_value';
  $handler->display->display_options['relationships']['field_press_section_value']['table'] = 'field_data_field_press_section';
  $handler->display->display_options['relationships']['field_press_section_value']['field'] = 'field_press_section_value';
  $handler->display->display_options['relationships']['field_press_section_value']['required'] = TRUE;
  $handler->display->display_options['relationships']['field_press_section_value']['delta'] = '-1';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Field collection item: File */
  $handler->display->display_options['fields']['field_file_download_file']['id'] = 'field_file_download_file';
  $handler->display->display_options['fields']['field_file_download_file']['table'] = 'field_data_field_file_download_file';
  $handler->display->display_options['fields']['field_file_download_file']['field'] = 'field_file_download_file';
  $handler->display->display_options['fields']['field_file_download_file']['relationship'] = 'field_polling_files_value';
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['field_file_download_label']['id'] = 'field_file_download_label';
  $handler->display->display_options['fields']['field_file_download_label']['table'] = 'field_data_field_file_download_label';
  $handler->display->display_options['fields']['field_file_download_label']['field'] = 'field_file_download_label';
  $handler->display->display_options['fields']['field_file_download_label']['relationship'] = 'field_polling_files_value';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'press' => 'press',
  );
  /* Filter criterion: Content: Nid */
  $handler->display->display_options['filters']['nid']['id'] = 'nid';
  $handler->display->display_options['filters']['nid']['table'] = 'node';
  $handler->display->display_options['filters']['nid']['field'] = 'nid';

  /* Display: News and Info */
  $handler = $view->new_display('page', 'News and Info', 'page');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'ANNOUNCEMENTS';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Content: Press Section (field_press_section) */
  $handler->display->display_options['relationships']['field_press_section_value']['id'] = 'field_press_section_value';
  $handler->display->display_options['relationships']['field_press_section_value']['table'] = 'field_data_field_press_section';
  $handler->display->display_options['relationships']['field_press_section_value']['field'] = 'field_press_section_value';
  $handler->display->display_options['relationships']['field_press_section_value']['required'] = TRUE;
  $handler->display->display_options['relationships']['field_press_section_value']['delta'] = '-1';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Field collection item: Description */
  $handler->display->display_options['fields']['field_press_section_description']['id'] = 'field_press_section_description';
  $handler->display->display_options['fields']['field_press_section_description']['table'] = 'field_data_field_press_section_description';
  $handler->display->display_options['fields']['field_press_section_description']['field'] = 'field_press_section_description';
  $handler->display->display_options['fields']['field_press_section_description']['relationship'] = 'field_press_section_value';
  /* Field: Field collection item: Headline */
  $handler->display->display_options['fields']['field_press_section_title']['id'] = 'field_press_section_title';
  $handler->display->display_options['fields']['field_press_section_title']['table'] = 'field_data_field_press_section_title';
  $handler->display->display_options['fields']['field_press_section_title']['field'] = 'field_press_section_title';
  $handler->display->display_options['fields']['field_press_section_title']['relationship'] = 'field_press_section_value';
  $handler->display->display_options['fields']['field_press_section_title']['label'] = '';
  $handler->display->display_options['fields']['field_press_section_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_press_section_title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_press_section_title']['click_sort_column'] = 'url';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'press' => 'press',
  );
  /* Filter criterion: Content: Nid */
  $handler->display->display_options['filters']['nid']['id'] = 'nid';
  $handler->display->display_options['filters']['nid']['table'] = 'node';
  $handler->display->display_options['filters']['nid']['field'] = 'nid';
  $handler->display->display_options['filters']['nid']['value']['value'] = '52';
  $handler->display->display_options['path'] = 'news-and-info';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'NEWS AND INFO';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'main-menu';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: IN THE NEWS */
  $handler = $view->new_display('page', 'IN THE NEWS', 'page_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'IN THE NEWS';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Field collection item: Description */
  $handler->display->display_options['fields']['field_press_section_description']['id'] = 'field_press_section_description';
  $handler->display->display_options['fields']['field_press_section_description']['table'] = 'field_data_field_press_section_description';
  $handler->display->display_options['fields']['field_press_section_description']['field'] = 'field_press_section_description';
  $handler->display->display_options['fields']['field_press_section_description']['relationship'] = 'field_press_section_value';
  /* Field: Field collection item: Headline */
  $handler->display->display_options['fields']['field_press_section_title']['id'] = 'field_press_section_title';
  $handler->display->display_options['fields']['field_press_section_title']['table'] = 'field_data_field_press_section_title';
  $handler->display->display_options['fields']['field_press_section_title']['field'] = 'field_press_section_title';
  $handler->display->display_options['fields']['field_press_section_title']['relationship'] = 'field_press_section_value';
  $handler->display->display_options['fields']['field_press_section_title']['label'] = '';
  $handler->display->display_options['fields']['field_press_section_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_press_section_title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_press_section_title']['click_sort_column'] = 'url';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'press' => 'press',
  );
  /* Filter criterion: Content: Nid */
  $handler->display->display_options['filters']['nid']['id'] = 'nid';
  $handler->display->display_options['filters']['nid']['table'] = 'node';
  $handler->display->display_options['filters']['nid']['field'] = 'nid';
  $handler->display->display_options['filters']['nid']['value']['value'] = '79';
  $handler->display->display_options['path'] = 'news-and-info/in-the-news';
  $handler->display->display_options['menu']['type'] = 'tab';
  $handler->display->display_options['menu']['title'] = 'IN THE NEWS';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'main-menu';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: Polling */
  $handler = $view->new_display('page', 'Polling', 'page_2');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'POLLING';
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Content: Related Files (field_polling_files) */
  $handler->display->display_options['relationships']['field_polling_files_value']['id'] = 'field_polling_files_value';
  $handler->display->display_options['relationships']['field_polling_files_value']['table'] = 'field_data_field_polling_files';
  $handler->display->display_options['relationships']['field_polling_files_value']['field'] = 'field_polling_files_value';
  $handler->display->display_options['relationships']['field_polling_files_value']['required'] = TRUE;
  $handler->display->display_options['relationships']['field_polling_files_value']['delta'] = '-1';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Field collection item: File */
  $handler->display->display_options['fields']['field_file_download_file']['id'] = 'field_file_download_file';
  $handler->display->display_options['fields']['field_file_download_file']['table'] = 'field_data_field_file_download_file';
  $handler->display->display_options['fields']['field_file_download_file']['field'] = 'field_file_download_file';
  $handler->display->display_options['fields']['field_file_download_file']['relationship'] = 'field_polling_files_value';
  /* Field: Broken/missing handler */
  $handler->display->display_options['fields']['field_file_download_label']['id'] = 'field_file_download_label';
  $handler->display->display_options['fields']['field_file_download_label']['table'] = 'field_data_field_file_download_label';
  $handler->display->display_options['fields']['field_file_download_label']['field'] = 'field_file_download_label';
  $handler->display->display_options['fields']['field_file_download_label']['relationship'] = 'field_polling_files_value';
  $handler->display->display_options['fields']['field_file_download_label']['label'] = '';
  $handler->display->display_options['fields']['field_file_download_label']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_file_download_label']['element_default_classes'] = FALSE;
  /* Field: Content: polling description */
  $handler->display->display_options['fields']['field_polling_description']['id'] = 'field_polling_description';
  $handler->display->display_options['fields']['field_polling_description']['table'] = 'field_data_field_polling_description';
  $handler->display->display_options['fields']['field_polling_description']['field'] = 'field_polling_description';
  $handler->display->display_options['fields']['field_polling_description']['label'] = '';
  $handler->display->display_options['fields']['field_polling_description']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_polling_description']['element_default_classes'] = FALSE;
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'polling' => 'polling',
  );
  /* Filter criterion: Content: Nid */
  $handler->display->display_options['filters']['nid']['id'] = 'nid';
  $handler->display->display_options['filters']['nid']['table'] = 'node';
  $handler->display->display_options['filters']['nid']['field'] = 'nid';
  $handler->display->display_options['filters']['nid']['value']['value'] = '80';
  $handler->display->display_options['path'] = 'news-and-info/polling';
  $handler->display->display_options['menu']['type'] = 'tab';
  $handler->display->display_options['menu']['title'] = 'POLLING';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'main-menu';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: ANNOUNCEMENTS */
  $handler = $view->new_display('page', 'ANNOUNCEMENTS', 'page_3');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'ANNOUNCEMENTS';
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Content: Press Section (field_press_section) */
  $handler->display->display_options['relationships']['field_press_section_value']['id'] = 'field_press_section_value';
  $handler->display->display_options['relationships']['field_press_section_value']['table'] = 'field_data_field_press_section';
  $handler->display->display_options['relationships']['field_press_section_value']['field'] = 'field_press_section_value';
  $handler->display->display_options['relationships']['field_press_section_value']['required'] = TRUE;
  $handler->display->display_options['relationships']['field_press_section_value']['delta'] = '-1';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Field collection item: Description */
  $handler->display->display_options['fields']['field_press_section_description']['id'] = 'field_press_section_description';
  $handler->display->display_options['fields']['field_press_section_description']['table'] = 'field_data_field_press_section_description';
  $handler->display->display_options['fields']['field_press_section_description']['field'] = 'field_press_section_description';
  $handler->display->display_options['fields']['field_press_section_description']['relationship'] = 'field_press_section_value';
  /* Field: Field collection item: Headline */
  $handler->display->display_options['fields']['field_press_section_title']['id'] = 'field_press_section_title';
  $handler->display->display_options['fields']['field_press_section_title']['table'] = 'field_data_field_press_section_title';
  $handler->display->display_options['fields']['field_press_section_title']['field'] = 'field_press_section_title';
  $handler->display->display_options['fields']['field_press_section_title']['relationship'] = 'field_press_section_value';
  $handler->display->display_options['fields']['field_press_section_title']['label'] = '';
  $handler->display->display_options['fields']['field_press_section_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_press_section_title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_press_section_title']['click_sort_column'] = 'url';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'press' => 'press',
  );
  /* Filter criterion: Content: Nid */
  $handler->display->display_options['filters']['nid']['id'] = 'nid';
  $handler->display->display_options['filters']['nid']['table'] = 'node';
  $handler->display->display_options['filters']['nid']['field'] = 'nid';
  $handler->display->display_options['filters']['nid']['value']['value'] = '52';
  $handler->display->display_options['path'] = 'news-and-info/announcement';
  $handler->display->display_options['menu']['type'] = 'default tab';
  $handler->display->display_options['menu']['title'] = 'ANNOUNCEMENTS';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;
  $handler->display->display_options['tab_options']['type'] = 'tab';
  $handler->display->display_options['tab_options']['title'] = 'ANNOUNCEMENTS';
  $handler->display->display_options['tab_options']['weight'] = '0';
  $export['news_and_info'] = $view;

  $view = new view();
  $view->name = 'photo_gallery';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Photo Gallery';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Photo Gallery View';
  $handler->display->display_options['css_class'] = 'photoGalleryWrapper';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  /* Relationship: Content: Photo Gallery Section (field_photo_gallery_section) */
  $handler->display->display_options['relationships']['field_photo_gallery_section_value']['id'] = 'field_photo_gallery_section_value';
  $handler->display->display_options['relationships']['field_photo_gallery_section_value']['table'] = 'field_data_field_photo_gallery_section';
  $handler->display->display_options['relationships']['field_photo_gallery_section_value']['field'] = 'field_photo_gallery_section_value';
  $handler->display->display_options['relationships']['field_photo_gallery_section_value']['required'] = TRUE;
  $handler->display->display_options['relationships']['field_photo_gallery_section_value']['delta'] = '-1';
  /* Field: Field collection item: Large Image */
  $handler->display->display_options['fields']['field_photo_gallery_image']['id'] = 'field_photo_gallery_image';
  $handler->display->display_options['fields']['field_photo_gallery_image']['table'] = 'field_data_field_photo_gallery_image';
  $handler->display->display_options['fields']['field_photo_gallery_image']['field'] = 'field_photo_gallery_image';
  $handler->display->display_options['fields']['field_photo_gallery_image']['relationship'] = 'field_photo_gallery_section_value';
  $handler->display->display_options['fields']['field_photo_gallery_image']['label'] = '';
  $handler->display->display_options['fields']['field_photo_gallery_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_photo_gallery_image']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_photo_gallery_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_photo_gallery_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Field collection item: Thumbnail */
  $handler->display->display_options['fields']['field_photo_gallery_thumbnail']['id'] = 'field_photo_gallery_thumbnail';
  $handler->display->display_options['fields']['field_photo_gallery_thumbnail']['table'] = 'field_data_field_photo_gallery_thumbnail';
  $handler->display->display_options['fields']['field_photo_gallery_thumbnail']['field'] = 'field_photo_gallery_thumbnail';
  $handler->display->display_options['fields']['field_photo_gallery_thumbnail']['relationship'] = 'field_photo_gallery_section_value';
  $handler->display->display_options['fields']['field_photo_gallery_thumbnail']['label'] = '';
  $handler->display->display_options['fields']['field_photo_gallery_thumbnail']['alter']['path'] = '[field_photo_gallery_image]';
  $handler->display->display_options['fields']['field_photo_gallery_thumbnail']['alter']['absolute'] = TRUE;
  $handler->display->display_options['fields']['field_photo_gallery_thumbnail']['alter']['rel'] = 'extr_overlay';
  $handler->display->display_options['fields']['field_photo_gallery_thumbnail']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_photo_gallery_thumbnail']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_photo_gallery_thumbnail']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_photo_gallery_thumbnail']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'photo_gallery' => 'photo_gallery',
  );
  $export['photo_gallery'] = $view;

  $view = new view();
  $view->name = 'polling';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Polling';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'POLLING';
  $handler->display->display_options['css_class'] = 'polling';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['grouping'] = array(
    0 => array(
      'field' => 'field_polling_description',
      'rendered' => 0,
      'rendered_strip' => 0,
    ),
  );
  $handler->display->display_options['style_options']['row_class'] = 'polling-row';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['inline'] = array(
    'field_polling_description' => 'field_polling_description',
  );
  /* Relationship: Content: Related Files (field_polling_files) */
  $handler->display->display_options['relationships']['field_polling_files_value']['id'] = 'field_polling_files_value';
  $handler->display->display_options['relationships']['field_polling_files_value']['table'] = 'field_data_field_polling_files';
  $handler->display->display_options['relationships']['field_polling_files_value']['field'] = 'field_polling_files_value';
  $handler->display->display_options['relationships']['field_polling_files_value']['required'] = TRUE;
  $handler->display->display_options['relationships']['field_polling_files_value']['delta'] = '-1';
  /* Field: Content: polling description */
  $handler->display->display_options['fields']['field_polling_description']['id'] = 'field_polling_description';
  $handler->display->display_options['fields']['field_polling_description']['table'] = 'field_data_field_polling_description';
  $handler->display->display_options['fields']['field_polling_description']['field'] = 'field_polling_description';
  $handler->display->display_options['fields']['field_polling_description']['label'] = '';
  $handler->display->display_options['fields']['field_polling_description']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_polling_description']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_polling_description']['element_default_classes'] = FALSE;
  /* Field: Field collection item: File */
  $handler->display->display_options['fields']['field_file_download_file']['id'] = 'field_file_download_file';
  $handler->display->display_options['fields']['field_file_download_file']['table'] = 'field_data_field_file_download_file';
  $handler->display->display_options['fields']['field_file_download_file']['field'] = 'field_file_download_file';
  $handler->display->display_options['fields']['field_file_download_file']['relationship'] = 'field_polling_files_value';
  $handler->display->display_options['fields']['field_file_download_file']['label'] = '';
  $handler->display->display_options['fields']['field_file_download_file']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_file_download_file']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_file_download_file']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_file_download_file']['delta_offset'] = '0';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'polling' => 'polling',
  );

  /* Display: Polling */
  $handler = $view->new_display('page', 'Polling', 'page');
  $handler->display->display_options['path'] = 'about/news-and-info/polling';
  $export['polling'] = $view;

  $view = new view();
  $view->name = 'press';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Press';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Resources';
  $handler->display->display_options['css_class'] = 'press-list';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['row_class'] = 'press-article';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['hide_empty'] = TRUE;
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  /* Relationship: Content: Press Section (field_press_section) */
  $handler->display->display_options['relationships']['field_press_section_value']['id'] = 'field_press_section_value';
  $handler->display->display_options['relationships']['field_press_section_value']['table'] = 'field_data_field_press_section';
  $handler->display->display_options['relationships']['field_press_section_value']['field'] = 'field_press_section_value';
  $handler->display->display_options['relationships']['field_press_section_value']['required'] = TRUE;
  $handler->display->display_options['relationships']['field_press_section_value']['delta'] = '-1';
  /* Field: Field collection item: Headline */
  $handler->display->display_options['fields']['field_press_section_title']['id'] = 'field_press_section_title';
  $handler->display->display_options['fields']['field_press_section_title']['table'] = 'field_data_field_press_section_title';
  $handler->display->display_options['fields']['field_press_section_title']['field'] = 'field_press_section_title';
  $handler->display->display_options['fields']['field_press_section_title']['relationship'] = 'field_press_section_value';
  $handler->display->display_options['fields']['field_press_section_title']['label'] = '';
  $handler->display->display_options['fields']['field_press_section_title']['element_type'] = 'h2';
  $handler->display->display_options['fields']['field_press_section_title']['element_class'] = 'title';
  $handler->display->display_options['fields']['field_press_section_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_press_section_title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_press_section_title']['click_sort_column'] = 'url';
  /* Field: Field collection item: Description */
  $handler->display->display_options['fields']['field_press_section_description']['id'] = 'field_press_section_description';
  $handler->display->display_options['fields']['field_press_section_description']['table'] = 'field_data_field_press_section_description';
  $handler->display->display_options['fields']['field_press_section_description']['field'] = 'field_press_section_description';
  $handler->display->display_options['fields']['field_press_section_description']['relationship'] = 'field_press_section_value';
  $handler->display->display_options['fields']['field_press_section_description']['label'] = '';
  $handler->display->display_options['fields']['field_press_section_description']['element_type'] = 'div';
  $handler->display->display_options['fields']['field_press_section_description']['element_class'] = 'body';
  $handler->display->display_options['fields']['field_press_section_description']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_press_section_description']['element_default_classes'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'press' => 'press',
  );
  /* Filter criterion: Content: Type (field_press_type) */
  $handler->display->display_options['filters']['field_press_type_tid']['id'] = 'field_press_type_tid';
  $handler->display->display_options['filters']['field_press_type_tid']['table'] = 'field_data_field_press_type';
  $handler->display->display_options['filters']['field_press_type_tid']['field'] = 'field_press_type_tid';
  $handler->display->display_options['filters']['field_press_type_tid']['value'] = array(
    76 => '76',
  );
  $handler->display->display_options['filters']['field_press_type_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_press_type_tid']['vocabulary'] = 'press_type';

  /* Display: IN THE NEWS */
  $handler = $view->new_display('page', 'IN THE NEWS', 'page');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'IN THE NEWS';
  $handler->display->display_options['path'] = 'about/news-and-info/in-the-news';

  /* Display: Resources */
  $handler = $view->new_display('page', 'Resources', 'page_1');
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'press' => 'press',
  );
  /* Filter criterion: Content: Type (field_press_type) */
  $handler->display->display_options['filters']['field_press_type_tid']['id'] = 'field_press_type_tid';
  $handler->display->display_options['filters']['field_press_type_tid']['table'] = 'field_data_field_press_type';
  $handler->display->display_options['filters']['field_press_type_tid']['field'] = 'field_press_type_tid';
  $handler->display->display_options['filters']['field_press_type_tid']['value'] = array(
    77 => '77',
  );
  $handler->display->display_options['filters']['field_press_type_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_press_type_tid']['vocabulary'] = 'press_type';
  $handler->display->display_options['path'] = 'node/10';
  $export['press'] = $view;

  $view = new view();
  $view->name = 'the_space_between_issues';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'The Space Between Issues';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['css_class'] = 'sbiGalleryView';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['row_class'] = 'sbiGalleryViewRow';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  /* Relationship: Content: Section (field_space_between_issues_secti) */
  $handler->display->display_options['relationships']['field_space_between_issues_secti_value']['id'] = 'field_space_between_issues_secti_value';
  $handler->display->display_options['relationships']['field_space_between_issues_secti_value']['table'] = 'field_data_field_space_between_issues_secti';
  $handler->display->display_options['relationships']['field_space_between_issues_secti_value']['field'] = 'field_space_between_issues_secti_value';
  $handler->display->display_options['relationships']['field_space_between_issues_secti_value']['required'] = TRUE;
  $handler->display->display_options['relationships']['field_space_between_issues_secti_value']['delta'] = '-1';
  /* Field: Field collection item: Image */
  $handler->display->display_options['fields']['field_sbi_image']['id'] = 'field_sbi_image';
  $handler->display->display_options['fields']['field_sbi_image']['table'] = 'field_data_field_sbi_image';
  $handler->display->display_options['fields']['field_sbi_image']['field'] = 'field_sbi_image';
  $handler->display->display_options['fields']['field_sbi_image']['relationship'] = 'field_space_between_issues_secti_value';
  $handler->display->display_options['fields']['field_sbi_image']['label'] = '';
  $handler->display->display_options['fields']['field_sbi_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_sbi_image']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_sbi_image']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_sbi_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_sbi_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Field collection item: Title */
  $handler->display->display_options['fields']['field_sbi_section_title']['id'] = 'field_sbi_section_title';
  $handler->display->display_options['fields']['field_sbi_section_title']['table'] = 'field_data_field_sbi_section_title';
  $handler->display->display_options['fields']['field_sbi_section_title']['field'] = 'field_sbi_section_title';
  $handler->display->display_options['fields']['field_sbi_section_title']['relationship'] = 'field_space_between_issues_secti_value';
  $handler->display->display_options['fields']['field_sbi_section_title']['label'] = '';
  $handler->display->display_options['fields']['field_sbi_section_title']['alter']['text'] = '<strong>[field_sbi_section_title]</strong>';
  $handler->display->display_options['fields']['field_sbi_section_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_sbi_section_title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_sbi_section_title']['hide_empty'] = TRUE;
  /* Field: Field collection item: Description */
  $handler->display->display_options['fields']['field_sbi_section_description']['id'] = 'field_sbi_section_description';
  $handler->display->display_options['fields']['field_sbi_section_description']['table'] = 'field_data_field_sbi_section_description';
  $handler->display->display_options['fields']['field_sbi_section_description']['field'] = 'field_sbi_section_description';
  $handler->display->display_options['fields']['field_sbi_section_description']['relationship'] = 'field_space_between_issues_secti_value';
  $handler->display->display_options['fields']['field_sbi_section_description']['label'] = '';
  $handler->display->display_options['fields']['field_sbi_section_description']['alter']['text'] = '<span class="issuedesc" style="height:150px;">[field_sbi_section_description]</span><br/><span class="issuedescspan"></span>';
  $handler->display->display_options['fields']['field_sbi_section_description']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_sbi_section_description']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_sbi_section_description']['hide_empty'] = TRUE;
  /* Field: Field collection item: Link */
  $handler->display->display_options['fields']['field_sbi_section_link']['id'] = 'field_sbi_section_link';
  $handler->display->display_options['fields']['field_sbi_section_link']['table'] = 'field_data_field_sbi_section_link';
  $handler->display->display_options['fields']['field_sbi_section_link']['field'] = 'field_sbi_section_link';
  $handler->display->display_options['fields']['field_sbi_section_link']['relationship'] = 'field_space_between_issues_secti_value';
  $handler->display->display_options['fields']['field_sbi_section_link']['label'] = '';
  $handler->display->display_options['fields']['field_sbi_section_link']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_sbi_section_link']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_sbi_section_link']['hide_empty'] = TRUE;
  $handler->display->display_options['fields']['field_sbi_section_link']['click_sort_column'] = 'url';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'space_between_issues' => 'space_between_issues',
  );

  /* Display: Content pane */
  $handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_1');
  $export['the_space_between_issues'] = $view;

  return $export;
}
