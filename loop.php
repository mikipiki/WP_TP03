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









<?php if (have_rows('wp_conferenciers_social')): ?>
                <?php while (have_rows('wp_conferenciers_social')): the_row(); ?>

                    <div class="pos-droite">
                        <div class="icon-conferencier desktop">
                        
                            <?php if (get_sub_field('wp_social_name') === 'Instagram') : ?>
                                <a href="<?php the_sub_field('wp_social_content'); ?>">Instagram</a>
                            <?php elseif (get_sub_field('wp_social_name') === 'Youtube') : ?>
                                <a href="<?php the_sub_field('wp_social_content'); ?>">Youtube</a>
                            <?php elseif (get_sub_field('wp_social_name') === 'Dribbble') : ?>
                                <a href="<?php the_sub_field('wp_social_content'); ?>">Dribble</a>
                            <?php elseif (get_sub_field('wp_social_name') === 'Twitter') : ?>
                                <a href="<?php the_sub_field('wp_social_content'); ?>">twitter</a> 
                            <?php endif; ?>    
                        </div>

                    </div>   

                <?php endwhile; ?>
                
            <?php endif; ?>

