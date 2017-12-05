<?php get_header(); ?>

	<div class="container">
		<!-- video -->
		<?php 
			$parms = array(
				'type' => 'post',
				'category_name' => 'video-home',
				'posts_per_page' => 1
			);
			$nextPosts = new WP_Query($parms);
		?>
		<?php if($nextPosts->have_posts()): ?>
			<?php while($nextPosts->have_posts()): $nextPosts->the_post();?>
				
			<?php endwhile; ?>
		<?php endif; ?>
		<!-- flyer -->
		<?php 
			// $parms = array(
			// 	'type' => 'post',
			// 	'category_name' => 'home-next-fiesta',
			// 	'posts_per_page' => 1
			// );
		$parms = array(
			'post_type' => 'programmes',
			'posts_per_page' => 1,
			);
			$nextPosts = new WP_Query($parms);
		?>
		<?php if($nextPosts->have_posts()): ?>
			<?php while($nextPosts->have_posts()): $nextPosts->the_post();?>
				<!-- <div class="video-homepage"><?php the_content(); ?></div> -->
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div><?php the_title(); ?></div>
				<div><?php the_content(); ?></div>
			<?php endwhile; ?>
		<?php endif; ?>
		<!-- monthly fiestas -->
		<?php 
			$parms = array(
				'type' => 'post',
				'category_name' => 'home-monthly-party',
				'posts_per_page' => 1
			);
			$nextPosts = new WP_Query($parms);
		?>
		<?php if($nextPosts->have_posts()): ?>
			<?php while($nextPosts->have_posts()): $nextPosts->the_post();?>
				<div class="video-homepage"><?php the_content(); ?></div>
			<?php endwhile; ?>
		<?php endif; ?>
		<!-- hire us -->
		<?php 
			$parms = array(
				'type' => 'post',
				'category_name' => 'home-hire-us',
				'posts_per_page' => 1
			);
			$nextPosts = new WP_Query($parms);
		?>
		<?php if($nextPosts->have_posts()): ?>
			<?php while($nextPosts->have_posts()): $nextPosts->the_post();?>
				<div class="video-homepage"><?php the_content(); ?></div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

	


<?php get_footer(); ?>