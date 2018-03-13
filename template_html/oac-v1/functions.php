<?php 

//update_option('siteurl','http://www.ecosdanoticia.com.br');
//update_option('home','http://www.ecosdanoticia.com.br');

// HABILITAR IMAGEM DESTACADA
add_theme_support( 'post-thumbnails' );

// AUMENTAR TAMANHO DE UPLOAD DE ARQUIVO
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );  	
	
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'thumbnails-1080x608', 1080, 608, true ); //(cropped)
	add_image_size( 'image-thumb-300x200', 300, 200, true ); //(cropped)
    add_image_size( 'image-thumb-300x250', 300, 200, true ); //(cropped)
}

//Gets the  number of Post Views to be used later.
function get_PostViews($post_ID){
    $count_key = 'post_views_count';
    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);
 
    return $count;
}
 
//Function that Adds a 'Views' Column to your Posts tab in WordPress Dashboard.
function post_column_views($newcolumn){
    //Retrieves the translated string, if translation exists, and assign it to the 'default' array.
    $newcolumn['post_views'] = __('Views');
    return $newcolumn;
}
 
//Function that Populates the 'Views' Column with the number of views count.
function post_custom_column_views($column_name, $id){
     
    if($column_name === 'post_views'){
        // Display the Post View Count of the current post.
        // get_the_ID() - Returns the numeric ID of the current post.
        echo get_PostViews(get_the_ID());
    }
}
//Hooks a function to a specific filter action.
//applied to the list of columns to print on the manage posts screen.
add_filter('manage_posts_columns', 'post_column_views');
 
//Hooks a function to a specific action.
//allows you to add custom columns to the list post/custom post type pages.
//'10' default: specify the function's priority.
//and '2' is the number of the functions' arguments.
add_action('manage_posts_custom_column', 'post_custom_column_views',10,2);


//definindo o container da galeria
// if ( ! isset( $content_width ) )
//     $content_width = 706;


?>