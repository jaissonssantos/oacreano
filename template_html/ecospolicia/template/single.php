<?php 
/**
Template Name Posts: Artigo-Padrão
**/
get_header(); ?>

<div class="pagina_artigo">
<div class="conteudo">
    <div class="container">
		
         
         <?php //echo adrotate_group(25); ?>
         
         <div class="grid-16 esquerda margin-20-top-bottom recortar-margem bg-advertising">
         	<div class="oas-top1">
				<?php echo adrotate_group(28); ?>
            </div>    
         </div>	
          
          <div class="grid-16 esquerda direita"><!-- INICIO GRID 16 -->  
          <div class="grid-8 esquerda margin-20-top-bottom recortar-margem">
        		
             <?php if (have_posts()): while (have_posts()) : the_post();?>
             	
                <?php setPostViews(get_the_ID()); ?>
                
                <?php 
					$url_atual = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
				?>
                 
                <div class="data-artigo"><?php the_time('D, j \d\e F \d\e Y G\hi');?></div>
                
                <div class="titulo-artigo-single">
                	<h1 class="titulo"><?php the_title();?></h1>
                	<span class="subtitulo">
						<?php  if (has_excerpt() ) { ?>
							<?php the_excerpt(); ?>
						<?php } ?>
                    </span>
                    <div class="artigo-autor">
					<?php 
						$key="autor-artigo";
						//$autor = get_post_meta(get_the_ID(),$key, true);
						if(get_post_meta(get_the_ID(),$key, true)){
							$key="autor-artigo"; echo get_post_meta(get_the_ID(),$key, true);
						}else{
					?>
					<?php 
							the_author();
						}
					?>
                    </div>
                    
                </div><!-- #FIM DO TITULO -->
                
                <div class="compartilhar-artigo">
                
                		
                        <div class="fb-like" data-href="<?php echo $url_atual; ?>"
                         data-width="180" data-layout="button_count" data-action="recommend"
                          data-show-faces="false" data-send="false"></div>
                        
 						<a href="http://twitter.com/share" class="margin-esquerda-10 twitter-share-button"
                         data-count="horizontal" data-via="Ecos_da_Noticia" data-lang="pt">Tweetar</a>
                         
                        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                    	

                        <!-- Inclua esta tag na seção head ou logo antes da tag de fechamento da seção body -->
						 <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
                              {lang: 'pt-BR'}
                         </script>
                         <!-- Posicione esta tag onde você deseja que o botão compartilhar apareça. -->
                         <div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php echo $url_atual; ?>"></div>
                        
                        

						<div class="comentar-artigo">Comente sobre o artigo</div>
                        
                </div><!-- #FIM DO COMPARTILHAMENTO DO TOPO -->
                
                <div class="conteudo-artigo">
                	<?php the_content();?>
                </div>
                
                
                <div id="dialog-modal" title="COMENTÁRIOS - ECOS DA NOTICIA">
                    <div class="modulo-comentario">
                        <?php comments_template(); ?>
                    </div>
                </div>

<?php endwhile; else:?>
<?php endif;?> 

<!-- BLOCO PUBLICIDADE -->
<div class="bloco-publicidade">
	<div class="ads-content-topright-single">
    	<h3>LINKS PATROCINADOS</h3>
    	<ul class="w620 borda-zero padding-0-todo">
        	<li>
            	<div class="bp_1">
					<script type="text/javascript"><!--
                    google_ad_client = "ca-pub-3199525478780801";
                    /* PagArtigos300x250 */
                    google_ad_slot = "9924588932";
                    google_ad_width = 300;
                    google_ad_height = 250;
                    //-->
                    </script>
                    <script type="text/javascript"
                    src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                </div>
                <div class="bp_2">
                    <script type="text/javascript"><!--
                    google_ad_client = "ca-pub-9210129523880937";
                    /* Direto Artigos 300x250 */
                    google_ad_slot = "3375747217";
                    google_ad_width = 300;
                    google_ad_height = 250;
                    //-->
                    </script>
                    <script type="text/javascript"
                    src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                </div>
            </li>
        </ul>
    </div>
</div><!-- #FIM PUBLICIDADE ADSENSE -->

               
<!-- BLOCO COMPARTILHAR -->
<div class="compartilhar-artigo compartilhar-artigo-rodape">
             
             <div class="fb-like" data-href="<?php echo $url_atual; ?>"
                         data-width="180" data-layout="button_count" data-action="recommend"
                          data-show-faces="false" data-send="false"></div>
             
             <a href="http://twitter.com/share" class="margin-esquerda-10 twitter-share-button" data-count="horizontal"
              data-via="Ecos_da_Noticia" data-lang="pt">Tweetar</a>
             <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                    
             <!-- Inclua esta tag na seção head ou logo antes da tag de fechamento da seção body -->
			 <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
                  {lang: 'pt-BR'}
             </script>
             <!-- Posicione esta tag onde você deseja que o botão compartilhar apareça. -->
			 <div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php echo $url_atual; ?>"></div>
               
            
            <div class="comentar-artigo">Comente sobre o artigo</div>
               
</div><!-- BLOCO COMPARTILHAR DO RODAPE -->
              
<?php 
	function limitaTexto( $texto , $tamanho ){
      return strlen( $texto ) > $tamanho ? substr( $texto , 0 , $tamanho ) : $texto;
	}						
?>                   
                
