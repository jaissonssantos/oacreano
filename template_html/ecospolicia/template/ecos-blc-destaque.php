<div class="destaque carousel">
    <div class="content">
        <div class="carousel-inner">
            <?php 
             $idc = get_cat_id('destaque');
             query_posts('showposts=4&order=DESC&cat='.$idc);?>
            <?php if (have_posts()): while (have_posts()) : the_post();?>
            <div class="item">
                <a href="<?=the_Permalink()?>" title="<?=the_title()?>">
                    <span class="gradient"></span>
                    <div class="image-container">
                      <?php if ( has_post_thumbnail()) : ?>
                       <?php the_post_thumbnail('full'); ?>
                      <?php endif; ?>
                    </div>
                    <div class="grid container">
                        <div class="row">
                          <div class="span6">
                            <div class="caption">
                              <?php 
                                $key_titulo = "artigo_titulo";
                                $cp_titulo  = get_post_meta($post->ID,$key_titulo,true);
                                if(isset($cp_titulo) && $cp_titulo >= ''){
                              ?>
                              <h2 class="fade-step step-0"><?=$cp_titulo?></h2>
                              <?php } ?>
                              <?php 
                                $key_subtitulo = "artigo_subtitulo";
                                $cp_subtitulo  = get_post_meta($post->ID,$key_titulo,true);
                                if(isset($cp_subtitulo) && $cp_subtitulo >= ''){
                              ?>
                              <p class="fade-step step-1"><?=$cp_subtitulo?></p>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; else:?>
            <?php endif;?>
        </div><!-- CAROUSEL -->
        <a id="prev-carousel" href="#destaque" data-slide="prev" class="control left"><span class="ecos_icons arrow_left_thin"></span></a>
        <a id="next-carousel" href="#destaque" data-slide="next" class="control right"><span class="ecos_icons arrow_right_thin"></span></a>
    </div>
</div><!-- DESTAQUE -->