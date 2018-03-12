<section class="blc-tvecos">
    <div class="content">
        <div class="video-inner">
            <div class="container position-relative">
                <?php 
                 $idc = get_cat_id('videos');
                 query_posts('showposts=1&offset=0&order=DESC&cat='.$idc);?>
                <?php if (have_posts()): while (have_posts()) : the_post();?>
                <?php 
                    $key_video = "artigo_video";
                    $cp_video  = get_post_meta($post->ID,$key_video,true);
                    if(!isset($cp_video) && $cp_video == ''){
                        $cp_video = '';
                    }
                ?>
                <div class="playerprincipal pointer" onclick="playermovie('<?=$cp_video?>','','<?=the_title()?>');return false;">
                    <div id="pvideo" class="display-n"></div>
                    <div id="psombra" class="shadow"></div>
                    <?php if ( has_post_thumbnail()) : ?>
                       <?php the_post_thumbnail('full'); ?>
                    <?php endif; ?>
                    <span id="pplay" class="ecos_icons play"></span>
                    <div id="ptitulo" class="titulo-video"><?=the_title()?></div>
                </div>
                <?php endwhile; else:?>
                <?php endif;?>
                <ul class="item-publicidade">
                    <li>
                        <div class="c340x1 pull-right">
                            <div class="blc-ads">
                                <div class="legenda-publicidade pull-right font-color3 margin-right-20">publicidade</div>
                                <?php drawAdsPlace(array('id' => 3), false); ?>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="item">
                    <?php 
                     $idc = get_cat_id('videos');
                     query_posts('showposts=1&offset=1&order=DESC&cat='.$idc);?>
                    <?php if (have_posts()): while (have_posts()) : the_post();?>
                    <?php 
                        $key_video = "artigo_video";
                        $cp_video  = get_post_meta($post->ID,$key_video,true);
                        if(!isset($cp_video) && $cp_video == ''){
                            $cp_video = '';
                        }
                    ?>
                    <li>
                        <a href="javascript:;" title="<?=the_title()?>" onclick="playermovie('<?=$cp_video?>','','<?=the_title()?>');return false;">
                            <?php if ( has_post_thumbnail()) : ?>
                               <?php the_post_thumbnail('full'); ?>
                            <?php endif; ?>
                            <div class="titulo-item"><?=the_title()?></div>
                            <?php 
                                $key_video_duracao = "artigo_video_duracao";
                                $cp_video_duracao  = get_post_meta($post->ID,$key_video_duracao,true);
                                if(isset($cp_video_duracao) && $cp_video_duracao >= ''){
                            ?>
                            <div class="tempo-item">Duração: <?=$cp_video_duracao?></div>
                            <?php } ?>
                        </a>
                    </li>
                    <?php endwhile; else:?>
                    <?php endif;?>

                    <?php 
                     $idc = get_cat_id('videos');
                     query_posts('showposts=1&offset=2&order=DESC&cat='.$idc);?>
                    <?php if (have_posts()): while (have_posts()) : the_post();?>
                    <?php 
                        $key_video = "artigo_video";
                        $cp_video  = get_post_meta($post->ID,$key_video,true);
                        if(!isset($cp_video) && $cp_video == ''){
                            $cp_video = '';
                        }
                    ?>
                    <li>
                        <a href="javascript:;" title="<?=the_title()?>" onclick="playermovie('<?=$cp_video?>','','<?=the_title()?>');return false;">
                            <?php if ( has_post_thumbnail()) : ?>
                               <?php the_post_thumbnail('full'); ?>
                            <?php endif; ?>
                            <div class="titulo-item"><?=the_title()?></div>
                            <?php 
                                $key_video_duracao = "artigo_video_duracao";
                                $cp_video_duracao  = get_post_meta($post->ID,$key_video_duracao,true);
                                if(isset($cp_video_duracao) && $cp_video_duracao >= ''){
                            ?>
                            <div class="tempo-item">Duração: <?=$cp_video_duracao?></div>
                            <?php } ?>
                        </a>
                    </li>
                    <?php endwhile; else:?>
                    <?php endif;?>


                    <?php 
                     $idc = get_cat_id('videos');
                     query_posts('showposts=1&offset=3&order=DESC&cat='.$idc);?>
                    <?php if (have_posts()): while (have_posts()) : the_post();?>
                    <?php 
                        $key_video = "artigo_video";
                        $cp_video  = get_post_meta($post->ID,$key_video,true);
                        if(!isset($cp_video) && $cp_video == ''){
                            $cp_video = '';
                        }
                    ?>
                    <li>
                        <a href="javascript:;" title="<?=the_title()?>" onclick="playermovie('<?=$cp_video?>','','<?=the_title()?>');return false;">
                            <?php if ( has_post_thumbnail()) : ?>
                               <?php the_post_thumbnail('full'); ?>
                            <?php endif; ?>
                            <div class="titulo-item"><?=the_title()?></div>
                            <?php 
                                $key_video_duracao = "artigo_video_duracao";
                                $cp_video_duracao  = get_post_meta($post->ID,$key_video_duracao,true);
                                if(isset($cp_video_duracao) && $cp_video_duracao >= ''){
                            ?>
                            <div class="tempo-item">Duração: <?=$cp_video_duracao?></div>
                            <?php } ?>
                        </a>
                    </li>
                    <?php endwhile; else:?>
                    <?php endif;?>

                </ul>
            </div>
        </div>
    </div>
</section><!-- BLOCO TV ECOS -->

<section class="modulo-horizontal mod-publicidade-large">
    <div class="container">
        <div class="banner-area-970x90 tex-center">
            <?php drawAdsPlace(array('id' => 10), false); ?>
        </div>
    </div>
</section>