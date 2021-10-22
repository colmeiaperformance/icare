<?php get_header(); ?>
<?php get_template_part('template-parts/header-home'); ?>

<main id="ica-content">
    <div class="ica-com com-carousel com-home swiper-container">
        <div class="swiper-wrapper">
            <div class="com-item swiper-slide">
                <div class="item-media swiper-slide-img-home">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg-banner.jpg' ?>" alt="" />
                </div>
                <div class="item-content ica-the the-highlight">
                    <div class=content-left>
                        <h1 class="item-title"><span>Consultoria</span> especializada em estratégia e inovação do <span>meio
                                ambiente</span></h1>
                        <a href="#" class="ica-but but-light">Sobre a iCare</a>
                        <a href="#" class="ica-but but-light">Áreas de Atuação</a>
                    </div>
                    <div class="content-right">
                        <img src="<?php echo get_template_directory_uri() . '/images/logo-banner.png' ?>" alt="" />
                    </div>
                </div>
            </div>
            <div class="com-item swiper-slide">
                <div class="item-media swiper-slide-img-home">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg-banner.jpg' ?>" alt="" />
                </div>
                <div class="item-content ica-the the-highlight">
                    <div class=content-left>
                        <h1 class="item-title"><span>Consultoria</span> especializada em estratégia e inovação do <span>meio
                                ambiente</span></h1>
                        <a href="#" class="ica-but but-light">Sobre a iCare</a>
                        <a href="#" class="ica-but but-light">Áreas de Atuação</a>
                    </div>
                    <div class="content-right">
                        <img src="<?php echo get_template_directory_uri() . '/images/logo-banner.png' ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ica-sec sec-acting" id="acting">
        <div class="ica-wrapper">
            <!-- <div class="sec-header">
                <h3 class="sec-title ica-the the-graye8e">O Que Fazemos</h3>
            </div> -->
            <div class="sec-content">
                <div class="content-description">
                    <p> <b>A I Care Brasil</b> possui três áreas de atuação que visam fornecer um conjunto abrangente ed
                        soluções para apoiar o processo de <b>transição ambiental</b> da sua empresa.</p>
                </div>
            </div>

            <!-- <div class="sec-arrows">

                <ul class="arrows-left">
                    <li>
                        <div class="arrow-container">
                            <p class="icon">
                                <img src="<?php // echo get_template_directory_uri() . '/images/icon-planta.png' ?>"
                                    alt="">
                            </p>
                            <h3>Biodiversidade</h3>
                        </div>
                    </li>
                    <li>
                        <div class="arrow-container">
                            <p class="icon">
                                <img src="<?php // echo get_template_directory_uri() . '/images/icon-reciclavel.png' ?>"
                                    alt="">
                            </p>
                            <h3>Finanças Sustentáveis</h3>
                        </div>
                    </li>
                    <li>
                        <div class="arrow-container">
                            <p class="icon">
                                <img src="<?php // echo get_template_directory_uri() . '/images/icon-folha.png' ?>" alt="">
                            </p>
                            <h3>Clima</h3>
                        </div>
                    </li>
                </ul>

                <ul class="arrows-right">
                    <li>
                        <div class="arrow-container">
                            <p class="icon"><img
                                    src="<?php // echo get_template_directory_uri() . '/images/icon-lampada.png' ?>"
                                    alt=""></p>
                            <h3>Entenda</h3>
                            <p>Através das nossas capacidades para cada área.</p>
                        </div>
                    </li>
                    <li>
                        <div class="arrow-container">
                            <p class="icon"><img
                                    src="<?php // echo get_template_directory_uri() . '/images/icon-cogs.png' ?>" alt="">
                            </p>
                            <h3>Avalie</h3>
                            <p>Com nossos diagnósticos e indicadores.</p>

                        </div>
                    </li>
                    <li>
                        <div class="arrow-container">
                            <p class="icon"><img
                                    src="<?php // echo get_template_directory_uri() . '/images/icon-target.png' ?>" alt="">
                            </p>
                            <h3>Realize</h3>
                            <p>Planos de ação ideais para o seu negócio ou projeto.</p>
                        </div>
                    </li>
                </ul>
            </div> -->

            <!-- <div class="sec-atuacao">
                <div class="atuacao-items">
                    <div class="atuacao-item">
                        <p class="icon">
                            <img class="atuacao-img"
                                src="<?php echo get_template_directory_uri() . '/images/icon-planta.png' ?>" alt="">
                        </p>
                        <h3>Biodiversidade</h3>
                    </div>
                    <div class="atuacao-item">
                        <p class="icon">
                            <img class="atuacao-img"
                                src="<?php echo get_template_directory_uri() . '/images/icon-reciclavel.png' ?>" alt="">
                        </p>
                        <h3>Finanças Sustentáveis</h3>
                    </div>
                    <div class="atuacao-item">
                        <p class="icon">
                            <img class="atuacao-img"
                                src="<?php echo get_template_directory_uri() . '/images/icon-folha.png' ?>" alt="">
                        </p>
                        <h3>Clima</h3>
                    </div>
                </div>
                <div class="atuacao-process">
                    <div class="process-item">
                        <p class="icon">
                            <img class="process-img"
                                src="<?php echo get_template_directory_uri() . '/images/icon-lampada.png' ?>" alt="">
                        </p>
                        <div class="item-content">
                            <h3>Entenda</h3>
                            <p>Através das nossas capacidades para cada área.</p>
                        </div>
                    </div>
                    <div class="process-item">
                        <p class="icon">
                            <img class="process-img"
                                src="<?php echo get_template_directory_uri() . '/images/icon-cogs.png' ?>" alt="">
                        </p>
                        <div class="item-content">
                            <h3>Avalie</h3>
                            <p>Com nossos diagnósticos e indicadores.</p>
                        </div>
                    </div>
                    <div class="process-item">
                        <p class="icon">
                            <img class="process-img"
                                src="<?php echo get_template_directory_uri() . '/images/icon-target.png' ?>" alt="">
                        </p>
                        <div class="item-content">
                            <h3>Realize</h3>
                            <p>Planos de ação ideais para o seu negócio ou projeto.</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="acting-content">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="content-image">
                             <img src="https://geobrandesign.com/wp-content/themes/geo_wp2020/timthumb.php?src=https://geobrandesign.com/wp-content/uploads/2021/07/aplicacao-1-1.png&amp;h=350&amp;w=350&amp;zc=1" alt="">
                        </div>
                             <div class="content-details fadeIn-bottom">
                                <h2 class="content-title">Biodiversidade</h2>
                            </div>
                             <div class="content-details fadeIn-top">
                                <h2 class="content-title">Avalie, avalie, avalie</h2>
                            </div>
                        </div>
                    </div>

                  <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="content-image">
                             <img src="https://media.gettyimages.com/photos/blue-headed-parrot-close-up-picture-id1304160299" alt="">
                        </div>
                             <div class="content-details fadeIn-bottom">
                                <h2 class="content-title">Finanças sustentáveis</h2>
                            </div>
                             <div class="content-details fadeIn-top">
                                <h2 class="content-title">Entenda, avalie, realize</h2>
                            </div>
                        </div>
                    </div>

                  <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="content-image">
                             <img src="https://geobrandesign.com/wp-content/themes/geo_wp2020/timthumb.php?src=https://geobrandesign.com/wp-content/uploads/2021/07/aplicacao-1-1.png&amp;h=350&amp;w=350&amp;zc=1" alt="">
                        </div>
                             <div class="content-details fadeIn-bottom">
                                <h2 class="content-title">Biodiversidade</h2>
                            </div>
                             <div class="content-details fadeIn-top">
                                <h2 class="content-title">Avalie, avalie, avalie</h2>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ica-sec sec-partners" id="partners">
        <div class="ica-wrapper">
            <!-- <div class="sec-header">
                <h3 class="sec-title ica-the the-white">Quem apoiamos</h3>
            </div> -->
            <div class="sec-content">
                <div class="content-description">
                    <p> A I Care Brasil apoia seus <b>clientes, autoridades locais, instituições públicas, empresas e
                            investidores</b>, em seu processo de transição ambiental. Conheça algumas das marcas que já
                        foram apoiadas: </p>
                </div>
            </div>
            
            <div class="sec-itens">
                <div class="item-media">
                    <img src="<?php echo get_template_directory_uri() . '/images/afd.png' ?>" alt="afd">
                </div>
                <div class="item-media">
                    <img src="<?php echo get_template_directory_uri() . '/images/alstom.png' ?>" alt="alstom">
                </div>
                <div class="item-media">
                    <img src="<?php echo get_template_directory_uri() . '/images/banque-de-france.png' ?>"
                        alt="banque-de-france">
                </div>
                <div class="item-media">
                    <img src="<?php echo get_template_directory_uri() . '/images/bdmg.png' ?>" alt="bdmg">
                </div>
                <div class="item-media">
                    <img src="<?php echo get_template_directory_uri() . '/images/bnp.png' ?>" alt="bnp">
                </div>
                <div class="item-media">
                    <img src="<?php echo get_template_directory_uri() . '/images/brde.png' ?>" alt="brde">
                </div>
            </div>
        </div>
    </section>
    <section class="ica-sec sec-numbers" id="numbers">
        <div class="ica-wrapper">
            <!-- <div class="sec-header">
                <h3 class="sec-title ica-the the-green240 the-contrast">Nossos Números</h3>
            </div> -->
            <div class="sec-content">

            <div class="sec-item">
                    <div class="item-media">
                        <img src="<?php echo get_template_directory_uri() . '/images/paises-green.png' ?>" alt="paises">
                    </div>
                    <div class="item-title">
                        <h1>20</h1>
                        <h3>países</h3>
                    </div>
                    <div class="item-description">
                        <p>onde trabalhamos em projetos e missões</p>
                    </div>
                </div>

                <div class="sec-item">
                    <div class="item-media">
                        <img src="<?php echo get_template_directory_uri() . '/images/colaboradores-green.png' ?>"
                            alt="colaboradores">
                    </div>
                    <div class="item-title">
                        <h1>60</h1>
                        <h3>colaboradores</h3>
                    </div>
                    <div class="item-description">
                        <p>distribuídos nos escritórios da França (Paris e Lyon) e no Brasil (Belo Horizonte)</p>
                    </div>
                </div>
                
                <div class="sec-item">
                    <div class="item-media">
                        <img src="<?php echo get_template_directory_uri() . '/images/clientes-green.png' ?>" alt="clientes">
                    </div>
                    <div class="item-title">
                        <h1>+ 120</h1>
                        <h3>clientes</h3>
                    </div>
                    <div class="item-description">
                        <p>públicos e privados no mundo com ferramentas e projetos desenvolvidos por nós</p>
                    </div>
                </div>

                <div class="sec-item">
                    <div class="item-media">
                        <img src="<?php echo get_template_directory_uri() . '/images/missoes-green.png' ?>" alt="missoes">
                    </div>
                    <div class="item-title">
                        <h1>1000</h1>
                        <h3>missões</h3>
                    </div>
                    <div class="item-description">
                        <p>já realizadas em diversos países do mundo</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="ica-sec sec-occupationarea" id="occupationarea">
        <div class="ica-wrapper">
            <!-- <div class="sec-header ">
                <h3 class="sec-title ica-the the-green57f the-highlight">Áreas de atuação</h3>
            </div> -->
            <div class="sec-content">
                <img src="<?php echo get_template_directory_uri() . '/images/mapa.png' ?>" alt="">
            </div>
        </div>
    </section>
    <section class="ica-sec sec-notice" id="notice">
        <div class="ica-wrapper">
            <!-- <header class="sec-header">
                <h3 class="sec-title ica-the the-white">Últimas notícias</h3>
            </header> -->
            <div class="sec-itens">
                <div class="item-content">
                    <div class="item-media">
                        <img src="<?php echo get_template_directory_uri() . '/images/blog-media.jpg' ?>" alt="notice">
                        <p class="media-title"></p>
                    </div>
                    <div class="media-description">
                        <p>A I Care Brasil acaba de concluir um estudo, em parceria com o Observatório Nacional e a
                            Universidade de São Paulo</p>
                    </div>
                    
                </div>
                <div class="item-content">
                    <div class="item-media">
                        <img src="<?php echo get_template_directory_uri() . '/images/blog-media2.jpg' ?>" alt="notice">
                        <p class="media-title"></p>
                    </div>
                    <div class="media-description">
                        <p>A I Care Brasil acaba de concluir um estudo, em parceria com o Observatório Nacional e a
                            Universidade de São Paulo</p>
                    </div>
                    
                </div>
                <div class="item-content">
                    <div class="item-media">
                        <img src="<?php echo get_template_directory_uri() . '/images/blog-media3.jpg' ?>" alt="notice">
                        <p class="media-title"></p>
                    </div>
                    <div class="media-description">
                        <p>A I Care Brasil acaba de concluir um estudo, em parceria com o Observatório Nacional e a
                            Universidade de São Paulo</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>
