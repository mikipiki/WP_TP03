<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) :
        the_post(); ?>


        <div class="hero-conf set-bg" data-setbg="<?php echo the_field('wp_conferencier_hero'); ?>"></div>

        <div class="pres-conferencier wrapper">
            <div class="michael wrapper">
                <div class="presentateur">

                    <h1 class="title-mobile">
                        <?php the_title(); ?>
                    </h1>
                    <p class="paragraphe">
                        <?php the_content(); ?>
                    </p>
                </div>
            


                <div class="conferences">

                    <?php $posts = get_field('wp_conferenciers_conferences'); ?>
                    <?php if ($posts): ?>

                    <h2 class="section-conf">Ses conférences</h2>

                    <div class="conferences-michael">
                        <?php foreach ($posts as $p): ?>
                            
                            <div class="conf">
                                <?php echo get_the_post_thumbnail($p->ID); ?>
                                <div class="contenu">
                                    <h2><?php echo get_the_title($p->ID); ?></h2>
                                    <a href="<?php echo get_permalink($p->ID); ?>">En savoir plus</a>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <?php endif; ?>
                </div>




            </div>
            <div class="pos-droite">
            <div class="icon-conferencier desktop">
                <?php if (have_rows('wp_conferenciers_social')): ?>
                    <?php while (have_rows('wp_conferenciers_social')): the_row(); ?>

                        <?php if (get_sub_field('wp_social_name') === 'Instagram') : ?>
                            <a href="<?php the_sub_field('wp_social_content'); ?>"><i class="fab fa-instagram"></i></a>
                        <?php elseif (get_sub_field('wp_social_name') === 'Youtube') : ?>
                            <a href="<?php the_sub_field('wp_social_content'); ?>"><i class="fab fa-youtube"></i></a>
                        <?php elseif (get_sub_field('wp_social_name') === 'Dribbble') : ?>
                            <a href="<?php the_sub_field('wp_social_content'); ?>"><i class="fab fa-dribbble"></i></a>
                        <?php elseif (get_sub_field('wp_social_name') === 'Twitter') : ?>
                            <a href="<?php the_sub_field('wp_social_content'); ?>"><i class="fab fa-twitter"></i></a> 
                        <?php endif; ?>    

                    <?php endwhile; ?>
                    
                <?php endif; ?>    
                </div>



            <div>
                <?php if (have_rows('wp_conferenciers_photo')) : ?>

                    <div class="grid-gallerie">
                        <?php while (have_rows('wp_conferenciers_photo')): the_row(); ?>
                            <div class="gallerie set-bg" data-setbg="<?php echo the_sub_field('wp_photo_content'); ?>"></div>
                        <?php endwhile; ?>
                    </div>

                <?php else: ?>
                    <p>Aucun article disponible!</p>
                <?php endif; ?>

            </div>

            </div>
        </div>


        <div class="autre-evenements">


            <h3>Autres événements</h3>

            <div class="swiper-container carousel1" data-component="Carousel">
                <div class="swiper-wrapper">

                    <?php
                    query_posts(array(
                        'post_type' => 'wp_evenements',
                        'post_status' => 'publish',
                        'showposts' => -1,
                    ));
                    ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <div class="swiper-slide img1 set-bg"
                             data-setbg="<?php echo get_the_post_thumbnail_url(); ?>"></div>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>


                </div>
                <div class="swiper-pagination"></div>
            </div>


            <h3>Autres Conférenciers</h3>
            <div class="swiper-container carousel2" data-component="Carousel" data-carousel="split">
                <div class="swiper-wrapper">

                    <?php
                    query_posts(array(
                        'post_type' => 'wp_conferencier',
                        'post_status' => 'publish',
                        'showposts' => -1,
                    ));
                    ?>

                
                    <?php while (have_posts()) : the_post(); ?>

                    

                        <div class="swiper-slide conf1 set-bg"
                             data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                             <a href="<?php the_permalink(); ?>">
                                <div class="content-conf">
                                    <div class="name"><?php the_title(); ?></div>
                                    <div class="title"><?php echo the_field('wp_conferencier_title'); ?></div>
                                </div>
                            </a>    
                        </div>
                    

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        

    <?php endwhile; ?>
<?php else: ?>
    <p>Aucun article disponible!</p>
<?php endif; ?>
<?php get_footer(); ?>