<?php 
            $header_args = array( 'posts_per_page' => 3 ); 
            $header_query = new WP_Query( $header_args ); 
            
            if ( $header_query->have_posts() ) : 
                while ( $header_query->have_posts() ) : $header_query->the_post(); ?>

<div class="com-item swiper-slide">
    <div class="item-media swiper-slide-img"
        style="background-image:url('<?php 
            if ( has_post_thumbnail() ) { 
                echo the_post_thumbnail_url();
            }
                else { 
                    echo get_template_directory_uri() . '/images/blog-media.jpg';
                    } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;">
        <div class="item-content ica-the the-highlight">
            <h1 class="item-title">
                <?php the_title(); ?>
            </h1>
            <a href="<?php the_permalink(); ?>" class="ica-but but-light">Leia Mais</a>
        </div>
    </div>

</div>

<?php endwhile; 
            else: ?>
<div class="blog-alert">
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
</div>
<?php endif; 
            
wp_reset_postdata(); 
            