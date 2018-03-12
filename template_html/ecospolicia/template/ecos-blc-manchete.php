<section class="blc-manchete">
    <div class="container">
        <ul>
            <?php 
             $idc = get_cat_id('policia');
             query_posts('showposts=1&offset=0&order=DESC&cat='.$idc);?>
            <?php if (have_posts()): while (have_posts()) : the_post();?>
            <li class="destaque c340x200">
                <a href="<?=the_permalink()?>" title="<?=the_title()?>">
                    <?php if ( has_post_thumbnail()) : ?>
                       <?php the_post_thumbnail('image-thumb-300x200'); ?>
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
             query_posts('showposts=1&offset=1&order=DESC&cat='.$idc);?>
            <?php if (have_posts()): while (have_posts()) : the_post();?>
            <li class="destaque c340x200">
                <a href="<?=the_permalink()?>" title="<?=the_title()?>">
                    <?php if ( has_post_thumbnail()) : ?>
                       <?php the_post_thumbnail('image-thumb-300x200'); ?>
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
            <li class="destaque c340x200">
                <a href="<?=the_permalink()?>" title="<?=the_title()?>">
                    <?php if ( has_post_thumbnail()) : ?>
                       <?php the_post_thumbnail('image-thumb-300x200'); ?>
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
            
        </ul>
        <ul>
            <li class="destaque c700x1">
                <ul>
                    <?php 
                     $idc = get_cat_id('cotidiano');
                     query_posts('showposts=1&offset=0&order=DESC&cat='.$idc);?>
                    <?php if (have_posts()): while (have_posts()) : the_post();?>
                    <li class="destaque margin-0 border-0 padding-top">
                        <a href="<?=the_permalink()?>" title="<?=the_title()?>">
                            <?php 
                                $key_legenda = "artigo_legenda";
                                $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                                if(isset($cp_legenda) && $cp_legenda >= ''){
                            ?>  
                            <div class="legenda"><?=$cp_legenda?></div>
                            <?php } ?>
                            <div class="titulo"><?=the_title()?></div>
                            <?php 
                                $key_subtitulo = "artigo_subtitulo";
                                $cp_subtitulo  = get_post_meta($post->ID,$key_subtitulo,true);
                                if(isset($cp_subtitulo) && $cp_subtitulo >= ''){
                            ?>
                            <div class="subtitulo"><?=$cp_subtitulo?></div>
                            <?php } ?>
                        </a>
                        <?php 
                            $idpost = get_the_ID();
                            $tags_relacionadas = wp_get_post_tags( $idpost );
                            if ($tags) {
                                $primeira_tag = $tags_relacionadas[0]->term_id;
                                $args = array('tag__in' => array($primeira_tag), 'post__not_in' => array($idpost),'showposts'=>3,'caller_get_posts'=>1);
                                $pquery = new WP_Query($args);
                        ?>
                        <?php if( $pquery->have_posts() ) { ?>
                            <ul class="relacionados">
                                <?php while ($pquery->have_posts()){  ?>
                                <li class="relacionada">
                                    <span class="sprites1 bullet-relacionada"></span>
                                    <a title="<?=the_title()?>" class="" href="<?=the_permalink()?>"><?=the_title()?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                        <?php } ?>
                    </li>
                    <?php endwhile; else:?>
                    <?php endif;?>
                </ul>
                <ul>
                    <li class="destaque c340x100">
                        <a href="#" title="">
                            <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/22/frases-da-semana-papa-1421943962914_300x100.png">
                            <div class="legenda">Latrocínio a Funcionário</div>
                            <div class="titulo">Carro roubado é incendiado na estrada Joares Tavara</div>
                        </a>
                    </li>
                    <li class="destaque c340x100">
                        <a href="#" title="">
                            <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/22/frases-da-semana-papa-1421943962914_300x100.png">
                            <div class="legenda">Latrocínio a Funcionário</div>
                            <div class="titulo">Carro roubado é incendiado na estrada Joares Tavara</div>
                        </a>
                        <ul class="relacionados">
                            <li class="relacionada">
                                <span class="sprites1 bullet-relacionada"></span>
                                <a title="Menina é atingida por bala perdida" class="" href="#">Menina é atingida por bala perdida</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="destaque c360x1 margin-0 border-0">
                <div class="c340x1 pull-right">
                    <div class="blc-ads">
                        <div class="legenda-publicidade pull-right">Publicidade</div>
                        <img src="ads-336x280.png" width="336" height="280">
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section><!-- BLOCO MANCHETE -->