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
<?php if (strtolower($row->field_field_ds_position[0]['rendered']['#title']) != 'right'): ?>
  <?php if (count($row->field_field_file_download_title_1) > 0 || count($row->field_field_file_download_title_2) > 0 || 
  count($row->field_field_file_download_description) > 0 || count($row->field_field_file_download_file) > 0): ?>
    <div class="download mod half">
      <?php if (count($row->field_field_file_download_title_1) > 0 || count($row->field_field_file_download_title_2) > 0): ?>
        <div class="mainstageHeader">
          <h2 class="blackhead blackheadsmall">
            <?php print $row->field_field_file_download_title_1[0]['raw']['value']; ?>
            <?php if (count($row->field_field_file_download_title_2) > 0): ?>
              <strong><?php print $row->field_field_file_download_title_2[0]['raw']['value']; ?></strong>
            <?php endif; ?>
          </h2>
        </div>
      <?php endif; ?>
      <?php if (count($row->field_field_file_download_description) > 0 || count($row->field_field_file_download_file) > 0 || 
        count($row->field_field_file_download_link) > 0): ?>
        <section class="copy clearfix">
          <?php if (count($row->field_field_file_download_description) > 0): ?>
            <?php print $row->field_field_file_download_description[0]['raw']['value']; ?>
          <?php endif; ?>
          <?php if (count($row->field_field_file_download_file > 0)): ?>
            <?php $file_download_tag = ''; ?>
            <?php $download_file_count = count($row->field_field_file_download_file); ?>
            <?php if ($download_file_count > 0): ?>
              <?php for($file = 0; $file < $download_file_count; $file++) { ?>
                 <?php $file_download_tag .= '<p>'.l($row->field_field_file_download_file[$file]['raw']['description'], file_create_url($row->field_field_file_download_file[$file]['raw']['uri']), array('attributes' => array('target' => '_blank', 'class' => 'cta uppercase download'))).'</p>'; ?>
               <?php } ?>
             <?php endif; ?>
             <?php print $file_download_tag; ?>
          <?php endif; ?>
          <?php if (count($row->field_field_file_download_link > 0)): ?>
            <?php $file_download_link_tag = ''; ?>
            <?php $download_link_count = count($row->field_field_file_download_link); ?>
            <?php if ($download_link_count > 0): ?>
              <?php for($file = 0; $file < $download_link_count; $file++) { ?>
                 <?php $file_download_link_tag .= '<p>'.l($row->field_field_file_download_link[$file]['raw']['title'], file_create_url($row->field_field_file_download_link[$file]['raw']['url']), array('attributes' => array('target' => '_blank', 'class' => 'cta uppercase'))).'</p>'; ?>
               <?php } ?>
             <?php endif; ?>
             <?php print $file_download_link_tag; ?>
          <?php endif; ?>          
        </section>
      <?php endif; ?>
    </div>
  <?php endif; ?>
<?php else: ?>
  <?php if (count($row->field_field_file_download_title_1) > 0 || count($row->field_field_file_download_title_2) > 0 || 
  count($row->field_field_file_download_description) > 0 || count($row->field_field_file_download_file) > 0): ?>
    <div class="download mod">
      <?php if (count($row->field_field_file_download_title_1) > 0 || count($row->field_field_file_download_title_2) > 0): ?>
        <div class="mainstageHeader">
          <h2 class="blackhead blackheadsmall">
            <?php print $row->field_field_file_download_title_1[0]['raw']['value']; ?>
            <?php if (count($row->field_field_file_download_title_2) > 0): ?>
              <strong><?php print $row->field_field_file_download_title_2[0]['raw']['value']; ?></strong>
            <?php endif; ?>
          </h2>
        </div>
      <?php endif; ?>
      <?php if (count($row->field_field_file_download_description) > 0 || count($row->field_field_file_download_file) > 0 || 
        count($row->field_field_file_download_link) > 0): ?>
        <div class="initiativeRightBody copy">
          <?php if (count($row->field_field_file_download_description) > 0): ?>
            <?php print $row->field_field_file_download_description[0]['raw']['value']; ?>
          <?php endif; ?>
          <?php if (count($row->field_field_file_download_file > 0)): ?>
            <?php $file_download_tag = ''; ?>
            <?php $download_file_count = count($row->field_field_file_download_file); ?>
            <?php if ($download_file_count > 0): ?>
              <?php for($file = 0; $file < $download_file_count; $file++) { ?>
                 <?php $file_download_tag .= '<p>'.l($row->field_field_file_download_file[$file]['raw']['description'], file_create_url($row->field_field_file_download_file[$file]['raw']['uri']), array('attributes' => array('target' => '_blank', 'class' => 'cta uppercase download'))).'</p>'; ?>
               <?php } ?>
             <?php endif; ?>
             <?php print $file_download_tag; ?>
          <?php endif; ?>
          <?php if (count($row->field_field_file_download_link > 0)): ?>
            <?php $file_download_link_tag = ''; ?>
            <?php $download_link_count = count($row->field_field_file_download_link); ?>
            <?php if ($download_link_count > 0): ?>
              <?php for($file = 0; $file < $download_link_count; $file++) { ?>
                 <?php $file_download_link_tag .= '<p>'.l($row->field_field_file_download_link[$file]['raw']['title'], file_create_url($row->field_field_file_download_link[$file]['raw']['url']), array('attributes' => array('target' => '_blank', 'class' => 'cta uppercase'))).'</p>'; ?>
               <?php } ?>
             <?php endif; ?>
             <?php print $file_download_link_tag; ?>
          <?php endif; ?>          
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
<?php endif; ?>
