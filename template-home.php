<?php
/**
* Template Name: Home Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page','header'); ?>
	<?php get_template_part('templates/modules/module', 'video-banner'); ?>
	<?php get_template_part('templates/modules/module', 'media'); ?>
	<?php get_template_part('templates/modules/module', 'tour'); ?>
	<?php get_template_part('templates/modules/module', 'band'); ?>
	<?php get_template_part('templates/modules/module', 'gallery'); ?>
	<?php get_template_part('templates/modules/module', 'merch'); ?>
	<?php get_template_part('templates/modules/module', 'banner'); ?>
	<?php get_template_part('templates/modules/module', 'links'); ?>
<?php endwhile; ?>