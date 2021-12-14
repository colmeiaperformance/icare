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
$vagas = get_field('vagas', 'option');

?>
<footer id="ica-footer" class="ica-the the-highlight">
    <div class="ica-wrapper">
        <dl class="footer-item">
            <dt>
                <?php if (!empty( $titulo_coluna1 )) : echo $titulo_coluna1; endif ?>
            </dt>
            <div class="map-responsive">
                <?php if (!empty( $endereco['mapa'] )) : echo $endereco['mapa']; endif ?>
            </div>
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
            <?php
        
            wp_nav_menu( array(
                'menu'              => 'secondary-menu', // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                'menu_class'        => 'footer-list', // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                'container'         => 'dl', // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                'container_class'   => 'footer-list', // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                'fallback_cb'       => false, // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
                'depth'             => 1, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                'theme_location'    => 'secondary-menu', // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                'item_spacing'      => 'preserve', // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
                'add_li_class'      => 'footer-list-item', //Custom function to add class to menu item
            ) );

            ?>

            <dt><a
                    href="<?php if (!empty( $vagas['link'] )) : echo $vagas['link']; endif ?>"><?php if (!empty( $vagas['rotulo'] )) : echo $vagas['rotulo']; endif ?></a>
            </dt>
        </dl>
        <dl class="footer-item">
            <dt><?php if (!empty( $titulo_coluna3 )) : echo $titulo_coluna3; endif ?></dt>
            <?php 

            if( $contatos ) {
                foreach( $contatos as $c ) { 
                    
            if ( $c['tipo_de_contato'] == 'telefone' ) { ?>

            <dd>
                <a href="tel:<?php echo $c['texto'] ?>">
                    <img src="<?php if (!empty( $icones_dos_contatos['telefone'] )) : echo $icones_dos_contatos['telefone']; endif ?>"
                        alt="Telefone: ">
                    <?php echo $c['texto'] ?>
                </a>
            </dd>

            <?php } //endif
            elseif ( $c['tipo_de_contato'] == 'email' ) { ?>

            <dd>
                <a href="mailto:<?php echo $c['texto'] ?>">
                    <img src="<?php if (!empty( $icones_dos_contatos['email'] )) : echo $icones_dos_contatos['email']; endif ?>"
                        alt="E-mail: ">
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
                        class="ica-input ica-the the-highlight ica-but">
                </form>
            </div>
        </dl>
    </div>
    <div class="footer-nav">
        <div class="nav-container">
            <p><?php if ( !empty( get_field('copyright', 'option') ) ) : the_field('copyright', 'option'); endif ?></p>

            <?php
        
            wp_nav_menu( array(
                'menu'              => 'footer-menu', // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                'menu_class'        => 'nav-footer', // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                'container'         => 'div', // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                'container_class'   => 'nav-items', // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                'fallback_cb'       => false, // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
                'depth'             => 2, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                'theme_location'    => 'footer-menu', // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                'item_spacing'      => 'preserve', // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
                'add_li_class'      => 'nav-footer-item', //Custom function to add class to menu item
            ) );

        ?>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>