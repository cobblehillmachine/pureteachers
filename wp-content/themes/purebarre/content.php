<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<!-- <?php if(is_category(array('child_of' =>7))) { ?>
	<div class="material">
		<div class="title"><?php the_title(); ?></div>
		<a class="link" href="<?php the_field('file'); ?>" target="_blank">download file</a>
	</div>
<?php } else if(is_category(10)) { ?>
	<div class="material">
		<div class="title"><?php the_title(); ?></div>
		<a class="link" href="<?php the_field('file'); ?>" target="_blank">download file</a>
	</div>
<?php } else { ?> -->
	
	<div class="material">
		<div class="title"><?php the_title(); ?></div>
		<a class="link" href="<?php the_field('video'); ?>">download file</a>
	</div>
<!-- <?php } ?> -->