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
print_r($row); /*
?>
  <div class="clear mod half">
     <?php if (count($row->field_field_transcript_title) > 0 || count($row->field_field_transcript_description) > 0): ?>
    <div class="mainstageHeader">
      <h2 class="blackhead blackheadsmall">'.$field_half_module_title_1.' <strong>'.$field_half_module_title_2.'</strong></h2>
    </div>
    <section class="copy clearfix">
      '.$field_half_module_description.'
      <p><a href="'.$field_half_module_link_url.'" target="'.$field_half_module_link_target.'" class="uppercase">'.$field_half_module_link_label.'</a>
      </p>
    </section>
  </div>
  <?php  */ ?>