<style>
.oval {
    width: 100%;
    float: none;
}

@media all and (min-width:1200px) {
    .oval {
        width: <?php the_sub_field('tamanho_ati');
        ?>%;

        float: <?php if ($posicao_ati=='esquerda') {
            echo 'left';
        }

        elseif ($posicao_ati=='direita') {
            echo 'right';
        }

        ?>;
    }
}
</style>
<?php
$conteudo = get_field('conteudo');

if( have_rows('conteudo') ):
    while( have_rows('conteudo') ): the_row();

        //Galeria de imagens
        if( get_row_layout() == 'galeria_de_imagens' ):
    $cores_gi = get_sub_field('cores_gi'); ?>

<section class="ica-sec sec-gallery" style="background-color:<?php echo $cores_gi['fundo']  ?>">
    <div class="ica-wrapper">
        <div class="sec-content">
            <div class="content-description">
                <h3 class="sec-title" style="color:<?php echo $cores_gi['titulo']  ?>;margin-top:0;">
                    <?php the_sub_field('titulo_gi'); ?></h3>
                <p style="color:<?php echo $cores_gi['subtitulo']  ?>">
                    <?php the_sub_field('subtitulo_gi'); ?>
                </p>
            </div>
        </div>
        <div class="sec-itens">
            <?php
            $imagem_gi = get_sub_field('imagem_gi');?>
            <?php 
            if (is_array($imagem_gi) || is_object($imagem_gi)) {
            foreach ($imagem_gi as $igi) { ?>
            <div class="item-media">
                <img src="<?php echo $igi['imagem']['url'] ?>">
            </div>
            <?php }
            }
            ?>
        </div>
    </div>
</section>


<?php //Ícones com título e descrição
elseif( get_row_layout() == 'icones_titulo_descricao' ):  
    $cores_itd = get_sub_field('cores_itd'); ?>

<section class="ica-sec sec-numbers" style="background-color:<?php echo $cores_itd['fundo']; ?>">
    <div class="ica-wrapper">
        <div class="sec-header">
            <h3 class="sec-title ica-the the-contrast" style="color:<?php echo $cores_itd['titulo'] ?>;background-color:<?php echo $cores_itd['fundo']; ?>;">
                <?php the_sub_field('titulo_itd'); ?>
            </h3>
        </div>
        <div class="sec-content">

            <?php
        $grupo_de_estatisticas = get_sub_field('grupo_de_estatisticas');
        if (is_array($grupo_de_estatisticas) || is_object($grupo_de_estatisticas)) {
            foreach ($grupo_de_estatisticas as $ge) { ?>

            <div class="sec-item">
                <div class="item-media">
                    <img src="<?php echo $ge['icone']['url']; ?>" alt="colaboradores">
                </div>
                <div class="item-title">
                    <?php if ( $ge['estatistica'] ) { ?>
                    <h1>
                        <span style="color:<?php echo $cores_itd['subtitulo'] ?>;">
                            <?php echo $ge['estatistica']; ?>
                        </span>
                    </h1>
                    <?php } ?>

                    <h3>
                        <span style="color:<?php echo $cores_itd['subtitulo'] ?>;">
                            <?php echo $ge['texto']; ?>
                        </span>
                    </h3>
                </div>
                <div class="item-description">
                    <p style="color:<?php echo $cores_itd['texto'] ?>">
                        <?php echo $ge['descricao']; ?></p>
                </div>
            </div>

            <?php } 
            } ?>

        </div>
    </div>
</section>


<?php 
//Área de imagem
elseif( get_row_layout() == 'area_de_imagem' ): 
            $image_ai = get_sub_field('imagem_ai');
            ?>

<section class="ica-sec sec-occupationarea" style="background-color:<?php echo get_sub_field('fundo_ai'); ?>">
    <div class="ica-wrapper">
        <div class="sec-content">
            <img src="<?php echo $image_ai['url']; ?>" alt="">
        </div>
    </div>
