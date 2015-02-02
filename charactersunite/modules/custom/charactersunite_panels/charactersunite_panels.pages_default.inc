<?php
/**
 * @file
 * charactersunite_panels.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function charactersunite_panels_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panel_context';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Landing Page',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'home_page' => 'home_page',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'onecol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'middle' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '%node:title';
  $display->uuid = '11b93add-c8c1-49db-8a25-1198e491244d';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-245ae14e-57e7-4456-876b-aeabd405628d';
    $pane->panel = 'middle';
    $pane->type = 'views_panes';
    $pane->subtype = 'home_page-panel_pane_1';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '245ae14e-57e7-4456-876b-aeabd405628d';
    $display->content['new-245ae14e-57e7-4456-876b-aeabd405628d'] = $pane;
    $display->panels['middle'][0] = 'new-245ae14e-57e7-4456-876b-aeabd405628d';
    $pane = new stdClass();
    $pane->pid = 'new-3d5a07d8-f3d2-4ed3-a179-61f83adb99e6';
    $pane->panel = 'middle';
    $pane->type = 'views_panes';
    $pane->subtype = 'home_page-panel_pane_2';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '3d5a07d8-f3d2-4ed3-a179-61f83adb99e6';
    $display->content['new-3d5a07d8-f3d2-4ed3-a179-61f83adb99e6'] = $pane;
    $display->panels['middle'][1] = 'new-3d5a07d8-f3d2-4ed3-a179-61f83adb99e6';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view_panel_context'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panel_context_2';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 1;
  $handler->conf = array(
    'title' => 'Biography',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'biography' => 'biography',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'twocol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'left' => array(
        'content' => array(
          'element' => 'div',
          'attributes' => array(
            'id' => '',
            'class' => 'biography-col1',
          ),
        ),
        'theme' => 0,
      ),
      'right' => array(
        'content' => array(
          'element' => 'div',
          'attributes' => array(
            'id' => '',
            'class' => 'biography-col2',
          ),
        ),
        'theme' => 0,
      ),
      'top' => NULL,
      'bottom' => NULL,
      'default' => array(
        'content' => array(
          'element' => 'div',
          'attributes' => array(
            'id' => '',
            'class' => 'biography_panel',
          ),
        ),
        'theme' => 1,
      ),
    ),
    'left' => array(
      'style' => 'wrapper_element',
    ),
    'right' => array(
      'style' => 'wrapper_element',
    ),
    'style' => 'wrapper_element',
  );
  $display->cache = array();
  $display->title = '%node:title';
  $display->uuid = '1994ae97-193b-4e95-82f2-31e82ab3647d';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-c6572339-9458-411d-9c3c-a9e9999679bd';
    $pane->panel = 'left';
    $pane->type = 'token';
    $pane->subtype = 'node:field-biography-name';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'sanitize' => 0,
      'context' => 'argument_entity_id:node_1',
      'override_title' => 1,
      'override_title_text' => '<none>',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => array(
        'title' => array(
          'element' => 'no_wrapper',
          'attributes' => array(
            'id' => '',
            'class' => '',
          ),
        ),
        'content' => array(
          'element' => 'h1',
          'attributes' => array(
            'id' => '',
            'class' => '',
          ),
        ),
        'theme' => 0,
      ),
      'style' => 'wrapper_element',
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'c6572339-9458-411d-9c3c-a9e9999679bd';
    $display->content['new-c6572339-9458-411d-9c3c-a9e9999679bd'] = $pane;
    $display->panels['left'][0] = 'new-c6572339-9458-411d-9c3c-a9e9999679bd';
    $pane = new stdClass();
    $pane->pid = 'new-ef8e52b8-9619-42f9-96d3-b14992a12497';
    $pane->panel = 'left';
    $pane->type = 'token';
    $pane->subtype = 'node:field-biography-description';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'sanitize' => 0,
      'context' => 'argument_entity_id:node_1',
      'override_title' => 1,
      'override_title_text' => '<none>',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = 'ef8e52b8-9619-42f9-96d3-b14992a12497';
    $display->content['new-ef8e52b8-9619-42f9-96d3-b14992a12497'] = $pane;
    $display->panels['left'][1] = 'new-ef8e52b8-9619-42f9-96d3-b14992a12497';
    $pane = new stdClass();
    $pane->pid = 'new-6f578c6b-0483-4e4e-9b49-ed88c8e7ebc0';
    $pane->panel = 'left';
    $pane->type = 'block';
    $pane->subtype = 'block-5';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => '<none>',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => array(
        'title' => array(
          'element' => 'no_wrapper',
          'attributes' => array(
            'id' => '',
            'class' => '',
          ),
        ),
        'content' => array(
          'element' => 'div',
          'attributes' => array(
            'id' => '',
            'class' => 'share',
          ),
        ),
        'theme' => 0,
      ),
      'style' => 'wrapper_element',
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '6f578c6b-0483-4e4e-9b49-ed88c8e7ebc0';
    $display->content['new-6f578c6b-0483-4e4e-9b49-ed88c8e7ebc0'] = $pane;
    $display->panels['left'][2] = 'new-6f578c6b-0483-4e4e-9b49-ed88c8e7ebc0';
    $pane = new stdClass();
    $pane->pid = 'new-725f6cfb-efa8-4609-9ae0-42e53e5c1ce6';
    $pane->panel = 'right';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_biography_image';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'image',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(
        'image_style' => '',
        'image_link' => '',
      ),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 1,
      'override_title_text' => '<none>',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '725f6cfb-efa8-4609-9ae0-42e53e5c1ce6';
    $display->content['new-725f6cfb-efa8-4609-9ae0-42e53e5c1ce6'] = $pane;
    $display->panels['right'][0] = 'new-725f6cfb-efa8-4609-9ae0-42e53e5c1ce6';
    $pane = new stdClass();
    $pane->pid = 'new-20569875-d95b-4825-a522-13648bd52e56';
    $pane->panel = 'right';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_biography_links_title';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'text_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 1,
      'override_title_text' => '<none>',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => array(
        'title' => array(
          'element' => 'no_wrapper',
          'attributes' => array(
            'id' => '',
            'class' => '',
          ),
        ),
        'content' => array(
          'element' => 'h1',
          'attributes' => array(
            'id' => '',
            'class' => '',
          ),
        ),
        'theme' => 0,
      ),
      'style' => 'wrapper_element',
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '20569875-d95b-4825-a522-13648bd52e56';
    $display->content['new-20569875-d95b-4825-a522-13648bd52e56'] = $pane;
    $display->panels['right'][1] = 'new-20569875-d95b-4825-a522-13648bd52e56';
    $pane = new stdClass();
    $pane->pid = 'new-7357ba16-e2e3-490c-bd03-83b9a81cf1a6';
    $pane->panel = 'right';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_biography_links';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'link_default',
      'delta_limit' => '0',
      'delta_offset' => '0',
      'delta_reversed' => 0,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 1,
      'override_title_text' => '<none>',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => array(
        'title' => array(
          'element' => 'no_wrapper',
          'attributes' => array(
            'id' => '',
            'class' => '',
          ),
        ),
        'content' => array(
          'element' => 'div',
          'attributes' => array(
            'id' => '',
            'class' => 'biography_links',
          ),
        ),
        'theme' => 0,
      ),
      'style' => 'wrapper_element',
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '7357ba16-e2e3-490c-bd03-83b9a81cf1a6';
    $display->content['new-7357ba16-e2e3-490c-bd03-83b9a81cf1a6'] = $pane;
    $display->panels['right'][2] = 'new-7357ba16-e2e3-490c-bd03-83b9a81cf1a6';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view_panel_context_2'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panel_context_3';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 2;
  $handler->conf = array(
    'title' => 'Announcement',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'announcement' => 'announcement',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'onecol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'middle' => array(
        'content' => array(
          'element' => 'div',
          'attributes' => array(
            'id' => 'announcement_detail',
            'class' => '',
          ),
        ),
        'theme' => 0,
      ),
    ),
    'middle' => array(
      'style' => 'wrapper_element',
    ),
  );
  $display->cache = array();
  $display->title = '%node:title';
  $display->uuid = '111ab982-dcd5-48c8-a381-b45a66134ba0';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-94a2738e-d491-436a-b736-0249636f2740';
    $pane->panel = 'middle';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_press_detail_name';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'text_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => array(
        'title' => array(
          'element' => 'no_wrapper',
          'attributes' => array(
            'id' => '',
            'class' => '',
          ),
        ),
        'content' => array(
          'element' => 'h2',
          'attributes' => array(
            'id' => '',
            'class' => '',
          ),
        ),
        'theme' => 0,
      ),
      'style' => 'wrapper_element',
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '94a2738e-d491-436a-b736-0249636f2740';
    $display->content['new-94a2738e-d491-436a-b736-0249636f2740'] = $pane;
    $display->panels['middle'][0] = 'new-94a2738e-d491-436a-b736-0249636f2740';
    $pane = new stdClass();
    $pane->pid = 'new-cbdff5f5-f7ac-4ec6-83d2-27f94a4f9382';
    $pane->panel = 'middle';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_press_detail_body';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'text_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => array(
        'title' => array(
          'element' => 'no_wrapper',
          'attributes' => array(
            'id' => '',
            'class' => '',
          ),
        ),
        'content' => array(
          'element' => 'div',
          'attributes' => array(
            'id' => '',
            'class' => '',
          ),
        ),
        'theme' => 0,
      ),
      'style' => 'wrapper_element',
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = 'cbdff5f5-f7ac-4ec6-83d2-27f94a4f9382';
    $display->content['new-cbdff5f5-f7ac-4ec6-83d2-27f94a4f9382'] = $pane;
    $display->panels['middle'][1] = 'new-cbdff5f5-f7ac-4ec6-83d2-27f94a4f9382';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view_panel_context_3'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panel_context_4';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 3;
  $handler->conf = array(
    'title' => 'Internal Landing Page',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'internal_landing_page' => 'internal_landing_page',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'twocol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'left' => array(
        'content' => array(
          'element' => 'div',
          'attributes' => array(
            'id' => '',
            'class' => 'internal-landing-left',
          ),
        ),
        'theme' => 0,
      ),
      'right' => NULL,
    ),
    'left' => array(
      'style' => 'wrapper_element',
    ),
  );
  $display->cache = array();
  $display->title = '%node:title';
  $display->uuid = '01f3728a-3504-4932-b6e2-69e18ddc9fa7';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-eeaf31b4-bb91-4693-885a-317cef0f1eee';
    $pane->panel = 'left';
    $pane->type = 'views_panes';
    $pane->subtype = 'internal_landing_page-panel_pane_1';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'eeaf31b4-bb91-4693-885a-317cef0f1eee';
    $display->content['new-eeaf31b4-bb91-4693-885a-317cef0f1eee'] = $pane;
    $display->panels['left'][0] = 'new-eeaf31b4-bb91-4693-885a-317cef0f1eee';
    $pane = new stdClass();
    $pane->pid = 'new-86cc2f1d-ecee-4db6-9fb6-03cfdf8137cf';
    $pane->panel = 'left';
    $pane->type = 'views_panes';
    $pane->subtype = 'internal_landing_page-panel_pane_2';
    $pane->shown = TRUE;
    $pane->access = array(
      'logic' => 'and',
    );
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '86cc2f1d-ecee-4db6-9fb6-03cfdf8137cf';
    $display->content['new-86cc2f1d-ecee-4db6-9fb6-03cfdf8137cf'] = $pane;
    $display->panels['left'][1] = 'new-86cc2f1d-ecee-4db6-9fb6-03cfdf8137cf';
    $pane = new stdClass();
    $pane->pid = 'new-9bdd6183-f7e3-4722-a531-46f9488a0d01';
    $pane->panel = 'left';
    $pane->type = 'views_panes';
    $pane->subtype = 'internal_landing_page-panel_pane_3';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '9bdd6183-f7e3-4722-a531-46f9488a0d01';
    $display->content['new-9bdd6183-f7e3-4722-a531-46f9488a0d01'] = $pane;
    $display->panels['left'][2] = 'new-9bdd6183-f7e3-4722-a531-46f9488a0d01';
    $pane = new stdClass();
    $pane->pid = 'new-f78f72a9-1ec7-489b-a9a2-782615733c76';
    $pane->panel = 'left';
    $pane->type = 'views_panes';
    $pane->subtype = 'internal_landing_page-panel_pane_4';
    $pane->shown = TRUE;
    $pane->access = array(
      'plugins' => array(),
    );
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 3;
    $pane->locks = array();
    $pane->uuid = 'f78f72a9-1ec7-489b-a9a2-782615733c76';
    $display->content['new-f78f72a9-1ec7-489b-a9a2-782615733c76'] = $pane;
    $display->panels['left'][3] = 'new-f78f72a9-1ec7-489b-a9a2-782615733c76';
    $pane = new stdClass();
    $pane->pid = 'new-1ba1019a-e61a-4dcc-85c7-67f95b875bbc';
    $pane->panel = 'left';
    $pane->type = 'views_panes';
    $pane->subtype = 'internal_landing_page-panel_pane_5';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 4;
    $pane->locks = array();
    $pane->uuid = '1ba1019a-e61a-4dcc-85c7-67f95b875bbc';
    $display->content['new-1ba1019a-e61a-4dcc-85c7-67f95b875bbc'] = $pane;
    $display->panels['left'][4] = 'new-1ba1019a-e61a-4dcc-85c7-67f95b875bbc';
    $pane = new stdClass();
    $pane->pid = 'new-dc69df0f-8fab-4f76-984d-28910c6aa0f7';
    $pane->panel = 'right';
    $pane->type = 'views_panes';
    $pane->subtype = 'internal_landing_page-panel_pane_4';
    $pane->shown = FALSE;
    $pane->access = array(
      'plugins' => array(),
    );
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'dc69df0f-8fab-4f76-984d-28910c6aa0f7';
    $display->content['new-dc69df0f-8fab-4f76-984d-28910c6aa0f7'] = $pane;
    $display->panels['right'][0] = 'new-dc69df0f-8fab-4f76-984d-28910c6aa0f7';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view_panel_context_4'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panel_context_5';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 4;
  $handler->conf = array(
    'title' => 'Hub',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'hub' => 'hub',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'onecol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'left' => NULL,
      'right' => NULL,
      'middle' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '%node:title';
  $display->uuid = 'adc1562d-e9dd-4627-bea9-c3ed5da1ea61';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-0ae8237f-b0fb-4091-86da-a2947540bc40';
    $pane->panel = 'middle';
    $pane->type = 'views_panes';
    $pane->subtype = 'hub-panel_pane_1';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '0ae8237f-b0fb-4091-86da-a2947540bc40';
    $display->content['new-0ae8237f-b0fb-4091-86da-a2947540bc40'] = $pane;
    $display->panels['middle'][0] = 'new-0ae8237f-b0fb-4091-86da-a2947540bc40';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view_panel_context_5'] = $handler;

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view_panel_context_6';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 5;
  $handler->conf = array(
    'title' => 'Space Between Issues',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'space_between_issues' => 'space_between_issues',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'onecol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'left' => NULL,
      'right' => NULL,
      'bottom' => NULL,
      'middle' => array(
        'content' => array(
          'element' => 'div',
          'attributes' => array(
            'id' => '',
            'class' => 'spaceBetweenIssues',
          ),
        ),
        'theme' => 0,
      ),
    ),
    'middle' => array(
      'style' => 'wrapper_element',
    ),
  );
  $display->cache = array();
  $display->title = '%node:title';
  $display->uuid = 'e5a6606f-29cf-4ec3-94bc-50a386e33244';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-e1635f2e-86d2-4a49-b13c-86e2a52aa159';
    $pane->panel = 'middle';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_sbi_description';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'text_default',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'e1635f2e-86d2-4a49-b13c-86e2a52aa159';
    $display->content['new-e1635f2e-86d2-4a49-b13c-86e2a52aa159'] = $pane;
    $display->panels['middle'][0] = 'new-e1635f2e-86d2-4a49-b13c-86e2a52aa159';
    $pane = new stdClass();
    $pane->pid = 'new-4b0292c3-2f2e-4c61-bb49-956fbe766ae9';
    $pane->panel = 'middle';
    $pane->type = 'views_panes';
    $pane->subtype = 'the_space_between_issues-panel_pane_1';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '4b0292c3-2f2e-4c61-bb49-956fbe766ae9';
    $display->content['new-4b0292c3-2f2e-4c61-bb49-956fbe766ae9'] = $pane;
    $display->panels['middle'][1] = 'new-4b0292c3-2f2e-4c61-bb49-956fbe766ae9';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view_panel_context_6'] = $handler;

  return $export;
}
