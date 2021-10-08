<aside class="aside-blog">
    <div class="aside-search">
        <form action="" method="post" class="form-search">
            <input type="text" name="search" class="ica-input">
            <input type="submit" value="Buscar" class="ica-but but-conversion">
        </form>
    </div>

    <dl class="footer-item">
        <dt>Mais Lidas</dt>
        <dd><a href="#">Lorem ipsum</a></dd>
        <dd><a href="#">Lorem ipsum</a></dd>
        <dd><a href="#">Lorem ipsum</a></dd>
        <dd><a href="#">Lorem ipsum</a></dd>
    </dl>
    <dl class="footer-item">
        <dt>Categorias</dt>

        <?php wp_list_categories( array(
                'title_li'    => '',
                'hide_empty'  => false
                ) );
            ?>

    </dl>
    <dl class="footer-item">
        <dt>Assine nossa newsletter</dt>
        <form action="" class="form-news">
            <input type="text" placeholder="Nome" class="input-news">
            <input type="text" placeholder="E-mail" class="input-news">
            <input type="submit" value="Enviar" class="ica-but but-conversion">
        </form>
    </dl>


</aside>