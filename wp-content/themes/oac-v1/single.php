<?php get_header(); ?> 

    <div class="row">
        <div class="col-sm-12">
            <div class="oac-publi">
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
        <div class="col-sm-12">
            <?php if (have_posts()): while (have_posts()) : the_post();?>
            <?php $url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>
            <?php 
                if(function_exists('bac_PostViews')) { 
                    bac_PostViews(get_the_ID()); 
                }
            ?>
            <article class="oac-article">

                <div class="header">
                    <div class="offset-2 col-sm-8">
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

                    <?php if(has_post_thumbnail()) : ?>
                    <div class="imagem">
                        <picture>
                            <?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-1080x608'); ?>
                            <img src="<?=$thumbnail[0]?>">
                        </picture>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="article-text">
                    <div class="row">
                        <div class="offset-2 col-sm-8">
                            <?php the_content();?>
                        </div>
                    </div>
                </div>

                <div class="compartilhar-footer">
                    <ul>
                        <li>
                            <a href="#" title="Facebook">
                                <i class="fab fa-facebook-square facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Enviar por whatsapp">
                                <i class="fab fa-whatsapp whats"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Twitter">
                                <i class="fab fa-twitter twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Google + ">
                                <i class="fab fa-google-plus-g gplus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Enviar por e-mail">
                                <i class="fas fa-envelope email"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </article>
            <?php endwhile; else:?>
            <?php endif;?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="oac-publi">
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
                    <div class="col-sm-4">
                        <div class="bloco-container-6">
                            <article class="chamada">
                                <a href="artigo/">
                                    <div class="picture">
                                        <figure style="background-image: url('assets/images/destaque06.jpg');"></figure>
                                    </div>
                                    <section>
                                        <h3><span>Apreensão</span></h3>
                                        <h1><span>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</span></h1>
                                    </section>
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bloco-container-6">
                            <article class="chamada">
                                <a href="artigo/">
                                    <div class="picture">
                                        <figure style="background-image: url('assets/images/destaque06.jpg');"></figure>
                                    </div>
                                    <section>
                                        <h3><span>Apreensão</span></h3>
                                        <h1><span>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</span></h1>
                                    </section>
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bloco-container-6">
                            <article class="chamada">
                                <a href="artigo/">
                                    <div class="picture">
                                        <figure style="background-image: url('assets/images/destaque06.jpg');"></figure>
                                    </div>
                                    <section>
                                        <h3><span>Apreensão</span></h3>
                                        <h1><span>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</span></h1>
                                    </section>
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bloco-container-6">
                            <article class="chamada">
                                <a href="artigo/">
                                    <div class="picture">
                                        <figure style="background-image: url('assets/images/destaque06.jpg');"></figure>
                                    </div>
                                    <section>
                                        <h3><span>Apreensão</span></h3>
                                        <h1><span>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</span></h1>
                                    </section>
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bloco-container-6">
                            <article class="chamada">
                                <a href="artigo/">
                                    <div class="picture">
                                        <figure style="background-image: url('assets/images/destaque06.jpg');"></figure>
                                    </div>
                                    <section>
                                        <h3><span>Apreensão</span></h3>
                                        <h1><span>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</span></h1>
                                    </section>
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bloco-container-6">
                            <article class="chamada">
                                <a href="artigo/">
                                    <div class="picture">
                                        <figure style="background-image: url('assets/images/destaque06.jpg');"></figure>
                                    </div>
                                    <section>
                                        <h3><span>Apreensão</span></h3>
                                        <h1><span>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</span></h1>
                                    </section>
                                </a>
                            </article>
                        </div>
                    </div>
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
