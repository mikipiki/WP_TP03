  
<?php get_header(); ?>

        <div class="hero wrapper">
            <div class="content-hero">
                <h1>3D vs. Réalité</h1>
                <div class="date">01 - 02 - 03 Août 2021</div>
                <div class="descrip">
                    La conférence #1 pour les amateurs et les pros de
                    l’industrie. Venez apprendre des nouveaux trucs et vous
                    mettre à jour sur les dernières technologies utilisé
                    dans le monde du 3D.
                </div>
                <div class="pos-bouton">
                    <a href="" class="bouton">
                        <p>Forfaits</p>
                    </a>
                </div>
            </div>
        </div>

        <section class="partenaires">
            <div class="wrapper">
                <h2>Nos partenaires</h2>
                <div class="part-sect1">
                    <img src="assets/images/img_logo_adobe.png" alt="logo adobe" class="logo_partenaires1" />
                    <img src="assets/images/img_logo_substance.png" alt="logo substance" class="logo_partenaires2" />
                    <img src="assets/images/img_logo_autodesk.png" alt="logo autodesk" class="logo_partenaires3" />
                </div>

                <div class="part-sect2">
                    <img src="assets/images/img_logo_blender.png" alt="logo
                        blender" class="logo_partenaires4" />
                    <img src="assets/images/img_logo_zbrush.png" alt="logo zbrush" class="logo_partenaires5" />
                </div>
            </div>
        </section>

        <section class="forfaits" id="forfaits">
            <div class="wrapper">
                <h2 class="titre-forfait">Nos forfaits</h2>
                <div class="nos_forfaits">
                    <div class="forfait package1">
                        <h2>Billets<br />une journée</h2>
                        <ul>
                            <li>accès au site une journée</li>
                            <li>accès aux comférences</li>
                            <li>rencontre avec les conférenciers</li>
                        </ul>
                        <a href="">
                            <div class="pos-bouton-forfait">
                                <div class="bouton">Acheter</div>
                            </div>
                        </a>
                    </div>

                    <div class="forfait package2">
                        <h2>
                            Billets <br />
                            2 jours
                        </h2>
                        <ul>
                            <li>accès au site deux journées</li>
                            <li>accès aux comférences</li>
                            <li>rencontre avec les conférenciers</li>
                        </ul>
                        <a href="">
                            <div class="pos-bouton-forfait">
                                <div class="bouton">Acheter</div>
                            </div>
                        </a>
                    </div>

                    <div class="forfait package3">
                        <h2>
                            Billets <br />
                            3 jours
                        </h2>
                        <ul>
                            <li>accès au site trois journées</li>
                            <li>accès aux comférences</li>
                            <li>rencontre avec les conférenciers</li>
                        </ul>
                        <a href="">
                            <div class="pos-bouton-forfait">
                                <div class="bouton">Acheter</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        

        <section class="conferenciers">
            <div class="wrapper">
                <h2>Nos Conférenciers</h2>

                <div class="grid_conf">
                    
                <?php if (have_posts()) : ?>

                    <?php
                        query_posts(array(
                            'post_type' => 'wp_conferencier',
                            'post_status' => 'publish',
                            'showposts' => -1,
                        ));
                    ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <a href="">
                            <div class="speaker">
                                <?php the_post_thumbnail(); ?>
                                <h4><?php the_title(); ?></h4>

                                    <div class="title-speaker"><?php echo the_field('wp_conferencier_title'); ?></div>
                                
                            </div>
                        </a>
                        
                    <?php endwhile; ?>
                    <?php else: ?>
                    <p>Aucun article disponible!</p>
                <?php endif; ?>

                </div>
            </div>
        </section>

        <?php get_footer(); ?>
