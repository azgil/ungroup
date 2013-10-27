<?php 
  
/**
 * Override or insert variables into the page template.
 */
function ungroup_process_page(&$variables) {
  
  $variables['path_to_ungroup'] = drupal_get_path('theme', 'ungroup');
  
}

?>