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
            <aside class="aside-blog">
                <div class="aside-search">
                    <form action="" method="post" class="form-search">
                        <input type="text" name="search" class="ica-input">
                        <input type="submit" value="Buscar" class="ica-but but-conversion">
                    </form>
                </div>

                <dl class="footer-item">
                    <dt>Mais Lidas</dt>
                    <dd><a href="#">Lorem ipsum</a></dd>
                    <dd><a href="#">Lorem ipsum</a></dd>
                    <dd><a href="#">Lorem ipsum</a></dd>
                    <dd><a href="#">Lorem ipsum</a></dd>
                </dl>
                <dl class="footer-item">
                    <dt>Categorias</dt>
                    <dd><a href="#">Biodiversidade</a></dd>
                    <dd><a href="#">Clima</a></dd>
                    <dd><a href="#">Finanças Sustentáveis</a></dd>
                    <dd><a href="#">Escritório Virtual</a></dd>
                </dl>
                <dl class="footer-item">
                    <dt>Assine nossa newsletter</dt>
                    <form action="" class="form-news">
                        <input type="text" placeholder="Nome" class="input-news">
                        <input type="text" placeholder="E-mail" class="input-news">
                        <input type="submit" value="Enviar" class="ica-but but-conversion">
                    </form>
                </dl>


            </aside>
        </div>
    </section>

</main>

<?php get_footer() ?>