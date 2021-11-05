<?php get_header(); ?>
<?php get_template_part('template-parts/header-home'); ?>
<main id="ica-content">
<?php get_template_part('template-parts/carousel-home'); ?>
  <section class="ica-sec sec-acting" id="acting">
    <div class="ica-wrapper">
      <div class="sec-content">
        <div class="content-description">
          <p> <b>A I Care Brasil</b> possui três áreas de atuação que visam fornecer um conjunto abrangente e soluções para apoiar o processo de <b>transição ambiental</b> da sua empresa.</p>
        </div>
      </div>
      <div class="acting-content">
        <div class="flip-box">
          <div class="flip-box-inner">
            <div class="content-image">
              <img src="https://colmeia.link/icare/wp-content/uploads/2021/10/icare-placeholders-1.jpeg" alt="">
            </div>
            <div class="content-details fadeIn-bottom">
              <h2 class="content-title">Biodiversidade</h2>
            </div>
            <div class="content-details fadeIn-top">
              <h2 class="content-title">Entenda</h2>
              <h2 class="content-title">Avalie</h2>
              <h2 class="content-title">Realize</h2>
            </div>
          </div>
        </div>
        <div class="flip-box">
          <div class="flip-box-inner">
            <div class="content-image">
              <img src="https://colmeia.link/icare/wp-content/uploads/2021/11/icare-placeholders-18.jpeg" alt="">
            </div>
            <div class="content-details fadeIn-bottom">
              <h2 class="content-title">Finanças sustentáveis</h2>
            </div>
            <div class="content-details fadeIn-top">
              <h2 class="content-title">Entenda</h2>
              <h2 class="content-title">Avalie</h2>
              <h2 class="content-title">Realize</h2>
            </div>
          </div>
        </div>
        <div class="flip-box">
          <div class="flip-box-inner">
            <div class="content-image">
              <img src="https://colmeia.link/icare/wp-content/uploads/2021/11/icare-placeholders-12.jpeg" alt="">
            </div>
            <div class="content-details fadeIn-bottom">
              <h2 class="content-title">Clima</h2>
            </div>
            <div class="content-details fadeIn-top">
              <h2 class="content-title">Entenda</h2>
              <h2 class="content-title">Avalie</h2>
              <h2 class="content-title">Realize</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Slider de logotipos -->
  <section class="ica-sec sec-partners" id="partners">
    <div class="ica-wrapper">
      <div class="sec-content">
        <div class="content-description">
          <p> A I Care Brasil apoia seus <b>clientes, autoridades locais, instituições públicas, empresas e investidores</b>, em seu processo de transição ambiental. Conheça algumas das marcas que já foram apoiadas: </p>
        </div>
      </div>
      <div class="swiper swiperLogos sec-itens">
        <div class="swiper-wrapper">
          <div class="item-media swiper-slide">
            <img src="<?php echo get_template_directory_uri() . '/images/afd.png' ?>" alt="afd">
          </div>
          <div class="item-media swiper-slide">
            <img src="<?php echo get_template_directory_uri() . '/images/alstom.png' ?>" alt="alstom">
          </div>
          <div class="item-media swiper-slide">
            <img src="<?php echo get_template_directory_uri() . '/images/banque-de-france.png' ?>"
              alt="banque-de-france">
          </div>
          <div class="item-media swiper-slide">
            <img src="<?php echo get_template_directory_uri() . '/images/bdmg.png' ?>" alt="bdmg">
          </div>
          <div class="item-media swiper-slide">
            <img src="<?php echo get_template_directory_uri() . '/images/bnp.png' ?>" alt="bnp">
          </div>
          <div class="item-media swiper-slide">
            <img src="<?php echo get_template_directory_uri() . '/images/brde.png' ?>" alt="brde">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ica-sec sec-numbers" id="numbers">
    <div class="ica-wrapper">
      <div class="sec-content">
        <div class="sec-item">
          <div class="item-media">
            <img src="<?php echo get_template_directory_uri() . '/images/paises-green.png' ?>" alt="paises">
          </div>
          <div class="item-title">
            <h1>20</h1>
            <h3>Países</h3>
          </div>
          <div class="item-description">
            <p>Onde trabalhamos em projetos e missões</p>
          </div>
        </div>
        <div class="sec-item">
          <div class="item-media">
            <img src="<?php echo get_template_directory_uri() . '/images/colaboradores-green.png' ?>"  alt="colaboradores">
          </div>
          <div class="item-title">
            <h1>60</h1>
            <h3>Colaboradores</h3>
          </div>
          <div class="item-description">
            <p>Distribuídos nos escritórios da França (Paris e Lyon) e no Brasil (Belo Horizonte)</p>
          </div>
        </div>
        <div class="sec-item">
          <div class="item-media">
            <img src="<?php echo get_template_directory_uri() . '/images/clientes-green.png' ?>" alt="clientes">
          </div>
          <div class="item-title">
            <h1>+ 120</h1>
            <h3>Clientes</h3>
          </div>
          <div class="item-description">
            <p>Públicos e privados no mundo com ferramentas e projetos desenvolvidos por nós</p>
          </div>
        </div>
        <div class="sec-item">
          <div class="item-media">
            <img src="<?php echo get_template_directory_uri() . '/images/missoes-green.png' ?>" alt="missoes">
          </div>
          <div class="item-title">
            <h1>1000</h1>
            <h3>Missões</h3>
          </div>
          <div class="item-description">
            <p>Já realizadas em diversos países do mundo</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ica-sec sec-occupationarea" id="occupationarea">
    <div class="ica-wrapper">
      <div class="sec-content">
        <img src="<?php echo get_template_directory_uri() . '/images/mapa.png' ?>" alt="">
      </div>
    </div>
  </section>
  <section class="ica-sec sec-notice" id="notice">
    <div class="ica-wrapper">
      <div class="sec-itens">
        <?php get_template_part('/template-parts/section-noticias'); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>