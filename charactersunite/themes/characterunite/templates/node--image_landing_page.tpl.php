<?php

/**
 * @file
 * Characterunite's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *   "Blog entry" it would result in "node-blog". Note that the machine
 *   name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *   listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */

?>

<?php


  /** Related Videos Section **/
  $related_videos_left = $related_videos_right = ''; 
  $field_related_videos_sections = field_get_items('node', $node, 'field_related_videos_section');
  if (!empty($field_related_videos_sections)) {
    $field_related_videos_section_items = array();
    foreach ($field_related_videos_sections as $field_related_videos_section) {
      $field_related_videos_section_items[] = entity_revision_load('field_collection_item', $field_related_videos_section['revision_id']); //load current revision of collection
    }
    foreach ($field_related_videos_section_items as $item) {
      $related_videos_title_1 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_related_videos_title_1'));
      $field_related_videos_title_1 = (isset($related_videos_title_1['value'])?$related_videos_title_1['value']:'');

      $related_videos_title_2 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_related_videos_title_2'));
      $field_related_videos_title_2 = (isset($related_videos_title_2['value'])?$related_videos_title_2['value']:'');

      $related_videos_description = characterunite_reset(field_get_items('field_collection_item', $item, 'field_related_videos_description'));
      $field_related_videos_description = (isset($related_videos_description['value'])?$related_videos_description['value']:'');

      $related_videos_link = characterunite_reset(field_get_items('field_collection_item', $item, 'field_related_videos_link'));
      $field_related_videos_link_url = (isset($related_videos_link['url'])?($related_videos_link['url']):'');
      $field_related_videos_link_label = (isset($related_videos_link['title'])?$related_videos_link['title']:'');
      $field_related_videos_link_target = (isset($related_videos_link['attributes']['target'])?($related_videos_link['attributes']['target']):'');

      $related_videos_position = characterunite_reset(field_get_items('field_collection_item', $item, 'field_related_videos_position'));
      $field_related_videos_position = (isset($related_videos_position['tid'])?taxonomy_term_load($related_videos_position['tid'])->name:'');

      if ($field_related_videos_title_1 != '' || $field_related_videos_title_2 != '') {
        $related_videos_link_tag = '';
        if ($field_related_videos_link_url != '') {
          $related_videos_link_tag = '<p>'.l($field_related_videos_link_label, $field_related_videos_link_url, array('attributes' => array('target' => $field_related_videos_link_target, 'class' => 'uppercase'))).'</p>';
        }
        if (strtolower($field_related_videos_position) != 'right') {
          $related_videos_left .= '
          <div class="mod full clearfix mod top-space">
            <div class="mainstageHeader">
              <h2 class="blackhead blackheadsmall">'.$field_related_videos_title_1.' <strong>'.$field_related_videos_title_2.'</strong></h2>
            </div>
            <section class="copy clearfix">
            '.$field_related_videos_description.'
            '.$related_videos_link_tag;
        }
        else {
          $related_videos_right .= '
            <div class="mod">
              <div class="mainstageHeader">
                <h2 class="blackhead blackheadsmall">'.$field_related_videos_title_1.' <strong>'.$field_related_videos_title_2.'</strong></h2>
              </div>
              <div class="initiativeRightBody copy">
                '.$field_related_videos_description.'
                '.$related_videos_link_tag.'
                <div class="mainstageVideos clearfix">
          ';
        }
      
        $field_related_videos_iterations = field_get_items('field_collection_item', $item, 'field_related_videos_iteration');
        if (!empty($field_related_videos_iterations)) {
          $field_related_videos_iteration_items = array();
          foreach ($field_related_videos_iterations as $field_related_videos_iteration) {
            $field_related_videos_iteration_items[] = entity_revision_load('field_collection_item', $field_related_videos_iteration['revision_id']); //load current revision of collection
          }
          $a = 0;
          foreach ($field_related_videos_iteration_items as $iteration_item) {
            $rvi_video_title = characterunite_reset(field_get_items('field_collection_item', $iteration_item, 'field_rvi_video_title'));
            $field_rvi_video_title = (isset($rvi_video_title['value'])?$rvi_video_title['value']:'');  

            $rvi_video_info = characterunite_reset(field_get_items('field_collection_item', $iteration_item, 'field_rvi_video_info'));
            $field_rvi_video_info = (isset($rvi_video_info['value'])?$rvi_video_info['value']:'');  

            $rvi_video_thumbnail = characterunite_reset(field_get_items('field_collection_item', $iteration_item, 'field_rvi_video_thumbnail'));
            $field_rvi_video_thumbnail = (isset($rvi_video_thumbnail['uri'])?$rvi_video_thumbnail['uri']:'');

            $rvi_video_link = characterunite_reset(field_get_items('field_collection_item', $iteration_item, 'field_rvi_video_link'));
            $field_rvi_video_link_url = (isset($rvi_video_link['url'])?$rvi_video_link['url']:'');  
            $field_rvi_video_link_label = (isset($rvi_video_link['title'])?$rvi_video_link['title']:'');  
            $field_rvi_video_link_target = (isset($rvi_video_link['attributes']['target'])?$rvi_video_link['attributes']['target']:'_self');

            if (substr($field_rvi_video_link_url, 0, 4) != 'http' && substr($field_rvi_video_link_url, 0, 1) != '/') {
              $field_rvi_video_link_url = '/'.$field_rvi_video_link_url;
            }
            $class = ((($a+1)%2 == 0)?'even':'odd');
            if (strtolower($field_related_videos_position) != 'right') {
              $related_videos_left .='
                 <div class="relatedVideos clearfix">
                <a href="'.$field_rvi_video_link_url.'" class="relatedVideosImage" target="'.$field_rvi_video_link_target.'">
                  <img alt="'.$field_rvi_video_title.'" src="'.file_create_url($field_rvi_video_thumbnail).'">
                  <div class="playButton25"></div>
                </a>
                <div class="relatedVideosText">
                  <h2>'.substr($field_rvi_video_title,0, 45).'</h2>
                  <p>'.$field_rvi_video_info.'</p>
                  '.l($field_rvi_video_link_label, $field_rvi_video_link_url, array('attributes' => array('target' => $field_rvi_video_link_target))).'
                </div>
                </div>
              ';
            }
            else {
              $related_videos_right .='
                <a class="mainstageShowcasesVideo" href="'.$field_rvi_video_link_url.'" target="'.$field_rvi_video_link_target.'">
                  <img class="videoThumb" alt="'.$field_rvi_video_title.'" src="'.file_create_url($field_rvi_video_thumbnail).'">
                  <div class="playButton25"></div>
                  <p>'.$field_rvi_video_title.'</p>
                  <p class="watchNow">'.$field_rvi_video_link_label.'</p>
                </a>
              ';
            }
            $a++;
          }
        }
        if (strtolower($field_related_videos_position) != 'right') {
          $related_videos_left .= '
            </section>
          </div>';
        }
        else {
          $related_videos_right .= '</div>
              </div>
            </div>';
        }
      }
    }
  }
  
  /** Half Module Section **/
  $field_half_module_left = $field_half_module_right = '';
  $field_half_module_sections = field_get_items('node', $node, 'field_half_module_section');
  if (!empty($field_half_module_sections)) {
    $field_half_module_section_items = array();
    foreach ($field_half_module_sections as $field_half_module_section) {
      $field_half_module_section_items[] = entity_revision_load('field_collection_item', $field_half_module_section['revision_id']); //load current revision of collection
    }
    $half_module = 0;
    foreach ($field_half_module_section_items as $item) {
      $half_module_title_1 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_half_module_title_1'));
      $field_half_module_title_1 = (isset($half_module_title_1['value'])?$half_module_title_1['value']:'');

      $half_module_title_2 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_half_module_title_2'));
      $field_half_module_title_2 = (isset($half_module_title_2['value'])?$half_module_title_2['value']:'');

      $half_module_description = characterunite_reset(field_get_items('field_collection_item', $item, 'field_half_module_description'));
      $field_half_module_description = (isset($half_module_description['value'])?$half_module_description['value']:'');

      $half_module_link = characterunite_reset(field_get_items('field_collection_item', $item, 'field_half_module_link'));
      $field_half_module_link_url = (isset($half_module_link['url'])?($half_module_link['url']):'');
      $field_half_module_link_label = (isset($half_module_link['title'])?$half_module_link['title']:'');
      $field_half_module_link_target = (isset($half_module_link['attributes']['target'])?($half_module_link['attributes']['target']):'');

      $ds_position = characterunite_reset(field_get_items('field_collection_item', $item, 'field_ds_position'));
      $field_ds_position = (isset($ds_position['tid'])?taxonomy_term_load($ds_position['tid'])->name:'');
      if (substr($field_half_module_link_url, 0, 4) != 'http' && substr($field_half_module_link_url, 0, 1) != '/') {
        $field_half_module_link_url = '/'.$field_half_module_link_url;
      }
      $half_module_link_tag = '';
      if ($field_half_module_link_url != '') {
        //$half_module_link_tag = '<p>'.l($field_half_module_link_label, $field_half_module_link_url, array('attributes' => array('target' => $field_half_module_link_target, 'class' => 'uppercase')));
        $half_module_link_tag = '<p><a href="'.$field_half_module_link_url.'" target="'.$field_half_module_link_target.'" class="uppercase">'.$field_half_module_link_label.'</a>';
      }
      $class = (($half_module%2 == 0)?'clear':'');      
      if ($field_half_module_title_1 != '' || $field_half_module_title_2 != '' || $field_half_module_description != '' || $field_half_module_link_url != '') {
        if (strtolower($field_ds_position) != 'right') {
        $field_half_module_left .= '
          <div class="'.$class.' mod half">
            <div class="mainstageHeader">
              <h2 class="blackhead blackheadsmall">'.$field_half_module_title_1.' <strong>'.$field_half_module_title_2.'</strong></h2>
            </div>
            <section class="copy clearfix">
              '.$field_half_module_description.'
              '.$half_module_link_tag.'
              </p>
            </section>
          </div>
        ';
        }
        else {
        $field_half_module_right .= '
          <div class="mod">
            <div class="mainstageHeader">
              <h2 class="blackhead blackheadsmall">'.$field_half_module_title_1.' <strong>'.$field_half_module_title_2.'</strong></h2>
            </div>
            <div class="initiativeRightBody copy">
              '.$field_half_module_description.'
              '.$half_module_link_tag.'
              </p>
            </div>
          </div>
        ';
        }
      }
      $half_module++;
    }
  }

  /** Download File Section **/
  $field_file_download_left = $field_file_download_right = '';
  $field_file_download_sections = field_get_items('node', $node, 'field_file_download_section');
  if (!empty($field_file_download_sections)) {
    $field_file_download_section_items = array();
    foreach ($field_file_download_sections as $field_file_download_section) {
      $field_file_download_section_items[] = entity_revision_load('field_collection_item', $field_file_download_section['revision_id']); //load current revision of collection
    }
    $half_module = 0;
    foreach ($field_file_download_section_items as $item) {
      $download_title_1 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_file_download_title_1'));
      $field_file_download_title_1 = (isset($download_title_1['value'])?$download_title_1['value']:'');

      $download_title_2 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_file_download_title_2'));
      $field_file_download_title_2 = (isset($download_title_2['value'])?$download_title_2['value']:'');

      $download_description = characterunite_reset(field_get_items('field_collection_item', $item, 'field_file_download_description'));
      $field_file_download_description = (isset($download_description['value'])?$download_description['value']:'');

      $download_file = field_get_items('field_collection_item', $item, 'field_file_download_file');//print_r($download_file);
      //$field_file_download_file = (isset($download_file['uri'])?($download_file['uri']):'');

      $ds_position = characterunite_reset(field_get_items('field_collection_item', $item, 'field_ds_position'));
      $field_ds_position = (isset($ds_position['tid'])?taxonomy_term_load($ds_position['tid'])->name:'');

      $file_download_tag = '';
      $download_file_count = count($download_file);
      if ($download_file_count > 0) {
        for($file = 0; $file < $download_file_count; $file++) {
          $file_download_tag .= '<p>'.l($download_file[$file]['description'], file_create_url($download_file[$file]['uri']), array('attributes' => array('target' => '_blank', 'class' => 'cta uppercase download'))).'</p>';
        }
      }

      $download_link = field_get_items('field_collection_item', $item, 'field_file_download_link');

      $file_download_link_tag = '';
      $download_link_count = count($download_link);
      if ($download_link_count > 0) {
        for($file = 0; $file < $download_link_count; $file++) {
          if ($download_link[$file]['url'] != '')
          $file_download_link_tag .= '<p>'.l($download_link[$file]['title'], file_create_url($download_link[$file]['url']), array('attributes' => array('target' => '_blank', 'class' => 'cta uppercase'))).'</p>';
        }
      }
      
      if ($field_file_download_title_1 != '' || $field_file_download_title_2 != '' || $field_file_download_description != '' || $file_download_tag != '') {
        $class = (($half_module%2 == 0)?'clear':'');
        if (strtolower($field_ds_position) != 'right') {
        $field_file_download_left .= '
          <div class="'.$class.' download mod half">
            <div class="mainstageHeader">
              <h2 class="blackhead blackheadsmall">'.$field_file_download_title_1.' <strong>'.$field_file_download_title_2.'</strong></h2>
            </div>
            <section class="copy clearfix">
              '.$field_file_download_description.'
              '.$file_download_tag.'
              '.$file_download_link_tag.'
            </section>
          </div>		
        ';
        }
        else {
        $field_file_download_right .= '
          <div class="mod download">
            <div class="mainstageHeader">
              <h2 class="blackhead blackheadsmall">'.$field_file_download_title_1.' <strong>'.$field_file_download_title_2.'</strong></h2>
            </div>
            <div class="initiativeRightBody copy">
              '.$field_file_download_description.'
              '.$file_download_tag.'
              '.$file_download_link_tag.'
            </div>
          </div>	
        ';	  
        }
      }
      $half_module++;
    }
  }

  /** Black Box Section **/
  
  $field_black_box = field_get_items('node', $node, 'field_black_box_section');
  if (!empty($field_black_box)) {
    $field_black_box_section_items = array();
    foreach ($field_black_box as $field_black_box_section) {
      $field_black_box_section_items[] = entity_revision_load('field_collection_item', $field_black_box_section['revision_id']); //load current revision of collection
    }
    foreach ($field_black_box_section_items as $item) {
      $black_box_title = characterunite_reset(field_get_items('field_collection_item', $item, 'field_black_box_title'));
      $field_black_box_title = (isset($black_box_title['value'])?$black_box_title['value']:'');

      $black_box_title_2 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_black_box_title_2'));
      $field_black_box_title_2 = (isset($black_box_title_2['value'])?$black_box_title_2['value']:'');

      $black_box_description = characterunite_reset(field_get_items('field_collection_item', $item, 'field_black_box_description'));
      $field_black_box_description = (isset($black_box_description['value'])?$black_box_description['value']:'');

      $black_box_more_link = characterunite_reset(field_get_items('field_collection_item', $item, 'field_black_box_more_link'));
      $field_black_box_more_link = (isset($black_box_more_link['value'])?$black_box_more_link['value']:'');
    }
    if ($field_black_box_description != '' && ($field_black_box_description == strip_tags($field_black_box_description))) {
      $field_black_box_description = '<p>'.$field_black_box_description.'</p>';
    }     
  }

  /** Gallery **/
  $gallery = '';
  $field_ilp_photo_gallery_images = field_get_items('node', $node, 'field_ilp_photo_gallery_images');

  $ilp_photo_gallery_title = characterunite_reset(field_get_items('node', $node, 'field_ilp_photo_gallery_title'));
  $field_ilp_photo_gallery_title = (isset($ilp_photo_gallery_title['value'])?$ilp_photo_gallery_title['value']:'');

  $ilp_photo_gallery_link = characterunite_reset(field_get_items('node', $node, 'field_ilp_photo_gallery_link'));
  $field_ilp_photo_gallery_link = (isset($ilp_photo_gallery_link['url'])?$ilp_photo_gallery_link['url']:'');
  $field_ilp_photo_gallery_label = (isset($ilp_photo_gallery_link['title'])?$ilp_photo_gallery_link['title']:'');
  if (!empty($field_ilp_photo_gallery_images)) {
    $gallery = '<div class="mod">';
    if (isset($field_ilp_photo_gallery_title)) {
      $gallery .= '
        <div class="mainstageHeader">
                  <h2 class="blackhead blackheadsmall"><strong>'.$field_ilp_photo_gallery_title.'</strong></h2>
              </div>';
    }
    if (isset($field_ilp_photo_gallery_images)) {
      $gallery .= '<div class="initiativeRightBody copy"><div class="mainstageVideos clearfix">';
      $field_ilp_photo_gallery_images_count = count($field_ilp_photo_gallery_images);
      for ($ilp_photo_gallery = 0; $ilp_photo_gallery<$field_ilp_photo_gallery_images_count; $ilp_photo_gallery++) {
        $base = '';
        if (substr($field_ilp_photo_gallery_link, 0, 4) != 'http' && substr($field_ilp_photo_gallery_link, 0, 1) != '/') {
          $base = '/';
        }
        $gallery .= '<a class="mainstageShowcasesPhotos" href="'.$base.$field_ilp_photo_gallery_link.'">
                <img class="photoThumb" src="'.file_create_url($field_ilp_photo_gallery_images[$ilp_photo_gallery]['uri']).'" alt="Title">
              </a>';
      }
      $gallery .= '</div>';
      $gallery .= '<p>'.l($field_ilp_photo_gallery_label, $field_ilp_photo_gallery_link, array('attributes' => array('class' => 'cta uppercase'))).'</p>';
      $gallery .= '</div></div>';
    }
  }

  $ilp_image_title = characterunite_reset(field_get_items('node', $node, 'field_ilp_image_title'));
  $field_ilp_image_title = (isset($ilp_image_title['value'])?$ilp_image_title['value']:'');

  $ilp_image = characterunite_reset(field_get_items('node', $node, 'field_ilp_image'));
  $field_ilp_image = (isset($ilp_image['uri'])?$ilp_image['uri']:'');

  $ilp_image_description = characterunite_reset(field_get_items('node', $node, 'field_ilp_image_description'));
  $field_ilp_image_description = (isset($ilp_image_description['value'])?$ilp_image_description['value']:'');


  /* Related Link Section */
  $related_links = '';
  $field_link_sections = field_get_items('node', $node, 'field_link_section');
  if (!empty($field_link_sections)) {
    $field_link_section_items = array();
    foreach ($field_link_sections as $field_link_section) {
      $field_link_section_items[] = entity_revision_load('field_collection_item', $field_link_section['revision_id']); //load current revision of collection
    }
    foreach ($field_link_section_items as $item) {
      $link_title_1 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_link_title_1'));
      $field_link_title_1 = (isset($link_title_1['value'])?$link_title_1['value']:'');

      $link_title_2 = characterunite_reset(field_get_items('field_collection_item', $item, 'field_link_title_2'));
      $field_link_title_2 = (isset($link_title_2['value'])?$link_title_2['value']:'');

      $field_links = field_get_items('field_collection_item', $item, 'field_links');
    }
    $related_links = '<div class="mod links"><div class="mainstageHeader"><h2 class="blackhead blackheadsmall">';
    $related_links .= $field_link_title_1;
    $related_links .= '<strong>'.$field_link_title_2.'</strong></h2></div>';
    $related_links .= '<div class="initiativeRightBody copy">';
    $field_links_count = count($field_links);
    if ($field_links_count > 0) {
      for($take_action = 0; $take_action < $field_links_count; $take_action++) {
        if ($field_links[$take_action]['url'] != '') {
          if (substr($field_links[$take_action]['url'], 0, 4) != 'http' && substr($field_links[$take_action]['url'], 0, 1) != '/') {
            $field_links[$take_action]['url'] = '/'.$field_links[$take_action]['url'];
          }      
          $related_links .= '<a href="'.$field_links[$take_action]['url'].'" class="cta uppercase" target="_blank">'.$field_links[$take_action]['title'].'</a>';
        }
      }
    }
    $related_links .= '</div></div>';
  }
