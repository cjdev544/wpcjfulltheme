</section>
<!-- FINAL DE SECTION MAIN -->
<footer class="Footer">
    <section class="Footer-container">
        <div class="FooterMenu">
            <?php
            if (has_nav_menu('main_menu')) :
                wp_nav_menu(array(
                    'theme_location' => 'main_menu',
                    'container' => 'nav',
                    'container_class' => 'Menu Menu-footer'
                ));
            else : ?>
                <nav class="Menu">
                    <ul>
                        <?php wp_list_pages('title_li'); ?>
                    </ul>
                </nav>
            <?php endif;

            if (has_nav_menu('social_menu')) :
                wp_nav_menu(array(
                    'theme_location' => 'social_menu',
                    'container' => 'nav',
                    'container_class' => 'SocialMedia',
                    'link_before' => '<span class="sr-text">',
                    'link_after' => '</span>'
                ));
            endif;
            ?>
        </div>
        <div>
            <p class="Copy">
                &copy;<?php echo date('Y') . __(' Derechos Reservados', 'cjtheme'); ?>
                <a href="#" target="_blank">CJDev</a>
            </p>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>