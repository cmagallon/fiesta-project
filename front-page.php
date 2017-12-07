<?php get_header(); ?>

	<!-- VIDEO -->
	<iframe width="100%" height="620" src="<?php echo get_theme_mod('newTheme_video'); ?>?rel=0&amp;controls=0&amp;showinfo=0;autoplay=1;loop=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen autoplay="on"></iframe>

	<!-- Fiestas -->
	<?php 
		$parms = array(
			'post_type'=>'parties',
			'posts_per_page' => 1
		);
		$parties = new WP_Query($parms);

	 ?>

	<div class="container">

		<div class="parties-container">
			<?php if($parties->have_posts()): ?>
				<h1 class="parties-title">Next</h1>
				<h1 class="parties-title">fiesta</h1>
				<div class="parties">
					<?php while($parties->have_posts()): $parties->the_post();?>
						<div class="parties-subcontainer">
							<div class="parties-title_under"><?php the_title(); ?></div>
							<div class="parties-content"><?php the_content(); ?></div>
							
							<a  class="btn btn-primary" href="<?php echo esc_url(get_permalink()); ?>">See More</a>
						</div>
						
						<div class="parties-img"><?php the_post_thumbnail('full', ['class' => 'img-responsive', 'title' => 'Feature image']); ?></div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
		
	

	<!-- Services -->

	<?php 
		$parms = array(
			'post_type'=>'Services',
		);
		$services = new WP_Query($parms);

	 ?>

	 	<div class="services-container">
			
				<?php if($services->have_posts()): ?>
					<h1 class="services-title">Hire us for</h1>
					<h1 class="services-title">private functions</h1>
					<div class="services">
						<?php while($services->have_posts()): $services->the_post();?>

							<div class="services-single">
								<h1 class="services-single_title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></h1>
								<div class="services-single_img"><a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('full', ['class' => 'img-responsive', 'title' => 'Feature image']); ?></div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>	
			
			
		</div>
	 
	

	</div>
	<!-- div for image -->

	<!-- section for services -->
	<!-- need to call database with new post type -->


<?php get_footer(); ?>