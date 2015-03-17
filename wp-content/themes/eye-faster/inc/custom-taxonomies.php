<?php


function success_taxonomy() {  
    register_taxonomy(  
        'success_category',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'success_stories',        //post type name
        array(  
            'hierarchical' => true,  
            'labels' => array(
				'name' => _x( 'Success Category', 'sfhr' ),
				'singular_name' => _x( 'Success Category', 'sfhr' ),
				'search_items' =>  __( 'Search Success Categories', 'sfhr' ),
				'all_items' => __( 'All Success Categories', 'sfhr' ),
				'parent_item' => __( 'Parent Success Category', 'sfhr' ),
				'parent_item_colon' => __( 'Parent Success Category:', 'sfhr' ),
				'edit_item' => __( 'Edit Success Category', 'sfhr' ),
				'update_item' => __( 'Update Success Category', 'sfhr' ),
				'add_new_item' => __( 'Add New Success Category', 'sfhr' ),
				'new_item_name' => __( 'New Success Category Name', 'sfhr' ),
				'menu_name' => __( 'Success Categories', 'sfhr' ),
			),
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'success_category', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'success_taxonomy');



?>