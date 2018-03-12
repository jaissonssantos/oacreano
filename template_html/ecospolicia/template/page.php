<?php 
/**
Template Name: Pagina-Padrao */
get_header();

?>
<div class="pagina_padrao">
<div class="conteudo">
    <div class="container">
    
           <div class="grid-8 esquerda margin-20-top-bottom">
        		
             <?php if (have_posts()): while (have_posts()) : the_post();?>
                
                <div class="pagepadrao_titulo">
                	<h1 class="titulo"><?php the_title();?></h1>
                </div>
                
                
                <?php the_content();?>
            
             <?php endwhile; else:?>
			 <?php endif;?>
            
		   </div><!-- #FINALGRID -->
           
           <div class="grid-4 direita margin-20-top-bottom">
           		<div class="banner-300">
                	<a href="http://www.ecosdanoticia.com.br/denuncie-aqui" title="Denuncie Aqui">
                        <img src="<?php bloginfo('template_directory'); ?>/images/denuncie-ja.jpg"
                             width="300" height="112" border="0" />
                    </a>
                </div>
                <div class="banner">
        		<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FEcos-da-Not%25C3%25ADcia%2F133609626694117&amp;width=300&amp;height=290&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=true&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:290px;" allowTransparency="true"></iframe>
           		</div> 	
                
                
                <div class="float-left-unidade w300">
                <h1 class="titulo-caderno font-size-18">Últimas</h1>
                <?php
					$aRecentPosts = new WP_Query("showposts=6");
					while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
				?>
                <div class="margin-top-5">
                    	<div class="chamada chamada-simples" id="ultimas-com-imagem">
                        <?php 
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('image-thumb-60x60');
							}
						?>
                        <a class="titulo titulo-ultimas" href="<?php the_permalink() ?>" title="<?php the_title();?>">
                        	<?php the_title();?>
                        </a>
                        </div>
                </div><!-- #ChamadaUltimas-->
                <?php endwhile; ?>
                </div><!-- ULTIMAS -->
                
           </div><!-- #FINALSIDEBAR -->
                        
	</div>
</div>
</div>
<?php get_footer();?>

