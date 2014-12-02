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
  $field_video_section_value = $content['field_video_section']['#items'][0]['value'];
  $field_video_section = $content['field_video_section'][0]['entity']['field_collection_item'][$field_video_section_value];
  $field_video_id = $field_video_section['field_video_id']['#items'][0]['value'];

  $field_transcript_title = (isset($field_video_section['field_transcript_title'])?$field_video_section['field_transcript_title']['#items'][0]['value']:'');

  $field_transcript_description = (isset($field_video_section['field_transcript_description'])?$field_video_section['field_transcript_description']['#items'][0]['value']:'');

  $field_transcript_more_link = $field_video_section['field_transcript_more_link']['#items'][0]['value'];

  $field_video_description = (isset($field_video_section['field_video_description'])?$field_video_section['field_video_description']['#items'][0]['value']:'');

  /** Related Videos Section **/
  if (isset($node->field_related_videos_section[LANGUAGE_NONE])) {
    $field_related_videos_section_value = $content['field_related_videos_section']['#items'][0]['value'];
    $field_related_videos_section = $content['field_related_videos_section'][0]['entity']['field_collection_item'][$field_related_videos_section_value];

    $field_related_videos_title_1 = (isset($field_related_videos_section['field_related_videos_title_1'])?$field_related_videos_section['field_related_videos_title_1']['#items'][0]['value']:'');

    $field_related_videos_title_2 = (isset($field_related_videos_section['field_related_videos_title_2'])?$field_related_videos_section['field_related_videos_title_2']['#items'][0]['value']:'');

    $field_related_videos_description = (isset($field_related_videos_section['field_related_videos_description'])?$field_related_videos_section['field_related_videos_description']['#items'][0]['value']:'');

    $field_related_videos_link_url = (isset($field_related_videos_section['field_related_videos_link'])?$field_related_videos_section['field_related_videos_link']['#items'][0]['url']:'');

    $field_related_videos_link_label = (isset($field_related_videos_section['field_related_videos_link'])?$field_related_videos_section['field_related_videos_link']['#items'][0]['title']:'');

    $field_related_videos_position = (isset($field_related_videos_section['field_related_videos_position'])?$field_related_videos_section['field_related_videos_position']['#items'][0]['taxonomy_term']->name:'');

    $field_related_videos_iteration_count = count($field_related_videos_section['field_related_videos_iteration']['#items']);
    $related_videos = '';
    for ($a=0;$a<$field_related_videos_iteration_count;$a++) {
      $field_related_videos_iteration_value = $field_related_videos_section['field_related_videos_iteration']['#items'][$a]['value'];
      $field_related_videos_iteration = $field_related_videos_section['field_related_videos_iteration'][$a]['entity']['field_collection_item'][$field_related_videos_iteration_value];

      $field_rvi_video_title = (isset($field_related_videos_iteration['field_rvi_video_title'])?$field_related_videos_iteration['field_rvi_video_title']['#items'][0]['value']:'');

      $field_rvi_video_info = (isset($field_related_videos_iteration['field_rvi_video_info'])?$field_related_videos_iteration['field_rvi_video_info']['#items'][0]['value']:'');

      $field_rvi_video_thumbnail = (isset($field_related_videos_iteration['field_rvi_video_thumbnail'])?$field_related_videos_iteration['field_rvi_video_thumbnail']['#items'][0]['uri']:'');

      $field_rvi_video_link_url = (isset($field_related_videos_iteration['field_rvi_video_link'])?$field_related_videos_iteration['field_rvi_video_link']['#items'][0]['url']:'');

      $field_rvi_video_link_label = (isset($field_related_videos_iteration['field_rvi_video_link'])?$field_related_videos_iteration['field_rvi_video_link']['#items'][0]['title']:'');

      $class = ((($a+1)%2 == 0)?'even':'odd');
      $related_videos .='
           <div class="relatedVideos clearfix '.$class.'">
            <a href="'.$field_rvi_video_link_url.'" class="relatedVideosImage">
              <img alt="'.$field_rvi_video_title.'" src="'.file_create_url($field_rvi_video_thumbnail).'">
              <div class="playButton25"></div>
            </a>
            <div class="relatedVideosText">
              <h2>'.$field_rvi_video_title.'</h2>
              <p>'.$field_rvi_video_info.'</p>
              <a href="'.$field_rvi_video_link_url.'">'.$field_rvi_video_link_label.'</a>
            </div>
          </div>
      ';	  
    }
  }

  /** Description Section **/
  if (isset($node->field_description_section[LANGUAGE_NONE])) {
    $field_description_section_value = $content['field_description_section']['#items'][0]['value'];
    $field_description_section = $content['field_description_section'][0]['entity']['field_collection_item'][$field_description_section_value];

    $field_ds_title_1 = (isset($field_description_section['field_ds_title_1'])?$field_description_section['field_ds_title_1']['#items'][0]['value']:'');

    $field_ds_title_2 = (isset($field_description_section['field_ds_title_2'])?$field_description_section['field_ds_title_2']['#items'][0]['value']:'');

    $field_ds_body = (isset($field_description_section['field_ds_body'])?$field_description_section['field_ds_body']['#items'][0]['value']:'');

    $field_ds_link_url = (isset($field_description_section['field_ds_link'])?$field_description_section['field_ds_link']['#items'][0]['url']:'');

    $field_ds_link_label = (isset($field_description_section['field_ds_link'])?$field_description_section['field_ds_link']['#items'][0]['title']:'');

    $field_add_spread_the_word_block = (isset($field_description_section['field_add_spread_the_word_block'])?$field_description_section['field_add_spread_the_word_block']['#items'][0]['value']:'');

    $field_ds_position = (isset($field_description_section['field_ds_position'])?$field_description_section['field_ds_position']['#items'][0]['taxonomy_term']->name:'');
  }

  /** Black Box Section **/
  $field_black_box_section_value = $content['field_black_box_section']['#items'][0]['value'];
  $field_black_box_section = $content['field_black_box_section'][0]['entity']['field_collection_item'][$field_black_box_section_value];

  $field_black_box_title = (isset($field_black_box_section['field_black_box_title'])?$field_black_box_section['field_black_box_title']['#items'][0]['value']:'');
  $field_black_box_title_2 = (isset($field_black_box_section['field_black_box_title_2'])?$field_black_box_section['field_black_box_title_2']['#items'][0]['value']:'');

  $field_black_box_description = (isset($field_black_box_section['field_black_box_description'])?$field_black_box_section['field_black_box_description']['#items'][0]['value']:'');

  $field_black_box_more_link = (isset($field_black_box_section['field_black_box_more_link'])?$field_black_box_section['field_black_box_more_link']['#items'][0]['value']:'');

  $field_add_spread_the_word_block = (isset($field_black_box_section['field_add_spread_the_word_block'])?$field_black_box_section['field_add_spread_the_word_block']['#items'][0]['value']:'');
  
  /** Take Action **/
  $field_nfl_take_action_title_1 = (isset($node->field_nfl_take_action_title_1[LANGUAGE_NONE])?$node->field_nfl_take_action_title_1[LANGUAGE_NONE][0]['value']:'');

  $field_nfl_take_action_title_2 = (isset($node->field_nfl_take_action_title_2[LANGUAGE_NONE])?$node->field_nfl_take_action_title_2[LANGUAGE_NONE][0]['value']:'');

  if (isset($node->field_nfl_take_action_link[LANGUAGE_NONE])) {
    $field_nfl_take_action_link_count = count($node->field_nfl_take_action_link[LANGUAGE_NONE]);
	$take_action_link = '';
	for ($b=0;$b<$field_nfl_take_action_link_count;$b++) {
	  $take_action_link .= l($node->field_nfl_take_action_link[LANGUAGE_NONE][$b]['title'], $node->field_nfl_take_action_link[LANGUAGE_NONE][$b]['url'], array('attributes' => array('class' => 'cta uppercase', 'target'=>'_blank')));
	}
  }
