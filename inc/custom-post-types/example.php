<?php
/**
 * An example file that is not actually included via functions.php.
 * This file can be copied to create a new custom post type and/or
 * taxonomy as required.
 *
 * @since 1.0
 */

function scst_industry_taxonomy()
{
    $labels = array(
        'name'						=> 'Industries',
        'singular_name'				=> 'Industry',
        'all_items'					=> 'All Industries',
        'edit_item'					=> 'Edit Industry',
        'view_item'					=> 'View Industry',
        'update_item'				=> 'Update Industry',
        'add_new_item'				=> 'Add New Industry',
        'new_item_name'				=> 'New Industry Name',
        'parent_item'				=> 'Parent Industry',
        'parent_item_colon'			=> 'Parent Industry:',
        'search_items'				=> 'Search Industries',
        'popular_items'				=> 'Popular Industries',
        'not_found'					=> 'No industries found',
        'back_to_items'				=> 'Back to industries'
    );

    $args = array(
        'label'						=> 'Industries',
        'labels'					=> $labels,
        'public'					=> true,
        'show_admin_column'			=> true,
        'show_in_nav_menus'			=> true,
        'description'				=> 'Industries to categorise the Portfolio Items.',
        'hierarchical'				=> true,
        'capabilities'				=> array( 'manage_terms', 'edit_terms', 'delete_terms', 'assign_terms' ),
        'rewrite'					=> array( 'slug' => 'work', 'with_front' => false )
    );

    register_taxonomy('industries', 'work', $args);
    register_taxonomy_for_object_type('industries', 'work');
}

// Register custom taxonomy for the Case Studies custom post type
add_action('init', 'scst_industry_taxonomy');

function scst_portfolio_cpt()
{
    $labels = array(
        'name' 						=> 'Portfolio',
        'singluar_name'				=> 'Portfolio Item',
        'add_new'					=> 'Add New Portfolio Item',
        'add_new_item'				=> 'Add New Portfolio Item',
        'edit_item'					=> 'Edit Portfolio Item',
        'new_item'					=> 'New Portfolio Item',
        'view_item'					=> 'View Portfolio Item',
        'view_items'				=> 'View Portfolio Items',
        'search_items'				=> 'Search Portfolio Items',
        'not_found'					=> 'No Portfolio Items found',
        'not_found_in_trash'		=> 'No Portfolio Items found in Trash',
        'all_items'					=> 'All Portfolio Items',
        'archives'					=> 'Portfolio Item Archives',
        'attributes'				=> 'Portfolio Item Attributes',
        'insert_into_item'			=> 'Insert into Portfolio Item',
        'uploaded_to_this_item'		=> 'Uploaded to this Portfolio Item',
        'item_published'			=> 'Portfolio Item published',
        'item_published_privately'	=> 'Portfolio Item published privately',
        'item_reverted_to_draft'	=> 'Portfolio Item reverted to draft',
        'item_scheduled'			=> 'Portfolio Item scheduled',
        'item_updated'				=> 'Portfolio Item updated'
    );

    $args = array(
        'label'						=> 'Portfolio Items',
        'labels'					=> $labels,
        'description'				=> 'Project Portfolio Items that appear in the Work page.',
        'public'					=> true,
        'publicly_queryable'		=> true,
        'show_ui'					=> true,
        'show_in_menu'				=> true,
        'menu_position'				=> 20,
        'menu_icon'					=> 'dashicons-images-alt2',
        'supports'					=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'page-attributes', 'post-formats' ),
        'has_archive'				=> true,
        'rewrite'					=> array(
            'slug' => 'our-work', 'with_front' => false ),
        'can_export'				=> true,
        'taxonomies'				=> array('industries')
    );

    register_post_type('portfolio', $args);
}

//register the Portfolio custom post type
add_action('init', 'scst_portfolio_cpt');