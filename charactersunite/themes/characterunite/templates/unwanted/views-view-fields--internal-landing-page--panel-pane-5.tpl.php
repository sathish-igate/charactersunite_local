 <?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

 //print_r($row->field_field_related_videos_iteration);
 
/* for($i=0; $i < $count; $i++) {
  $index = $row->field_field_related_videos_iteration[0]['raw']['value'];
  //echo $i.')'.print $row->field_field_related_videos_iteration[rendered][entity][field_collection_item][$index]['field_rvi_video_title']['#items'][0]['value']."<br>";
 }
print_r($row->field_field_related_videos_iteration['rendered']['entity']['field_collection_item'][89]['field_rvi_video_title']);
*/
/*
print_r($row->field_field_related_videos_iteration[0]['raw']['value']);
print_r($row->field_field_related_videos_iteration[1]['raw']['value']);
print_r($row->field_field_related_videos_iteration[2]['raw']['value']);*/
?>
<?php if (strtolower($row->field_field_related_videos_position[0]['rendered']['#title']) != 'right'): ?>
  <?php if (count($row->field_field_related_videos_title_1) > 0 || count($row->field_field_related_videos_title_2) > 0 || 
  count($row->field_field_related_videos_description) > 0 || count($row->field_field_related_videos_iteration) > 0 || 
  count($row->field_related_videos_link) > 0): ?>
    <div class="download mod half">
      <?php if (count($row->field_field_related_videos_title_1) > 0 || count($row->field_field_related_videos_title_2) > 0): ?>
        <div class="mainstageHeader">
          <h2 class="blackhead blackheadsmall">
            <?php print $row->field_field_related_videos_title_1[0]['raw']['value']; ?>
            <?php if (count($row->field_field_related_videos_title_2) > 0): ?>
              <strong><?php print $row->field_field_related_videos_title_2[0]['raw']['value']; ?></strong>
            <?php endif; ?>
          </h2>
        </div>
      <?php endif; ?>
      <?php if (count($row->field_field_related_videos_description) > 0 ): ?>
        <section class="copy clearfix">
          <?php if (count($row->field_field_related_videos_description) > 0): ?>
            <?php print $row->field_field_related_videos_description[0]['raw']['value']; ?>
          <?php endif; ?>
          <?php if (isset($row->field_related_videos_link)): ?>
            <?php $field_related_videos_url = (isset($row->field_related_videos_link[0]['raw']['url'])?($row->field_related_videos_link[0]['raw']['url']):''); ?>
            <?php $field_related_videos_label = (isset($row->field_related_videos_link[0]['raw']['title'])?($row->field_related_videos_link[0]['raw']['title']):''); ?>
            <?php $field_related_videos_target = (isset($row->field_related_videos_link[0]['raw']['attributes']['target'])?($row->field_related_videos_link[0]['raw']['attributes']['target']):'_self'); ?>
            <?php if (substr($field_related_videos_url, 0, 4) != 'http' && substr($field_related_videos_url, 0, 1) != '/'): ?>
              <?php $field_related_videos_url = '/'.$field_related_videos_url; ?>
            <?php endif; ?>
            <p>
              <?php print l($field_related_videos_label, $field_related_videos_url, array('attributes' => array('target' => $field_related_videos_target, 'class' => 'uppercase'))); ?>
            </p>
          <?php endif; ?>
            
          <?php
            $count = count($row->field_field_related_videos_iteration);
             for($i=0; $i < $count; $i++) {
              $index = $row->field_field_related_videos_iteration[$i]['raw']['value'];
              $trace = $row->field_field_related_videos_iteration[$i]['rendered']['entity']['field_collection_item'][$index];
              $field_rvi_video_title = $trace['field_rvi_video_title']['#items'][0]['value'];
              $field_rvi_video_info = $trace['field_rvi_video_info']['#items'][0]['value'];
              $field_rvi_video_thumbnail = $trace['field_rvi_video_thumbnail']['#items'][0]['uri'];
              $field_rvi_video_link_url = $trace['field_rvi_video_link']['#items'][0]['url'];
              $field_rvi_video_link_label = $trace['field_rvi_video_link']['#items'][0]['title'];
              $field_rvi_video_link_target = (isset($trace['field_rvi_video_link']['#items'][0]['attributes']['target'])
                                              ?$trace['field_rvi_video_link']['#items'][0]['attributes']['target']:'_self');
             }
              $related_videos .='
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
          /*$field_related_videos_iterations = field_get_items('field_collection_item', $item, 'field_related_videos_iteration');
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
              $related_videos .='
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
          }*/
          ?>
          <?php print $related_videos; ?>
        </section>
      <?php endif; ?>
    </div>
  <?php endif; ?>
<?php endif; ?>
