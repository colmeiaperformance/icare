<?php get_header(); ?>

<?php get_template_part('template-parts/header-pages'); ?>

<main id="ica-content" style="margin-top: 0;">
    <section class="ica-sec sec-bolg" id="blog">
        <div class="ica-wrapper">
            <div class="sec-notice">
                <div class="single-notice">

                    <?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post();  ?>

                    <div class="notice-content">
                        <div class="content-title">
                            <?php the_title( '<h1>', '</h1>' ); ?>
                        </div>
                        <div class="content-media">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="content-description">
                            <?php the_content( '<p>', '</p>' ); ?>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <!-- Add the pagination functions here. -->
                    <div class="pagination">
                        <?php previous_post_link( '%link', __('Previous post', 'icare-domain') ); ?>
                        <?php next_post_link( '%link', __('Next post', 'icare-domain') ); ?> 
                    </div>

                    <?php else: ?>
                    <div class="blog-alert">
                        <?php _e( 'Sorry, no posts matched your criteria.', 'icare-domain' ); ?>
                    </div>
                    <?php 
                    wp_reset_postdata();     
                    endif; 
                    ?>

                </div>
            </div>


            <?php get_template_part( '/template-parts/aside-blog' ) ?>

        </div>
    </section>

</main>

<?php get_footer() ?>