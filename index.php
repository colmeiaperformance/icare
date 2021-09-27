<?php get_header(); ?>

<header id="ica-header" class="ica-header">
    <div id="navbar" class="ica-wrapper">
        <div id="ica-logo" class="ica-logo">
                <a href="<?php echo home_url(); ?>">
                    <img class="logo" width="160"
                        src="<?php 
                        $logoBranco = get_field('logo_branco', 'option');
                        $logoDefault = get_template_directory_uri() . '/images/logo.png';
                        
                        if ( !empty($logoBranco) ) {
                            echo $logoBranco;
                        } else {
                            echo $logoDefault;
                        }

                        ?>" alt="Logo">
                </a>
        </div>
        <nav id="ica-navigation" class="ica-navigation">
            <ul class="navigation-list">
                <li class="navigation-item"><span>Home</span></li>
                <li class="navigation-item"><a href="#">Produtos</a></li>
                <li class="navigation-item"><a href="#">Sobre nós</a></li>
                <li class="navigation-item"><a href="#">Atuação</a></li>
                <li class="navigation-item"><a href="#">Blog</a></li>
                <li class="navigation-item"><a href="#">Contato</a></li>
            </ul>
        </nav>
        <a class="ica-com com-jumper jumper-navigation ica-ico ico-menu" href="#ica-navigation"><span
                class="com-title">Navegação</span></a>
        <a class="ica-com com-jumper jumper-top ica-ico ico-close" href="#ica-header"><span
                class="com-title ico-title">Topo</span></a>
    </div>
