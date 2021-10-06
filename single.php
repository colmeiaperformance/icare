<?php get_header(); ?>

<?php get_template_part('template-parts/header-pages'); ?>

<main id="ica-content">
    <section class="ica-sec sec-bolg" id="blog">
        <div class="ica-wrapper">
            <div class="sec-notice">
                <div class="first-notice">

                    <?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post();  ?>

                    <div class="notice-content">
                        <div class="content-title">
                            <?php the_title( '<h1>', '</h1>' ); ?>
                        </div>
                        <div>
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="content-description">
                            <?php the_content( '<p>', '</p>' ); ?>
                        </div>
                    </div>
                    
                    <?php endwhile; 
                    else: 
                        _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
                    endif; 
                    ?>

                    <div>Outros posts</div>

                </div>
            </div>
            

            <?php get_template_part( '/template-parts/aside-blog' ) ?>
            
        </div>
    </section>

</main>

<?php get_footer() ?>