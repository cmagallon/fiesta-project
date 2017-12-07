<?php get_header(); ?>
	<h2>working single</h2>

	<div class="container">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post();?>
				<div><?php the_title(); ?></div>
				<div><?php the_content(); ?></div>
									
			<?php endwhile; ?>
					
		<?php endif; ?>	
	</div>
<?php get_footer(); ?>