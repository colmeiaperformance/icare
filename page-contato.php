<?php get_header(); ?>
<?php get_template_part('template-parts/header-pages'); ?>

<!-- O conteúdo vai aqui -->
<main>
    <section class="ica-sec sec-contact">
        <div class="ica-wrapper">
            <div class="sec-media">
                <img src="<?php echo get_template_directory_uri() . '/images/contact.jpg' ?>" alt="" />
            </div>
            <div class="sec-form">
                <form action="">
                    <label for="">Nome e Sobrenome</label>
                    <input type="text" required>
                    <label for="">E-mail</label>
                    <input type="email" required>
                    <label for="">Mensagem</label>
                    <textarea name="" id="" cols="30" rows="7"></textarea>
                    <input type="submit" value="Enviar Contato" class="ica-but but-conversion">
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>