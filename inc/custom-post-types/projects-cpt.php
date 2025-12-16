<?php
/**
 * Created from an example Custom Post Type file I had
 * set up. This doesn't require a custom taxonomy but one could be added
 * if needed.
 *
 * @since 1.0
 */

function scst_project_cpt()
{
    $labels = array(
        'name' 						=> 'Projects',
        'singluar_name'				=> 'Project Item',
        'add_new'					=> 'Add New Project Item',
        'add_new_item'				=> 'Add New Project Item',
        'edit_item'					=> 'Edit Project Item',
        'new_item'					=> 'New Project Item',
        'view_item'					=> 'View Project Item',
        'view_items'				=> 'View Project Items',
        'search_items'				=> 'Search Project Items',
        'not_found'					=> 'No Project Items found',
        'not_found_in_trash'		=> 'No Project Items found in Trash',
        'all_items'					=> 'All Project Items',
        'archives'					=> 'Project Item Archives',
        'attributes'				=> 'Project Item Attributes',
        'insert_into_item'			=> 'Insert into Project Item',
        'uploaded_to_this_item'		=> 'Uploaded to this Project Item',
        'item_published'			=> 'Project Item published',
        'item_published_privately'	=> 'Project Item published privately',
        'item_reverted_to_draft'	=> 'Project Item reverted to draft',
        'item_scheduled'			=> 'Project Item scheduled',
        'item_updated'				=> 'Project Item updated'
    );

    $args = array(
        'label'						=> 'Project Items',
        'labels'					=> $labels,
        'description'				=> 'Project Items that appear in the Projects page.',
        'public'					=> true,
        'publicly_queryable'		=> true,
        'show_ui'					=> true,
        'show_in_menu'				=> true,
        'menu_position'				=> 20,
        'menu_icon'					=> 'dashicons-images-alt2',
        'supports'					=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'page-attributes', 'post-formats' ),
        'has_archive'				=> true,
        'rewrite'					=> array(
            'slug' => 'projects', 'with_front' => false ),
        'can_export'				=> true,
    );

    register_post_type('Project', $args);
}

//register the Project custom post type
add_action('init', 'scst_project_cpt');