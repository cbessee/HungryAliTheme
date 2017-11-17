<?php

/*
 * Register widget areas and define format
 */

function hali_base_sidebar_widgets() {

  $before_widget  = '<div class="small-12 columns"><article id="%1$s" class="row widget %2$s">';
  $before_widget_two_columns  = '<div class="small-6 columns"><article id="%1$s" class="row widget %2$s">';
  $before_widget_three_columns  = '<div class="small-4 columns"><article id="%1$s" class="row widget %2$s">';
  $before_title   = '<h4>';
  $after_title  = '</h4>';
  $after_widget = '</article></div> <!-- end #%1$s -->';

  register_sidebar(array(
      'id' => 'sidebar-widgets',
      'name' => __('Sidebar / All', 'foundationpress'),
      'description' => __('Drag widgets to this container.', 'foundationpress'),
      'before_widget' => $before_widget,
      'after_widget' => $after_widget,
      'before_title' => $before_title,
      'after_title' => $after_title
  ));

  /**
   * Adds a widget area for each section.
   */

  // this will return only top-level pages
  $pages = get_pages('parent=0&sort_column=menu_order&sort_order=ASC');

  if ( empty( $pages ) ) {
    return false;
  }

  foreach( $pages as $page ) {
      // remove specific pages
      register_sidebar( array(
        'id' => 'sidebar-' . $page->ID,
        'name' => 'Sidebar / ' . $page->post_title,
        'description' => __('Drag widgets to this container.', 'foundationpress'),
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title' => $after_title
      ) );
  }

  register_sidebar(array(
      'id' => 'after-content',
      'name' => __('Body / After content', 'foundationpress'),
      'description' => __('Drag widgets to this container', 'foundationpress'),
      'before_widget' => '<article id="%1$s" class="row widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => $before_title,
      'after_title' => $after_title     
  ));

}

add_action( 'widgets_init', 'hali_base_sidebar_widgets' );
