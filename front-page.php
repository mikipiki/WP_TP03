  
<?php get_header(); ?>

        <div class="hero wrapper">
            <div class="content-hero">



            <?php if (have_posts()) : ?>

            <?php
                query_posts(array(
                    'post_type' => 'page',
                    'post_status' => 'publish',
                    'showposts' => -1,
                ));
            ?>

            <?php while (have_posts()) : the_post(); ?>


                <h1><?php echo the_field('wp_hero_titre'); ?></h1>
                <div class="date"><?php echo the_field('wp_hero_dates'); ?></div>
                <div class="descrip"><?php echo the_field('wp_hero_description'); ?></div>
                

                
            <?php endwhile; ?>
            <?php else: ?>
            <p>Aucun article disponible!</p>
            <?php endif; ?>

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
                
                <?php if (have_posts()) : ?>

                    <?php
                        query_posts(array(
                            'post_type' => 'wp_partenaires',
                            'post_status' => 'publish',
                            'showposts' => -1,
                        ));
                    ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <?php the_post_thumbnail(); ?>
                        
                    <?php endwhile; ?>
                    <?php else: ?>
                    <p>Aucun article disponible!</p>
                    <?php endif; ?>

                </div>

            </div>
        </section>

        <section class="forfaits" id="forfaits">
            <div class="wrapper">
                <h2 class="titre-forfait">Nos forfaits</h2>
                <div class="nos_forfaits">

                    <div class="forfait package1">
                        <?php if (have_posts()) : ?>

                        <?php
                            query_posts(array(
                                'post_type' => 'wp_forfaits',
                                'post_status' => 'publish',
                                'name' => '1 jour',
                                'showposts' => 1,
                            ));
                        ?>

                        <?php while (have_posts()) : the_post(); ?>

                        <h2><?php echo the_field('wp_forfaits_souslabel'); ?><br /><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                            <a href="">
                                <div class="pos-bouton-forfait">
                                    <div class="bouton">Acheter</div>
                                </div>
                            </a>

                            <?php endwhile; ?>
                            <?php else: ?>
                            <p>Aucun article disponible!</p>
                            <?php endif; ?>
                    </div>

                       
                        

                    <div class="forfait package2">

                    <?php if (have_posts()) : ?>

                    <?php
                        query_posts(array(
                            'post_type' => 'wp_forfaits',
                            'post_status' => 'publish',
                            'name' => '1 jour',
                            'showposts' => 1,
                        ));
                    ?>

                    <?php while (have_posts()) : the_post(); ?>

                    <h2><?php echo the_field('wp_forfaits_souslabel'); ?><br /><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                        <a href="">
                            <div class="pos-bouton-forfait">
                                <div class="bouton">Acheter</div>
                            </div>
                        </a>

                        <?php endwhile; ?>
                        <?php else: ?>
                        <p>Aucun article disponible!</p>
                        <?php endif; ?>
                      

                    </div>

                    <div class="forfait package3">

                    <?php if (have_posts()) : ?>

                    <?php
                        query_posts(array(
                            'post_type' => 'wp_forfaits',
                            'name' => '1 jour',
                            'post_status' => 'publish',
                            'showposts' => 1,
                        ));
                    ?>

                    <?php while (have_posts()) : the_post(); ?>

                    <h2><?php echo the_field('wp_forfaits_souslabel'); ?><br /><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                        <a href="">
                            <div class="pos-bouton-forfait">
                                <div class="bouton">Acheter</div>
                            </div>
                        </a>

                        <?php endwhile; ?>
                        <?php else: ?>
                        <p>Aucun article disponible!</p>
                        <?php endif; ?>


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

                        <a href="<?php the_permalink(); ?>">
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
