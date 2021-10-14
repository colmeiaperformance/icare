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
                <form action="">
                    <label for="">Nome e Sobrenome</label>
                    <input type="text" required>
                    <label for="">E-mail</label>
                    <input type="email" required>
                    <label for="">Mensagem</label>
                    <textarea name="" id="" cols="30" rows="7"></textarea>
                    <input type="submit" value="Enviar" class="ica-but but-conversion">
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>
