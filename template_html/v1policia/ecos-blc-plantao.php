<section class="modulo-horizontal mod-publicidade-large">
    <div class="container">
        <div class="banner-area-970x90 tex-center">
            <?php drawAdsPlace(array('id' => 1), false); ?>
        </div>
    </div>
</section>

<?php 
 $idc = get_cat_id('plantao');
 query_posts('showposts=1&offset=0&order=DESC&cat='.$idc);?>
<?php if (have_posts()): while (have_posts()) : the_post();?>
<?php 
  $key_local = "plantao_local";
  $cp_local  = get_post_meta($post->ID,$key_local,true);
  if( $cp_local == 1 ){
?>
<?php 
  $link_plantao = '';
  $key_link = "plantao_link";
  $cp_link  = get_post_meta($post->ID,$key_link,true);
  if(isset($cp_link) && $cp_link >= ''){
    $link_plantao = $cp_link;
  }
?>
<section class="modulo-horizontal mod-chamada-urgente">
    <div class="container">
        <a href="http://www.ecosdanoticia.com.br" target="_blank"><strong>Ecos da notícia</strong></a>
        <a href="<?=$link_plantao?>" title="<?=the_title()?>"><h1><?=the_title()?></h1></a>
    </div>
</section>
<?php }//end IF ?>
<?php endwhile; else:?>
<?php endif;?>