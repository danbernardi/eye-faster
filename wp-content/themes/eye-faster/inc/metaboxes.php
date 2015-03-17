<?php


add_filter( 'cmb2_meta_boxes', 'zd_page_options' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
 
// page options
function zd_page_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['page_options'] = array(
        'id'            => 'page_options',
        'title'         => __( 'Page Options', 'zd' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name'       => __( 'Remove Top Padding', 'zd' ),
                'desc'       => __( 'Check this box to remove the padding from the top of the page content', 'zd' ),
                'id'         => $prefix . 'disable_top_padding',
                'type'       => 'checkbox',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Remove Page Title', 'zd' ),
                'desc'       => __( 'Check this box to remove the page title from the top of the page', 'zd' ),
                'id'         => $prefix . 'disable_page_title',
                'type'       => 'checkbox',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Page has Sidebar', 'zd' ),
                'desc'       => __( 'Check this box to add a sidebar to this page', 'zd' ),
                'id'         => $prefix . 'add_sidebar',
                'type'       => 'checkbox',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}


add_filter( 'cmb2_meta_boxes', 'zd_success_story_options' );
// building page
function zd_success_story_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
     
    $meta_boxes['success_info'] = array(
        'id'            => 'success_info',
        'title'         => __( 'Info', 'zd' ),
        'object_types'  => array( 'success_stories', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name'    => 'Name',
                'id'      => $prefix . 'fullname',
                'type'    => 'text_medium'
            ),
            array(
                'name'    => 'Job Title',
                'id'      => $prefix . 'jobtitle',
                'type'    => 'text_medium'
            ),
        ),
    );

    // Add other metaboxes as needed
    return $meta_boxes;
}


// Success Story Options
function zd_member_options( array $meta_boxes ) {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['member_options'] = array(
        'id'            => 'member_options',
        'title'         => __( 'Team Member Options', 'zd' ),
        'object_types'  => array( 'team_members', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name' => 'Job Title',
                'desc' => 'Enter the team members job title',
                'id' => $prefix . 'job_title',
                'type' => 'text',
			     ),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_member_options' );


?>