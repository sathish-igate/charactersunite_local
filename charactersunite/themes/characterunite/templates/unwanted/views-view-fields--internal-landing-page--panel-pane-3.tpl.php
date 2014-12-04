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
  <?php if (count($row->field_field_half_module_title_1) > 0 || count($row->field_field_half_module_title_2) > 0 || 
  count($row->field_field_half_module_description) > 0 || count($row->field_field_half_module_link) > 0): ?>
    <div class="mod half">
      <?php if (count($row->field_field_half_module_title_1) > 0 || count($row->field_field_half_module_title_2) > 0): ?>
        <div class="mainstageHeader">
          <h2 class="blackhead blackheadsmall">
            <?php print $row->field_field_half_module_title_1[0]['raw']['value']; ?>
            <?php if (count($row->field_field_half_module_title_2) > 0): ?>
              <strong><?php print $row->field_field_half_module_title_2[0]['raw']['value']; ?></strong>
            <?php endif; ?>
          </h2>
        </div>
      <?php endif; ?>
      <?php if (count($row->field_field_half_module_description) > 0 || count($row->field_field_half_module_link) > 0): ?>
        <section class="copy clearfix">
          <?php if (count($row->field_field_half_module_description) > 0): ?>
            <?php print $row->field_field_half_module_description[0]['raw']['value']; ?>
          <?php endif; ?>
          <?php if (count($row->field_field_half_module_link) > 0): ?>
            <?php $field_half_module_url = (isset($row->field_field_half_module_link[0]['raw']['url'])?($row->field_field_half_module_link[0]['raw']['url']):''); ?>
            <?php $field_half_module_label = (isset($row->field_field_half_module_link[0]['raw']['title'])?($row->field_field_half_module_link[0]['raw']['title']):''); ?>
            <?php $field_half_module_target = (isset($row->field_field_half_module_link[0]['raw']['attributes']['target'])?($row->field_field_half_module_link[0]['raw']['attributes']['target']):'_self'); ?>
            <?php if (substr($field_half_module_url, 0, 4) != 'http' && substr($field_half_module_url, 0, 1) != '/'): ?>
              <?php $field_half_module_url = '/'.$field_half_module_url; ?>
            <?php endif; ?>
            <p>
              <a href="<?php print $field_half_module_url; ?>" target="<?php print $field_half_module_target; ?>" class="uppercase">
                <?php print $field_half_module_label; ?>
              </a>
            </p>
          <?php endif; ?>
        </section>
      <?php endif; ?>
    </div>
  <?php endif; ?>
<?php else: ?>
  <?php if (count($row->field_field_half_module_title_1) > 0 || count($row->field_field_half_module_title_2) > 0 || 
  count($row->field_field_half_module_description) > 0 || count($row->field_field_half_module_link) > 0): ?>
    <div class="mod">
      <?php if (count($row->field_field_half_module_title_1) > 0 || count($row->field_field_half_module_title_2) > 0): ?>
        <div class="mainstageHeader">
          <h2 class="blackhead blackheadsmall">
            <?php print $row->field_field_half_module_title_1[0]['raw']['value']; ?>
            <?php if (count($row->field_field_half_module_title_2) > 0): ?>
              <strong><?php print $row->field_field_half_module_title_2[0]['raw']['value']; ?></strong>
            <?php endif; ?>
          </h2>
        </div>
      <?php endif; ?>
      <?php if (count($row->field_field_half_module_description) > 0 || count($row->field_field_half_module_link) > 0): ?>
        <div class="initiativeRightBody copy">
          <?php if (count($row->field_field_half_module_description) > 0): ?>
            <?php print $row->field_field_half_module_description[0]['raw']['value']; ?>
          <?php endif; ?>
          <?php if (count($row->field_field_half_module_link) > 0): ?>
            <?php $field_half_module_url = (isset($row->field_field_half_module_link[0]['raw']['url'])?($row->field_field_half_module_link[0]['raw']['url']):''); ?>
            <?php $field_half_module_label = (isset($row->field_field_half_module_link[0]['raw']['title'])?($row->field_field_half_module_link[0]['raw']['title']):''); ?>
            <?php $field_half_module_target = (isset($row->field_field_half_module_link[0]['raw']['attributes']['target'])?($row->field_field_half_module_link[0]['raw']['attributes']['target']):'_self'); ?>
            <?php if (substr($field_half_module_url, 0, 4) != 'http' && substr($field_half_module_url, 0, 1) != '/'): ?>
              <?php $field_half_module_url = '/'.$field_half_module_url; ?>
            <?php endif; ?>
            <p>
              <a href="<?php print $field_half_module_url; ?>" target="<?php print $field_half_module_target; ?>" class="uppercase">
                <?php print $field_half_module_label; ?>
              </a>
            </p>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div> 
  <?php endif; ?>
<?php endif; ?>
