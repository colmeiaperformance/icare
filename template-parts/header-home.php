<header id="ica-header" class="ica-header">
    <div id="navbar" class="ica-wrapper">
        <div id="ica-logo" class="ica-logo">
            <a href="<?php echo home_url(); ?>">
                <img class="logo" width="160" src="<?php 
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

        <?php
        
        wp_nav_menu( array(
            'menu'              => 'main-menu', // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
            'menu_class'        => 'navigation-list', // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
            'container'         => 'nav', // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
            'container_class'   => 'ica-navigation', // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
            'container_id'      => 'ica-navigation', // (string) The ID that is applied to the container.
            'fallback_cb'       => false, // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
            'depth'             => 2, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
            'theme_location'    => 'main-menu', // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
            'item_spacing'      => 'preserve', // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
            'add_li_class'      => 'navigation-item', //Custom function to add class to menu item
        ) );

        ?>

        <!-- <nav id="ica-navigation" class="ica-navigation">
            <ul class="navigation-list">
                <li class="navigation-item"><span>Home</span></li>
                <li class="navigation-item"><a href="#">Produtos</a></li>
                <li class="navigation-item"><a href="#">Sobre nós</a></li>
                <li class="navigation-item"><a href="#">Atuação</a></li>
                <li class="navigation-item"><a href="#">Blog</a></li>
                <li class="navigation-item"><a href="#">Contato</a></li>
            </ul>
        </nav> -->
        <a class="ica-com com-jumper jumper-navigation ica-ico ico-menu" href="#ica-navigation"><span
                class="com-title">Navegação</span></a>
        <a class="ica-com com-jumper jumper-top ica-ico ico-close" href="#ica-header"><span
                class="com-title ico-title">Topo</span></a>
    </div>
</header>