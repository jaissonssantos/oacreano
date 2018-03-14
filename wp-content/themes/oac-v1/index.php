<?php get_header(); ?>
   
	<div class="row">
		<div class="col-sm-12">
			<div class="oac-publi">
				<span>Publicidade</span>
				<div>
					<a href="/">
						<img src="<?=PATH_TEMPLATE?>assets/images/970x90-publi.jpeg">
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
            <?php if(have_posts()): while (have_posts()) : the_post();?>
			<article class="oac-destaque oac-destaque-esquerdo">
				<a href="<?=the_permalink()?>" title="<?=the_title()?>">
					<?php 
                        $key_legenda = "legenda";
                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                        if(isset($cp_legenda) && $cp_legenda >= '') :
                    ?>
					<div class="legenda">
						<span><?=$cp_legenda?></span>
					</div>
					<?php endif; ?>
					<div class="sombra"></div>
					<?php if(has_post_thumbnail()) : ?>
						<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-1080x608'); ?>
						<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
					<?php endif; ?>
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
            <?php if(have_posts()): while (have_posts()) : the_post();?>
			<article class="oac-destaque oac-destaque-direito">
				<a href="<?=the_permalink()?>" title="<?=the_title()?>">
					<?php 
                        $key_legenda = "legenda";
                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                        if(isset($cp_legenda) && $cp_legenda >= '') :
                    ?>
					<div class="legenda">
						<span><?=$cp_legenda?></span>
					</div>
					<?php endif; ?>
					<div class="sombra"></div>
					<?php if(has_post_thumbnail()) : ?>
						<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
						<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
					<?php endif; ?>
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
	            query_posts('showposts=1&offset=2&order=DESC&cat='.$categoria);?>
            <?php if(have_posts()): while (have_posts()) : the_post();?>
			<article class="oac-destaque oac-destaque-direito">
				<a href="<?=the_permalink()?>" title="<?=the_title()?>">
					<?php 
                        $key_legenda = "legenda";
                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                        if(isset($cp_legenda) && $cp_legenda >= '') :
                    ?>
					<div class="legenda">
						<span><?=$cp_legenda?></span>
					</div>
					<?php endif; ?>
					<div class="sombra"></div>
					<?php if(has_post_thumbnail()) : ?>
						<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
						<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
					<?php endif; ?>
					<div class="titulo">
						<h1><?=the_title()?></h1>
					</div>
				</a>
			</article>
			<?php endwhile; else:?>
            <?php endif;?>

		</div>
	</div>

	<div class="row"><!-- categoria(política) -->
		<div class="col-sm-12">
			<div class="bloco-container-1">
				<?php 
		            $categoria = get_cat_id('política');
		            query_posts('showposts=1&offset=0&order=DESC&cat='.$categoria);?>
	            <?php if(have_posts()): while (have_posts()) : the_post();?>
				<article class="chamada">
					<a href="<?=the_permalink()?>" title="<?=the_title()?>">
						<div class="picture">
							<?php if(has_post_thumbnail()) : ?>
								<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
								<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
							<?php endif; ?>
						</div>
						<section>
							<?php 
		                        $key_legenda = "legenda";
		                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
		                        if(isset($cp_legenda) && $cp_legenda >= '') :
		                    ?>
							<h3><span><?=$cp_legenda?></span></h3>
							<?php endif; ?>
							<h1><span><?=the_title()?></span></h1>
							<?php  if(has_excerpt()) : ?>
							<h4><span><?=the_excerpt()?></span></h4>
							<?php endif; ?>
						</section>
					</a>
				</article>
				<?php endwhile; else:?>
        		<?php endif;?>
			</div>
		</div>
	</div>

	<div class="row container-video">
		<div class="header-video">
			<img src="<?=PATH_TEMPLATE?>assets/images/ic_oacreano_play.svg">
		</div>
		<div class="body-video">
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<?php 
				            $categoria = get_cat_id('vídeos');
				            query_posts('showposts=1&offset=0&order=DESC&cat='.$categoria);?>
			            <?php if(have_posts()): while (have_posts()) : the_post();?>
						<article class="oac-video oac-video-esquerdo">
							<a href="<?=the_permalink()?>" title="<?=the_title()?>">
								<div class="play"></div>
								<div class="sombra"></div>
								<?php if(has_post_thumbnail()) : ?>
									<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
									<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
								<?php endif; ?>
								<div class="titulo">
									<h1><?=the_title()?></h1>
								</div>
							</a>
						</article>
						<?php endwhile; else:?>
        				<?php endif;?>
					</div>	
					<div class="col-sm-5">

						<?php 
				            $categoria = get_cat_id('vídeos');
				            query_posts('showposts=1&offset=1&order=DESC&cat='.$categoria);?>
			            <?php if(have_posts()): while (have_posts()) : the_post();?>
						<article class="oac-video-direito">
							<a href="<?=the_permalink()?>" title="<?=the_title()?>">
								<div class="picture">
									<div class="play"></div>
									<?php if(has_post_thumbnail()) : ?>
										<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
										<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
									<?php endif; ?>
								</div>
								<section>
									<?php 
				                        $key_legenda = "legenda";
				                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
				                        if(isset($cp_legenda) && $cp_legenda >= '') :
				                    ?>
									<h3><span><?=$cp_legenda?></span></h3>
									<?php endif; ?>
									<h1><span><?=the_title()?></span></h1>
								</section>
							</a>
						</article>
						<?php endwhile; else:?>
        				<?php endif;?>

						<?php 
				            $categoria = get_cat_id('vídeos');
				            query_posts('showposts=1&offset=2&order=DESC&cat='.$categoria);?>
			            <?php if(have_posts()): while (have_posts()) : the_post();?>
						<article class="oac-video-direito">
							<a href="<?=the_permalink()?>" title="<?=the_title()?>">
								<div class="picture">
									<div class="play"></div>
									<?php if(has_post_thumbnail()) : ?>
										<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
										<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
									<?php endif; ?>
								</div>
								<section>
									<?php 
				                        $key_legenda = "legenda";
				                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
				                        if(isset($cp_legenda) && $cp_legenda >= '') :
				                    ?>
									<h3><span><?=$cp_legenda?></span></h3>
									<?php endif; ?>
									<h1><span><?=the_title()?></span></h1>
								</section>
							</a>
						</article>
						<?php endwhile; else:?>
        				<?php endif;?>

						<?php 
				            $categoria = get_cat_id('vídeos');
				            query_posts('showposts=1&offset=3&order=DESC&cat='.$categoria);?>
			            <?php if(have_posts()): while (have_posts()) : the_post();?>
						<article class="oac-video-direito">
							<a href="<?=the_permalink()?>" title="<?=the_title()?>">
								<div class="picture">
									<div class="play"></div>
									<?php if(has_post_thumbnail()) : ?>
										<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
										<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
									<?php endif; ?>
								</div>
								<section>
									<?php 
				                        $key_legenda = "legenda";
				                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
				                        if(isset($cp_legenda) && $cp_legenda >= '') :
				                    ?>
									<h3><span><?=$cp_legenda?></span></h3>
									<?php endif; ?>
									<h1><span><?=the_title()?></span></h1>
								</section>
							</a>
						</article>
						<?php endwhile; else:?>
        				<?php endif;?>

						<?php 
				            $categoria = get_cat_id('vídeos');
				            query_posts('showposts=1&offset=4&order=DESC&cat='.$categoria);?>
			            <?php if(have_posts()): while (have_posts()) : the_post();?>
						<article class="oac-video-direito">
							<a href="<?=the_permalink()?>" title="<?=the_title()?>">
								<div class="picture">
									<div class="play"></div>
									<?php if(has_post_thumbnail()) : ?>
										<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
										<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
									<?php endif; ?>
								</div>
								<section>
									<?php 
				                        $key_legenda = "legenda";
				                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
				                        if(isset($cp_legenda) && $cp_legenda >= '') :
				                    ?>
									<h3><span><?=$cp_legenda?></span></h3>
									<?php endif; ?>
									<h1><span><?=the_title()?></span></h1>
								</section>
							</a>
						</article>
						<?php endwhile; else:?>
        				<?php endif;?>
					</div>
				</div><!--end .row -->
			</div><!--end .container -->
		</div><!--end .body-video -->
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="oac-publi">
				<span>Publicidade</span>
				<div>
					<a href="/">
						<img src="<?=PATH_TEMPLATE?>assets/images/970x90-publi.jpeg">
					</a>
				</div>	
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-8">
			<div class="row">
				<div class="col-sm-12">
					<div class="bloco-container-2 mt-2">
						<?php 
				            $categoria = get_cat_id('cotidiano');
				            query_posts('showposts=1&offset=0&order=DESC&cat='.$categoria);?>
			            <?php if(have_posts()): while (have_posts()) : the_post();?>
						<article class="chamada">
							<a href="<?=the_permalink()?>" title="<?=the_title()?>">
								<div class="picture">
									<?php if(has_post_thumbnail()) : ?>
										<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
										<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
									<?php endif; ?>
								</div>
								<section>
									<?php 
				                        $key_legenda = "legenda";
				                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
				                        if(isset($cp_legenda) && $cp_legenda >= '') :
				                    ?>
									<h3><span><?=$cp_legenda?></span></h3>
									<?php endif; ?>
									<h1><span><?=the_title()?></span></h1>
									<?php  if(has_excerpt()) : ?>
									<h4><span><?=the_excerpt()?></span></h4>
									<?php endif; ?>
								</section>
							</a>
						</article>
						<?php endwhile; else:?>
        				<?php endif;?>
					</div>
				</div><!--end .col-sm-12-->
				<div class="col-sm-6">
					<div class="bloco-container-3">
						<?php 
				            $categoria = get_cat_id('cotidiano');
				            query_posts('showposts=1&offset=1&order=DESC&cat='.$categoria);?>
			            <?php if(have_posts()): while (have_posts()) : the_post();?>
						<article class="chamada">
							<a href="<?=the_permalink()?>" title="<?=the_title()?>">
								<div class="picture">
									<?php if(has_post_thumbnail()) : ?>
										<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-480x320'); ?>
										<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
									<?php endif; ?>
								</div>
								<section>
									<?php 
				                        $key_legenda = "legenda";
				                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
				                        if(isset($cp_legenda) && $cp_legenda >= '') :
				                    ?>
									<h3><span><?=$cp_legenda?></span></h3>
									<?php endif; ?>
									<h1><span><?=the_title()?></span></h1>
								</section>
							</a>
						</article>
						<?php endwhile; else:?>
        				<?php endif;?>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="bloco-container-3">
						<?php 
				            $categoria = get_cat_id('cotidiano');
				            query_posts('showposts=1&offset=2&order=DESC&cat='.$categoria);?>
			            <?php if(have_posts()): while (have_posts()) : the_post();?>
						<article class="chamada">
							<a href="<?=the_permalink()?>" title="<?=the_title()?>">
								<div class="picture">
									<?php if(has_post_thumbnail()) : ?>
										<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-480x320'); ?>
										<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
									<?php endif; ?>
								</div>
								<section>
									<?php 
				                        $key_legenda = "legenda";
				                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
				                        if(isset($cp_legenda) && $cp_legenda >= '') :
				                    ?>
									<h3><span><?=$cp_legenda?></span></h3>
									<?php endif; ?>
									<h1><span><?=the_title()?></span></h1>
								</section>
							</a>
						</article>
						<?php endwhile; else:?>
        				<?php endif;?>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="bloco-container-3">
						<?php 
				            $categoria = get_cat_id('cotidiano');
				            query_posts('showposts=1&offset=3&order=DESC&cat='.$categoria);?>
			            <?php if(have_posts()): while (have_posts()) : the_post();?>
						<article class="chamada">
							<a href="<?=the_permalink()?>" title="<?=the_title()?>">
								<div class="picture">
									<?php if(has_post_thumbnail()) : ?>
										<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-480x320'); ?>
										<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
									<?php endif; ?>
								</div>
								<section>
									<?php 
				                        $key_legenda = "legenda";
				                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
				                        if(isset($cp_legenda) && $cp_legenda >= '') :
				                    ?>
									<h3><span><?=$cp_legenda?></span></h3>
									<?php endif; ?>
									<h1><span><?=the_title()?></span></h1>
								</section>
							</a>
						</article>
						<?php endwhile; else:?>
        				<?php endif;?>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="bloco-container-3">
						<?php 
				            $categoria = get_cat_id('cotidiano');
				            query_posts('showposts=1&offset=4&order=DESC&cat='.$categoria);?>
			            <?php if(have_posts()): while (have_posts()) : the_post();?>
						<article class="chamada">
							<a href="<?=the_permalink()?>" title="<?=the_title()?>">
								<div class="picture">
									<?php if(has_post_thumbnail()) : ?>
										<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-480x320'); ?>
										<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
									<?php endif; ?>
								</div>
								<section>
									<?php 
				                        $key_legenda = "legenda";
				                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
				                        if(isset($cp_legenda) && $cp_legenda >= '') :
				                    ?>
									<h3><span><?=$cp_legenda?></span></h3>
									<?php endif; ?>
									<h1><span><?=the_title()?></span></h1>
								</section>
							</a>
						</article>
						<?php endwhile; else:?>
        				<?php endif;?>
					</div>
				</div>
			</div><!--end .row-->
		</div><!--end .col-sm-8-->
		<div class="col-sm-4">
			<div class="oac-publi-meia-pagina mt-2">
				<span>Publicidade</span>
				<div>
					<a href="/">
						<img src="<?=PATH_TEMPLATE?>assets/images/300x600-publi.jpg">
					</a>
				</div>	
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-sm-4">
			<div class="oac-publi-retangulo-medio mt-2">
				<span>Publicidade</span>
				<div>
					<a href="/">
						<img src="<?=PATH_TEMPLATE?>assets/images/300x250-publi.jpg">
					</a>
				</div>	
			</div>
		</div>
		<div class="col-sm-8">
			<div class="bloco-container-2 mt-2">
				<?php 
		            $categoria = get_cat_id('evangélicas');
		            query_posts('showposts=1&offset=0&order=DESC&cat='.$categoria);?>
	            <?php if(have_posts()): while (have_posts()) : the_post();?>
				<article class="chamada">
					<a href="<?=the_permalink()?>" title="<?=the_title()?>">
						<div class="picture">
							<?php if(has_post_thumbnail()) : ?>
								<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
								<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
							<?php endif; ?>
						</div>
						<section>
							<?php 
		                        $key_legenda = "legenda";
		                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
		                        if(isset($cp_legenda) && $cp_legenda >= '') :
		                    ?>
							<h3><span><?=$cp_legenda?></span></h3>
							<?php endif; ?>
							<h1><span><?=the_title()?></span></h1>
							<?php  if(has_excerpt()) : ?>
							<h4><span><?=the_excerpt()?></span></h4>
							<?php endif; ?>
						</section>
					</a>
				</article>
				<?php endwhile; else:?>
        		<?php endif;?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="oac-publi mt-2">
				<span>Publicidade</span>
				<div>
					<a href="/">
						<img src="<?=PATH_TEMPLATE?>assets/images/970x90-publi.jpeg">
					</a>
				</div>	
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="bloco-container-4">
				<?php 
		            $categoria = get_cat_id('cidades');
		            query_posts('showposts=1&offset=0&order=DESC&cat='.$categoria);?>
	            <?php if(have_posts()): while (have_posts()) : the_post();?>
				<article class="chamada">
					<a href="<?=the_permalink()?>" title="<?=the_title()?>">
						<div class="picture">
							<?php if(has_post_thumbnail()) : ?>
								<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
								<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
							<?php endif; ?>
						</div>
						<section>
							<?php 
		                        $key_legenda = "legenda";
		                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
		                        if(isset($cp_legenda) && $cp_legenda >= '') :
		                    ?>
							<h3><span><?=$cp_legenda?></span></h3>
							<?php endif; ?>
							<h1><span><?=the_title()?></span></h1>
						</section>
					</a>
				</article>
				<?php endwhile; else:?>
        		<?php endif;?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="bloco-container-4">
				<?php 
		            $categoria = get_cat_id('cidades');
		            query_posts('showposts=1&offset=1&order=DESC&cat='.$categoria);?>
	            <?php if(have_posts()): while (have_posts()) : the_post();?>
				<article class="chamada">
					<a href="<?=the_permalink()?>" title="<?=the_title()?>">
						<div class="picture">
							<?php if(has_post_thumbnail()) : ?>
								<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
								<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
							<?php endif; ?>
						</div>
						<section>
							<?php 
		                        $key_legenda = "legenda";
		                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
		                        if(isset($cp_legenda) && $cp_legenda >= '') :
		                    ?>
							<h3><span><?=$cp_legenda?></span></h3>
							<?php endif; ?>
							<h1><span><?=the_title()?></span></h1>
						</section>
					</a>
				</article>
				<?php endwhile; else:?>
        		<?php endif;?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="bloco-container-4">
				<?php 
		            $categoria = get_cat_id('cidades');
		            query_posts('showposts=1&offset=2&order=DESC&cat='.$categoria);?>
	            <?php if(have_posts()): while (have_posts()) : the_post();?>
				<article class="chamada">
					<a href="<?=the_permalink()?>" title="<?=the_title()?>">
						<div class="picture">
							<?php if(has_post_thumbnail()) : ?>
								<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
								<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
							<?php endif; ?>
						</div>
						<section>
							<?php 
		                        $key_legenda = "legenda";
		                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
		                        if(isset($cp_legenda) && $cp_legenda >= '') :
		                    ?>
							<h3><span><?=$cp_legenda?></span></h3>
							<?php endif; ?>
							<h1><span><?=the_title()?></span></h1>
						</section>
					</a>
				</article>
				<?php endwhile; else:?>
        		<?php endif;?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="bloco-container-4">
				<?php 
		            $categoria = get_cat_id('cidades');
		            query_posts('showposts=1&offset=3&order=DESC&cat='.$categoria);?>
	            <?php if(have_posts()): while (have_posts()) : the_post();?>
				<article class="chamada">
					<a href="<?=the_permalink()?>" title="<?=the_title()?>">
						<div class="picture">
							<?php if(has_post_thumbnail()) : ?>
								<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
								<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
							<?php endif; ?>
						</div>
						<section>
							<?php 
		                        $key_legenda = "legenda";
		                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
		                        if(isset($cp_legenda) && $cp_legenda >= '') :
		                    ?>
							<h3><span><?=$cp_legenda?></span></h3>
							<?php endif; ?>
							<h1><span><?=the_title()?></span></h1>
						</section>
					</a>
				</article>
				<?php endwhile; else:?>
        		<?php endif;?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-8">
			<div class="oac-populares">
				<h2 class="titulo-box"><span>populares</span></h2>
				<div class="sub-editorias">
					<a href="<?=URL_SITE?>politica">Política</a>
					<a href="<?=URL_SITE?>cotidiano">Cotidiano</a>
					<a href="<?=URL_SITE?>especiais">Especiais</a>
					<a href="<?=URL_SITE?>evangelicas">Evangélicas</a>
					<a href="<?=URL_SITE?>cidades">Cidades</a>
				</div>
				<div class="bloco-container-5">
					<article class="chamada">
						<a href="artigo.html">
							<div class="picture">
								<figure style="background-image: url('assets/images/destaque06.jpg');"></figure>
							</div>
							<section>
								<h3><span>Apreensão</span></h3>
								<h1><span>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</span></h1>
							</section>
						</a>
					</article>
				</div>
				<div class="bloco-container-5">
					<article class="chamada">
						<a href="artigo.html">
							<div class="picture">
								<figure style="background-image: url('assets/images/destaque06.jpg');"></figure>
							</div>
							<section>
								<h3><span>Apreensão</span></h3>
								<h1><span>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</span></h1>
							</section>
						</a>
					</article>
				</div>
				<div class="bloco-container-5">
					<article class="chamada">
						<a href="artigo.html">
							<div class="picture">
								<figure style="background-image: url('assets/images/destaque06.jpg');"></figure>
							</div>
							<section>
								<h3><span>Apreensão</span></h3>
								<h1><span>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</span></h1>
							</section>
						</a>
					</article>
				</div>
				<div class="bloco-container-5">
					<article class="chamada">
						<a href="artigo.html">
							<div class="picture">
								<figure style="background-image: url('assets/images/destaque06.jpg');"></figure>
							</div>
							<section>
								<h3><span>Apreensão</span></h3>
								<h1><span>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</span></h1>
							</section>
						</a>
					</article>
				</div>
				<div class="bloco-container-5">
					<article class="chamada">
						<a href="artigo.html">
							<div class="picture">
								<figure style="background-image: url('assets/images/destaque06.jpg');"></figure>
							</div>
							<section>
								<h3><span>Apreensão</span></h3>
								<h1><span>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</span></h1>
							</section>
						</a>
					</article>
				</div>
				<div class="bloco-container-5">
					<article class="chamada">
						<a href="artigo.html">
							<div class="picture">
								<figure style="background-image: url('assets/images/destaque06.jpg');"></figure>
							</div>
							<section>
								<h3><span>Apreensão</span></h3>
								<h1><span>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</span></h1>
							</section>
						</a>
					</article>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="oac-mais-lidas">
				<h2 class="titulo-box"><span>mais lidas</span></h2>
				<ol>
					<li>
						<span>1</span>
						<div class="chamada">
							<a href="#">
								<span>Apreensão</span>
								<h1>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</h1>
							</a>
						</div>
					</li>
					<li>
						<span>2</span>
						<div class="chamada">
							<a href="#">
								<span>Apreensão</span>
								<h1>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</h1>
							</a>
						</div>
					</li>
					<li>
						<span>3</span>
						<div class="chamada">
							<a href="#">
								<span>Apreensão</span>
								<h1>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</h1>
							</a>
						</div>
					</li>
					<li>
						<span>4</span>
						<div class="chamada">
							<a href="#">
								<span>Apreensão</span>
								<h1>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</h1>
							</a>
						</div>
					</li>
					<li>
						<span>5</span>
						<div class="chamada">
							<a href="#">
								<span>Apreensão</span>
								<h1>Mais de 7 quilos de cocaína são apreendidos escondidos dentro de carro do AC em cegonha a caminho de GO</h1>
							</a>
						</div>
					</li>
				</ol>
			</div>
			<div class="oac-publi-retangulo-medio mt-2">
				<span>Publicidade</span>
				<div>
					<a href="/">
						<img src="<?=PATH_TEMPLATE?>assets/images/300x250-publi.jpg">
					</a>
				</div>	
			</div>
		</div>
	</div>

	<div class="row">
		<div class="footer-bar">
			<div class="container">
				<div class="col-sm-12">
					<h1 class="float-left">Acompanhe OACREANO nas redes sociais</h1>
					<section class="icons float-left">
						<a href="facebook/">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="facebook/">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="facebook/">
							<i class="fab fa-youtube"></i>
						</a>
					</section>
				</div>
			</div>
		</div>
	</div>
        
<?php get_footer(); ?>

