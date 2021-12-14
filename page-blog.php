<?php get_header(); ?>
<?php get_template_part('template-parts/header-blog'); ?>
<main id="ica-content" class="blog-content">
  <div class="ica-com com-carousel swiper-container">
    <div class="swiper-wrapper">
      <?php get_template_part( 'template-parts/carousel-blog' ) ?>
    </div>
  </div>
  <section class="ica-sec sec-bolg" id="blog">
    <div class="ica-wrapper">
      <div class="sec-notice">
        <?php get_template_part( 'template-parts/first-notice-blog' ) ?>
        <div class="secondary-notices">
          <?php
            //Protect against arbitrary paged values
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
            $args = array(
                'posts_per_page' => 3,
                'paged' => $paged,
            );
             $wp_query = new WP_Query( $args );   
            if ( $wp_query->have_posts() ) : ?>
          <!-- Add the pagination functions here. -->
          <!-- Start of the main loop. -->
          <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <div class="notice-card">
            <a class="notice-card-img" href="<?php the_permalink(); ?>">
              <div class="item-media"
                style="background-image:url('<?php 
                  if ( has_post_thumbnail() ) { 
                      echo the_post_thumbnail_url();
                  }
                      else { 
                          echo get_template_directory_uri() . '/images/blog-media.jpg';
                          } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;">
                <div class="item-content ica-the the-highlight">
                  <p class="notice-card-title">
                    <?php if (strlen($post->post_title) > 70) {echo substr(the_title($before = '', $after = '', FALSE), 0, 70) . '[...]'; } else {the_title();} ?>
                  </p>
                </div>
              </div>
            </a>
            <div class="media-description">
              <p><?php the_excerpt(); ?></p>
            </div>
            <div class="media-footer">
              <a href="<?php the_permalink(); ?>" class="ica-but but-conversion"><?php _e('Read more', 'icare-domain'); ?></a>
            </div>
          </div>
          <?php endwhile; ?>
          <!-- End of the main loop -->
          <!-- Add the pagination functions here. -->
          <div class="pagination">
            <?php 
              echo paginate_links( array(
                  'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                  'current'      => max( 1, get_query_var( 'paged' ) ),
                  'format'       => '?paged=%#%',
                  'show_all'     => false,
                  'total'        => $wp_query->max_num_pages,
                  'type'         => 'plain',
                  'end_size'     => 2,
                  'mid_size'     => 1,
                  'prev_next'    => false,
                  'prev_text'    => sprintf( '<i></i> %1$s', _e( 'Newer Posts', 'icare-domain' ) ),
                  'next_text'    => sprintf( '%1$s <i></i>', _e( 'Older Posts', 'icare-domain' ) ),
                  'add_args'     => false,
                  'add_fragment' => '',
              ) );
              ?>
          </div>
          <?php
            wp_reset_postdata(); 
            else: ?>
          <div class="blog-alert">
            <?php _e( 'Sorry, no posts matched your criteria.', 'icare-domain' ); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php get_template_part( '/template-parts/aside-blog' ) ?>
    </div>
  </section>
</main>
<?php get_footer() ?>