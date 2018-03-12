<section class="modulo-horizontal mod-destaque">
    <div class="container">
        <div class="clearfix display-inline-flex">
            

            <div class="destaque-rotativo c355x1 pull-left margin-right-25">
                <div id="carousel-rotativo" class="position-relative">
                    <ul class="mod-rotativo">
                        <?php 
                         $idc = get_cat_id('destaque');
                         query_posts('showposts=3&order=DESC&cat='.$idc);?>
                        <?php if (have_posts()): while (have_posts()) : the_post();?>
                        <li>
                            <a href="<?=the_permalink()?>" title="<?=the_title()?>">
                                <?php if ( has_post_thumbnail()) : ?>
                                   <?php the_post_thumbnail('image-thumb-300x250'); ?>
                                <?php endif; ?>
                                <?php 
                                    $key_titulo = "artigo_titulo";
                                    $cp_titulo  = get_post_meta($post->ID,$key_titulo,true);
                                    if(isset($cp_titulo) && $cp_titulo != ''){
                                ?>
                                <div class="titulo"><?=$cp_titulo?></div>
                                <?php }else{ ?>
                                <div class="titulo"><?=the_title()?></div>
                                <?php } ?>
                                <?php 
                                    $key_subtitulo = "artigo_subtitulo";
                                    $cp_subtitulo  = get_post_meta($post->ID,$key_subtitulo,true);
                                    if(isset($cp_subtitulo) && $cp_subtitulo != ''){
                                ?>
                                <div class="subtitulo"><?=$cp_subtitulo?></div>
                                <?php } ?>
                            </a>
                        </li>
                        <?php endwhile; else:?>
                        <?php endif;?>
                    </ul>
                    <a id="prev-carousel" href="#destaque" data-slide="prev" class="control left"><span class="ecos_icons arrow_left_thin"></span></a>
                    <a id="next-carousel" href="#destaque" data-slide="next" class="control right"><span class="ecos_icons arrow_right_thin"></span></a>
                </div>
                <ul>
                    <?php 
                     $idc = get_cat_id('destaque');
                     query_posts('showposts=1&offset=3&order=DESC&cat='.$idc);?>
                    <?php if (have_posts()): while (have_posts()) : the_post();?>
                    <li class="destaque c355x1">
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
                        <?php 
                            $idpost = get_the_ID();
                            $tags_relacionadas = wp_get_post_tags( $idpost );
                            if ($tags_relacionadas) {
                                $primeira_tag = $tags_relacionadas[0]->term_id;
                                $args = array(
                                    'tag__in'       => array($primeira_tag),
                                    'category__in'  => $idc,
                                    'post__not_in'  => array($idpost),
                                    'showposts'     => 3,
                                    'caller_get_posts' => 1 );
                                $pquery = new wp_query($args);
                        ?>
                        <?php while ($pquery->have_posts()) : $pquery->the_post(); ?>
                        <ul class="relacionados">
                            <li class="relacionada">
                                <span class="sprites1 bullet-relacionada"></span>
                                <a title="<?=the_title()?>" class="" href="<?=the_permalink()?>"><?=the_title()?></a>
                            </li>
                        </ul>
                        <?php endwhile; ?>
                        <?php } ?>
                    </li>
                    <?php endwhile; else:?>
                    <?php endif;?>
                </ul>
            </div>

            <div class="c355x1 margin-right-25 pull-left">
                <ul class="manchete-modulo">
                    <?php 
                     $idc = get_cat_id('policia');
                     query_posts('showposts=1&offset=0&order=DESC&cat='.$idc);?>
                    <?php if (have_posts()): while (have_posts()) : the_post();?>
                    <li class="destaque c355x1">
                        <a href="<?=the_permalink()?>" title="<?=the_title()?>">
                            <?php 
                                $key_legenda = "artigo_legenda";
                                $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                                if(isset($cp_legenda) && $cp_legenda >= ''){
                            ?>
                            <div class="legenda"><?=$cp_legenda?></div>
                            <?php } ?>
                            <div class="titulo"><?=the_title()?></div>
                            <div class="subtitulo"><?php  if ( has_excerpt() ) { the_excerpt(); } ?></div>
                        </a>
                    </li>
                    <?php endwhile; else:?>
                    <?php endif;?>

                    <?php 
                     $idc = get_cat_id('policia');
                     query_posts('showposts=1&offset=1&order=DESC&cat='.$idc);?>
                    <?php if (have_posts()): while (have_posts()) : the_post();?>
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
                    <?php endwhile; else:?>
                    <?php endif;?>

                    <?php 
                     $idc = get_cat_id('policia');
                     query_posts('showposts=1&offset=2&order=DESC&cat='.$idc);?>
                    <?php if (have_posts()): while (have_posts()) : the_post();?>
                    <li class="destaque c355x1">
                        <a href="<?=the_permalink()?>" title="<?=the_title()?>">
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
                    <?php endwhile; else:?>
                    <?php endif;?>

                    <?php 
                     $idc = get_cat_id('policia');
                     query_posts('showposts=1&offset=3&order=DESC&cat='.$idc);?>
                    <?php if (have_posts()): while (have_posts()) : the_post();?>
                    <li class="destaque c355x1">
                        <a href="<?=the_permalink()?>" title="<?=the_title()?>">
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
                    <?php endwhile; else:?>
                    <?php endif;?>

                </ul>
            </div>

            
            <div class="c300x1 pull-left">
                <div class="blc-ads">
                    <?php drawAdsPlace(array('id' => 2), false); ?>
                </div>
            </div>


        </div>
    </div>
</section><!-- BLOCO MANCHETE -->