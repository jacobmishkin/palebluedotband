<section class="module video-banner">
	<?php
		$source = get_field('video_header');
		$sub_title = get_field('header_sub_title');
		$poster = get_field('poster');
	?>
	<video muted="true" poster="<?php echo $poster; ?>" autoplay="false" loop>
		<source src="<?php echo $source; ?>" type="video/mp4">
	</video>
	<div class="sub-header">
		<?= $sub_title; ?>
	</div>
</section>