<?php

/**
 * @file
 * template.php
 */
//this adds custom js
function fablab_bootstrap_subtheme_preprocess_html(&$variables) {
  $options = array(
    'group' => JS_THEME,
  );
  drupal_add_js(drupal_get_path('theme', 'fablab_bootstrap_subtheme'). '/jwplayer/jwplayer.js', $options);
}