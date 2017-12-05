<?php get_header(); ?>

	<h1>Front Page</h1>
	<?php 
		$parms = array(
			'post_type'=>'parties',
		);
		$parties = new WP_Query($parms);

	 ?>

	 <div class="container">
		<?php if($parties->have_posts()): ?>
			<?php while($parties->have_posts()): $parties->the_post();?>
				<h3><?php the_title(); ?></h3>
				<div><?php the_content(); ?></div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>



<?php get_footer(); ?>