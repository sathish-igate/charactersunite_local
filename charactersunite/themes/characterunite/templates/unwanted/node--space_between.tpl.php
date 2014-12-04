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
	<div class="initiativeMain layoutMedium program">
		<!--<div class="initiativeLeft">-->
		<div id="colMain">
			<div class="imageFrame">
				<img alt="<?php echo $node->field_sb_image_title[LANGUAGE_NONE][0]['value']; ?>" src="<?php echo file_create_url($node->field_sb_image[LANGUAGE_NONE][0]['uri']); ?>">
			</div>

			<div class="mod-article">
				<h1><?php echo $node->field_sb_image_title[LANGUAGE_NONE][0]['value']; ?></h1>	
				<span class="leftdesc">
				<?php echo $node->field_sb_image_description[LANGUAGE_NONE][0]['value']; ?>
				</span><span style="display: none;" class="leftdescmore"></span>
			</div>

			<div class="mod half clear">
				<div class="mainstageHeader">
					<h2 class="blackhead blackheadsmall"><strong><?php echo $node->field_sb_issue_title[LANGUAGE_NONE][0]['value']; ?></strong></h2>
				</div>
				<section class="copy clearfix">
					<?php echo $node->field_sb_issue_description[LANGUAGE_NONE][0]['value']; ?>
					<p><a href="<?php echo $node->field_sb_issue_link[LANGUAGE_NONE][0]['url']; ?>" class="uppercase"><?php echo $node->field_sb_issue_link[LANGUAGE_NONE][0]['title']; ?></a>
					</p>

				</section>
			</div>
			<div class="mod half">
				<div class="mainstageHeader">
					<h2 class="blackhead blackheadsmall"><strong><?php echo $node->field_sb_resource_title[LANGUAGE_NONE][0]['value']; ?></strong></h2>
				</div>
				<section class="copy clearfix">
					<?php echo (isset($node->field_sb_resource_description[LANGUAGE_NONE])?$node->field_sb_resource_description[LANGUAGE_NONE][0]['value']:''); ?>
					<p><a href="<?php echo $node->field_sb_resource_link[LANGUAGE_NONE][0]['url']; ?>" class="uppercase"><?php echo $node->field_sb_resource_link[LANGUAGE_NONE][0]['title']; ?></a>
					</p>

				</section>
			</div>
		</div>

		<div id="colSide">
			<div class="mod">
				<div class="mainstageHeader">
					<h2 class="blackhead blackheadsmall"><strong><?php echo $node->field_sb_psa_title[LANGUAGE_NONE][0]['value']; ?></strong></h2>
				</div>
				<div class="initiativeRightBody copy">
					<?php echo $node->field_sb_psa_description[LANGUAGE_NONE][0]['value']; ?>
					<div class="mainstageVideos clearfix">
						<em class="issueVideo" style="background:url(<?php echo file_create_url($node->field_sb_psa_thumbnail[LANGUAGE_NONE][0]['uri']); ?>) no-repeat center center transparent;">
							<a href="<?php echo $node->field_sb_psa_link[LANGUAGE_NONE][0]['url']; ?>" class="videoPlay med"><?php echo $node->field_sb_psa_title[LANGUAGE_NONE][0]['value']; ?></a>
						</em>
					</div>
					<a href="<?php echo $node->field_sb_psa_link[LANGUAGE_NONE][0]['url']; ?>" class="cta uppercase"><?php echo $node->field_sb_psa_link[LANGUAGE_NONE][0]['title']; ?></a>
				</div>
			</div>
			<div class="mod">
				<div class="mainstageHeader">
					<h2 class="blackhead blackheadsmall"><strong><?php echo $node->field_sb_photo_gallery_title[LANGUAGE_NONE][0]['value']; ?></strong></h2>
				</div>
				<div class="initiativeRightBody copy">
					<div class="mainstageVideos clearfix">
						<?php
							$field_sb_photo_gallery_images_count = count($node->field_sb_photo_gallery_images[LANGUAGE_NONE]);
							for ($a = 0; $a<$field_sb_photo_gallery_images_count; $a++) {
						?>
						<a class="mainstageShowcasesPhotos" href="<?php echo $node->field_sb_photo_gallery_link[LANGUAGE_NONE][0]['url']; ?>">
							<img class="photoThumb" src="<?php echo file_create_url($node->field_sb_photo_gallery_images[LANGUAGE_NONE][$a]['uri']); ?>" alt="Title">
						</a>
						<?php
							}
						?>
					</div>

					<p><a href="<?php echo $node->field_sb_photo_gallery_link[LANGUAGE_NONE][0]['url']; ?>" class="cta uppercase"><?php echo $node->field_sb_photo_gallery_link[LANGUAGE_NONE][0]['title']; ?></a>
					</p>



				</div>
			</div>
			<div class="mod download">
				<div class="mainstageHeader">
					<h2 class="blackhead blackheadsmall"><strong><?php echo $node->field_sb_style_guide_title[LANGUAGE_NONE][0]['value']; ?></strong></h2>
				</div>
				<div class="initiativeRightBody copy">
					<p><a href="<?php echo file_create_url($node->field_sb_style_guide_file[LANGUAGE_NONE][0]['uri']); ?>" target="_blank" class="cta uppercase">DOWNLOAD THE CURRICULUM &raquo;</a>
					</p>
				</div>
			</div>
		</div>
		<!-- initiativeRight end -->
	</div>