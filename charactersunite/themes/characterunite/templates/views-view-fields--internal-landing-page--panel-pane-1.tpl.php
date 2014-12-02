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
?>
    <div class="videoFrame">
      <iframe src="http://player.theplatform.com/p/OyMl-B/oIChOKSBFJ6b/select/<?php print $row->field_field_video_id[0]['raw']['value']; ?>" width="688" height="387" frameborder="0" scrolling="no"></iframe>
    </div>
    <?php if (count($row->field_field_transcript_title) > 0 || count($row->field_field_transcript_description) > 0): ?>
    <div class="mod full caption clearfix">
      <?php if (count($row->field_field_transcript_title) > 0): ?>
      <h1><?php print $row->field_field_transcript_title[0]['raw']['value']; ?></h1>
      <?php endif; ?>
      <?php if (count($row->field_field_transcript_more_link) > 0 && $row->field_field_transcript_more_link[0]['raw']['value'] == 1 && count($row->field_field_transcript_description) > 0): ?>
        <h2><span class="Tpane_desc" style="height:40px"><?php print $row->field_field_transcript_description[0]['raw']['value']; ?></span></h2><a class="Tpane_desc_more atmore" href="javascript:;" onclick="TDesc('Tpane_desc', 'less', 40, '');">More</a><a class="Tpane_desc_less atmore" href="javascript:;" onclick="TDesc('Tpane_desc', 'more', 40, '');">Less</a>
      <?php else: ?>
      <h2><?php print $row->field_field_transcript_description[0]['raw']['value']; ?></h2>
      <?php endif; ?>
    </div>
    <?php endif; ?>
		<?php	if (count($row->field_field_video_description) > 0): ?>
			<div class="mod">
				<section class="copy clearfix"><?php print $row->field_field_video_description[0]['raw']['value']; ?></section>
			</div>
    <?php endif; ?>
    
    <?php if ((count($row->field_field_ds_title_1) > 0 || count($row->field_field_ds_title_2) > 0 || count($row->field_field_ds_body) > 0 || count($row->field_field_ds_link) > 0) && strtolower($row->field_field_ds_position[0]['raw']['value']) != 'right'): ?>
      <div class="mod full clear">
        <?php	if (count($row->field_field_ds_title_1) > 0 || count($row->field_field_ds_title_2) > 0): ?>
        <div class="mainstageHeader">
          <h2 class="blackhead blackheadsmall"><?php print $row->field_field_ds_title_1[0]['raw']['value'];?> <strong><?php print $row->field_field_ds_title_2[0]['raw']['value'];?></strong></h2>
        </div>
        <?php endif; ?>
        <?php	if (count($row->field_field_ds_body) > 0 || count($row->field_field_ds_link) > 0): ?>
        <section class="copy clearfix">
          <?php print $row->field_field_ds_body[0]['raw']['value']; ?>
          <?php print $row->field_field_ds_link[0]['raw']['value']; ?>
        </section>
        <?php endif; ?>
      </div>
    <?php endif; ?>