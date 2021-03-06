<?php include (TEMPLATEPATH . '/utils.php'); ?>
<?php get_header(); ?>
   
	<div class="row">
		<div class="col-sm-12">
			<div class="oac-publi">
				<span>Publicidade</span>
				<div>
					<a href="/">
						<img src="assets/images/970x90-publi.jpeg">
					</a>
				</div>	
			</div>
		</div>
	</div>

	<div class="row"><!-- categoria(manchete) -->
		<div class="col-sm-6">
			<?php 
             $categoria = get_cat_id('manchete');
             query_posts('showposts=1&offset=0&order=DESC&cat='.$categoria);?>
            <?php if (have_posts()): while (have_posts()) : the_post();?>
			<article class="oac-destaque oac-destaque-esquerdo">
				<a href="<?=the_permalink()?>" title="<?=the_title()?>">
					<?php 
                        $key_legenda = "artigo_legenda";
                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                        if(isset($cp_legenda) && $cp_legenda >= '') :
                    ?>
					<div class="legenda">
						<span><?=$cp_legenda?></span>
					</div>
					<?php endif; ?>
					<div class="sombra"></div>
					<figure style="background-image: url('<?php the_post_thumbnail('thumbnails-1080x608'); ?>');">
					</figure>
					<div class="titulo">
						<h1><?=the_title()?></h1>
					</div>
				</a>
			</article>
			<?php endwhile; else:?>
            <?php endif;?>
		</div>
		<div class="col-sm-6">
			<?php 
             $categoria = get_cat_id('manchete');
             query_posts('showposts=1&offset=1&order=DESC&cat='.$categoria);?>
            <?php if (have_posts()): while (have_posts()) : the_post();?>
			<article class="oac-destaque oac-destaque-direito">
				<a href="<?=the_permalink()?>" title="<?=the_title()?>">
					<?php 
                        $key_legenda = "artigo_legenda";
                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                        if(isset($cp_legenda) && $cp_legenda >= '') :
                    ?>
					<div class="legenda">
						<span><?=$cp_legenda?></span>
					</div>
					<?php endif; ?>
					<div class="sombra"></div>
					<figure style="background-image: url('<?php the_post_thumbnail('thumbnails-660x440'); ?>');">
					</figure>
					</figure>
					<div class="titulo">
						<h1><?=the_title()?></h1>
					</div>
				</a>
			</article>
			<?php endwhile; else:?>
            <?php endif;?>
	
			<?php 
             $categoria = get_cat_id('manchete');
             query_posts('showposts=1&offset=1&order=DESC&cat='.$categoria);?>
            <?php if (have_posts()): while (have_posts()) : the_post();?>
			<article class="oac-destaque oac-destaque-direito">
				<a href="<?=the_permalink()?>" title="<?=the_title()?>">
					<?php 
                        $key_legenda = "artigo_legenda";
                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                        if(isset($cp_legenda) && $cp_legenda >= '') :
                    ?>
					<div class="legenda">
						<span><?=$cp_legenda?></span>
					</div>
					<?php endif; ?>
					<div class="sombra"></div>
					<figure style="background-image: url('<?php the_post_thumbnail('thumbnails-660x440'); ?>');">
					</figure>
					<div class="titulo">
						<h1><?=the_title()?></h1>
					</div>
				</a>
			</article>
			<?php endwhile; else:?>
            <?php endif;?>

		</div>
	</div>
        
<?php get_footer(); ?>