</section>
<?php

//Texto com Losangos
elseif( get_row_layout() == 'texto_com_losangos' ):
$cores_tl = get_sub_field('cores_tl');
?>

<section class="ica-sec sec-aboutus" style="background-color:<?php echo $cores_tl['fundo']; ?>;">
    <div class="ica-wrapper">
        <div class="sec-content">
            <div class="items-block">
                <div class="content-item">
                    <?php echo get_sub_field('texto_esquerda_tl') ?>
                </div>
                <div class="content-item">
                    <div class="item-services">

                        <?php
                        $losangos_tl = get_sub_field('losangos_tl');
                        if (is_array($losangos_tl) || is_object($losangos_tl)) {
                            foreach ($losangos_tl as $l_tl) { ?>

                        <div class="box-service">
                            <div class="service" style="border-color:<?php echo $cores_tl['losango']; ?>;">
                                <p style="color:<?php echo $cores_tl['titulo']; ?>;">
                                    <?php echo $l_tl['titulo_losango']; ?></p>
                            </div>
                            <div class="service-description">
                                <p style="color:<?php echo $cores_tl['descricao']; ?>;">
                                    <?php echo $l_tl['descricao_losango']; ?></p>
                            </div>
                        </div>

                        <?php }
                        }
                        ?>

                    </div>
                    <style>
                    .ica-sec.sec-aboutus .seta .arrow.is-triangle::after {
                        border-bottom-color: <?php echo $cores_tl['seta'];
                        ?> !important;
                    }
                    </style>
                    <div class="seta" style="border-color:<?php echo $cores_tl['seta']; ?>;">
                        <span class="arrow is-triangle arrow-bar is-right"></span>
                    </div>
                </div>
            </div>
            <div class="content-complement">
                <p class="ica-the the-gray-222">
                    <?php echo get_sub_field('texto_secundario_tl') ?>
                </p>
            </div>
        </div>
    </div>
</section>


<?php
//Cards de Colaboradores
elseif( get_row_layout() == 'cards_de_colaboradores' ):
$colaborador = get_sub_field('colaborador');
$cores_cc = get_sub_field('cores_cc'); ?>
<section class="ica-sec sec-equipe" style="background-color:<?php echo $cores_cc['fundo']; ?>;">
    <div class="ica-wrapper">
        <div class="sec-description">
            <?php the_sub_field('descricao_equipe'); ?>
        </div>
        <div class="sec-members">
            <?php 
            if (is_array($colaborador) || is_object($colaborador)) {
            foreach ($colaborador as $c) { ?>
            <div class="member">
                <div class="member-media">
                    <img src="<?php if (!empty( $c['foto_colaborador'] )) : echo $c['foto_colaborador']; endif ?>"
                        alt="Imagem de <?php echo $c['nome_colaborador'] ?>">
                </div>
                <div class="member-description">
                    <h2 class="member-name" style="color:<?php echo $cores_cc['nome']; ?>;">
                        <?php echo $c['nome_colaborador'] ?></h2>
                    <p class="member-function" style="color:<?php echo $cores_cc['cargo_formacao']; ?>;">
                        <?php echo $c['cargo_colaborador'] ?> - <?php echo $c['formacao_colaborador'] ?>
                    </p>
                </div>
            </div>
            <?php } //end foreach               
            } //endif
             ?>
        </div>
    </div>
</section>

<?php
//Área com texto e imagem
elseif ( get_row_layout() == 'area_texto_imagem' ) :
$posicao_ati = get_sub_field('posicao_ati');
?>


<section class="ica-sec sec-infos ica-the" style="background-color:<?php the_sub_field('fundo_ati'); ?>;">
    <div class="ica-wrapper">
        <div class="oval" style="width:<?php the_sub_field('tamanho_ati'); ?>%;float:<?php 
            if ( $posicao_ati == 'esquerda' ) {
                echo 'left';
            } elseif ( $posicao_ati == 'direita' ) {
                echo 'right';
            }
            ?>;">
            <span>
                <img src="<?php the_sub_field('imagem_ati'); ?>" alt="">
            </span>
        </div>
        <p>
            <?php the_sub_field('texto_ati'); ?>
        </p>
    </div>
