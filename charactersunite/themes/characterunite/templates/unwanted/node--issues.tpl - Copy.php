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
  /** Video Section **/
  $field_video_sections = field_get_items('node', $node, 'field_video_section');
  if (!empty($field_video_sections)) {
    $field_video_section_items = array();
    foreach ($field_video_sections as $field_video_section) {
      $field_video_section_items[] = entity_revision_load('field_collection_item', $field_video_section['revision_id']); //load current revision of collection
    }
    foreach ($field_video_section_items as $item) {
      $field_video = characterunite_reset(field_get_items('field_collection_item', $item, 'field_video_id'));
      $field_video_id = (isset($field_video['value'])?$field_video['value']:'');

      $transcript_title = characterunite_reset(field_get_items('field_collection_item', $item, 'field_transcript_title'));
      $field_transcript_title = (isset($transcript_title['value'])?$transcript_title['value']:'');

      $transcript_description = characterunite_reset(field_get_items('field_collection_item', $item, 'field_transcript_description'));
      $field_transcript_description = (isset($transcript_description['value'])?$transcript_description['value']:'');

      $transcript_more_link = characterunite_reset(field_get_items('field_collection_item', $item, 'field_transcript_more_link'));
      $field_transcript_more_link = (isset($transcript_more_link['value'])?$transcript_more_link['value']:'');

      $video_description = characterunite_reset(field_get_items('field_collection_item', $item, 'field_video_description'));
      $field_video_description = (isset($video_description['value'])?$video_description['value']:'');
    }
  }

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
                 <div class="relatedVideos clearfix '.$class.'">
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
                 <div class="relatedVideos clearfix '.$class.'">
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
  }
  
  $issues_banner = characterunite_reset(field_get_items('node', $node, 'field_issues_banner'));
  $field_issues_banner = (isset($issues_banner['uri'])?$issues_banner['uri']:'');

  $issues_banner_link = characterunite_reset(field_get_items('node', $node, 'field_issues_banner_link'));
  $field_issues_banner_link = (isset($issues_banner_link['url'])?$issues_banner_link['url']:'');
  $field_issues_banner_target = (isset($issues_banner_link['attributes']['target'])?$issues_banner_link['attributes']['target']:'');

  $take_action_title_1 = characterunite_reset(field_get_items('node', $node, 'field_issues_take_action_title_1'));
  $field_issues_take_action_title_1 = (isset($take_action_title_1['value'])?$take_action_title_1['value']:'');

  $take_action_title_2 = characterunite_reset(field_get_items('node', $node, 'field_issues_take_action_title_2'));
  $field_issues_take_action_title_2 = (isset($take_action_title_2['value'])?$take_action_title_2['value']:'');

  $field_issues_take_action_list = field_get_items('node', $node, 'field_issues_take_action_list');
  
  $facts_title_1 = characterunite_reset(field_get_items('node', $node, 'field_issues_facts_title_1'));
  $field_issues_facts_title_1 = (isset($facts_title_1['value'])?$facts_title_1['value']:'');

  $facts_title_2 = characterunite_reset(field_get_items('node', $node, 'field_issues_facts_title_2'));
  $field_issues_facts_title_2 = (isset($facts_title_2['value'])?$facts_title_2['value']:'');

  $field_issues_facts_list = (field_get_items('node', $node, 'field_issues_facts_list'));  
