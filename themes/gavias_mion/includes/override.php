<?php
function gavias_mion_preprocess_views_view_unformatted__taxonomy_term(&$variables){
   $current_uri = \Drupal::request()->getRequestUri();
   $url = \Drupal::service('path.current')->getPath();
   $arg = explode('/', $url);
   $tid = 0;
   if ((isset($arg[1]) && $arg[1] ==  "taxonomy") && (isset($arg[2]) && $arg[2] == "term") && isset($arg[3]) && is_numeric($arg[3]) ) {
      $tid = $arg[3];
   }
   $term = taxonomy_term_load($tid);
   $layout = 'masonry';
   $columns = 2;

   $item_class = '';
   if($layout == 'grid' || $layout == 'masonry'){
      if ($columns == '1'){
         $item_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
      }else if($columns == 2){
         $item_class = 'col-lg-6 col-md-6 col-sm-6 col-xs-12';
      }else if($columns == 3){
         $item_class = 'col-lg-4 col-md-4 col-sm-4 col-xs-12';
      }else if($columns == 4){
         $item_class = 'col-lg-3 col-md-3 col-sm-6 col-xs-12';
      }else if($columns == 6){
         $item_class = 'col-lg-2 col-md-2 col-sm-6 col-xs-12';
      }
   }   
   if($layout=='masonry'){
      $item_class .= ' item-masory';
   }   
   $variables['gva_columns'] = $columns;
   $variables['gva_item_class'] = $item_class;

   $variables['gva_layout'] = $layout;
}



function gavias_mion_preprocess_views_view_grid(&$variables) {
   $view = $variables['view'];
   $rows = $variables['rows'];
   $style = $view->style_plugin;
   $options = $style->options;
   $variables['gva_masonry']['class'] = '';
   $variables['gva_masonry']['class_item'] = '';
   if(strpos($options['row_class_custom'] , 'masonry') || $options['row_class_custom'] == 'masonry' ){
      $variables['gva_masonry']['class'] = 'post-masonry-style row';
      $variables['gva_masonry']['class_item'] = 'item-masory';
   }
}
