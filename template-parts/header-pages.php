<header id="ica-pages">
    <div id="navbar-pages" class="ica-wrapper-pages navbar-white">
        <div id="ica-logo" class="ica-logo">
            <a href="<?php echo home_url(); ?>">
                <img class="logo-pages" width="160" src="<?php 
                        $logoColorido = get_field('logo_colorido', 'option');
                        $logoDefault = get_template_directory_uri() . '/images/logo.png';
                        
                        if ( !empty($logoColorido) ) {
                            echo $logoColorido;
                        } else {
                            echo $logoDefault;
                        }

                        ?>" alt="Logo">
            </a>
        </div>
        <?php get_template_part('template-parts/menu-pages'); ?>
        <a class="ica-com com-jumper jumper-navigation ica-ico ico-menu" href="#ica-navigation">
            <span class="com-title">&#9776;</span>
        </a>
        <a class="ica-com com-jumper jumper-top ica-ico ico-close" href="#ica-header">
            <span class="com-title ico-title">&#x58;</span>
        </a>
    </div>
</header>
<?php get_template_part('template-parts/breadcrumb'); ?>