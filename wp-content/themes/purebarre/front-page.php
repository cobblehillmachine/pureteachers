<?php get_header(); ?>
	
		
	<?php if ( !is_user_logged_in() ) { ?> 
		<div class="mid-cont">
			<div class="page-title">teacher's portal login</div>
			<div class="headline">please enter your username and password below to login</div>
			<?php echo do_shortcode('[flexible-frontend-login]'); ?>
		</div>
	<?php } ?>
	
	
	<?php if (is_user_logged_in() ) { ?> 
		<div class="portal-header">
			<div class="mid-cont">
				<div class="page-title">teacher's portal</div>
				<?php echo do_shortcode('[flexible-frontend-login]'); ?>
				Welcome to the Pure Barre teacher’s area. Below are several content areas created exclusively for teachers.<br/> See our latest podcasts, download materials and more!
			</div>
		</div>
			
		<div id="videos-choreo" class="portal-cont">
			<div class="mid-cont">
				<div class="portal-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/videos_choreo.jpg" /></div>
				<div class="portal-info">
					<div class="title">choreography videos</div>
					<span>View videos of choreography.</span>
				</div>
				<div class="link-cont">
					<?php global $ancestor;	$childcats = get_categories(array('child_of' => 6 , 'order' => 'DESC'));  ?>
						<?php foreach ($childcats as $childcat) {$category_link = get_category_link( $childcat );
					  		if (cat_is_ancestor_of($ancestor, $childcat->cat_ID) == false){ ?>					
						    	<a class="cat-item" href="<?php echo esc_url( $category_link ); ?>"><?php echo $childcat->cat_name; ?>  &gt;</a>
							
						<?php }} ?>
				</div>
			</div>
		</div>
		
		<div id="videos-writeup" class="portal-cont">
			<div class="mid-cont">
				<div class="portal-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/videos_writeup.jpg" /></div>
				<div class="portal-info">
					<div class="title">choreography write-up</div>
					<span>View write-ups of choreography.</span>
				</div>
				<div class="link-cont">
					<a class="cat-item" href="/category/choreography-write-up">view choreography write-ups  &gt;</a>
				</div>
			</div>
		</div>
		
		<div id="resources" class="portal-cont">
			<div class="mid-cont">
				<div class="portal-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/resources.jpg" /></div>
				<div class="portal-info">
					<div class="title">resources</div>
					<span></span>
				</div>
				<div class="link-cont">
					<a class="cat-item" href="/category/resources">view resources &nbsp;&gt;</a>
				</div>
			</div>
		</div>
		
		<div id="videos-tutorials" class="portal-cont">
			<div class="mid-cont">
				<div class="portal-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/videos_writeup.jpg" /></div>
				<div class="portal-info">
					<div class="title">video tutorials</div>
					<span></span>
				</div>
				<div class="link-cont">
					<a class="cat-item" href="/category/video-tutorials">view video tutorials &nbsp;&gt;</a>
				</div>
			</div>
		</div>
	

	<?php } ?>
	
<?php get_footer(); ?>