</header>
<main id="ica-content">
    <div class="ica-com com-carousel swiper-container">
        <div class="swiper-wrapper">
            <div class="com-item swiper-slide">
                <div class="item-media swiper-slide-img">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg-banner.jpg' ?>" alt="" />
                </div>
                <div class="item-content ica-the the-highlight">
                    <h1 class="item-title"><span>Consultoria</span> especializada em estratégia e inovação do <span>meio
                            ambiente</span></h1>
                    <a href="#" class="ica-but but-light">Sobre a iCare</a>
                    <a href="#" class="ica-but but-light">Áreas de Atuação</a>
                </div>
            </div>
            <div class="com-item swiper-slide">
                <div class="item-media swiper-slide-img">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg-banner.jpg' ?>" alt="" />
                </div>
                <div class="item-content ica-the the-highlight">
                    <h1 class="item-title"><span>Consultoria</span> especializada em estratégia e inovação do <span>meio
                            ambiente</span></h1>
                    <a href="#" class="ica-but but-light">Sobre a iCare</a>
                    <a href="#" class="ica-but but-light">Áreas de Atuação</a>
                </div>
            </div>
        </div>
    </div>

    <section class="ica-sec sec-acting" id="acting">
        <div class="ica-wrapper">
            <div class="sec-header">
                <h3 class="sec-title ica-the the-graye8e">O Que Fazemos</h3>
            </div>
            <div class="sec-content">
                <div class="content-description">
                    <p> <b>A I Care Brasil</b> possui três áreas de atuação que visam fornecer um conjunto abrangente ed
                        soluções para apoiar o processo de <b>transição ambiental</b> da sua empresa.</p>
                </div>

            </div>
            <div class="sec-arrows">

                <ul class="arrows-left">
                    <li>
                        <div class="arrow-container">
                            <p class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/images/icon-planta.png' ?>"
                                    alt="">
                            </p>
                            <h3>Biodiversidade</h3>
                        </div>
                    </li>
                    <li>
                        <div class="arrow-container">
                            <p class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/images/icon-reciclavel.png' ?>"
                                    alt="">
                            </p>
                            <h3>Finanças Sustentáveis</h3>
                        </div>
                    </li>
                    <li>
                        <div class="arrow-container">
                            <p class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/images/icon-folha.png' ?>" alt="">
                            </p>
                            <h3>Clima</h3>
                        </div>
                    </li>
                </ul>

                <ul class="arrows-right">
                    <li>
                        <div class="arrow-container">
                            <p class="icon"><img
                                    src="<?php echo get_template_directory_uri() . '/images/icon-lampada.png' ?>"
                                    alt=""></p>
                            <h3>Entenda</h3>
                            <p>Através das nossas capacidades para cada área.</p>
                        </div>
                    </li>
                    <li>
                        <div class="arrow-container">
                            <p class="icon"><img
                                    src="<?php echo get_template_directory_uri() . '/images/icon-cogs.png' ?>" alt="">
                            </p>
                            <h3>Avalie</h3>
                            <p>Com nossos diagnósticos e indicadores.</p>

                        </div>
                    </li>
                    <li>
                        <div class="arrow-container">
                            <p class="icon"><img
                                    src="<?php echo get_template_directory_uri() . '/images/icon-target.png' ?>" alt="">
                            </p>
                            <h3>Realize</h3>
                            <p>Planos de ação ideais para o seu negócio ou projeto.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/images/home.jpg' ?>" alt="">
            <div class="sec-itens">

            </div>
        </div>
    </section>
    <section class="ica-sec sec-partners" id="partners">
        <div class="ica-wrapper">
            <div class="sec-header">
                <h3 class="sec-title ica-the the-white">Quem apoiamos</h3>
            </div>
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
            <div class="sec-header">
                <h3 class="sec-title ica-the the-green240 the-contrast">Nossos Números</h3>
            </div>
            <div class="sec-content">
                <div class="sec-item ica-the the-highlight">
                    <div class="item-media">
                        <img src="<?php echo get_template_directory_uri() . '/images/colaboradores.png' ?>"
                            alt="colaboradores">
                    </div>
                    <div class="item-title">
                        <h4><span>60 colaboradores</span></h4>
                    </div>
                    <div class="item-description">
                        <p>distribuídos nos escritórios da França (Paris e Lyon) e no Brasil (Belo Horizonte)</p>
                    </div>
                </div>
                <div class="sec-item ica-the the-highlight">
                    <div class="item-media">
                        <img src="<?php echo get_template_directory_uri() . '/images/missoes.png' ?>" alt="missoes">
                    </div>
                    <div class="item-title">
                        <h4><span>Cerca de 1000 missões</span></h4>
                    </div>
                    <div class="item-description">
                        <p>já realizadas em diversos países do mundo</p>
                    </div>
                </div>
                <div class="sec-item ica-the the-highlight">
                    <div class="item-media">
                        <img src="<?php echo get_template_directory_uri() . '/images/clientes.png' ?>" alt="clientes">
                    </div>
                    <div class="item-title">
                        <h4><span>Mais de 120 clientes</span></h4>
                    </div>
                    <div class="item-description">
                        <p>públicos e privados no mundo com ferramentas e projetos desenvolvidos por nós</p>
                    </div>
                </div>
                <div class="sec-item ica-the the-highlight">
                    <div class="item-media">
                        <img src="<?php echo get_template_directory_uri() . '/images/paises.png' ?>" alt="paises">
                    </div>
                    <div class="item-title">
                        <h4><span>20 países </span></h4>
                    </div>
                    <div class="item-description">
                        <p>onde trabalhamos em projetos e missões</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ica-sec sec-occupationarea" id="occupationarea">
        <div class="ica-wrapper">
            <div class="sec-header ">
                <h3 class="sec-title ica-the the-green57f the-highlight">Áreas de atuação</h3>
            </div>
            <div class="sec-content">
                <img src="<?php echo get_template_directory_uri() . '/images/mapa.png' ?>" alt="">
            </div>
        </div>
    </section>
    <section class="ica-sec sec-notice ica-the the-white" id="notice">
        <div class="ica-wrapper">
            <header class="sec-header">
                <h3 class="sec-title ica-the the-white">Últimas notícias</h3>
            </header>
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
                    <div class="media-footer">
                        <a href="#" class="ica-but but-conversion">Leia Mais</a>
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
                    <div class="media-footer">
                        <a href="#" class="ica-but but-conversion">Leia Mais</a>
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
                    <div class="media-footer">
                        <a href="#" class="ica-but but-conversion">Leia Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer() ?>