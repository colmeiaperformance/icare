<section class="ica-wrapper">

    <?php   
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>

    <div class="img-pages"
        style="background-image:url('<?php 
            if ( has_post_thumbnail() ) { 
                echo the_post_thumbnail_url();
            }
                else { 
                    echo get_template_directory_uri() . '/images/banner-sobre.jpg';
                    } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;">
        <div class="img-pages-overlay"></div>
        <div class="img-pages-content">
            <h1 class="img-pages-content-title">
                <?php echo get_the_title(); ?>
            </h1>
        </div>
    </div>

    <?php endwhile; 
    wp_reset_postdata(); 
            else: ?>
    <div class="blog-alert">
        <?php _e( 'Sorry, no posts matched your criteria.', 'icare-domain' ); ?>
    </div>
    <?php endif;  ?>



</section>

<?php