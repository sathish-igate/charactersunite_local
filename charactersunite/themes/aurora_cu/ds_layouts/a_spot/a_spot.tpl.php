<?php
/*
 * warning: hideos temporary things ahead
 * @TODO: a proper implementation of the css and js
 */
$hex = strip_tags(trim($hex));
if ($hex == '&nbsp;') {
  $hex = 'fff';
}
$hexcolor = $hex ?  $hex : 'ffffff';

$nodeid = $node->nid;

/*
 * adding custom css here
 */
$css = '
.aspot-node-'. $nodeid .' a,
.aspot-node-'. $nodeid .' a:hover,
.aspot-node-'. $nodeid .' a:visited {
  color: #'. $hexcolor .';
}
.aspot-node-'. $nodeid .' a .meta-wrap {
  color: #'. $hexcolor .';
}
.aspot-node-'. $nodeid .' a .meta .show-title:after {
  background-image: -webkit-gradient(linear, 0% 50%, 100% 50%, color-stop(0%, #'. $hexcolor .'), color-stop(100%, transparent));
  background-image: -webkit-linear-gradient(left, #'. $hexcolor .', transparent);
  background-image: -moz-linear-gradient(left, #'. $hexcolor .', transparent);
  background-image: -o-linear-gradient(left, #'. $hexcolor .', transparent);
  background-image: linear-gradient(left, #'. $hexcolor .', transparent);
}
.ie9 .aspot-node-'. $nodeid .' a .meta .show-title:after {
  background-color: #'. $hexcolor .';
}
';


// ugly is ugly but ugly is working for the moment
drupal_add_css($css, array('group' => CSS_THEME, 'type' => 'inline', 'every_page' => FALSE));
?>

<div class="<?php print $classes;?> aspot aspot-node-<?php print $nodeid; ?>"<?php print $attributes; ?>>
<?php if ($link && $link !== '&nbsp;'): ?>
  <?php if ((!$target) || ($target && $target == '&nbsp;')): ?> 
    <a href="<?php print $link; ?>" class="aspot-link">
  <?php else: ?>
    <a href="<?php print $link; ?>" target="<?php print $target; ?>" class="aspot-link">
  <?php endif; ?>
<?php endif; ?>

  <?php if ((!isset($node->field_is_episodic['und'][0]['value'])) || (isset($node->field_is_episodic['und'][0]['value']) && $node->field_is_episodic['und'][0]['value'] == 0)): ?>
  <div class="meta-wrap">
    <div class="meta">
    <?php if ($text_1 && $text_1 !== '&nbsp;'): ?>
      <h2 class="show-time"><?php print ($text_1); ?></h2>
    <?php endif; ?>
    <?php if ($text_2 && $text_2 !== '&nbsp;'): ?>
      <h3 class="show-time"><?php print ($text_2); ?></h3>
    <?php endif; ?>
    </div>
  </div>
  <?php endif; ?>

  <div data-picture data-alt="" data-class="tile-img">
    <?php if ($media_desktop): ?><?php print $media_desktop; ?><?php endif; ?>   
  </div>

<?php if ($link || $link !== '&nbsp;'): ?>
  </a>
<?php endif; ?>
</div>
