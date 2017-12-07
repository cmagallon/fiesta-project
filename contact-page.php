<?php 
	/*
		Template Name: Contact Page 
	*/
?>


<?php get_header(); ?>

	<div class="container">
		<div class="contact-container">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post();?>
					<div class="contact-title"><?php the_title(); ?></div>
					<div class="contact-content"><?php the_content(); ?></div>	
					<button onclick="goBack()" type="submit" class="btn btn-primary btn-wearefiesta">Go Back</button>
				<?php endwhile; ?>	
			<?php endif; ?>
		</div>
		<div class="contact-icons">
			<i class="fa fa-envelope contact-sinlge_icon" aria-hidden="true"></i>
			<i class="fa fa-mobile" aria-hidden="true"></i>	
		</div>
	</div>

	
				
	
<?php get_footer(); ?>