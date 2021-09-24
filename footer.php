<?php
//Variables
$titulo_coluna1 = get_field('titulo_coluna1', 'option');
$endereco = get_field('endereco', 'option');
$titulo_coluna2 = get_field('titulo_coluna2', 'option');
$titulo_coluna3 = get_field('titulo_coluna3', 'option');
$icones_dos_contatos = get_field('icones_dos_contatos', 'option');
$contatos = get_field('contatos', 'option');
$newsletter = get_field('newsletter', 'option');
$redes_sociais = get_field('redes_sociais', 'option');

?>
<footer id="ica-footer" class="ica-the the-highlight">
    <div class="ica-wrapper">
        <dl class="footer-item">
            <dt>
                <?php if (!empty( $titulo_coluna1 )) : echo $titulo_coluna1; endif ?>
            </dt>
            <h3><?php if (!empty( $endereco['mapa'] )) : echo $endereco['mapa']; endif ?></h3>
            <p>
                <?php if (!empty( $endereco['cidade'] )) : echo $endereco['cidade']; endif ?>
                <?php if (!empty( $endereco['pais'] )) : echo ', ' . $endereco['pais']; endif ?><br>
                <?php if (!empty( $endereco['rua'] )) : echo $endereco['rua']; endif ?>
                <?php if (!empty( $endereco['numero'] )) : echo ', ' . $endereco['numero']; endif ?>
                <?php if (!empty( $endereco['complemento'] )) : echo ', ' . $endereco['complemento']; endif ?>
            </p>
        </dl>
        <dl class="footer-item">
            <dt><?php if (!empty( $titulo_coluna2 )) : echo $titulo_coluna2; endif ?></dt>
            <dd><a href="#">Alinhamento 2 Graus</a></dd>
            <dd><a href="#">Finanças Sustentáveis</a></dd>
            <dd><a href="#">Estratégia e Biodiversidade</a></dd>
            <dd><a href="#">Analise de Ciclo de Vida</a></dd>
            <dd><a href="#">Objetivos do Desenvolvimento Sustentável (ODS)</a></dd>
            <dt><a href="#">Cadastre Seu Currículo</a></dt>
        </dl>
        <dl class="footer-item">
            <dt><?php if (!empty( $titulo_coluna3 )) : echo $titulo_coluna3; endif ?></dt>
            <?php 

            if( $contatos ) {
                foreach( $contatos as $c ) { 
                    
            if ( $c['tipo_de_contato'] == 'telefone' ) { ?>

            <dd>
                <a href="tel:<?php echo $c['texto'] ?>">
                    <img src="<?php if (!empty( $icones_dos_contatos['telefone'] )) : echo $icones_dos_contatos['telefone']; endif ?>" alt="Telefone: ">
                    <?php echo $c['texto'] ?>
                </a>
            </dd>

            <?php } //endif
            elseif ( $c['tipo_de_contato'] == 'email' ) { ?>

            <dd>
                <a href="mailto:<?php echo $c['texto'] ?>">
                    <img src="<?php if (!empty( $icones_dos_contatos['email'] )) : echo $icones_dos_contatos['email']; endif ?>" alt="E-mail: ">
                    <?php echo $c['texto'] ?>
                </a>
            </dd>

            <?php } //end elseif
             } //end foreach
            } //endif
            ?>

            <div class="footer-icons">

                <?php 
                foreach ($redes_sociais as $r ) { ?>

                <a href="<?php if (!empty( $r['url'] )) : echo $r['url']; endif ?>">
                    <img src="<?php if (!empty( $r['icone'] )) : echo $r['icone']; endif ?>" alt="Link da rede social">
                </a>

                <?php } //end foreach               
                ?>

            </div>
            <dt><?php if (!empty( $newsletter['titulo'] )) : echo $newsletter['titulo']; endif ?></dt>
            <div class="footer-form">
                <form action="" method="post">
                    <input type="text" name="newsletter"
                        placeholder="<?php if (!empty( $newsletter['placeholder'] )) : echo $newsletter['placeholder']; endif ?>"
                        class="ica-input">
                    <input type="submit"
                        value="<?php if (!empty( $newsletter['rotulo_do_botao'] )) : echo $newsletter['rotulo_do_botao']; endif ?>"
                        class="ica-input">
                </form>
            </div>
        </dl>
    </div>
    <div class="footer-nav">
        <div class="nav-container">
            <p><?php if ( !empty( get_field('copyright', 'option') ) ) : the_field('copyright', 'option'); endif ?></p>
            <div class="nav-itens">
                <div class="nav-item">
                    <a href="#">Créditos</a>
                </div>
                <div class="nav-item">
                    <a href="#">Legal</a>
                </div>
                <div class="nav-item">
                    <a href="#">Privacidade</a>
                </div>
                <div class="nav-item">
                    <a href="#">Aviso de Privacidade</a>
                </div>
                <div class="nav-item">
                    <a href="#">Política de Cookies</a>
                </div>
                <div class="nav-item">
                    <a href="#">Preferências de Cookies</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>