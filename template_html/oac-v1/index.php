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
					<figure style="background-image: url('<?php the_post_thumbnail('image-thumb-300x100'); ?>');">
					</figure>
					<div class="titulo">
						<h1>Detran-AC abre 20 vagas para contratação temporária de examinador de trânsito</h1>
					</div>
				</a>
			</article>
			<?php endwhile; else:?>
            <?php endif;?>
		</div>
		<div class="col-sm-6">
			<article class="oac-destaque oac-destaque-direito">
				<a href="artigo.html">
					<div class="legenda">
						<span>Aponta Anatel</span>
					</div>
					<div class="sombra"></div>
					<figure style="background-image: url('assets/images/destaque02.jpg');">
					</figure>
					<div class="titulo">
						<h1>Mais de 21 mil linhas telefônicas são canceladas no Acre em um ano, aponta Anatel</h1>
					</div>
				</a>
			</article>

			<article class="oac-destaque oac-destaque-direito">
				<a href="artigo.html">
					<div class="legenda">
						<span>Em Rio Branco</span>
					</div>
					<div class="sombra"></div>
					<figure style="background-image: url('assets/images/destaque04.jpg');">
					</figure>
					<div class="titulo">
						<h1>Prefeitura de Rio Branco sanciona lei que autoriza empréstimo de R$ 14,5 milhões para término de obras do shopping popular</h1>
					</div>
				</a>
			</article>
		</div>
	</div>
        
<?php get_footer(); ?>

