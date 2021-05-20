<?php get_header(); ?>

        <div class="hero-conf"></div>

        <div class="pres-conferencier wrapper">
            <div class="michael wrapper">
                <div class="presentateur">

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                <h1 class="title-mobile">
                        <?php the_title(); ?>
                    </h1>
                    <p class="paragraphe">
                        <?php the_content(); ?>
                    </p>

                    
                <?php endwhile; ?>
                <?php else: ?>
                <p>Aucun article disponible!</p>
                <?php endif; ?>

                  
                </div>

                <div class="icon-conferencier mobile">
                    <a href="https://www.instagram.com/" target="_blank">
                        <div class="size instagram"></div>
                    </a>
                    <a href="https://dribbble.com/" target="_blank">
                        <div class="size dribble"></div>
                    </a>
                    <a href="https://twitter.com/" target="_blank">
                        <div class="size twitter"></div>
                    </a>
                    <a href="https://www.youtube.com/" target="_blank">
                        <div class="size youtube"></div>
                    </a>
                </div>

                <div class="conferences">
                    <h2 class="section-conf">Ses conférences</h2>

                    <div class="conferences-michael">


                    <?php if (have_posts()) : ?>

                    <?php
                        query_posts(array(
                            'post_type' => 'wp_conferences',
                            'post_status' => 'publish',
                            'showposts' => 3,
                        ));
                    ?>

                    <?php while (have_posts()) : the_post(); ?>


                        <div class="conf">
                            <?php the_post_thumbnail(); ?>
                            <div class="contenu">
                                <h2><?php the_title(); ?></h2>
                                <a href="">En savoir plus ></a>
                            </div>
                        </div>

                        
                    <?php endwhile; ?>
                    <?php else: ?>
                    <p>Aucun article disponible!</p>
                    <?php endif; ?>

                    </div>
                </div>
            </div>

            <div class="pos-droite">
                <div class="icon-conferencier desktop">
                    <a href="https://www.instagram.com/" target="_blank">
                        <div class="size instagram"></div>
                    </a>
                    <a href="https://dribbble.com/" target="_blank">
                        <div class="size dribble"></div>
                    </a>
                    <a href="https://twitter.com/" target="_blank">
                        <div class="size twitter"></div>
                    </a>
                    <a href="https://www.youtube.com/" target="_blank">
                        <div class="size youtube"></div>
                    </a>
                </div>

                <div class="grid-gallerie">
                    <div class="gallerie case1"></div>
                    <div class="gallerie case2"></div>
                    <div class="gallerie case3"></div>
                    <div class="gallerie case4"></div>
                </div>
            </div>
        </div>

        <div class="autre-evenements">
            <h3>Autres événements</h3>

            <div class="swiper-container carousel1" data-component="Carousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide img1"></div>
                    <div class="swiper-slide img2"></div>
                    <div class="swiper-slide img3"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <h3>Autres Conférenciers</h3>
            <div class="swiper-container carousel2" data-component="Carousel" data-carousel="split">
                <div class="swiper-wrapper">
                    <div class="swiper-slide conf1">
                        <div class="content-conf">
                            <div class="name">Michaël Janes-Villiard</div>
                            <div class="title">Modélisateur 3D</div>
                        </div>
                    </div>
                    <div class="swiper-slide conf2">
                        <div class="content-conf">
                            <div class="name">Noémie Tremblay</div>
                            <div class="title">Artiste</div>
                        </div>
                    </div>
                    <div class="swiper-slide conf3">
                        <div class="content-conf">
                            <div class="name">Julien Lacroix</div>
                            <div class="title">Artiste</div>
                        </div>
                    </div>
                    <div class="swiper-slide conf4">
                        <div class="content-conf">
                            <div class="name">Eleanor Rigby</div>
                            <div class="title">Modélisatrice 3D</div>
                        </div>
                    </div>
                    <div class="swiper-slide conf5">
                        <div class="content-conf">
                            <div class="name">Lucas Gagnon</div>
                            <div class="title">Artiste</div>
                        </div>
                    </div>
                    <div class="swiper-slide conf6">
                        <div class="content-conf">
                            <div class="name">William Peak</div>
                            <div class="title">Modéllisateur 3D</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>