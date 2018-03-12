<section class="modulo-horizontal mod-publicidade-large">
    <div class="container">
       <div class="banner-area-970x90 tex-center">
        	<?php drawAdsPlace(array('id' => 9), false); ?>
    	</div>
    </div>
</section>


<section class="blc-manchete">
    <div class="container">
        <div class="topo-modulo"><h1>Boletim de Ocorrência</h1></div>
        <ul>
        	<?php 
             $idc = get_cat_id('b.o');
             query_posts('showposts=3&order=DESC&cat='.$idc);?>
            <?php if (have_posts()): while (have_posts()) : the_post();?>
            <li class="destaque c340x200">
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
</section><!-- BLOCO B.O -->