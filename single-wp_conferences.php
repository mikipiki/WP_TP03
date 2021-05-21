  
<?php get_header(); ?>


    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    
        <div class="wrapper">

            <div class="hero set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>"></div>
            
                <h1><?php the_title(); ?></h1>
                <?php the_field('wp_conference_date'); ?>
                <?php the_field('wp_conference_lieu'); ?>
                <?php the_content(); ?>
        

                <?php $posts = get_field('wp_conference_conrencier'); ?>
                <?php if ($posts): ?>

                    <?php foreach ($posts as $p): ?>
                        <?php echo get_the_post_thumbnail($p->ID); ?>
                        <h2><?php echo get_the_title($p->ID); ?></h2>
                    <?php endforeach; ?>

            
                <?php endif; ?> 
                

            

        </div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    <?php else: ?>
    <p>Aucun article disponible!</p>
    <?php endif; ?>


             
                

            
       
<?php get_footer(); ?>
