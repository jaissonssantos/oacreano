<?php get_header(); ?> 

    <div class="row">
        <div class="col-sm-12">
            <div class="oac-publi publi-970x90">
                <span>Publicidade</span>
                <div>
                    <!-- oac_horizontal_grande -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:970px;height:90px"
                         data-ad-client="ca-pub-9210129523880937"
                         data-ad-slot="6064766312"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>  
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <?php if (have_posts()): while (have_posts()) : the_post();?>
            <?php $url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>
            <?php 
                if(function_exists('bac_PostViews')) { 
                    bac_PostViews(get_the_ID()); 
                }
                $id_post = get_the_ID();
            ?>
            <article class="oac-article">

                <div class="header">
                    <div class="offset-sm-2 col-sm-8">
                        <?php 
                            $key_legenda = "legenda";
                            $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                            if(isset($cp_legenda) && $cp_legenda >= '') :
                        ?>
                        <h3 class="legenda">
                            <span><?=$cp_legenda?></span>     
                        </h3>
                        <?php endif; ?>
                        <h1><?=the_title()?></h1>
                        <h2><?php if(has_excerpt()): the_excerpt(); endif; ?></h2>

                        <div class="compartilhar">
                            <ul>
                                <li>
                                    <a href="javascript:;" 
                                        title="facebook" 
                                        data-title="<?=the_title()?>"
                                        data-url="<?=$url?>">
                                        <i class="fab fa-facebook-square facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" 
                                        title="Enviar por whatsapp"
                                        data-where="whatsapp"
                                        data-title="<?=the_title()?>"
                                        data-url="<?=$url?>">
                                        <i class="fab fa-whatsapp whats"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" 
                                        title="twitter" 
                                        data-title="<?=the_title()?>"
                                        data-url="<?=$url?>">
                                        <i class="fab fa-twitter twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" 
                                        title="google +"
                                        data-where="google"
                                        data-title="<?=the_title()?>"
                                        data-url="<?=$url?>">
                                        <i class="fab fa-google-plus-g gplus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:?subject=<?=the_title()?>&BODY=Eu achei este artigo interessante e pensei em compartilhá-lo com você. Confira: <?=$url?>">
                                        <i class="fas fa-envelope email"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="creditos">
                            <ul>
                                <li>
                                    <span>
                                        <?php 
                                            $key_autor = "autor"; 
                                            $cp_autor = get_post_meta($post->ID,$key_autor,true); 
                                            if(isset($cp_autor) && $cp_autor >= ''){ 
                                                echo $cp_autor; 
                                            } 
                                        ?>
                                    </span>
                                </li>
                                <li><span>[<?=the_time('d\/m\/Y')?>]</span></li>
                                <li><span>[<?=the_time('g\hi')?>]</span></li>
                            </ul>
                        </div>

                    </div>

                    
                    <div class="imagem">
                        <?php 
                            if(has_post_thumbnail()) { 
                                $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-1080x608');
                            }
                        ?>
                        <?php 
                            $key_video = "video";
                            $cp_video  = get_post_meta($post->ID,$key_video,true);
                            if(isset($cp_video) && $cp_video != '') {
                        ?>
                            <iframe src="https://www.youtube.com/embed/<?=$cp_video?>" 
                                width="100%" height="720"></iframe>
                        <?php }else{ ?>
                            <picture>
                                <img src="<?=$thumbnail[0]?>">
                            </picture>
                        <?php } ?>
                    </div>
                </div>

                <div class="article-text">
                    <div class="row">
                        <div class="offset-sm-2 col-sm-8">
                            <?php the_content();?>
                        </div>
                    </div>
                </div>

                <div class="compartilhar-footer">
                    <ul>
                        <li>
                            <a href="javascript:;" 
                                title="facebook" 
                                data-title="<?=the_title()?>"
                                data-url="<?=$url?>">
                                <i class="fab fa-facebook-square facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" 
                                title="Enviar por whatsapp"
                                data-where="whatsapp"
                                data-title="<?=the_title()?>"
                                data-url="<?=$url?>">
                                <i class="fab fa-whatsapp whats"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" 
                                title="twitter" 
                                data-title="<?=the_title()?>"
                                data-url="<?=$url?>">
                                <i class="fab fa-twitter twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" 
                                title="google +"
                                data-where="google"
                                data-title="<?=the_title()?>"
                                data-url="<?=$url?>">
                                <i class="fab fa-google-plus-g gplus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:?subject=<?=the_title()?>&BODY=Eu achei este artigo interessante e pensei em compartilhá-lo com você. Confira: <?=$url?>">
                                <i class="fas fa-envelope email"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </article>
            <?php 
                if(function_exists('add_meta_tags_facebook')) { 
                    add_meta_tags_facebook();
                    add_meta_tags_twitter(); 
                    add_meta_tags_googleplus(); 
                }
            ?>
            <?php endwhile; else:?>
            <?php endif;?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="oac-publi publi-970x90">
                <span>Publicidade</span>
                <div>
                    <a href="/">
                        <img src="<?=PATH_TEMPLATE?>assets/images/970x90-publi.jpeg">
                    </a>
                </div>  
            </div>
        </div>
    </div>

    <div class="row">
        <section class="oac-article-mais-lidas mt-3">

            <div class="col-sm-12">
                <h2 class="header">
                    <a title="Mais lidas do OAcreano">mais lidas do<span>OAcreano</span></a>
                </h2>
            </div>

            <div class="container">
                <div class="row">
                    <?php
                        $args = array(
                                'post_type'     => 'post',
                                'post_status'   => 'publish',
                                'date_query'    => array(
                                    'column'    => 'post_date',
                                    'after'     => '- 15 days'
                                ),
                                'showposts'     => 6,
                                'meta_key'      => 'post_views_count',
                                'cat'           => '-2,-25,-29',
                                'orderby'       => 'meta_value_num',
                                'post__not_in'  => array($id_post) 
                        );
                        $mostPosts = new wp_query($args);
                        while($mostPosts->have_posts()) : $mostPosts->the_post();
                    ?>
                    <div class="col-sm-4">
                        <div class="bloco-container-6">
                            <article class="chamada">
                                <a href="<?=the_permalink()?>" title="<?=the_title()?>">
                                    <div class="picture">
                                        <?php if(has_post_thumbnail()) : ?>
                                            <?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-480x320'); ?>
                                            <figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
                                        <?php endif; ?>
                                    </div>
                                    <section>
                                        <?php 
                                            $key_legenda = "legenda";
                                            $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                                            if(isset($cp_legenda) && $cp_legenda >= '') :
                                        ?>
                                        <h3><span><?=$cp_legenda?></span></h3>
                                        <?php endif; ?>
                                        <h1><span><?=the_title()?></span></h1>
                                    </section>
                                </a>
                            </article>
                        </div>
                    </div>
                    <?php 
                        endwhile; 
                        wp_reset_query(); 
                    ?>
                </div><!--end .row-->
            </div><!--end .container-->

        </section>
    </div>

    <div class="row">
        <div class="footer-bar">
            <div class="container">
                <div class="col-sm-12">
                    <h1 class="float-left">Acompanhe OACREANO nas redes sociais</h1>
                    <section class="icons float-left">
                        <a href="facebook/">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="facebook/">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="facebook/">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </section>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>
