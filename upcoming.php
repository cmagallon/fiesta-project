<?php 
	/*
		Template Name: Upcoming Events 
	*/
?>

<?php get_header(); ?>

	<div class="container">
		<div class="upcoming-container">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post();?>				
					<div class="upcoming-photos"><?php the_content(); ?></div>				
				<?php endwhile; ?>	
			<?php endif; ?>		
		</div>
		
	</div>
<?php get_footer(); ?>