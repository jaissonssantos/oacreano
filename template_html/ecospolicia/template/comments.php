<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">Este artigo está protegido por password. Insira-a para ver os comentários.</p>
	<?php
		return;
	}
?>

<div id="ultimos-comentarios">
<?php global $wp_query; if ( have_comments() ) { // Verifica se tem algum comentário  ?>
	
	<div class="cabecalho-comentarios">
       <h2 class="qtd-comentarios">
	   	<?php comments_number('0 Comentários', '1 Comentário', '% Comentários' );?>
       </h2>
       <div class="comentar-artigo">Comente sobre o artigo</div>
	</div>
    <ul id="commentlist">
    
    <?php wp_list_comments( array( 'callback' => 'twentyten_comment' ) ); ?>
    </ul>
    
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous">
				<?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Antigos coment&aacute;rios', 'twentyten' ) ); ?>
                </div>
				<div class="nav-next">
				<?php next_comments_link( __( 'Mais coment&aacute;rios <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
                </div>
			</div> <!-- .navigation -->
<?php endif; // check for comment navigation ?>
    
    
<?php } ?>
</div><!-- #FIM ULTIMOS COMENTARIOS -->

<?php if ( comments_open() ) { ?>
<?php if ( get_option('comment_registration') && !is_user_logged_in() ) { ?>
	<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() ) );?></p>

<?php }else{  ?>

<div class="chamada-titulo-comentario">Escreva um comentário</div>
<div id="error_modal"></div>
<div id="certo_modal"></div>
<div id="load_comment"><img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif"
 width="16" height="16" />  aguarde...</div>

<form id="commentform" method="post">
	<div id="formulario_do_comentario">
    
    <?php if ( is_user_logged_in() ){?>
	<p>
	<?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?>
    <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account') ?>">
		<?php _e('Log out &raquo;'); ?>
    </a>
    </p>

	<?php }else{?>

	<input name="linkatual" id="linkatual" type="hidden"
     value="<?php echo ''.get_option('siteurl').'/wp-comments-post.php'; ?>" />
	
    <label for="author">
    	<small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small>
    </label>
	<p>
    	<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>"
         size="22" tabindex="1" />
    </p>
	<label for="email">
    	<small><?php _e('Mail (will not be published)');?> <?php if ($req) _e('(required)'); ?></small>
    </label>
	<p>
    	<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22"
     	tabindex="2" />
    </p>
	<label for="url"><small><?php _e('Website'); ?></small></label>
    <p>
    	<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22"
         tabindex="3" />
    </p>
	
<?php } //FIM DO IF PRA VERIFICAR SE A ESTA LOGADO?>
	
   
	<label for="comment"><small>Mensagem</small></label>
	<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>

	<p>
    <input class="butao" name="submit" type="submit" id="submit" tabindex="5"
     value="<?php esc_attr_e('Submit Comment'); ?>" />
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	</p>

	<?php do_action('comment_form', $post->ID); ?>
    
</div>
</form>
<?php  //do_action('comment_form', $post->ID); ?>


<?php }; // If registration required and not logged in ?>

<?php } ?>