<?php 
$header_args = array( 'posts_per_page' => 1 ); 
$header_query = new WP_Query( $header_args ); 

if ( $header_query->have_posts() ) : 
    while ( $header_query->have_posts() ) : $header_query->the_post(); ?>

<div class="first-notice">
    <div class="first-notice-item-media"
        style="background-image:url('<?php 
            if ( has_post_thumbnail() ) { 
                echo the_post_thumbnail_url();
            }
                else { 
                    echo get_template_directory_uri() . '/images/blog-media.jpg';
                    } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;">
        <?php ( the_post_thumbnail() ) ? the_post_thumbnail() : get_template_directory_uri() . '/images/banner-sobre.jpg'; ?>
    </div>
    <div class="notice-content">
        <div class="content-title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="content-description">
            <p class="ica-the the-gray-222">
                <?php the_excerpt(); ?>
            </p>
        </div>
        <div class="notice-footer">
            <a href="<?php the_permalink(); ?>" class="ica-but but-conversion">Leia Mais</a>
        </div>
    </div>
</div>

<?php endwhile; 
else: 
    _e( '' ); 
endif; 

wp_reset_postdata(); 