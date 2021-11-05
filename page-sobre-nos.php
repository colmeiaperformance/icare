<?php get_header(); ?>
<?php get_template_part('template-parts/header-pages'); ?>
<main class="about-us">
  <section class="ica-sec sec-aboutus" id="aboutus">
    <div class="ica-wrapper">
      <div class="sec-content">
        <div class="items-block">
          <div class="content-item">
            <p class="ica-the the-gray-222">A I Care é uma empresa independente de consultoria ambiental que
              apoia seus clientes (empresas, setores financeiro e público) em seu processo de transição
              ambiental.<br><br>
              Graças à diversidade de nossas áreas de especialização e uma abordagem 360​​°, oferecemos
              soluções inovadoras, adaptadas e impactantes nos mais diversos temas ambientais. Nosso objetivo
              é colocar mudanças positivas no centro da estratégia da organização, gerando valor agregado e
              adicionalidades socioambientais.<br><br>
              Desde 2008 a I Care vem trabalhando para transformar a consultoria ambiental em algo mais
              acessível, destacando os valores que a estratégia ambiental traz não só para o meio ambiente,
              mas também para as empresas e territórios.
            </p>
          </div>
          <div class="content-item">
            <div class="item-services">
                <div class="box-service">
                  <div class="service">
                    <p>Estratégia</p>
                  </div>
                  <div class="service-description">
                    <p>Estratégia ambiental de negócios e políticas públicas</p>
                  </div>
                </div>
                <div class="box-service">
                  <div class="service">
                    <p>Inovação</p>
                  </div>
                  <div class="service-description">
                    <p>Investimento para novas ferramentas e metodologias</p>
                  </div>
                </div>
                <div class="box-service">
                  <div class="service">
                    <p>Integração</p>
                  </div>
                  <div class="service-description">
                    <p>Integração de conhecimentos em função da demanda</p>
                  </div>
                </div>
                <div class="box-service">
                  <div class="service">
                    <p>Visão 360°</p>
                  </div>
                  <div class="service-description">
                    <p>De território a produtos e do setor público ao setor privado</p>
                  </div>
                </div>
              </div>
            <div class="seta"><span class="arrow is-triangle arrow-bar is-right"></span></div>
          </div>
        </div>
        <div class="content-complement">
          <p class="ica-the the-gray-222">Hoje, com seus 13 anos de experiência, desenvolvemos nossa expertise com a realização de mais de 1000 missões para 400 clientes diferentes.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="ica-sec sec-numbers" id="numbers">
    <div class="ica-wrapper">
      <div class="sec-header">
        <h3 class="sec-title ica-the the-green57f the-contrast">Nossos Números</h3>
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
            <p>Distribuídos nos escritórios da França (Paris e Lyon) e no Brasil (Belo Horizonte)</p>
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
            <p>Já realizadas em diversos países do mundo</p>
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
            <p>Públicos e privados no mundo com ferramentas e projetos desenvolvidos por nós</p>
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
            <p>Onde trabalhamos em projetos e missões</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/flexible-content' ) ?>
</main>
<?php get_footer() ?>