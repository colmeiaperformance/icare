<?php get_header(); ?>
<?php get_template_part('template-parts/header-home'); ?>
<main id="ica-content">
    <?php get_template_part( 'template-parts/carousel-home' ) ?>
    <?php get_template_part( 'template-parts/flexible-content' ) ?>
    <?php get_template_part( 'template-parts/mapa' ) ?>
    <?php get_template_part('/template-parts/section-noticias'); ?>
</main>
<?php get_footer() ?>