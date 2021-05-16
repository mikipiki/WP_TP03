<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TimConf</title>

    <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/styles/main.css" />

    <script src="<?php bloginfo(template_url); ?>/scripts/main.js" defer></script>

    <?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>
    <div class="site-container main-grid">
        <header class="header wrapper">
            <a href="./index.html"><img src="<?php bloginfo(template_url); ?>/assets/images/svg_logo_timconf.svg" alt="logo TimConf" />
            </a>
            <nav class="menu">
                <div class="label"></div>
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle" />
                <div class="bouton_nav">
                    <a href="./index.html" class="menu_item">Accueil</a>
                    <a href="./conferencier.html" class="menu_item">À propos</a>
                    <a href="./conferencier.html" class="menu_item">Conférenciers</a>
                    <a href="./conferencier.html" class="menu_item">Conférences</a>
                    <a href="./index.html#forfaits" class="menu_item">Forfaits</a>
                </div>
            </nav>
        </header>