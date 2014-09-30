<?php

/**
 * @file
 * template.php
 */
//this adds custom js
function library_bootstrap_subtheme_preprocess_html(&$variables) {
  drupal_add_js('http://library.uta.edu/jwplayer/jwplayer.js');
}