?>
<!-- initiativesHeader end -->
	<div class="initiativeMain layoutMedium">
		<div id="colMain">
			<div class="imageFrame">
				<img alt="<?php echo $field_ilp_image_title; ?>" src="<?php echo file_create_url($field_ilp_image); ?>" style="max-width:610px;">
			</div>
			<?php
			if (!empty($field_ilp_image_description)) {
			?>
			<div class="mod-article">
				<?php echo ($field_ilp_image_title != '')?'<h1>'.$field_ilp_image_title.'</h1>':''; ?>
				<?php
					if (strlen($field_ilp_image_description) > 700 ) {
						echo '<span class="leftpane_desc" style="height:200px">'.$field_ilp_image_description.'</span><a class="leftpane_desc_more amore1" href="javascript:;" onclick="LeftDesc(\'leftpane_desc\', \'less\', 200, \'1\');">More</a><a class="leftpane_desc_less amore1" href="javascript:;" onclick="LeftDesc(\'leftpane_desc\', \'more\', 200, \'1\');">Less</a>';
					}
					else {
						echo $field_ilp_image_description;
					}
				?>
				<?php
					if (empty($field_black_box_description) && !empty($field_ilp_image_description)) {
				?>
					<?php if ($region['spread_the_word']): ?>
            <aside class="share">
						<?php print render($region['spread_the_word']); ?>
            </aside>
					<?php endif; ?>					
				<?php
					}
				?>				
			</div>
			<?php } ?>
			<?php echo $field_half_module_left; ?>
			<?php echo $field_file_download_left; ?>
			<?php echo $related_videos_left; ?>
		</div>

		<div id="colSide">
			<?php 
				if (!empty($field_black_box)) {
					if ($field_black_box_title != '' || $field_black_box_title_2 != '' || $field_black_box_description != '') { 
			?>
			<div class="mod solid">
				<h2 class="title"><?php echo $field_black_box_title; ?> <br/><small><?php echo $field_black_box_title_2; ?></small></h2>
				<?php 
				if ($field_black_box_more_link != 0) {
					echo '<span class="blackpane_desc" style="height:250px">'.$field_black_box_description.'</span><a class="blackpane_desc_more amore2" href="javascript:;" onclick="LeftDesc(\'blackpane_desc\', \'less\', 250, \'2\');">More</a><a class="blackpane_desc_less amore2" href="javascript:;" onclick="LeftDesc(\'blackpane_desc\', \'more\', 250, \'2\');">Less</a>';
				}
				else {
					echo $field_black_box_description;
				}
				?>
				<?php if ($region['spread_the_word']): ?>
          <aside class="share">
					<?php print render($region['spread_the_word']); ?>
          </aside>
				<?php endif; ?>			
			</div>
			<?php
					}
				}
			?>
			<?php echo $field_half_module_right; ?>
			<?php echo $related_videos_right; ?>
			<?php echo $gallery; ?>
			<?php echo $field_file_download_right; ?>			
      <?php echo $related_links; ?>
		</div>
		<!-- initiativeRight end -->
	</div>