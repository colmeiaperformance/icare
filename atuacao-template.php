<?php
  /*
  Template Name: Template Atuação
  */
  
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/header-pages'); ?>
<main>
  
  <?php get_template_part( 'template-parts/flexible-content' ) ?>
  
  <section class="ica-sec sec-notice ica-the the-white" id="notice">
    <div class="ica-wrapper">
      <div class="sec-header">
        <h3 class="sec-title ica-the the-white"><?php _e('Latest news', 'icare-domain'); ?></h3>
      </div>
      <div class="sec-itens">
        <?php $query = new WP_Query( 'posts_per_page=3' ); ?>
        <?php while($query->have_posts()) : $query->the_post(); ?>  
        <div class="item-content">
          <div class="item-media">
            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
              <?php the_post_thumbnail(); ?>
              <h3 class="media-title">
              <?php if (strlen($post->post_title) > 75) {echo substr(the_title($before = '', $after = '', FALSE), 0, 75) . '...'; } else {the_title();} ?>
              </h3>
            </a>
          </div>
          <div class="media-description">
            <p><?php the_excerpt(); ?></p>
          </div>
          <div class="media-footer">
            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark" class="ica-but but-conversion"><?php _e('Read more', 'icare-domain'); ?></a>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata();?>
      </div>
    </div>
  </section>

</main>
<?php get_footer() ?>