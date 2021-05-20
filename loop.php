<?php if (have_posts()) : ?>

<?php
    query_posts(array(
        'post_type' => 'wp_conferencier',
        'post_status' => 'publish',
        'showposts' => -1,
    ));
?>

<?php while (have_posts()) : the_post(); ?>

    
<?php endwhile; ?>
<?php else: ?>
<p>Aucun article disponible!</p>
<?php endif; ?>





<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    
<?php endwhile; ?>
<?php else: ?>
<p>Aucun article disponible!</p>
<?php endif; ?>




                    <div class="conferences">
                    <h2 class="section-conf">Ses conférences</h2>

                    <div class="conferences-michael">

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

                        <?php wp_reset_query(); ?>

                    </div>
                </div>



