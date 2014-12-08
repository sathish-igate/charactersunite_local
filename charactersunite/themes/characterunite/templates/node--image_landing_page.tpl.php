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

<!-- initiativesHeader end -->
	<div class="initiativeMain layoutMedium">
		<div id="colMain">
			<div class="imageFrame">
				<img alt="<?php print $field_ilp_image_title; ?>" src="<?php print file_create_url($field_ilp_image); ?>" style="max-width:610px;">
			</div>
			<?php if (!empty($field_ilp_image_description)): ?>
        <div class="mod-article">
          <?php print ($field_ilp_image_title != '')?'<h1>'.$field_ilp_image_title.'</h1>':''; ?>
          <?php if (strlen($field_ilp_image_description) > 700 ): ?>
            <span class="leftpane_desc" style="height:200px"><?php print $field_ilp_image_description; ?></span>
            <a class="leftpane_desc_more amore1" href="javascript:;" onclick="LeftDesc(\'leftpane_desc\', \'less\', 200, \'1\');">More</a>
            <a class="leftpane_desc_less amore1" href="javascript:;" onclick="LeftDesc(\'leftpane_desc\', \'more\', 200, \'1\');">Less</a>
          <?php else: ?>
              <?php print $field_ilp_image_description; ?>
          <?php endif; ?>	
          <?php if (empty($field_black_box_description) && !empty($field_ilp_image_description)): ?>
            <?php if ($region['spread_the_word']): ?>
              <aside class="share">
                <?php print render($region['spread_the_word']); ?>
              </aside>
            <?php endif; ?>					
          <?php endif; ?>				
        </div>
			<?php endif; ?>

			<?php //print $field_half_module_left; ?>
      <?php if (isset($field_half_module_left) && count($field_half_module_left) > 0):?>
        <?php foreach ($field_half_module_left as $id => $half_module_fields): ?>
          <?php $class = (($id % 2)==0?'clear':''); ?>
          <div class="<?php print $class; ?> mod half">
            <div class="mainstageHeader">
              <h2 class="blackhead blackheadsmall">
                <?php print $half_module_fields['field_half_module_title_1']; ?> 
                <strong><?php print $half_module_fields['field_half_module_title_2']; ?></strong>
              </h2>
            </div>
            <section class="copy clearfix">
              <?php print $half_module_fields['field_half_module_description']; ?>
              <?php print $half_module_fields['half_module_link_tag']; ?>
            </section>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

			<?php //print_r($field_file_download_left); ?>
      <?php if (isset($field_file_download_left) && count($field_file_download_left) > 0):?>
        <?php foreach ($field_file_download_left as $id => $file_download): ?>
          <?php if ($file_download['field_file_download_title_1'] != '' && $file_download['field_file_download_title_2'] != ''):?>
            <div class="download mod half">
              <div class="mainstageHeader">
                <h2 class="blackhead blackheadsmall">
                  <?php print $file_download['field_file_download_title_1']; ?> 
                  <strong><?php print $file_download['field_file_download_title_2']; ?></strong>
                </h2>
              </div>
              <section class="copy clearfix">
                <?php print $file_download['field_file_download_description']; ?>
                <?php print $file_download['file_download_tag']; ?>
                <?php print $file_download['file_download_link_tag']; ?>
                </p>
              </section>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
      
			<?php //print $related_videos_left; ?>
			<?php if (isset($related_videos_left) && count($related_videos_left) > 0):?>
        <?php foreach ($related_videos_left as $id => $related_videos_fields): ?>
          <div class="mod full clearfix mod top-space">
            <div class="mainstageHeader">
              <h2 class="blackhead blackheadsmall">
                <?php print $related_videos_fields['field_related_videos_title_1']; ?> 
                <strong>
                  <?php print $related_videos_fields['field_related_videos_title_2']; ?>
                </strong>
              </h2>
            </div>
            <section class="copy clearfix">
                <?php print $related_videos_fields['field_related_videos_description']; ?>
                <?php print $related_videos_fields['related_videos_link_tag']; ?>
                  <?php foreach ($related_videos_fields['related_videos_iteration'] as $key => $iteration_fields): ?>
                     <div class="relatedVideos clearfix">
                      <a href="<?php print $iteration_fields['field_rvi_video_link_url']; ?>" class="relatedVideosImage" target="<?php print $iteration_fields['field_rvi_video_link_target']; ?>">
                        <img alt="<?php print $iteration_fields['field_rvi_video_title']; ?>" src="<?php print file_create_url($iteration_fields['field_rvi_video_thumbnail']); ?>">
                        <div class="playButton25"></div>
                      </a>
                      <div class="relatedVideosText">
                        <h2>
                          <?php print substr($iteration_fields['field_rvi_video_title'], 0, 45); ?>
                        </h2>
                        <p>
                          <?php print substr($iteration_fields['field_rvi_video_info'], 0, 45); ?>
                        </p>
                        <?php print l($iteration_fields['field_rvi_video_link_label'], $iteration_fields['field_rvi_video_link_url'], array('attributes' => array('target' => $iteration_fields['field_rvi_video_link_target']))); ?>
                      </div>
                    </div>
                  <?php endforeach; ?>
            </section>
          </div>
        <?php endforeach; ?>
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
            <span class="blackpane_desc" style="height:150px">
              <?php print $field_black_box_description; ?>
            </span>
            <a class="blackpane_desc_more amore" href="javascript:;" onclick="LeftDesc('blackpane_desc', 'less', 150, '');">More</a>
            <a class="blackpane_desc_less amore" href="javascript:;" onclick="LeftDesc('blackpane_desc', 'more', 150, '');">Less</a>';
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

			<?php //print $field_half_module_right; ?>
      <?php if (isset($field_half_module_right) && count($field_half_module_right) > 0):?>
        <?php foreach ($field_half_module_right as $id => $half_module_fields): ?>       
          <div class="mod">
            <div class="mainstageHeader">
              <h2 class="blackhead blackheadsmall">
                <?php print $half_module_fields['field_half_module_title_1']; ?> 
                <strong><?php print $half_module_fields['field_half_module_title_2']; ?></strong>
              </h2>
            </div>
            <div class="initiativeRightBody copy">
              <?php print $half_module_fields['field_half_module_description']; ?>
              <?php print $half_module_fields['half_module_link_tag']; ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

      <?php //print $related_videos_right; ?>
			<?php if (isset($related_videos_right) && count($related_videos_right) > 0):?>
        <?php foreach ($related_videos_right as $id => $related_videos_fields): ?>
          <div class="mod">
            <div class="mainstageHeader">
              <h2 class="blackhead blackheadsmall">
                <?php print $related_videos_fields['field_related_videos_title_1']; ?> 
                <strong>
                  <?php print $related_videos_fields['field_related_videos_title_2']; ?>
                </strong>
              </h2>
            </div>
            <div class="initiativeRightBody copy">
              <?php print $related_videos_fields['field_related_videos_description']; ?>
              <?php print $related_videos_fields['related_videos_link_tag']; ?>
                <div class="mainstageVideos clearfix">
                  <?php foreach ($related_videos_fields['related_videos_iteration'] as $key => $iteration_fields): ?>
                    <a href="<?php print $iteration_fields['field_rvi_video_link_url']; ?>" class="mainstageShowcasesVideo" target="<?php print $iteration_fields['field_rvi_video_link_target']; ?>">
                      <img class="videoThumb" alt="<?php print $iteration_fields['field_rvi_video_title']; ?>" src="<?php print file_create_url($iteration_fields['field_rvi_video_thumbnail']); ?>">
                      <div class="playButton25"></div>
                      <p><?php print substr($iteration_fields['field_rvi_video_title'], 0, 45); ?></p>
                      <p class="watchNow"><?php print substr($iteration_fields['field_rvi_video_link_label'], 0, 45); ?></p>
                    </a>
                  <?php endforeach; ?>
                </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

			<?php //print $gallery; ?>
      <?php if (isset($photo_gallery_images) && count($photo_gallery_images) > 0): ?>
        <div class="mod">
          <?php if (isset($field_ilp_photo_gallery_title) && count($field_ilp_photo_gallery_title) > 0):?>
            <div class="mainstageHeader">
                <h2 class="blackhead blackheadsmall"><strong><?php print $field_ilp_photo_gallery_title; ?></strong></h2>
            </div>
          <?php endif; ?>
          <div class="initiativeRightBody copy">
            <div class="mainstageVideos clearfix">
              <?php $photo_gallery_images_count = count($photo_gallery_images); ?>
              <?php for ($ilp_photo_gallery = 0; $ilp_photo_gallery < $photo_gallery_images_count; $ilp_photo_gallery++): ?>
                <?php $base = ''; ?>
                <?php if (substr($field_ilp_photo_gallery_link, 0, 4) != 'http' && substr($field_ilp_photo_gallery_link, 0, 1) != '/'): ?>
                  <?php $base = '/'; ?>
                <?php endif; ?>
                <a class="mainstageShowcasesPhotos" href="<?php print $base.$field_ilp_photo_gallery_link; ?>">
                  <img class="photoThumb" src="<?php print file_create_url($photo_gallery_images[$ilp_photo_gallery]['ilp_photo_gallery']); ?>" alt="">
                </a>
              <?php endfor; ?>
            </div>
            <p>
              <?php print l($field_ilp_photo_gallery_label, $field_ilp_photo_gallery_link, array('attributes' => array('class' => 'cta uppercase'))); ?>
            </p>
          </div>
        </div>
      <?php endif; ?>
      
      <?php //print_r($field_file_download_right); ?>
      <?php if (isset($field_file_download_right) && count($field_file_download_right) > 0):?>
        <?php foreach ($field_file_download_right as $id => $file_download): ?>
          <div class="mod download">
            <div class="mainstageHeader">
              <h2 class="blackhead blackheadsmall">
                <?php print $file_download['field_file_download_title_1']; ?> 
                <strong><?php print $file_download['field_file_download_title_2']; ?></strong>
              </h2>
            </div>
            <div class="initiativeRightBody copy">
              <?php print $file_download['field_file_download_description']; ?>
              <?php foreach ($file_download['file_download_tag'] as $file_id => $file_value): ?>
                <?php print $file_value['file']; ?>
              <?php endforeach; ?>
              <?php foreach ($file_download['file_download_link_tag'] as $link_id => $link_value): ?>
                <?php print $link_value['link']; ?>
              <?php endforeach; ?>              
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      
      <?php //print $related_links; ?>      
      <?php if (isset($link_section) && count($link_section) > 0):?>
        <?php foreach ($link_section as $id => $link_values): ?>
          <div class="mod links">
            <div class="mainstageHeader">
              <h2 class="blackhead blackheadsmall">
                <?php print $link_values['field_link_title_1']; ?> 
                <strong><?php print $link_values['field_link_title_2']; ?></strong>
              </h2>
            </div>
            <div class="initiativeRightBody copy">
              <?php foreach ($link_values['related_links'] as $link_key => $link_fields): ?>
                <?php print $link_fields['links']; ?>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
		</div>
		<!-- initiativeRight end -->
	</div>