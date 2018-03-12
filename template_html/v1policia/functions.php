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
	add_image_size( 'i-thumb-155x100', 155, 100, true ); //(cropped)
	add_image_size( 'image-thumb-300x100', 300, 100, true ); //(cropped)
	add_image_size( 'image-thumb-300x200', 300, 200, true ); //(cropped)
    add_image_size( 'image-thumb-300x250', 300, 200, true ); //(cropped)
}

// if ( function_exists( 'register_nav_menu' ) ) {
// 	register_nav_menu( 'topnav_menu', 'Menu topo do site' );
// 	register_nav_menu( 'principal_menu', 'Menu principal do site' );
// }


if ( ! function_exists( 'twentyten_comment' ) ) :
function twentyten_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
    
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
    		<?php echo get_avatar( $comment, 64 ); ?>
            <p><strong><?php comment_author_link(); ?></strong> &agrave;s 
            <?php comment_date('G\hi \- d/m/Y') ?><?php edit_comment_link(__("Editar comentário"), ' |'); ?></p>
            <?php comment_text(); ?>
    </li>
	
	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;
//END FUNCTION

//FUNCTION SIMPLES ADS MANAGER
// Ads Place output
if(function_exists('drawAdsPlace')) drawAdsPlace(array('id' => 1), true);
// or
if(function_exists('drawAdsPlace')) drawAdsPlace(array('id' => 1), array('before' => '<div class="ad">', 'after' => '</div>'));
// Ads Zone output
if(function_exists('drawAdsZone')) drawAdsZone(array('id' => 1), true);
// or
if(function_exists('drawAdsZone')) drawAdsZone(array('id' => 1), array('before' => '<div class="ad">', 'after' => '</div>'));
// Single Ad output
if(function_exists('drawAd')) drawAd(array('id' => 1), true);
// or
if(function_exists('drawAd')) drawAd(array('id' => 1), array('before' => '<div class="ad">', 'after' => '</div>'));
// Ads Block output
if(function_exists('drawAdsBlock')) drawAdsBlock(array('id' => 1));

// if ( ! function_exists( 'twentyfourteen_setup' ) ) :
// function twentyfourteen_setup() {
// 	add_theme_support( 'html5', array(
// 		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'footer'
// 	) );
// }
// endif;
// add_action( 'after_setup_theme', 'twentyfourteen_setup' );
//END FUNCTION

// function to display number of posts.
// function getPostViews($postID){
//     $count_key = 'post_views_count';
//     $count = get_post_meta($postID, $count_key, true);
//     if($count==''){
//         delete_post_meta($postID, $count_key);
//         add_post_meta($postID, $count_key, '0');
//         return "0 acesso";
//     }
//     return $count.' acessos';
// }

// // function to count views.
// function setPostViews($postID) {
//     $count_key = 'post_views_count';
//     $count = get_post_meta($postID, $count_key, true);
//     if($count==''){
//         $count = 0;
//         delete_post_meta($postID, $count_key);
//         add_post_meta($postID, $count_key, '0');
//     }else{
//         $count++;
//         update_post_meta($postID, $count_key, $count);
//     }
// }


// // Add it to a column in WP-Admin
// add_filter('manage_posts_columns', 'posts_column_views');
// add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
// function posts_column_views($defaults){
//     $defaults['post_views'] = __('Visualização');
//     return $defaults;
// }
// function posts_custom_column_views($column_name, $id){
// 	if($column_name === 'post_views'){
//         echo getPostViews(get_the_ID());
//     }
// }


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
if ( ! isset( $content_width ) )
    $content_width = 706;


?>