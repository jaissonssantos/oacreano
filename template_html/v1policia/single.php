<?php include (TEMPLATEPATH . '/config.php'); ?>
<?php get_header(); ?>

<section class="conteudo">
    <div class="container background-color5">
        <div class="banner-area-970x90 tex-center">
            <?php drawAdsPlace(array('id' => 9), false); ?>
        </div>
    </div>
</section>

<section class="conteudo">
    <div class="container">
        <div class="conteudo-principal c700x1 pull-left" id="printconteudo">
          <?php if (have_posts()): while (have_posts()) : the_post();?>
          <?php $url_atual = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>
          <?php if(function_exists('bac_PostViews')) { bac_PostViews(get_the_ID()); }?>
          <?php $idpost = get_the_ID(); ?>
            <header>
                <h1><?=the_title()?></h1>
                <h2><?php  if ( has_excerpt() ) { the_excerpt(); } ?></h2>
                <div class="info-header">
                    <p><?php $key_autor = "artigo_autor"; $cp_autor = get_post_meta($post->ID,$key_autor,true); if(isset($cp_autor) && $cp_autor >= ''){ echo $cp_autor; } ?></p>
                    <time pubdate="" datetime="<?=the_time('Y\-m\-d/Tg\:i')?>">
                        <span class="data"><?=the_time('d\/m\/Y')?></span><?=the_time('g\hi')?>
                    </time>
                </div>
                <div class="share-conteudo">
                    <div class="share-box">
                        <div class="operacoes-share">
                            <span id="compartilhar-google" class="share-google-plus btn-share" title="Compartilhar no Google +" onclick="sharenetwork('googleplus', '<?=the_title()?>', '<?=$url_atual?>');" ><span class="ecos_icons share-googleplus"></span></span>
                            <span id="compartilhar-twitter" class="share-twitter-t btn-share" title="Compartilhar no Twitter" onclick="sharenetwork('twitter', '<?=the_title()?>', '<?=$url_atual?>');" ><span class="ecos_icons share-twitter"></span></span>
                            <span id="compartilhar-facebook" class="share-facebook-f btn-share" title="Compartilhar no Facebook" onclick="sharenetwork('facebook', '<?=the_title()?>', '<?=$url_atual?>');" ><span class="ecos_icons share-facebook"></span></span>
                        </div>
                        <div class="operacoes-site">
                            <a href="javascript:;" title="Comunicar erro" class="comunicar-erro" onclick="openModalcomentario();">Comunicar erro</a>
                            <a href="javascript:;" title="Imprimir conteúdo" class="imprimir-conteudo" onclick="imprimirconteudo('printconteudo', '<?=the_title()?>');">Imprimir</a>
                        </div>
                    </div>
                </div>
            </header>
            <div class="texto">
              <?php the_content();?>
            </div><!-- TEXTO -->

            <div class="custom-banner">
                <div class="banner-area-336x250 pull-left margin-right-20">
                    <div class="blc-ads">
                        <div class="legenda-publicidade pull-right margin-right-20">publicidade</div>
                        <?php drawAdsPlace(array('id' => 5), false); ?>
                    </div>
                </div>
                <div class="banner-area-336x250 pull-right margin-top-30">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=265556700233751&version=v2.0";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-like-box" data-href="https://www.facebook.com/pages/Ecos-da-Not%C3%ADcia/133609626694117" data-width="300" data-height="270" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                </div>
            </div>

            <div class="custom-banner">
                <div class="banner-area-706x300">
                    <?php drawAdsPlace(array('id' => 9), false); ?>
                </div>
            </div>


            

            <div id="escreva-comentario">
                <!-- MODAL COMENTARIO -->
                <div class="modal fade" id="modal-comentario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="ecos_icons close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                        <h1 class="modal-title" id="myModalLabel">Comentário</h1>
                      </div>
                      <div class="modal-body">
                        <?php comments_template(); ?>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                </div>
                <!-- END MODAL -->

                <h3>Informamos aos nossos caros leitores que a Equipe Ecos da notícia não se responsabilizará pelas consequências jurídicas<br/> sobre os comentários divulgados com linguajar ofensivo.</h3>
                <div id="formulario-inicial">
                    <div id="avatarcomentario"></div>
                    <div id="borda-formulario">
                        <input type="text" id="campo-formulario" value="" onclick="openModalcomentario();" placeholder="Escreva seu comentário..." />
                    </div>
                </div>
            </div>       
            <div id="listagem_comentarios"></div>
            <!-- COMENTÁRIOS -->

          <?php endwhile; else:?>
          <?php endif;?>
        </div><!-- CONTEUDO PRINCIPAL -->
        <aside class="conteudo-auxiliar background-color5 c340x1 pull-right">
            <div class="container-conteudo-auxiliar c340x1 pull-left">
                <section class="ultimas-noticias modo-simples pull-left">
                    <ul class="chamadas">
                        <?php
                            $aRecentPosts = new WP_Query(array (
                                                            'post__not_in' => array($idpost), 
                                                            'showposts'    => '5',
                                                            'cat'          => '-55,-56'
                                                        ));
                            $i = 0;
                            while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
                        ?>
                        <?php if( $i == 0 ){ ?>
                            <li class="destaque c300x1">
                                <a href="<?=the_permalink()?>" title="<?=the_title()?>">
                                    <?php if ( has_post_thumbnail()) : ?>
                                       <?php the_post_thumbnail('image-thumb-300x100'); ?>
                                    <?php endif; ?>
                                    <?php 
                                        $key_legenda = "artigo_legenda";
                                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                                        if(isset($cp_legenda) && $cp_legenda >= ''){
                                    ?>  
                                    <div class="legenda"><?=$cp_legenda?></div>
                                    <?php } ?>
                                    <div class="titulo"><?=the_title()?></div>
                                </a>
                            </li>
                        <?php }else{ ?>
                            <li class="destaque c155x1 margin-0">
                                <a href="<?=the_permalink()?>" title="<?=the_title()?>">
                                    <?php if ( has_post_thumbnail()) : ?>
                                       <?php the_post_thumbnail('i-thumb-155x100'); ?>
                                    <?php endif; ?>
                                    <?php 
                                        $key_legenda = "artigo_legenda";
                                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                                        if(isset($cp_legenda) && $cp_legenda >= ''){
                                    ?>
                                    <div class="legenda"><?=$cp_legenda?></div>
                                    <?php } ?>
                                    <div class="titulo"><?=the_title()?></div>
                                </a>
                            </li>
                        <?php } $i++; ?>
                        <?php endwhile; wp_reset_query(); ?>
                    </ul>
                </section>
                <section class="publicidade pull-left">
                    <div class="legenda-publicidade pull-right">Publicidade</div>
                    <div class="blc-publicidade">
                        <?php drawAdsPlace(array('id' => 6), false); ?>
                    </div>
                </section>
            </div>
        </aside><!-- CONTEUDO AUXILIAR -->
    </div>
</section><!-- CONTEUDO -->

<?php get_footer();?>
