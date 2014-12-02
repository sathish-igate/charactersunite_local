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
//print_r($content);
?>

<?php
$video_hub_description = characterunite_reset(field_get_items('node', $node, 'field_video_hub_description'));
$field_video_hub_description = (isset($video_hub_description['value'])?$video_hub_description['value']:'');

if (!empty($field_video_hub_description)) {
  if ($field_video_hub_description == strip_tags($field_video_hub_description)) {
    $field_video_hub_description = '<p>'.$field_video_hub_description.'</p>';
  }
  $field_video_hub_description = '<div class="mod-overview">'.$field_video_hub_description.'</div>';
}
  $video_hub_html = '';
  $field_video_hub_sections = field_get_items('node', $node, 'field_video_hub_section');
  if (!empty($field_video_hub_sections)) {
    $field_video_hub_sections_items = array();
    foreach ($field_video_hub_sections as $field_video_hub_section) {
      $field_video_hub_sections_items[] = entity_revision_load('field_collection_item', $field_video_hub_section['revision_id']); //load current revision of collection
    }
    foreach ($field_video_hub_sections_items as $item) {
      $hub_category = characterunite_reset(field_get_items('field_collection_item', $item, 'field_video_hub_category'));
      $field_video_hub_category = (isset($hub_category['value'])?$hub_category['value']:'');
      
      $video_hub_html .= '<div class="showcase">';
      if ($field_video_hub_category != '') {
        $video_hub_html .= '<h2 class="uppercase">'.$field_video_hub_category.'</h2>';
      }
      
      $field_video_hub_iterations = field_get_items('field_collection_item', $item, 'field_video_hub_iteration');
      if (!empty($field_video_hub_iterations)) {
        $field_video_hub_iterations_items = array();
        foreach ($field_video_hub_iterations as $field_video_hub_iteration) {
          $field_video_hub_iterations_items[] = entity_revision_load('field_collection_item', $field_video_hub_iteration['revision_id']); //load current revision of collection
        }
        foreach ($field_video_hub_iterations_items as $iteration_item) {
          $vhi_name = characterunite_reset(field_get_items('field_collection_item', $iteration_item, 'field_vhi_name'));
          $field_vhi_name = (isset($vhi_name['value'])?$vhi_name['value']:'');  

          $vhi_thumbnail = characterunite_reset(field_get_items('field_collection_item', $iteration_item, 'field_vhi_thumbnail'));
          $field_vhi_thumbnail = (isset($vhi_thumbnail['uri'])?'<img src="'.file_create_url($vhi_thumbnail['uri']).'" class="videoThumb" alt="'.$field_vhi_name.'"/>':'');

          $field_vhi = '';
          $field_vhi_info = field_get_items('field_collection_item', $iteration_item, 'field_vhi_info');
          if (isset($field_vhi_info)) {
            $field_vhi_info_count = count($field_vhi_info);
            for ($vhi_info = 0; $vhi_info < $field_vhi_info_count; $vhi_info++) {
              $field_vhi .= '<br/>'.$field_vhi_info[$vhi_info]['value'];
            }
          }

          $vhi_link = characterunite_reset(field_get_items('field_collection_item', $iteration_item, 'field_vhi_link'));
          $field_vhi_link_url = (isset($vhi_link['url'])?$vhi_link['url']:'');  
          $field_vhi_link_label = (isset($vhi_link['title'])?$vhi_link['title']:'');  
          $field_vhi_link_target = (isset($vhi_link['attributes']['target'])?$vhi_link['attributes']['target']:'_self');
          $img_wrap_start = $img_wrap_end = $field_vhi_link = '';
          if (!empty($field_vhi_link_url)) {
            $field_vhi_link = l($field_vhi_link_label, $field_vhi_link_url, array('attributes' => array('target' => $field_vhi_link_target, 'class' => 'cta')));
            $img_wrap_start = '<a class="showcaseVideoImage" href="'.$field_vhi_link_url.'" target="'.$field_vhi_link_target.'">';
            $img_wrap_end = '<div class="playButton53"></div></a>';          
          }
          $video_hub_html .= '<div class="showcaseVideo">'.$img_wrap_start.$field_vhi_thumbnail.$img_wrap_end.'<div class="showcaseVideoText"><section><strong>'.$field_vhi_name.'</strong>'.$field_vhi.'</section>'.$field_vhi_link.'</div></div>';          
        }
      }
      $video_hub_html .= '</div>';
    }
  }

?>
	<div class="showcaseMain">
		<?php echo (($field_video_hub_description != '')?$field_video_hub_description:''); ?>
		<?php echo $video_hub_html; ?>
	</div>
	<!-- showcaseMain end -->