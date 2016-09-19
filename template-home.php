<?php
/**
* Template Name: Home Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>
	<?php get_template_part('templates/modules/module', 'media'); ?>
	<?php get_template_part('templates/modules/module', 'tour'); ?>
<?php endwhile; ?>