<?php 
	/*
		Template Name: Contact Page 
	*/
?>


<?php get_header(); ?>


	<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post();?>
			<div><?php the_title(); ?></div>
			<div><?php the_content(); ?></div>
			<i class="fa fa-envelope" aria-hidden="true"></i>
			<i class="fa fa-mobile" aria-hidden="true"></i>

						
						
		<?php endwhile; ?>
				
	<?php endif; ?>
<?php get_footer(); ?>