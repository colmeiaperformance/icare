<div class="ica-com com-carousel com-home swiper-container">
    <div class="swiper-wrapper">

        <?php
        // $banner_home = get_field('banner_home');
        // if (is_array($banner_home) || is_object($banner_home)) {
        // foreach ($banner_home as $bh) { 
          
          if( have_rows('banner_home') ):
            while( have_rows('banner_home') ): the_row();
          ?>

        <div class="com-item swiper-slide">
            <div class="item-media swiper-slide-img-home"
                style="background-image: url('<?php the_sub_field('imagem_desktop_bh'); ?>');background-position: center;background-repeat: no-repeat; background-size: cover;">
            </div>
            <div class="item-media swiper-slide-img-home-mobile"
                style="background-image: url('<?php the_sub_field('imagem_mobile_bh'); ?>');background-position: center;background-repeat: no-repeat; background-size: cover;">
            </div>
            <div class="item-content ica-the the-highlight">
                <?php the_sub_field('titulo_bh'); 
                ?>
                <?php 
                if( have_rows('botoes_bh') ):
                while( have_rows('botoes_bh') ): the_row(); ?>
                <a href="<?php the_sub_field('url_bbh'); ?>" class="ica-but but-light"><?php the_sub_field('rotulo_bbh'); ?></a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <?php endwhile; 
        endif; ?>
    </div>
</div>