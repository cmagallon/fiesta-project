<?php 
	/*
		Template Name: Thanks
	*/
?>


<?php get_header(); ?>

	<div class="container">
		<div class="thanks-container">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post();?>
					<div class="thanks-title"><?php the_title(); ?></div>
					<div class="thanks-content"><?php the_content(); ?></div>
					<button type="submit" class="btn btn-primary btn-wearefiesta">Go Back</button>
										
				<?php endwhile; ?>
						
			<?php endif; ?>			
		</div>
		
	</div>
		
				
	
<?php get_footer(); ?>