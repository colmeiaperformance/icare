<?php get_header(); ?>
<?php get_template_part('template-parts/header-pages'); ?>

<?php
//Variables
$imagem_equipe = get_field('imagem_equipe');
$titulo_equipe = get_field('titulo_equipe');
$descricao_equipe = get_field('descricao_equipe');
$membro = get_field('membro');
$imagem_membro = get_field('imagem_membro');
?>
<main>
    <section class="ica-sec sec-equipe">
        <div class="ica-wrapper">
            <div class="sec-description">
                <?php if(get_field('descricao_equipe')) { echo '<p>' . get_field('descricao_equipe') . '</p>'; } ?>
            </div>
            <div class="sec-members">
                      <?php 
                        foreach ($membro as $m) { ?>
                           <div class="member">
                                <div class="member-media">
                                    <img src="<?php if (!empty( $m['imagem_membro'] )) : echo $m['imagem_membro']; endif ?>" alt="Imagem de <?php echo $m['nome_membro'] ?>">
                                </div>
                                <div class="member-description">
                                    <h2 class="member-name"><?php echo $m['nome_membro'] ?></h2>
                                    <p class="member-function">
                                        <?php if (!empty( $m['cargo_membro'] )) : echo $m['cargo_membro']; endif ?> - <?php if (!empty( $m['formacao_membro'] )) : echo $m['formacao_membro']; endif ?>                                        
                                    </p>                          
                                </div>
                            </div>
                        <?php } //end foreach               
                      ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>