</section>

<?php
//Área com texto
elseif ( get_row_layout() == 'area_texto' ) :
?>
<section class="ica-sec sec-infos ica-the" style="background-color:<?php the_sub_field('fundo_at'); ?>;">
    <div class="ica-wrapper">
        <div class="area-texto">
            <?php the_sub_field('texto_at'); ?>
        </div>
    </div>
</section>

<?php
    //3 Caixas de texto
    elseif ( get_row_layout() == 'caixas_texto_seta' ) :
    $textos_cts = get_sub_field('textos_cts'); 
    $cores_cts = get_sub_field('cores_cts'); ?>

<section class="ica-sec sec-services ica-the" style="background-color:<?php echo $cores_cts['cor_fundo_cts'] ?>;">
    <div class="ica-wrapper">

        <?php
        if (is_array($textos_cts) || is_object($textos_cts)) {        
            foreach ($textos_cts as $t_cts) { ?>

        <div class="item-service" style="border-color:<?php echo $cores_cts['cor_borda_cts'] ?>;">
            <h3 style="color:<?php echo $cores_cts['cor_texto_cts'] ?>;">
                <?php echo $t_cts['texto_cts']; ?>
            </h3>
        </div>

        <?php }
        }
            ?>

    </div>
</section>


<?php 
    //Caixas com setas
    elseif ( get_row_layout() == 'caixas_processos_listas' ) : ?>


<section class="ica-sec sec-whatwedo ica-the the-graye8e"
    style="background-color:<?php the_sub_field('fundo_cpl'); ?>;">
    <div class="ica-wrapper">
        <div class="sec-header">
            <h3 class="sec-title ica-the the-graye8e"><?php the_sub_field('titulo_cpl'); ?></h3>
        </div>
        <div class="sec-description">
            <p>
                <?php the_sub_field('subtitulo_cpl'); ?>
            </p>
        </div>
        <div class="sec-content">
            <div class="sec-item">
                <div class="item-media">
                    <img src="<?php the_sub_field('icone_c1'); ?>" alt="Entenda">
                    <h3><?php the_sub_field('titulo_c1'); ?></h3>
                    <p>
                        <?php the_sub_field('descricao_c1'); ?>
                    </p>
                    <div class="seta"><img src="<?php echo get_template_directory_uri() . '/images/seta-baixo.png' ?>"
                            alt="seta">
                    </div>
                    <ul class="whatwedo-list">
                        <?php 
                            $lista_c1 = get_sub_field('lista_c1');
                            if (is_array($lista_c1) || is_object($lista_c1)) {        
                                foreach ($lista_c1 as $l_c1) { ?>

                        <li class="whatwedo-list-item"><?php echo $l_c1['item_c1']; ?></li>

                        <?php } 
                            }?>
                    </ul>

                </div>
            </div>
            <div class="sec-item item-double">
                <div class="item-media">
                    <img src="<?php the_sub_field('icone_c2'); ?>" alt="Avalie">
                    <h3><?php the_sub_field('titulo_c2'); ?></h3>
                    <p>
                        <?php the_sub_field('descricao_c2'); ?>
                    </p>
                    <div class="seta"><img src="<?php echo get_template_directory_uri() . '/images/seta-baixo.png' ?>"
                            alt="seta">
                    </div>
                    <div class="item-double_container">
                        <div class="media-aside">
                            <h3><?php the_sub_field('titulo_lista_1'); ?></h3>

                            <ul class="whatwedo-list">
                                <?php 
                                    $lista_1_c2 = get_sub_field('lista_1_c2');
                                    if (is_array($lista_1_c2) || is_object($lista_1_c2)) {        
                                    foreach ($lista_1_c2 as $le) { ?>

                                <li class="whatwedo-list-item"><?php echo $le['item_c2e']; ?></li>

                                <?php } 
                                }?>
                            </ul>

                        </div>
                        <div class="media-aside">
                            <h3><?php the_sub_field('titulo_lista_2'); ?></h3>
                            <ul class="whatwedo-list">

                                <?php 
                                    $lista_2_c2 = get_sub_field('lista_2_c2');
                                    if (is_array($lista_2_c2) || is_object($lista_2_c2)) {        
                                    foreach ($lista_2_c2 as $ld) { ?>

                                <li class="whatwedo-list-item"><?php echo $ld['item_c2d']; ?></li>

                                <?php }
                                } ?>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="setinha"></div>
            </div>
            <div class="sec-item ">
                <div class="item-media">
                    <img src="<?php the_sub_field('icone_c3'); ?>" alt="Realize">
                    <h3><?php the_sub_field('titulo_c3'); ?></h3>
                    <p>
                        <?php the_sub_field('descricao_c3'); ?>
                    </p>
                    <div class="seta">
                        <img src="<?php echo get_template_directory_uri() . '/images/seta-baixo.png' ?>" alt="seta">
                    </div>
                    <ul class="whatwedo-list">

                        <?php 
                                $lista_c3 = get_sub_field('lista_c3');
                                if (is_array($lista_c3) || is_object($lista_c3)) {        
                                foreach ($lista_c3 as $l_c3) { ?>

                        <li class="whatwedo-list-item"><?php echo $l_c3['item_c3']; ?></li>

                        <?php }
                        } ?>

                    </ul>
                </div>
                <div class="setinha"></div>
            </div>
        </div>
    </div>
