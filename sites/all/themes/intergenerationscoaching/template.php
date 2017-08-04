<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function intergenerationscoaching_preprocess_page(&$variables){
  $stored_title = drupal_set_title();
  module_load_include('pages.inc','privatemsg');
  $recipients = arg(1);
  $subject = '';
  $variables['privatemsg_new'] = drupal_get_form('privatemsg_new', $recipients, $subject);
  drupal_set_title($stored_title);
  //$variables['title'] = $stored_title;
}
