<aside class="aside-blog">
    <div class="aside-search">
        <form method="get" role="search" id="searchform" class="form-search" action="<?php bloginfo('home'); ?>/">
            <input type="text" name="search" id="search" class="ica-input">
            <input type="submit" id="searchside" value="Buscar" class="ica-but but-conversion">
        </form>
    </div>

    <dl class="footer-item">
        <?php
        if ( function_exists('wpp_get_mostpopular') ) { ?>
            <dt>Mais Lidas</dt>
            <?php
            /* Get up to the top 5 commented posts from the last 7 days */
            wpp_get_mostpopular(array(
                'limit'     => 5,
                'post_html' => '<dd><a href="{url}">{title}</a></dd>'
            ));
        }
        ?>
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