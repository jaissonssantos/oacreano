<?php get_header();?>

<div class="pagina_categoria">
<div class="conteudo">
    <div class="container">
        
         <?php //echo adrotate_group(25); ?>
        
        <div class="grid-16 esquerda margin-20-top-bottom recortar-margem bg-advertising">
         	<div class="oas-top1">
				<?php echo adrotate_group(31); ?>
            </div>    
         </div>	
        
        <div class="grid-16 esquerda direita"><!-- INICIO GRID 16 -->  
        <div class="grid-12 margin-20-top-bottom">
        	<?php 
		     // MOSTRAR A CATEGORIA	
				$pegando_categoria = single_cat_title("", false);
		    ?>
           <div class="categoria-page titulo"><?php single_cat_title(); ?></div> 	
        </div>  
          
        <div class="grid-8 esquerda margin-bottom-10">
                
           <div id="categoria"><!-- CATEGORIA CONFIG -->
        	 
             <div id="container-list-categoria">	
             <?php if (have_posts()): while (have_posts()) : the_post();?>
                
               <div class="listando-materia">
               
               		<div class="dataPostagem">
                    	<p><?php the_time('d M');?><br/><?php the_time('Y');?></p>
                    </div>
                    
                	<?php
						if ( has_post_thumbnail()){  // SE EXISTE IMAGEM EM DESTAQUE
					?>
                     <div id="esquerda_imagem"> 
                         <a href="<?php the_Permalink();?>" title="<?php the_title();?>" alt="<?php the_title();?>">
                         	<?php the_post_thumbnail('image-thumb-140x105'); ?>
                         </a>
                     </div>       
					<?php }else{}?>
                
                <div id="direita_noticia">
                	<div id="categoria_post">
						<strong>Por <?php the_author();?></strong>
                    </div>
                	<h1><a href="<?php the_Permalink()?>" title="<?php the_title();?>"><?php the_title();?></a></h1>
                	<span id="subtitulo">
						<?php  if (has_excerpt() ) { ?>
							<?php the_excerpt(); ?>
						<?php } ?>
                    </span>
                </div>
                
               </div>
				
             <?php endwhile; else:?>
			 <?php endif;?>
             
             </div>
             
             <div id="paginacao"><?php wp_pagenavi(); ?></div>
			            
		   </div><!-- FIM CATEGORIA CONFIG -->

        
        </div><!-- #FINALGRID -->
        
        <div class="grid-4 direita">
        
        		<div class="banner-300">
                    <?php echo adrotate_group(5); ?>
                </div>
        		
                <div class="banner">
        		<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FEcos-da-Not%25C3%25ADcia%2F133609626694117&amp;width=300&amp;height=290&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=true&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:290px;" allowTransparency="true"></iframe>
           		</div> 
                
                <div class="banner-300">
                	<a href="http://www.ecosdanoticia.com.br/denuncie-aqui" title="Denuncie Aqui">
                        <img src="<?php bloginfo('template_directory'); ?>/images/denuncie-ja.jpg"
                             width="300" height="112" border="0" />
                    </a>
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
                
                <div class="banner-300">
                	<?php echo adrotate_group(27); ?>
                </div>
                
                <?php //echo adrotate_group(25); ?>
                
        </div><!-- #FINALSIDEBAR -->
        
        <div class="grid-1 direita"><!-- INICIO GRID 1 -->
            	
                <div class="grid-1 margin-top-5 direita oas-arranha-ceu1 color-cinza-nivel-3">
                  <?php echo adrotate_group(39); ?>
                </div><!-- FIM BANNER ARRANHA-CEU LATERAL -->
                
                <div class="grid-1 direita esquerda margin-top-5">
                    <h1 class="titulo-caderno font-size-18 margin-bottom-10">Mais Lidas</h1>
                    
                    <?php 
                        $today = getdate();
						$year=$today["year"];
						$month=$today["mon"];
						$day=$today["mday"];
                        $count = 1;
                        $pc = new WP_Query('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=5&post.status=future,publish'.'&day='.$day); 
                    ?>
                    <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                    <div class="grid-1 esquerda direita">
                            <div class="chamada chamada-simples">
                            <a class="titulo titulo-ultimas" href="<?php the_permalink() ?>" title="<?php the_title();?>">
                            <div class="count-lidas"><?php echo $count; ?></div>
                            <?php the_title();?>
                            </a>
                            </div>
                    </div><!-- #ChamadaLidas -->
                    <?php 
                        $count++;
                        endwhile;
                    ?>
                </div><!-- #FINAKLMaisLidas -->
                
            </div><!-- FINAL GRID 1 -->
        
        </div><!-- FINAL GRID 16 --> 
        
        <div class="grid-16 esquerda margin-20-top-bottom recortar-margem bg-advertising">
         	<div class="oas-top1">
				<?php echo adrotate_group(29); ?>
            </div>    
        </div>
        
	</div>
</div>
</div>
<?php get_footer();?>

