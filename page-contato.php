<?php get_header(); ?>
<?php get_template_part('template-parts/header-pages'); ?>

<?php
//Variables
$imagem_contato = get_field('imagem_contato', 'option');
$posicao_da_imagem_contato = get_field('posicao_da_imagem_contato', 'option');

?>
<!-- O conteúdo vai aqui -->
<main>
    <section class="ica-sec sec-contact">
        <div class="ica-wrapper">
            <div class="sec-media">
                <img src="<?php the_field('imagem_contato'); ?>" alt="" />
            </div>
            <div class="sec-form">
            <?php echo do_shortcode('[contact-form-7 id="273" title="Formulário de contato"]'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>
