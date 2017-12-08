<?php 
	/*
		Template Name: Fiesta Photos 
	*/
?>

<?php get_header(); ?>

	<div class="container">
		<div class="fotos-container">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post();?>				
					<div class="photos"><?php the_content(); ?></div>				
				<?php endwhile; ?>	
			<?php endif; ?>		
		</div>
		
	</div>
<?php get_footer(); ?>