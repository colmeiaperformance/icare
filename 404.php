<?php get_header(); ?>

<main>
    <section class="ica-sec sec-erro">
		<div class="sec-wrapper" style="background-image: url('<?php echo get_template_directory_uri() . '/images/background-erro.png' ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat; background-size: 40%;">
			<h1>
				404
			</h1>
			<h2>
				<?php _e('Page not found', 'icare-domain'); ?> :(
			</h2>
			<p>
				<?php _e('Sorry, the page you are looking for doesn\'t exist.', 'icare-domain'); ?>
			</p>
			<a href="<?php echo home_url(); ?>" class="ica-but but-conversion">
				<?php _e('Return to home', 'icare-domain'); ?>
			</a>
		</div>
	</section>
</main>