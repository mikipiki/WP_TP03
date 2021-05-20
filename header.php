<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TimConf</title>

    <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/styles/main.css" />

    <?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>
    <div class="site-container main-grid">
        <header class="header wrapper">
            <a href="<?php bloginfo('url'); ?>"><img src="<?php echo the_field('wp_logo_site', 'option') ?>" alt="logo TimConf" />
            </a>
            <nav class="menu">
                <div class="label"></div>
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle" />

                <?php wp_nav_menu(array(
                    'theme_location' => 'menu_principal',
                    'container' => 'nav',
                    'container_class'=> 'bouton_nav',
                )); ?>
            </nav>
        </header>