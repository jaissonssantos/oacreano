<?php include (TEMPLATEPATH . '/config.php'); ?>
<?php get_header();?>
<?php 
    // MOSTRAR A CATEGORIA 
    $pegando_categoria = single_cat_title("", false);
?>

<section class="conteudo">
    <div class="container">
        <div class="conteudo-categoria c700x1 pull-left">
            <header>
                <h1 class="text-transform-upper"><?=single_cat_title()?></h1>
            </header>
            <ul class="itens-categoria">
                <?php if (have_posts()): while (have_posts()) : the_post();?>
                <li>
                    <a title="<?=the_title()?>" href="<?=the_permalink()?>">
                        <div class="data-artigo"><p><?=the_time('d M')?><br><?=the_time('Y')?></p></div><br/>
                        <div class="imagem-artigo"> 
                           <?php if ( has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('i-thumb-155x100'); ?>
                           <?php endif; ?>
                        </div>                     
                        <div class="descricao-artigo">
                            <div class="redacao-artigo">
                                <?php 
                                    $key_autor = "artigo_autor"; $cp_autor  = get_post_meta($post->ID,$key_autor,true);
                                    if(isset($cp_autor) && $cp_autor >= ''){
                                ?> 
                                    <?=$cp_autor?>
                                <?php } ?>
                            </div>
                            <h1><?=the_title()?></h1>
                        </div>
                    </a>
                </li>
                <?php endwhile; else:?>
                <?php endif;?>
            </ul>

            <div id="paginacao"><?php wp_pagenavi(); ?></div>

        </div><!-- CONTEUDO CATEGORIA -->
        <aside class="conteudo-auxiliar background-color5 c340x1 pull-right">
            <div class="container-conteudo-auxiliar c340x1 pull-left">
                <section class="publicidade-artigo pull-left c300x1">
                    <div class="legenda-publicidade pull-right">publicidade</div>
                    <div class="blc-publicidade">
                        <?php drawAdsPlace(array('id' => 4), false); ?>
                    </div>
                </section>
                <section class="ultimas-noticias modo-simples pull-left">
                    <ul class="chamadas">
                        <?php
                            $aRecentPosts = new WP_Query("showposts=5&cat=-55,-56");
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
                <section class="face-artigo pull-left c300x1 margin-top-20 margin-bottom-10">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=265556700233751&version=v2.0";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-like-box" data-href="https://www.facebook.com/pages/Ecos-da-Not%C3%ADcia/133609626694117" data-width="300" data-height="270" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                </section>
                
            </div>
        </aside><!-- CONTEUDO AUXILIAR -->
    </div>
</section><!-- CONTEUDO -->

<?php get_footer();?>

