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
  <div class="showcaseMain layoutWide">
		<div id="colMain">
			<div class="videoFrame">
				<iframe src="http://player.theplatform.com/p/OyMl-B/oIChOKSBFJ6b/select/<?php print $field_video_id; ?>" width="688" height="387" frameborder="0" scrolling="no"></iframe>
			</div>
			<?php if ($field_transcript_title != '' || $field_transcript_description != ''): ?>
        <div class="mod full caption clearfix">
          <h1>
            <?php print $field_transcript_title; ?>
          </h1>	
          <?php if ($field_transcript_more_link != 0 && $field_transcript_description != ''): ?>
            <h2>
              <span class="Tpane_desc" style="height:50px">
                <?php print $field_transcript_description; ?>
              </span>
            </h2>
            <a class="Tpane_desc_more atmore" href="javascript:;" onclick="TDesc('Tpane_desc', 'less', 50, '');">More</a>
            <a class="Tpane_desc_less atmore" href="javascript:;" onclick="TDesc('Tpane_desc', 'more', 50, '');">Less</a>
          <?php elseif ($field_transcript_more_link == 0 && $field_transcript_description != ''): ?>
            <h2>
              <?php print $field_transcript_description; ?>
            </h2>
          <?php endif; ?>
        </div>
      <?php endif; ?>
			<?php if ($field_video_description != ''): ?>
        <div class="mod">
          <section class="copy clearfix"><?php print $field_video_description; ?></section>
          <?php if ($field_black_box_title == '' && $field_black_box_title_2 == '' && $field_black_box_description == '' && $region['spread_the_word'] ): ?>
            <aside class="share-nfl">
              <?php print render($region['spread_the_word']); ?>
            </aside>
          <?php endif; ?>
        </div>
      <?php endif; ?>
			<?php if (($field_ds_title_1 != '' || $field_ds_title_2 != '' || $field_ds_body != '') && strtolower($field_ds_position) != 'right'): ?>
				<div class="mod full clear">
					<div class="mainstageHeader">
					  <h2 class="blackhead blackheadsmall">
              <?php print $field_ds_title_1; ?> 
              <strong>
                <?php print $field_ds_title_2; ?>
              </strong>
            </h2>
					</div>
					<section class="copy clearfix">
					  <?php print $field_ds_body; ?>
					  <?php print $ds_link_tag; ?>
					</section>
				</div>
			<?php endif; ?>
    </div>
		<div id="colSide">
      <?php //Balckbox ?>
			<?php if (!(empty($node->field_black_box_section)) && ($field_black_box_title != '' || 
              $field_black_box_title_2 != '' || $field_black_box_description != '')): ?>
        <div class="mod solid">
          <h2 class="title">
            <?php print $field_black_box_title; ?> 
            <br/>
            <small>
              <?php print $field_black_box_title_2; ?>
            </small>
          </h2>
          <?php if ($field_black_box_more_link != 0): ?>
            <span class="blackpane_desc" style="height:250px">
              <?php print $field_black_box_description; ?>
            </span>
            <a class="blackpane_desc_more amore" href="javascript:;" onclick="LeftDesc('blackpane_desc', 'less', 250, '');">More</a>
            <a class="blackpane_desc_less amore" href="javascript:;" onclick="LeftDesc('blackpane_desc', 'more', 250, '');">Less</a>';
          <?php else: ?>
            <?php print $field_black_box_description; ?>
          <?php endif; ?>
          <?php if ($region['spread_the_word']): ?>
            <aside class="share">
            <?php print render($region['spread_the_word']); ?>
            </aside>
          <?php endif; ?>					
        </div>
      <?php endif; ?>
    </div>
  </div>
