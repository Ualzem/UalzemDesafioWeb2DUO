<!DOCTYPE html>
<html>

<head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title> <?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?> </title>

        <meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?>">

        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?>"/>
        <meta property="og:description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?>"/>
        <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
        <meta property="og:image" content=" <?php echo get_template_directory_uri(); ?> /img/logo.png"/>

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <!-- Inicio do Wordpress header -->
    <?php wp_head(); ?>
    <!-- Final do Wordpress header -->
</head>

<body>

    <header class="fixed">

        <div class="baner">
            <nav class="menu">

                <div class="superinfo-bg" id="superinfo">
                    <div class="superinfo">
                        <p>Peça seu Cartão de Cliente</p>
                        <p><a href=""><i class="fas fa-barcode"></i></a>Solicite a 2ª via do boleto</p>
                        <p>Encontre uma loja</p>
                        <p>Assine a Newsletter</p>

                        <div class="submit-line">
                            <input type="text" placeholder="Busca" />
                            <a href="https://github.com/Ualzem"><button class="submit-lente" type="submit">|
                            <i class="fa fa-search"></i> </button></a>
                        </div>
                        </form>

                    </div>
                </div>

                <div class="nav-bar" id='nav'>

                    <div class="logo-menu">
                        <a href="/desafio/"><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/logo.png" id="img"> </a>
                    </div>
                    <div class="nav-menu">
                        <ul class="ul-menu">
                            <a href=""><li>campanhas</li></a>
                            <a href=""><li>feminino
                                <ul>
                                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/feminino.png"></li>
                                </ul>
                               </li></a>
                               <a href=""><li>masculino
                                <ul>
                                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/masculino.png"></li>
                                </ul>
                            </li></a>
                            <a href=""><li>kids
                                <ul>
                                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/kids.png"></li>
                                </ul>
                            </li></a>
                            <a href=""><li>casa</li></a>
                            <a href=""><li>promoções</li></a>
                        </ul>
                    </div>
                </div>

            </nav>
        </div>
    </header>