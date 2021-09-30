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
        <?php get_template_part('template-parts/menu-home'); ?>
        <a class="ica-com com-jumper jumper-navigation ica-ico ico-menu" href="#ica-navigation"><span
                class="com-title">Navegação</span></a>
        <a class="ica-com com-jumper jumper-top ica-ico ico-close" href="#ica-header"><span
                class="com-title ico-title">Topo</span></a>
    </div>
</header>