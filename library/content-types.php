<?php
function ha_post_types_init() {
  register_post_type( 'recipe',
    array(
      'labels' => array(
      'name' => __( 'Recipes' ),
      'singular_name' => __( 'Recipe' ),
      'add_new_item' => __( 'Add Recipe'),
      'edit_item' => __( 'Edit Recipe'),
      'new_item' => __( 'New Recipe'),
      ),
    //'hierarchical' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
    'public' => true,
    'exclude_from_search' => false,
    'has_archive' => false,
    'show_ui' => true,
    'rewrite' => array('slug' => 'recipes', 'with_front' => false),
    'menu_icon' => 'dashicons-carrot',
    )
  );
}
add_action( 'init', 'ha_post_types_init' );

function ha_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Adventures';
    $submenu['edit.php'][5][0] = 'Adventures';
    $submenu['edit.php'][10][0] = 'Add Adventure';
    $submenu['edit.php'][16][0] = 'Adventure Tags';
}
function ha_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Adventures';
    $labels->singular_name = 'Adventure';
    $labels->add_new = 'Add Adventure';
    $labels->add_new_item = 'Add Adventure';
    $labels->edit_item = 'Edit Adventure';
    $labels->new_item = 'Adventure';
    $labels->view_item = 'View Adventures';
    $labels->search_items = 'Search Adventures';
    $labels->not_found = 'No Adventures found';
    $labels->not_found_in_trash = 'No Adventures found in Trash';
    $labels->all_items = 'All Adventures';
    $labels->menu_name = 'Adventures';
    $labels->name_admin_bar = 'Adventures';
}
 
add_action( 'admin_menu', 'ha_change_post_label' );
add_action( 'init', 'ha_change_post_object' );
?>
