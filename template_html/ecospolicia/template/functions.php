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

?>