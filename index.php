<?php get_header(); ?>
<?php get_template_part('template-parts/header-pages'); ?>

<main>
  <?php
  if ( is_page() ) {
    get_template_part('template-parts/thumbnail-pages');
  }
  ?>
  <?php get_template_part( 'template-parts/flexible-content' ) ?>

</main>

<?php get_footer() ?>