?>
<!-- initiativesHeader end -->
  <div class="initiativeMain layoutWide">
    <div id="colMain" class="nflMain">
      <div class="nflVideoFrame">
        <iframe id="tp-global-player" src="http://player.theplatform.com/p/OyMl-B/oIChOKSBFJ6b/select/<?php echo $field_video_id;?>" width="636" height="359" frameborder="0" scrolling="no"></iframe>
      </div>
	  <?php
        if ($field_video_description != '') {
	  ?>
      <div class="mod full clear">
        <section class="copy clearfix">
		  <span class="video_description">
            <?php echo $field_video_description; ?>
		  </span>
        </section>
      </div>
      <?php
	    }
		if (($field_related_videos_title_1 != '' || $field_related_videos_title_2 != '') && strtolower($field_related_videos_position) != 'right') {
	  ?>
      <div class="mod full">
        <div class="mainstageHeader">
          <h2 class="blackhead blackheadsmall"><?php echo $field_related_videos_title_1;?> <strong><?php echo $field_related_videos_title_2;?></strong></h2>
        </div>
        <section class="copy clearfix">
          <?php echo $related_videos; ?>
        </section>
      </div>
      <?php
	    }
		if ($field_ds_title_1 != '' || $field_ds_title_2 != '' || $field_ds_body != '') {
	  ?>
      <div class="mod full clear">
        <div class="mainstageHeader">
          <h2 class="blackhead blackheadsmall"><?php echo $field_ds_title_1;?> <strong><?php echo $field_ds_title_2;?></strong></h2>
        </div>
        <section class="copy clearfix">
          <?php echo $field_ds_body; ?>
        </section>
      </div>
	  <?php
	    }
	  ?>
    </div>
    <!-- initiativeLeft end-->

    <div class="initiativeRight">
      <div id="colSide" class="nflSide">
		<?php if ($field_black_box_title != '' || $field_black_box_description != '') { ?>
		<div class="mod solid">
			<h2 class="title"><?php echo $field_black_box_title; ?> <br/><small><?php echo $field_black_box_title_2; ?></small></h2>
			<p><?php echo $field_black_box_description; ?></p>
		</div>
		<?php
		  }
		  if (($field_related_videos_title_1 != '' || $field_related_videos_title_2 != '') && strtolower($field_related_videos_position) == 'right') {
		?>
			<div class="mod">
				<div class="mainstageHeader">
					<h2 class="blackhead blackheadsmall"><?php echo $field_related_videos_title_1;?> <strong><?php echo $field_related_videos_title_2;?></strong></h2>
				</div>
				<div class="initiativeRightBody copy">
					<div class="mainstageVideos clearfix">
						<?php echo $related_videos; ?>
					</div>
				</div>
			</div>
		<?php
		  }		  
		  if ($field_nfl_take_action_title_1 != '' || $field_nfl_take_action_title_2 != '') {
		?>
		<div class="mod links">
			<div class="mainstageHeader">
				<h2 class="blackhead blackheadsmall"><?php echo $field_nfl_take_action_title_1; ?> <strong><?php echo $field_nfl_take_action_title_2; ?></strong></h2>
			</div>
			<div class="initiativeRightBody copy">
				<?php echo $take_action_link;?>
			</div>
		</div>
        <?php
		  }
		?>
      </div>
    </div>
    <!-- initiativeRight end -->
  </div>
  <!-- initiativeMain end -->
<?php

?>  