<div class="vejatb">
	<h2>veja mais</h2>
    	<ul>
			<?php 
               global $post;
               $args = array(
                   'post__not_in' => array($IDArtigo),
                   'numberposts' => '4',
                   'orderby' => 'desc',
                   'category' => $category->cat_ID. ', -30'
               );
               $myposts = get_posts($args);
               foreach($myposts as $post) :
           ?>
                
                	<?php
						if ( has_post_thumbnail() ){  // SE EXISTE IMAGEM EM DESTAQUE
					?>
                    <li>
                    	<div class="chamada">
                            <div class="fotovtb l140">
                                <a href="<?php the_permalink(); ?>" class="borda-interna pie" title="<?php the_title(); ?>">
                                    <?php the_post_thumbnail('image-thumb-140x105'); ?>
                                </a>
                            </div>
                            <a href="<?php the_permalink(); ?>" rel="bookmark"
                             class="titulo entry-title" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            <div class="data"><?php the_time('d/m/Y G\hi');?></div> 
                        </div>
                	</li>
        			<?php }else{ $introducaoSub = get_the_excerpt(); ?>
                    <li>
                    	<div class="chamada sem-foto">
                        	<a href="<?php the_permalink(); ?>" rel="bookmark" 
                            class="titulo entry-title" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                              <?php if($introducaoSub != "" || $introducaoSub != NULL){ ?>
                              <p class="subtitulo-sem-foto">
							  	<?php echo limitaTexto( strip_tags($introducaoSub), 180 ) ;?>
                              </p>
                              <?php } ?>
                              <div class="data"><?php the_time('d/m/Y G\hi');?></div>
                    	</div>
                	</li>
                    <?php } ?>
                    
			<?php endforeach; ?>
        </ul>
</div><!-- #FIMVEJATAMBÉM-->            
              
<div id="escreva-comentario">
	<h3>Informamos aos nossos caros leitores que a Equipe Ecos da notícia não se responsabilizará pelas consequências jurídicas<br/> sobre os comentários divulgados com linguajar ofensivo.</h3>
	<div id="formulario-inicial">
    	<div id="avatarcomentario"></div>
        <div id="borda-formulario">
        	<input type="text" id="campo-formulario" value="" placeholder="Comente sobre o artigo..." />
        </div>
    </div>
</div>
              
<div id="listagem_comentarios"></div>
                        
</div><!-- #FINAL DO GRID 8 -->
               
               
           <div class="grid-4 margin-esquerda-20 margin-20-top-bottom">
           		
                <div class="banner-300"><!-- INICIO DO BANNER BOX -->
                	<div class="ads-content-topright-single">
                        <h3>LINKS PATROCINADOS</h3>
                        <ul class="w300 borda-zero padding-0-todo">
                            <li>
                                <?php echo adrotate_group(5); //27 ?>
                            </li>
                        </ul>
                    </div>
                </div><!-- FINAL DO BANNER BOX -->
                
                <div class="float-left-unidade w300">
                <h1 class="titulo-caderno font-size-18">Últimas</h1>
                <div class="line-box-default"><!-- INICIO DO LINE BOX -->
              		<ul class="margin-top-5">
					<?php
						$aRecentPosts = new WP_Query("showposts=10");
						while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
					?>
                    <li>
                    	<a href="<?php the_Permalink(); ?>" title="<?php the_title(); ?>">
                    	<div class="figure">
                        	<?php if ( has_post_thumbnail() ) { ?>
                        	<div class="thumb"><?php the_post_thumbnail('image-thumb-90x68'); ?></div>
                            <?php } ?>
                            <div class="chapeu"><?php the_time('d/m/Y G\hi');?></div>
                            <div class="figcaption"><?php the_title();?></div>
                        </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    </ul>
                </div><!-- FINAL DO LINE BOX -->
                </div><!-- ULTIMAS -->
                
                <div class="banner-300 margin-top-20"><!-- INICIO DO BANNER BOX -->
                	<div class="ads-content-topright-single">
                        <h3>LINKS PATROCINADOS</h3>
                        <ul class="w300 borda-zero padding-0-todo">
                            <li>
								<?php echo adrotate_group(6); //30 ?>
                            </li>
                        </ul>
                    </div>
                </div><!-- FINAL DO BANNER BOX -->
                
           </div><!-- #FINALGRID4 -->
           
           
           <div class="grid-1 direita"><!-- INICIO GRID 1 -->
            	
                <div class="grid-1 margin-top-5 direita oas-arranha-ceu1 color-cinza-nivel-3">
                  <?php echo adrotate_group(39); ?>
                </div><!-- FIM BANNER ARRANHA-CEU LATERAL -->
                
                
                
            </div><!-- FINAL GRID 1 -->
           
           
          </div><!-- FINAL GRID 16 --> 
        
        
        <div class="grid-16 esquerda margin-20-top-bottom recortar-margem bg-advertising">
         	<div class="oas-top1">
				<?php echo adrotate_group(29); ?>
            </div>    
        </div>
        
        <div class="grid-16 esquerda margin-bottom-10 recortar-margem">
         	<div class="banner">
        		<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FEcos-da-Not%25C3%25ADcia%2F133609626694117&amp;width=1120&amp;height=290&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=true&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:1120px; height:290px;" allowTransparency="true"></iframe>
           </div>  
        </div>	
        
	</div>
</div>
</div>
<?php get_footer();?>
