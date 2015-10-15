<?php

/**
 * @file
 * template.php
 */
drupal_add_js(drupal_get_path('themes', 'fb_bootstrap'));

/**
* hook_form_FORM_ID_alter
*/
/**function fb_bootstrap_form_search_block_form_alter(&$form, &$form_state, $form_id) {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#size'] = 40;  // define size of the textfield
    /*$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
    $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button 
    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search-button.png');

    // Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
    // Prevent user from searching the default text
    $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Search'){ alert('Please enter a search'); return false; }";

    // Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['search_block_form']['#attributes']['placeholder'] = t('Search');
} 
*/

/**
 * Implements hook_form_alter().
 */
function MYTHEME_form_alter(array &$form, array &$form_state = array(), $form_id = NULL) {
  if ($form_id) {
    switch ($form_id) {
      case 'search_form':
        // Add a clearfix class so the results don't overflow onto the form.
        $form['#attributes']['class'][] = 'clearfix';

        // Remove container-inline from the container classes.
        $form['basic']['#attributes']['class'] = array();

        // Hide the default button from display.
        $form['basic']['submit']['#attributes']['class'][] = 'element-invisible';

        // Implement a theme wrapper to add a submit button containing a search
        // icon directly after the input element.
        $form['basic']['keys']['#theme_wrappers'] = array('MYTHEME_search_form_wrapper');
        $form['basic']['keys']['#title'] = '';
        //control the width of the input           
        $form['basic']['keys']['#attributes']['class'][] = 'wide input';
        $form['basic']['keys']['#attributes']['placeholder'] = t('Search');
        break;
      case 'search_block_form':
        $form['#attributes']['class'][] = 'form-search';

        $form['search_block_form']['#title'] = '';
        $form['search_block_form']['#attributes']['placeholder'] = t('Search');
        //control the width of the input
         $form['search_block_form']['#attributes']['class'][] ='wide input';
        // Hide the default button from display and implement a theme wrapper
        // to add a submit button containing a search icon directly after the
        // input element.
        $form['actions']['submit']['#attributes']['class'][] = 'element-invisible';
        $form['search_block_form']['#theme_wrappers'] = array('MYTHEME_search_form_wrapper');

        // Apply a clearfix so the results don't overflow onto the form.
        $form['#attributes']['class'][] = 'content-search';
        break;
    }
  }
}
/**
 * Theme function implementation for MYTHEME_search_form_wrapper.
 */
function MYTHEME_MYTHEME_search_form_wrapper($variables) {
  $output = '<div class="field append">';
  $output .= $variables['element']['#children'];
  $output .= '<button type="submit" class="medium primary btn">';
  $output .= '<i class="icon-search entypo scale-lg"></i>';
  $output .= '<span class="element-invisible">' . t('Search') . '</span>';
  $output .= '</button>';
  $output .= '</div>';
  return $output;
}
/**
 * Stub implementation for hook_theme().
 *
 * @see MYTHEME_theme()
 * @see hook_theme()
 */
function MYTHEME_theme(&$existing, $type, $theme, $path) {
  // Custom theme hooks:
  // Do not define the `path` or `template`.
  $hook_theme = array(
    'MYTHEME_search_form_wrapper' => array(
      'render element' => 'element',
    ),
  );

  return $hook_theme;
}