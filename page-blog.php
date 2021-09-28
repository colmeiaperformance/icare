<?php get_header(); ?>

<main id="ica-content">
    <div class="ica-com com-carousel swiper-container">
        <div class="swiper-wrapper">
            <div class="com-item swiper-slide">
                <div class="item-media swiper-slide-img">
                    <img src="<?php echo get_template_directory_uri() . '/images/banner-sobre.jpg' ?>" alt="" />
                </div>
                <div class="item-content ica-the the-highlight">
                    <h1 class="item-title"><span>Lorem</span> ipsum Lorem ipsum lorem ipsum
                    <span> lorem</span></h1>
                    <a href="#" class="ica-but but-light">Leia Mais</a>
                </div>
            </div>
            <div class="com-item swiper-slide">
                <div class="item-media swiper-slide-img">
                    <img src="<?php echo get_template_directory_uri() . '/images/banner-sobre.jpg' ?>" alt="" />
                </div>
                <div class="item-content ica-the the-highlight">
                    <h1 class="item-title"><span>Consultoria</span> especializada em estratégia e inovação do <span>meio
                            ambiente</span></h1>
                    <a href="#" class="ica-but but-light">Leia Mais</a>
                </div>
            </div>
        </div>
    </div>
    <section class="ica-sec sec-bolg" id="blog">
        <div class="ica-wrapper">
            <div class="sec-notice">
                <div class="first-notice">  
                    <div class="item-media">
                        <img src="<?php echo get_template_directory_uri() . '/images/blog-media2.jpg' ?>" alt="">
                    </div>
                    <div class="notice-content">
                        <div class="content-title">
                            <h1>Lorem ipsum Lorem ipsum Lorem ipsum</h1>
                        </div>
                        <div class="content-description">
                            <p class="ica-the the-gray-222">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        </div>
                        <div class="notice-footer">
                            <a href="#" class="ica-but but-conversion">Leia Mais</a>
                        </div>
                    </div>
                </div>
                <div class="secondary-notices">
                    <div class="notice-card">
                        <div class="item-media">
                            <img src="<?php echo get_template_directory_uri() . '/images/blog-media.jpg' ?>" alt="notice">
                            <p class="media-title"></p>
                        </div>
                        <div class="media-description">
                            <p>Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        </div>
                        <div class="media-footer">
                            <a href="#" class="ica-but but-conversion">Leia Mais</a>
                        </div>
                    </div>
                    <div class="notice-card">
                        <div class="item-media">
                            <img src="<?php echo get_template_directory_uri() . '/images/blog-media.jpg' ?>" alt="notice">
                            <p class="media-title"></p>
                        </div>
                        <div class="media-description">
                            <p>Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        </div>
                        <div class="media-footer">
                            <a href="#" class="ica-but but-conversion">Leia Mais</a>
                        </div>
                    </div> <div class="notice-card">
                        <div class="item-media">
                            <img src="<?php echo get_template_directory_uri() . '/images/blog-media.jpg' ?>" alt="notice">
                            <p class="media-title"></p>
                        </div>
                        <div class="media-description">
                            <p>Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        </div>
                        <div class="media-footer">
                            <a href="#" class="ica-but but-conversion">Leia Mais</a>
                        </div>
                    </div>
                    <div class="notice-card">
                        <div class="item-media">
                            <img src="<?php echo get_template_directory_uri() . '/images/blog-media.jpg' ?>" alt="notice">
                            <p class="media-title"></p>
                        </div>
                        <div class="media-description">
                            <p>Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        </div>
                        <div class="media-footer">
                            <a href="#" class="ica-but but-conversion">Leia Mais</a>
                        </div>
                    </div>
                    <div class="notice-card">
                        <div class="item-media">
                            <img src="<?php echo get_template_directory_uri() . '/images/blog-media.jpg' ?>" alt="notice">
                            <p class="media-title"></p>
                        </div>
                        <div class="media-description">
                            <p>Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        </div>
                        <div class="media-footer">
                            <a href="#" class="ica-but but-conversion">Leia Mais</a>
                        </div>
                    </div>
                    <div class="notice-card">
                        <div class="item-media">
                            <img src="<?php echo get_template_directory_uri() . '/images/blog-media.jpg' ?>" alt="notice">
                            <p class="media-title"></p>
                        </div>
                        <div class="media-description">
                            <p>Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        </div>
                        <div class="media-footer">
                            <a href="#" class="ica-but but-conversion">Leia Mais</a>
                        </div>
                    </div>
                </div>
            </div>
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
					<dd><a href="#">Biodiversidade</a></dd>
					<dd><a href="#">Clima</a></dd>
					<dd><a href="#">Finanças Sustentáveis</a></dd>
					<dd><a href="#">Escritório Virtual</a></dd>
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
        </div>
    </section>
    
</main>

<?php get_footer() ?>