</section>

<?php 
    // Slider de Imagens
    elseif ( get_row_layout() == 'slider_de_imagens' ) : 
        $imagens_si = get_sub_field('imagens_si'); ?>

<section class="ica-sec sec-partners" style="background-color:<?php echo get_sub_field('fundo_si'); ?>">
    <div class="ica-wrapper">
        <div class="sec-content">
            <div class="content-description">
                <p><?php the_sub_field('texto_si'); ?></p>
            </div>
        </div>
        <div class="swiper swiperLogos sec-itens">
            <div class="swiper-wrapper">

                <?php
                if (is_array($imagens_si) || is_object($imagens_si)) {
                    foreach ($imagens_si as $isi) { ?>
                <div class="item-media swiper-slide">
                    <img src="<?php echo $isi['imagem_si']['url']; ?>">
                </div>
                <?php 
                    }
                } ?>

            </div>
        </div>
    </div>
</section>

<?php 
    // Círculos com hover
    elseif ( get_row_layout() == 'circulos_com_hover' ) : ?>

<section class="ica-sec sec-acting" style="background-color:<?php the_sub_field('fundo_ch'); ?>;">
    <div class="ica-wrapper">
        <div class="sec-content">
            <div class="content-description">
                <?php the_sub_field('descricao_ch'); ?>
            </div>
        </div>
        <div class="acting-content">

            <?php 
            $card_ch = get_sub_field('card_ch');

            foreach ($card_ch as $cch) { ?>

            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="content-image">
                        <img src="<?php echo $cch['imagem_ch']; ?>" alt="">
                    </div>
                    <div class="content-details fadeIn-bottom">
                        <h2 class="content-title"><?php echo $cch['titulo_ch'] ?></h2>
                    </div>
                    <div class="content-details fadeIn-top">
                        <h2 class="content-title"><?php echo $cch['item1_ch'] ?></h2>
                        <h2 class="content-title"><?php echo $cch['item2_ch'] ?></h2>
                        <h2 class="content-title"><?php echo $cch['item2_ch'] ?></h2>
                    </div>
                </div>
            </div>

            <?php }
            ?>

        </div>
    </div>
</section>


<?php endif;
    endwhile;
endif;