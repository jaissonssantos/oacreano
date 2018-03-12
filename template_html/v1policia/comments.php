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

<div id="ultimos-comentarios" class="display-n">
<?php global $wp_query; if ( have_comments() ) { // Verifica se tem algum comentário  ?>
	
	<div class="cabecalho-comentarios">
       <h2 class="qtd-comentarios">
	   	<?php comments_number('0 Comentários', '1 Comentário', '% Comentários' );?>
       </h2>
       <div class="comentar-artigo pull-right margin-top-10" onclick="openModalcomentario();return false;" style="font-size: 12px; cursor:pointer">Comente sobre o artigo</div>
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

<div id="error_modal" class="bg-danger display-n"></div>
<div id="certo_modal" class="bg-success display-n"></div>

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

	<?php 
		$num1 	  	= rand(0,10);
		$num2 	  	= rand(0,10);
		$operacao 	= rand(1,3);
		$resultado 	= 0;
		$equacao	= '';
		switch ( $operacao ) {
			case 1:
				#soma
				$equacao 	= '+';
				$resultado  = $num1 + $num2;
				break;
			case 2:
				#subtracao
				$equacao 	= '-';
				$resultado 	=  abs($num1 - $num2);
				break;
			case 3:
				#multiplicacao
				$equacao 	= 'x';
				$resultado 	=  $num1 * $num2;
				break;		
			default:
				$resultado = 0;
				break;
		}
	?>

	<input name="linkatual" id="linkatual" type="hidden" class="form-control"
     value="<?php echo ''.get_option('siteurl').'/wp-comments-post.php'; ?>" />

    <input name="numero1" id="numero1" type="hidden" class="form-control" value="<?=$num1?>" />
    <input name="numero2" id="numero2" type="hidden" class="form-control" value="<?=$num2?>" />
    <input name="equacao" id="equacao" type="hidden" class="form-control" value="<?=$equacao?>" />
    <input name="resultado" id="resultado" type="hidden" class="form-control" value="<?=$resultado?>" />

	<div class="form-group">
	    <label for="author"><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></label>
    	<input type="text" name="author" id="author" class="form-control" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" />
	</div>

	<div class="form-group">
		<label for="email"><?php _e('Mail (will not be published)');?> <?php if ($req) _e('(required)'); ?></label>
	    <input type="text" name="email" id="email" class="form-control" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
	</div>

	<div class="form-group">
		<label for="url"><small><?php _e('Website'); ?></small></label>
		<input type="text" name="url" class="form-control" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
	</div>
	
<?php } //FIM DO IF PRA VERIFICAR SE A ESTA LOGADO?>
	
   	<div class="form-group">
		<label for="comment"><small>Mensagem</small></label>
		<p><textarea name="comment" id="comment" class="form-control" rows="3" tabindex="4" style="height: 60px"></textarea></p>
	</div>

	<div class="form-group">
		<label for="recuacao">Resolva: <?=$num1?> <?=$equacao?> <?=$num2?> é igual a?</label>
		<input type="text" name="resultadoinformado" class="form-control" id="resultadoinformado" value="" tabindex="4" style="width:20%;" />
	</div>

	<div class="form-group margin-top-10" style="margin-bottom:10px !important">
	    <input class="btn btn-primary pull-left" name="submit" type="submit" id="submit" tabindex="5" value="<?php esc_attr_e('Submit Comment'); ?>" />
		<div id="load_comment" class="pull-left margin-left-20 margin-top-5 display-n"><img src="<?=PATH_TEMPLATE?>/images/loading.gif" width="16" height="16" /></div>
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	</div>

	<?php do_action('comment_form', $post->ID); ?>
    
</div>
</form>
<?php  //do_action('comment_form', $post->ID); ?>


<?php }; // If registration required and not logged in ?>

<?php } ?>