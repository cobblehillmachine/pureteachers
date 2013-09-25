<?php get_header(); ?>
	
		<div class="page-title">teacher's portal login</div>
	<?php if ( !is_user_logged_in() ) { ?> 
		<div class="headline">please enter your username and password below to login</div>
	<?php } ?>
	<?php echo do_shortcode('[flexible-frontend-login]'); ?>
	
	<?php if (is_user_logged_in() ) { ?> 
		<?php query_posts(array('post_type' => 'choreography-videos', 'orderby'=> 'title',  'order' => 'ASC', 'posts_per_page' => 100)); ?>
		<div id="videos-choreo" class="portal-cont">
			<div class="portal-icon"></div>
			<?php while ( have_posts() ) : the_post(); ?>
			
				
				<!-- <div class="portal-name" ><?php the_title(); ?></div>
								<div class="portal-info"><?php the_content(); ?></div> -->
			
			<?php endwhile; wp_reset_query(); ?>
		</div>
			

	<?php } ?>
	
<?php get_footer(); ?>