
        <footer>
            <div class="wrapper">
            <a href="<?php bloginfo('url'); ?>"><img src="<?php echo the_field('wp_logo_site', 'option') ?>" alt="logo TimConf" />
            </a>
                <?php wp_nav_menu(array(
                    'theme_location' => 'menu_footer',
                    'container'      => 'div',
                    'container_class'=> 'menu_footer',
                )); ?>
                
                <div class="ligne"></div>



                <div class="pos-footer">
                    <div class="icons">
                        <?php if (have_rows('wp_footer_social')): ?>
                            <?php while (have_rows('wp_footer_social')): the_row(); ?>
                                
                                <?php if (get_sub_field('wp_footer_social_nom') === 'Instagram') : ?>
                                    <a href="<?php the_sub_field('wp_footer_social_url'); ?>"><i class="fab fa-instagram"></i></a>
                                <?php elseif (get_sub_field('wp_footer_social_nom') === 'Youtube') : ?>
                                    <a href="<?php the_sub_field('wp_footer_social_url'); ?>"><i class="fab fa-youtube"></i></a>
                                <?php elseif (get_sub_field('wp_footer_social_nom') === 'Dribbble') : ?>
                                    <a href="<?php the_sub_field('wp_footer_social_url'); ?>"><i class="fab fa-dribbble"></i></a>
                                <?php elseif (get_sub_field('wp_footer_social_nom') === 'Twitter') : ?>
                                    <a href="<?php the_sub_field('wp_footer_social_url'); ?>"><i class="fab fa-twitter"></i></a> 
                                <?php endif; ?>    
                                
                            <?php endwhile; ?>
                        
                        <?php endif; ?> 
                    </div>
                    <div class="copyrights">
                        © 2020 TimConf. Tous droits réservés
                    </div>
                </div>



            </div>
        </footer>
    </div>
	<script src="<?php bloginfo('template_url'); ?>/scripts/jquery-3.2.1.min.js"></script>

    <script src="<?php bloginfo(template_url); ?>/scripts/main.js" defer></script>

    <?php wp_footer() ?>

</body>

</html>