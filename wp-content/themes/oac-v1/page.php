<?php get_header(); ?>

  <div class="row">
    <div class="col-sm-12">
      <?php if (have_posts()): while (have_posts()) : the_post();?>
        <article class="oac-page">
          <div class="header">
            <h1><?=the_title()?></h1>
            <?php 
                $key_subtitulo = "pagina_subtitulo";
                $cp_subtitulo  = get_post_meta($post->ID,$key_subtitulo,true);
                if(isset($cp_subtitulo) && $cp_subtitulo >= '') :
            ?>
            <h2><?=$cp_subtitulo?></h2>
            <?php endif; ?>
          </div>
  
          <div class="page-text">
            <div class="row">
                <div class="col-sm-12">
                    <?php the_content();?>
                </div>
            </div>
          </div>

        </article>
      <?php endwhile; else:?>
      <?php endif;?>
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
