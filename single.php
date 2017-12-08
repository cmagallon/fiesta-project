<?php get_header(); ?>

	<div class="container">
		<div class="single-container">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post();?>
					<div class="single-img"><?php the_post_thumbnail('full', ['class' => 'img-responsive', 'title' => 'Feature image']); ?></div>
					<div class="single-title"><?php the_title(); ?></div>
					<div class="single-content"><?php the_content(); ?></div>				
				<?php endwhile; ?>
						
			<?php endif; ?>		
		</div>
		
	</div>
<?php get_footer(); ?>