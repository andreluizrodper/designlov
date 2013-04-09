<?php
 	get_header(); 
 ?>
 	<div class="section-utils">
 		<h2 class="title-section"><?php single_tag_title() ?></h2>
 	</div>
	<ul class="grid">
	<?php
		if( have_posts() ){
			while ( have_posts() ){
				the_post();
				$category = get_the_category();
				?>
				<li class="<?php echo $category[0]->slug; ?>">
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php the_post_thumbnail() ?>
							<figcaption>
								<small>
									<?php the_date('d.m') ?>
								</small>
								<span>
									<?php echo get_the_title(); ?>
								</span>
							</figcaption>
						</figure>
					</a>
				</li>
				<?php
			}
		}
	?>
	</ul>
		<?php 
			$next = get_next_posts_link('Próxima'); 
			$previous = get_previous_posts_link('Anterior'); 
			if(!empty($next) || !empty($previous)){ ?>
				<div class="nav"> <?php
				echo str_replace('href', 'class="next" href', $next);
				echo str_replace('href', 'class="previous" href', $previous);
				?> </div> <?php
			}
		?>
<?php get_footer(); ?>