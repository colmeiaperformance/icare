<?php get_header(); ?>
<?php get_template_part('template-parts/header-home'); ?>
<main id="ica-content">
    <div class="ica-com com-carousel com-home swiper-container">
        <div class="swiper-wrapper">
            <div class="com-item swiper-slide">
                <div class="item-media swiper-slide-img-home"
                    style="background-image: url('<?php echo get_template_directory_uri() . '/images/header.png' ?>');background-position: center;background-repeat: no-repeat; background-size: cover;">
                </div>
                <div class="item-media swiper-slide-img-home-mobile"
                    style="background-image: url('<?php echo get_template_directory_uri() . '/images/header-mobile.jpg' ?>');background-position: center;background-repeat: no-repeat; background-size: cover;">
                </div>
                <div class="item-content ica-the the-highlight">
                    <h1 class="item-title"><span>Consultoria</span> especializada em estratégia e inovação do <span>meio
                            ambiente</span></h1>
                    <a href="#" class="ica-but but-light">Sobre a I Care</a>
                    <a href="#" class="ica-but but-light">Áreas de Atuação</a>
                </div>
            </div>
            <div class="com-item swiper-slide">
                <div class="item-media swiper-slide-img-home"
                    style="background-image: url('<?php echo get_template_directory_uri() . '/images/header.png' ?>');background-position: center;background-repeat: no-repeat; background-size: cover;">
                </div>
                <div class="item-media swiper-slide-img-home-mobile"
                    style="background-image: url('<?php echo get_template_directory_uri() . '/images/header-mobile.jpg' ?>');background-position: center;background-repeat: no-repeat; background-size: cover;">
                </div>
                <div class="item-content ica-the the-highlight">
                    <h1 class="item-title"><span>Assessoria</span> especializada em estratégia e inovação da
                        <span>Natureza</span></h1>
                    <a href="#" class="ica-but but-light">Nossos Produtos</a>
                    <a href="#" class="ica-but but-light">Entre em Contato</a>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part( 'template-parts/flexible-content' ) ?>
    <?php get_template_part( 'template-parts/mapa' ) ?>
      
    <section class="ica-sec sec-notice" id="notice">
        <div class="ica-wrapper">
            <div class="sec-itens">
                <?php get_template_part('/template-parts/section-noticias'); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>