<?php
    wp_nav_menu( array(
        'menu'              => 'main-menu',
        'menu_class'        => 'navigation-list',
        'container'         => 'nav',
        'container_class'   => 'ica-navigation',
        'container_id'      => 'ica-navigation',
        'fallback_cb'       => false,
        'depth'             => 2,
        'theme_location'    => 'main-menu',
        'item_spacing'      => 'preserve',
        'add_li_class'      => 'navigation-item',
    ) );