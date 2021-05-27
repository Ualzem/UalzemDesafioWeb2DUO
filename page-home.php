<?php
// Template Name : Home
get_header();
?>

<!-- Inicio do loop da página -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <section class="promo">

        <div class="container-box">

            <div class="box a">
           
                <div class="oferta">
                    <h4>preencha a proposta de adesão</h4>

                </div>


            </div>
            <div class="box b">

                <h4>beleza</h4>
                <h2>ruiva fatal</h2>
                <p>Que o ruivo é o tom do momento todo mundo sabe</p>
                <p><button>saiba mais</button></p>

            </div>
            <div class="box c">
                <div class="info">
                    <h2>Promoção Bob Esponja</h2>
                    <p>Na compra de uma peça Bob Esponja, ganhe um brinde.</p>
                    <p><button>continue lendo</button></p>
                </div>
            </div>

            <div class="box e">
                <h4>moda logo</h4>
                <h2>Paixão por Jeans</h2>
                <p>Versátil, combina com vários estilos diferentes.</p>
                <p><button>saiba mais</button></p>
            </div>
            <div class="box f">
                <h4>beleza</h4>
                <h2>Poder Instantâneo</h2>
                <p>Batom vermelho deixa toda mulher poderosa.</p>
                <p><button>saiba mais</button></p>
            </div>
        </div>

    </section>


    <section class="map">
        <div class="map1"></div>
        <div class="map2">
            <div class="location">
                <div class="location-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="location-info">
                    achar minha localização automaticamente

                </div>
            </div>
            <div class="divisory">
                <p>|</p>
                <p>ou</p>
                <p>|</p>
            </div>
            <div class="cep">
                <div class="cep-info">digite o cep de onde você está</div>
                <div class="cep-search">
                    <div class="cep-search-field">
                        <input type="text" placeholder="cep">
                        <input type="submit" value="procurar">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="newsletter">

        <form class="newsletter-form">
            <input type="text" placeholder="Seu e-mail">
            <button type="submit">Enviar</button>
        </form>

        <div class="newsletter-info">

            <p>Siga Lojas Logo nas redes Sociais</p>
            <ul>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-youtube"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>


            </ul>

        </div>
    </section>
<!-- Fim do loop da página -->
<?php endwhile; else: endif; ?>

    <?php get_footer(); ?>

