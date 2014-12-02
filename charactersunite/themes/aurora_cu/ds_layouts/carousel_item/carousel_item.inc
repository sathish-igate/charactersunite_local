<?php
function ds_carousel_item() {
  return array(
    'label' => t('Carousel item'),
    'regions' => array(
      'media' => t('Media'),
      'title' => t('Title'),
      'caption' => t('Caption'),
      'link' => t('link')
    ),
    'css' => false,
    'image' => false
  );
}