?>
	<div class="showcaseMain layoutWide">
		<div id="colMain">
			<div class="videoFrame">
				<iframe src="http://player.theplatform.com/p/OyMl-B/oIChOKSBFJ6b/select/<?php echo $field_video_id;?>" width="688" height="387" frameborder="0" scrolling="no"></iframe>
			</div>
			<?php if ($field_transcript_title != '' || $field_transcript_description != '') { ?>
			<div class="mod full caption clearfix">
				<h1><?php echo $field_transcript_title; ?></h1>	
				<?php if ($field_transcript_more_link != 0) { ?>
				<h2><span class="Tpane_desc" style="height:45px"><?php echo $field_transcript_description; ?></span></h2><a class="Tpane_desc_more atmore" href="javascript:;" onclick="TDesc('Tpane_desc', 'less', 45, '');">More</a><a class="Tpane_desc_less atmore" href="javascript:;" onclick="TDesc('Tpane_desc', 'more', 45, '');">Less</a>
				<?php 
				}
				else {
				?>
				<h2><?php echo $field_transcript_description; ?></h2>
				<?php } ?>
			</div>
			<?php 
			}
			if ($field_issues_banner != '') {
			?>
			<div class="svu-nomore-im">
				<?php
					if ($field_issues_banner_link != '') {
				?>
				<a href="<?php echo $field_issues_banner_link; ?>" target="<?php echo $field_issues_banner_target; ?>">
					<img src="<?php echo file_create_url($field_issues_banner); ?>">
				</a>
				<?php 
				}
				else {
				?>
					<img src="<?php echo file_create_url($field_issues_banner); ?>">
				<?php } ?>
			</div>
			<?php
			}
			if (!empty($field_issues_take_action_title_1) || !empty($field_issues_take_action_title_2) || !empty($field_issues_take_action_list)) {
			?>
			<div class="takeActionFrame">
				<div class="takeActionHeader">
					<h2 class="blackhead"><?php echo (!empty($field_issues_take_action_title_1)?$field_issues_take_action_title_1:'');?> <strong><?php echo (!empty($field_issues_take_action_title_2)?$field_issues_take_action_title_2:'');?></strong></h2>
				</div>
				<div class="takeActionSection">
					<ul>
						<?php
							$field_issues_take_action_list_count = count($field_issues_take_action_list);
							if ($field_issues_take_action_list_count > 0) {
								for($take_action = 0; $take_action < $field_issues_take_action_list_count; $take_action++) {
						?>
							<li class="takeAction clearfix">
									<header><?php echo $field_issues_take_action_list[$take_action]['value']; ?></header>
							</li>
						<?php
								}
							}
						?>
					</ul>
				</div>
			</div>
			<?php
			}
			if (!empty($field_issues_facts_title_1) || !empty($field_issues_facts_title_2) || !empty($field_issues_facts_list)) {			
			?>
			<div class="resourcesAndFactsFrame">
				<div class="resourcesAndFactsHeader">
					<h2 class="blackhead"><?php echo (!empty($field_issues_facts_title_1)?$field_issues_facts_title_1:'');?> <strong><?php echo (!empty($field_issues_facts_title_2)?$field_issues_facts_title_2:'');?></strong></h2>
				</div>
				<div class="theFactsSection">
					<ul>
						<?php
							$field_issues_facts_list_count = count($field_issues_facts_list);
							if ($field_issues_facts_list_count > 0) {
								for($facts_list = 0; $facts_list < $field_issues_facts_list_count; $facts_list++) {
						?>					
						<li>
							<?php echo $field_issues_facts_list[$facts_list]['value']; ?>
						</li>
						<?php
								}
							}
						?>
					</ul>
				</div>
			</div>
			<?php
			}
			if ($related_videos_left != '') {
				echo $related_videos_left;
			}
			if ($related_images_left != '') {
				echo $related_images_left;
			}
			?>
			<div class="clear"></div>
			<?php if ($region['facebook_discussion']): ?>
				<div class="social">
					<?php print render($region['facebook_discussion']); ?>
				</div>
			<?php endif; ?>			
		</div>
		<!-- initiativesLeft end -->
		<div id="colSide">
			<?php if ($field_black_box_title != '' || $field_black_box_title_2 != '' || $field_black_box_description != '') { ?>
			<div class="mod solid">
				<?php if ($field_black_box_title != '' || $field_black_box_title_2 != '') { ?>
				<h2 class="title"><?php echo $field_black_box_title; ?> <br/><small><?php echo $field_black_box_title_2; ?></small></h2>
				<?php } ?>
				<?php 
				if ($field_black_box_more_link != 0) {
					echo '<span class="blackpane_desc" style="height:250px">'.$field_black_box_description.'</span><a class="blackpane_desc_more amore" href="javascript:;" onclick="LeftDesc(\'blackpane_desc\', \'less\', 250, \'\');">More</a><a class="blackpane_desc_less amore" href="javascript:;" onclick="LeftDesc(\'blackpane_desc\', \'more\', 250, \'\');">Less</a>';
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
			  if ($related_videos_right != '') {
				echo $related_videos_right;
			  }
			  if ($related_images_right != '') {
				echo $related_images_right;
			  }			  
			?>
		</div>
		<!-- initiativesRight end -->
	</div>
	<!-- showcaseMain end -->