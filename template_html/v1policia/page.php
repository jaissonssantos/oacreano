<?php include (TEMPLATEPATH . '/config.php'); ?>
<?php get_header(); ?>

<section class="conteudo">
    <div class="container">
        <div class="conteudo-principal c1060x1 pull-left">
          <?php if (have_posts()): while (have_posts()) : the_post();?>
            <header>
                <h1><?=the_title()?></h1>
            </header>
            <div class="texto">
              <?php the_content();?>
            </div><!-- TEXTO -->


          <?php endwhile; else:?>
          <?php endif;?>
        </div><!-- CONTEUDO PRINCIPAL -->
    </div>
</section><!-- CONTEUDO -->

<?php get_footer();?>
