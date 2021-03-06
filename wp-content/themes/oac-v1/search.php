<?php get_header(); ?>

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
        <div class="col-sm-12">
            <article class="oac-cat">

              <div class="page-text">
                    <div class="row">
                        <div class="col-sm-8">
                            
                            <ul class="itens">
                                <?php 
                                    $args_search = array(
                                        's' => $_GET['s']
                                    );
                                    $the_query_post = new wp_query($args_search);
                                ?>
                                <?php 
                                    if ($the_query_post->have_posts()): 
                                        while ($the_query_post->have_posts()) : $the_query_post->the_post();
                                ?>
                                <li>
                                    <article class="chamada">
                                        <a title="<?=the_title()?>" href="<?=the_permalink()?>">
                                            <div class="imagem"> 
                                               <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('thumbnails-480x320'); ?>
                                               <?php endif; ?>
                                            </div>                     
                                            <div class="descricao">
                                                <div class="legenda">
                                                    <?php 
                                                        $key_legenda = "legenda"; 
                                                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                                                        if(isset($cp_legenda) && $cp_legenda >= ''){
                                                            echo $cp_legenda;
                                                        }
                                                    ?> 
                                                </div>
                                                <h1><?=the_title()?></h1>
                                                <div class="resumo"><?php if(has_excerpt()): the_excerpt(); endif; ?></div>
                                                <div class="publicado">
                                                    <i class="far fa-clock"></i>
                                                    <span>[<?=the_time('d\/m\/Y')?>] [<?=the_time('g\hi')?>]</span>
                                                </div>
                                            </div>
                                        </a>
                                    </article>
                                </li>
                                <?php endwhile; else:?>
                                <li>
                                    <h4>Nenhum resultado encontrado.</h4>
                                </li>
                                <?php endif;?>
                            </ul>

                        </div>
                        <div class="col-sm-4">
                            <div class="oac-publi-meia-pagina mt-2">
                                <span>Publicidade</span>
                                <div>
                                    <a href="/">
                                        <img src="<?=PATH_TEMPLATE?>assets/images/300x600-publi.jpg">
                                    </a>
                                </div>  
                            </div>

                            <div class="oac-mais-lidas">
                                <h2 class="titulo-box"><span>mais lidas</span></h2>
                                <ol>
                                    <?php
                                        $args = array(
                                                'post_type'     => 'post',
                                                'post_status'   => 'publish',
                                                'date_query'    => array(
                                                    'column'    => 'post_date',
                                                    'after'     => '- 30 days'
                                                ),
                                                'showposts'     => 5,
                                                'meta_key'      => 'post_views_count',
                                                'cat'           => '-2,-25,-29',
                                                'orderby'       => 'meta_value_num' 
                                        );
                                        $mostPosts = new wp_query($args);
                                        $i = 1;
                                        while($mostPosts->have_posts()) : $mostPosts->the_post();
                                    ?>
                                    <li>
                                        <span><?=$i?></span>
                                        <div class="chamada">
                                            <a href="<?=the_permalink()?>" title="<?=the_title()?>">
                                                <?php 
                                                    $key_legenda = "legenda";
                                                    $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                                                    if(isset($cp_legenda) && $cp_legenda >= '') :
                                                ?>
                                                <span><?=$cp_legenda?></span>
                                                <?php endif; ?>
                                                <h1><?=the_title()?></h1>
                                            </a>
                                        </div>
                                    </li>
                                    <?php 
                                        $i++;
                                        endwhile; 
                                        wp_reset_query(); 
                                    ?>
                                </ol>
                            </div>
                            <div class="oac-publi-retangulo-medio mt-2">
                                <span>Publicidade</span>
                                <div>
                                    <a href="/">
                                        <img src="<?=PATH_TEMPLATE?>assets/images/300x250-publi.jpg">
                                    </a>
                                </div>  
                            </div>

                        </div>
                    </div>
              </div>

            </article>
        </div>
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
