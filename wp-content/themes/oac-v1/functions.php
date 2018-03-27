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
	add_image_size( 'thumbnails-660x440', 660, 440, true ); //(cropped)
    add_image_size( 'thumbnails-480x320', 480, 320, true ); //(cropped)
}

//plugin SEOPRESS
function seopress_theme_slug_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'seopress_theme_slug_setup' );

/* Adicionando meta tags ao header */
function add_meta_tags_facebook() {
    if (is_single()){
        $id = get_the_ID();
        $title = get_the_title($id);
        $description = get_the_excerpt($id);
        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'thumbnails-1080x608');
        $url = get_permalink($id);
        $type = substr($thumbnail[0],-3);
        echo '<meta property="og:title" content="'.$title.'" />';
        echo '<meta property="og:description" content="'.$description.'" />';
        echo '<meta name="keywords" content="política, polícia, vídeos, evangélico, cotidiano, oacreano, jornalismo acreano, acreano, notícias do acre, acre, alto acre, baixo acre, purus, juruá, tarauaca envira" />';
        echo '<meta property="og:url" content="'.$url.'">';
        echo '<meta property="og:image" content="'.$thumbnail[0].'">';
        echo '<meta property="og:image:type" content="image/'.$type.'">';
        echo '<meta property="og:image:width" content="400">';
        echo '<meta property="og:image:height" content="300">';
        echo '<meta property="og:type" content="article" />';
        echo '<meta property="og:site_name" content="OAcreano" />';
    }
}
add_action('wp_head', 'add_meta_tags_facebook');

function add_meta_tags_twitter() {
    if (is_single()){
        $id = get_the_ID();
        $title = get_the_title($id);
        $description = get_the_excerpt($id);
        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'thumbnails-1080x608');
        $url = get_permalink($id);
        echo '<meta name="twitter:card" content="summary" />';
        echo '<meta name="twitter:site" content="@oacreano_official" />';
        echo '<meta name="twitter:creator" content="@oacreano_official" />';
        echo '<meta property="twitter:url" content="'.$url.'" />';
        echo '<meta property="twitter:title" content="'.$title.'" />';
        echo '<meta property="twitter:description" content="'.$description.'" />';
        echo '<meta property="image:image" content="'.$thumbnail[0].'" />';
    }
}
add_action('wp_head', 'add_meta_tags_twitter');

function add_meta_tags_googleplus() {
    if (is_single()){
        $id = get_the_ID();
        $title = get_the_title($id);
        $description = get_the_excerpt($id);
        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'thumbnails-1080x608');
        echo '<meta itemscope itemtype="http://schema.org/article" />';
        echo '<meta itemprop="headline" content="'.$title.'" />';
        echo '<meta itemprop="description" content="'.$description.'" />';
        echo '<meta itemprop="image" content="'.$thumbnail[0].'" />';
    }
}
add_action('wp_head', 'add_meta_tags_googleplus');

function bac_PostViews($post_ID) {
 
    //Set the name of the Posts Custom Field.
    $count_key = 'post_views_count';
     
    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);
     
    //If the the Post Custom Field value is empty.
    if($count == ''){
        $count = 0; // set the counter to zero.
         
        //Delete all custom fields with the specified key from the specified post.
        delete_post_meta($post_ID, $count_key);
         
        //Add a custom (meta) field (Name/value)to the specified post.
        add_post_meta($post_ID, $count_key, '0');
        return $count . ' View';
     
    //If the the Post Custom Field value is NOT empty.
    }else{
        $count++; //increment the counter by 1.
        //Update the value of an existing meta key (custom field) for the specified post.
        update_post_meta($post_ID, $count_key, $count);
         
        //If statement, is just to have the singular form 'View' for the value '1'
        if($count == '1'){
        return $count . ' View';
        }
        //In all other cases return (count) Views
        else {
        return $count . ' Views';
        }
    }
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