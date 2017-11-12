<?php
function recipe_tax() {

   $course_labels = array(
        'name'                       => _x( 'Courses', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Course', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Courses', 'text_domain' ),
        'all_items'                  => __( 'All Courses', 'text_domain' ),
        'parent_item'                => __( 'Parent Course', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Course:', 'text_domain' ),
        'new_item_name'              => __( 'New Course', 'text_domain' ),
        'add_new_item'               => __( 'Add Course', 'text_domain' ),
        'edit_item'                  => __( 'Edit Course', 'text_domain' ),
        'update_item'                => __( 'Update Course', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'search_items'               => __( 'Search Courses', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Course', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Courses', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $course_args = array(
        'labels'                     => $course_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'course', array( 'recipe' ), $course_args );   

	$occasion_labels = array(
        'name'                       => _x( 'Occasions', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Occasion', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Occasions', 'text_domain' ),
        'all_items'                  => __( 'All Occasions', 'text_domain' ),
        'parent_item'                => __( 'Parent Occasion', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Occasion:', 'text_domain' ),
        'new_item_name'              => __( 'New Occasion', 'text_domain' ),
        'add_new_item'               => __( 'Add Occasion', 'text_domain' ),
        'edit_item'                  => __( 'Edit Occasion', 'text_domain' ),
        'update_item'                => __( 'Update Occasion', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'search_items'               => __( 'Search Occasions', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Occasion', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Occasions', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $occasion_args = array(
        'labels'                     => $occasion_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'occasion', array( 'recipe' ), $occasion_args );

	$tag_labels = array(
        'name'                       => _x( 'Tags', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Tags', 'text_domain' ),
        'all_items'                  => __( 'All Tags', 'text_domain' ),
        'parent_item'                => __( 'Parent Tag', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Tag:', 'text_domain' ),
        'new_item_name'              => __( 'New Tag', 'text_domain' ),
        'add_new_item'               => __( 'Add Tag', 'text_domain' ),
        'edit_item'                  => __( 'Edit Tag', 'text_domain' ),
        'update_item'                => __( 'Update Tag', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'search_items'               => __( 'Search Tags', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Tag', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Tags', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $tag_args = array(
        'labels'                     => $tag_labels,
        'hierarchical'               => false,
        'public'                     => false,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'recipe-tags', array( 'recipe' ), $tag_args );
}
add_action( 'init', 'recipe_tax' );

function adventure_tax() {
	$location_labels = array(
        'name'                       => _x( 'Locations', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Location', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Locations', 'text_domain' ),
        'all_items'                  => __( 'All Locations', 'text_domain' ),
        'parent_item'                => __( 'Parent Location', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Location:', 'text_domain' ),
        'new_item_name'              => __( 'New Location', 'text_domain' ),
        'add_Gnew_item'               => __( 'Add Location', 'text_domain' ),
        'edit_item'                  => __( 'Edit Location', 'text_domain' ),
        'update_item'                => __( 'Update Location', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'search_items'               => __( 'Search Locations', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Location', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Locations', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $location_args = array(
        'labels'                     => $location_labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'location', array( 'post' ), $location_args );	
}
add_action('init', 'adventure_tax');

?>
