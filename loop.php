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




