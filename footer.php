
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
                        <a href="https://www.instagram.com/" target="_blank">
                            <div class="size instagram"></div>
                        </a>
                        <a href="https://dribbble.com/" target="_blank">
                            <div class="size dribble"></div>
                        </a>
                        <a href="https://twitter.com/HPHIGHPEN" target="_blank">
                            <div class="size twitter"></div>
                        </a>
                        <a href="https://www.youtube.com/" target="_blank">
                            <div class="size youtube"></div>
                        </a>
                    </div>
                    <div class="copyrights">
                        © 2020 TimConf. Tous droits réservés
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer() ?>
</body>

</html>