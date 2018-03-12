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
              <div id="cse-search-results"></div>
              <script type="text/javascript">
                var googleSearchIframeName = "cse-search-results";
                var googleSearchFormName = "cse-search-box";
                var googleSearchFrameWidth = 1060;
                var googleSearchDomain = "www.google.com.br";
                var googleSearchPath = "/cse";
              </script>
              <script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>

              <script type="text/javascript" src="http://www.google.com/cse/query_renderer.js"></script>
              <div id="queries"></div>
              <script src="http://www.google.com/cse/api/partner-pub-9210129523880937/cse/9289575440/queries/js?oe=UTF-8&amp;callback=(new+PopularQueryRenderer(document.getElementById(%22queries%22))).render"></script>

            </div><!-- TEXTO -->


          <?php endwhile; else:?>
          <?php endif;?>
        </div><!-- CONTEUDO PRINCIPAL -->
    </div>
</section><!-- CONTEUDO -->

<?php get_footer();?>


