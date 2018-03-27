<?php get_header(); ?>
   
	<div class="row">
		<div class="col-sm-12">
			<div class="oac-publi publi-970x90">
				<span>Publicidade</span>
				<div>
					<!-- /36847465/01.01.BLOCO -->
					<div class="dfp" id='div-gpt-ad-1522083229326-0'>
					<script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1522083229326-0'); });
					</script>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<div class="row"><!-- categoria(plantao) -->
		<div class="col-sm-12">
			<div class="bloco-container-plantao">
				<?php 
		            $categoria = get_cat_id('plantão');
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
							<h5>
								<i class="fas fa-bullseye"></i>
								<span>PLANTÃO</span>
							</h5>
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

	<div class="row"><!-- categoria(últimas notícias) -->
		<div class="col-sm-6">
			<?php 
	            $categoria = get_cat_id('últimas notícias');
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
	            $categoria = get_cat_id('últimas notícias');
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
	            $categoria = get_cat_id('últimas notícias');
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
						<iframe id="frame_video" src="" frameborder="0" class="hidden-xs-up" allowfullscreen></iframe>
						<?php 
				            $categoria = get_cat_id('vídeos');
				            query_posts('showposts=1&offset=0&order=DESC&cat='.$categoria);?>
			            <?php if(have_posts()): while (have_posts()) : the_post();?>
						<article class="oac-video oac-video-esquerdo" id="palco_video">
							
							<?php 
		                        $key_video = "video";
		                        $cp_video  = get_post_meta($post->ID,$key_video,true);
		                        if(isset($cp_video) && $cp_video >= '') :
		                    ?>
								<a href="javascript:;" title="<?=the_title()?>" data-url="<?=$cp_video?>">
							<?php else: ?>
								<a href="<?=the_permalink()?>" title="<?=the_title()?>" data-url="<?=$cp_video?>">
							<?php endif; ?>
								<div class="play"></div>
								<div class="sombra"></div>
								<?php if(has_post_thumbnail()) : ?>
									<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnails-660x440'); ?>
									<figure style="background-image: url('<?=$thumbnail[0]?>');"></figure>
								<?php endif; ?>
								<div class="titulo">
									<?php 
				                        $key_legenda = "legenda";
				                        $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
				                        if(isset($cp_legenda) && $cp_legenda >= '') :
				                    ?>
									<h3 class="legenda"><span><?=$cp_legenda?></span></h3>
									<?php endif; ?>
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
							<?php 
		                        $key_video = "video";
		                        $cp_video  = get_post_meta($post->ID,$key_video,true);
		                        if(isset($cp_video) && $cp_video >= '') :
		                    ?>
								<a href="javascript:;" title="<?=the_title()?>" data-url="<?=$cp_video?>">
							<?php else: ?>
								<a href="<?=the_permalink()?>" title="<?=the_title()?>" data-url="<?=$cp_video?>">
							<?php endif; ?>
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
							<?php 
		                        $key_video = "video";
		                        $cp_video  = get_post_meta($post->ID,$key_video,true);
		                        if(isset($cp_video) && $cp_video >= '') :
		                    ?>
								<a href="javascript:;" title="<?=the_title()?>" data-url="<?=$cp_video?>">
							<?php else: ?>
								<a href="<?=the_permalink()?>" title="<?=the_title()?>" data-url="<?=$cp_video?>">
							<?php endif; ?>
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
							<?php 
		                        $key_video = "video";
		                        $cp_video  = get_post_meta($post->ID,$key_video,true);
		                        if(isset($cp_video) && $cp_video >= '') :
		                    ?>
								<a href="javascript:;" title="<?=the_title()?>" data-url="<?=$cp_video?>">
							<?php else: ?>
								<a href="<?=the_permalink()?>" title="<?=the_title()?>" data-url="<?=$cp_video?>">
							<?php endif; ?>
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
			<div class="oac-publi publi-970x90">
				<span>Publicidade</span>
				<div>
					<!-- oac_responsivo_grande -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-9210129523880937"
					     data-ad-slot="2386010219"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
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
					<!-- /36847465/01.03.BLOCO -->
					<div class="dfp" id='div-gpt-ad-1522094856820-0' style='height:600px; width:300px;'>
					<script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1522094856820-0'); });
					</script>
					</div>
				</div>	
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-sm-4">
			<div class="oac-publi-retangulo-medio mt-2">
				<span>Publicidade</span>
				<div>
					<!-- /36847465/01.02.BLOCO -->
                    <div class="dfp" id='div-gpt-ad-1522097272097-0' style='height:250px; width:300px;'>
                    <script>
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1522097272097-0'); });
                    </script>
                    </div>
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
			<div class="oac-publi publi-970x90 mt-2">
				<span>Publicidade</span>
				<div>
					<!-- oac_responsivo_grande -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-9210129523880937"
					     data-ad-slot="2386010219"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
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
					<a href="<?=URL_SITE?>c/politica">Política</a>
					<a href="<?=URL_SITE?>c/cotidiano">Cotidiano</a>
					<a href="<?=URL_SITE?>c/especiais">Especiais</a>
					<a href="<?=URL_SITE?>c/evangelicas">Evangélicas</a>
					<a href="<?=URL_SITE?>c/cidades">Cidades</a>
				</div>
				<?php
                    $args = array(
                            'post_type'     => 'post',
                            'post_status'   => 'publish',
                            'date_query'    => array(
                                'column'    => 'post_date',
                                'after'     => '- 4 days'
                            ),
                            'showposts'     => 6,
                            'meta_key'      => 'post_views_count',
                            'cat'           => '-2,-25,-29',
                            'orderby'       => 'meta_value_num' 
                    );
                    $mostPosts = new wp_query($args);
                    while($mostPosts->have_posts()) : $mostPosts->the_post();
                ?>
				<div class="bloco-container-5">
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
				</div>
				<?php 
                    endwhile; 
                    wp_reset_query(); 
                ?>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="oac-mais-lidas">
				<h2 class="titulo-box"><span>mais lidas</span></h2>
				<ol>
					<?php
                        $args = array(
                                'post_type'     => 'post',
                                'post_status'   => 'publish',
                                'date_query'    => array(
                                    'column'    => 'post_date',
                                    'after'     => '- 7 days'
                                ),
                                'showposts'     => 5,
                                'meta_key'      => 'post_views_count',
                                'cat'           => '-2,-25,-29',
                                'orderby'       => 'meta_value_num' 
                        );
                        $mostPosts = new wp_query($args);
                        $i = 1;
                        while($mostPosts->have_posts()) : $mostPosts->the_post();
                    ?>
					<li>
						<span><?=$i?></span>
						<div class="chamada">
							<a href="<?=the_permalink()?>" title="<?=the_title()?>">
								<?php 
                                    $key_legenda = "legenda";
                                    $cp_legenda  = get_post_meta($post->ID,$key_legenda,true);
                                    if(isset($cp_legenda) && $cp_legenda >= '') :
                                ?>
								<span><?=$cp_legenda?></span>
                                <?php endif; ?>
								<h1><?=the_title()?></h1>
							</a>
						</div>
					</li>
					<?php 
						$i++;
                        endwhile; 
                        wp_reset_query(); 
                    ?>
				</ol>
			</div>
			<div class="oac-publi-retangulo-medio mt-2">
				<span>Publicidade</span>
				<div>
					<!-- oac_retangulo_medio -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:300px;height:250px"
					     data-ad-client="ca-pub-9210129523880937"
					     data-ad-slot="2501985316"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
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

