<?php 

/*
Template Name: template-Prog
 */

?>  



<?php get_header(); ?>

    <div class="wrapper">

        

            <?php if (have_posts()) : ?>
                
                <?php
                    query_posts(array(
                        'post_type' => 'wp_conferences',
                        'post_status' => 'publish',
                        'showposts' => -1,
                    ));
                ?>

        <div class="pagePhp__container">
            <?php while (have_posts()) : the_post(); ?>

                <div class="pagePhp">

                    <?php the_post_thumbnail(); ?>
                    <?php the_title(); ?>   
                    <?php echo the_field('wp_conference_date'); ?>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>"> En savoir plus</a>

                </div> 


                
            <?php endwhile; ?>
            <?php else: ?>
            <p>Aucun article disponible!</p>
            <?php endif; ?>
        </div>

    </div>


       
<?php get_footer(); ?>
