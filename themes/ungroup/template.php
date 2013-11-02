<?php

/**
 * @file template.php
 */
function ungroup_process_page(&$variables) {
  $variables['path_to_ungroup'] = drupal_get_path('theme', 'ungroup');
  $variables['path_to_file'] = variable_get('file_public_path', conf_path() . '/files');
}

?>