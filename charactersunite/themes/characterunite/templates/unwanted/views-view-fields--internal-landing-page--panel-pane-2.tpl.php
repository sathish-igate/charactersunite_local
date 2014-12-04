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
/*
?>
<?php if (count($row->field_field_ds_title_1) > 0 || count($row->field_field_ds_title_2) > 0 || count($row->field_field_ds_body) > 0 || 
  count($row->field_field_ds_link) > 0): ?>
  <div class="mod full clear">
    <?php if (count($row->field_field_ds_title_1) > 0 || count($row->field_field_ds_title_2) > 0): ?>
      <div class="mainstageHeader">
        <h2 class="blackhead blackheadsmall">
          <?php print $row->field_field_ds_title_1[0]['raw']['value']; ?> 
          <?php if (count($row->field_field_ds_title_2) > 0): ?>
            <strong><?php print $row->field_field_ds_title_2[0]['raw']['value']; ?></strong>
          <?php endif; ?>
        </h2>
      </div>
    <?php endif; ?>
    <?php if (count($row->field_field_ds_body) > 0 || count($row->field_field_ds_link) > 0): ?>
      <section class="copy clearfix">
        <?php if (count($row->field_field_ds_body) > 0): ?>
          <?php print $row->field_field_ds_body[0]['raw']['value']; ?>
        <?php endif; ?>
        <?php if (count($row->field_field_ds_link) > 0): ?>
          <?php $field_ds_link_url = (isset($row->field_field_ds_link[0]['raw']['url'])?($row->field_field_ds_link[0]['raw']['url']):''); ?>
          <?php $field_ds_link_label = (isset($row->field_field_ds_link[0]['raw']['title'])?($row->field_field_ds_link[0]['raw']['title']):''); ?>
          <?php $field_ds_link_target = (isset($row->field_field_ds_link[0]['raw']['attributes']['target'])?($row->field_field_ds_link[0]['raw']['attributes']['target']):'_self'); ?>
          <?php print l($field_ds_link_label, $field_ds_link_url, array('attributes' => array('target' => $field_ds_link_target))); ?>
        <?php endif; ?>
      </section>
    <?php endif; ?>
  </div>
<?php endif; */ ?>
