<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="announcements_list">
  <?php foreach ($rows as $id => $row): ?>
    <article>
      <?php print $row; ?>
    </article>
  <?php endforeach; ?>
</div>
