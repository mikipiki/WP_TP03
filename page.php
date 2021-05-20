  
<?php get_header(); ?>

<div class="wrapper">


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


<?php the_title(); ?>
<?php the_content(); ?>
    
<?php endwhile; ?>
<?php else: ?>
<p>Aucun article disponible!</p>
<?php endif; ?>


</div>


       
<?php get_footer(); ?>
