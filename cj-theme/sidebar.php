<aside class="Sidebar">
    <?php
        if(is_active_sidebar('main_sidebar')):
            dynamic_sidebar('main_sidebar');
        else:
    ?>
        <article class="Widget">
            <h3><?php _e('Buscar', 'cjtheme');?></h3>
            <?php get_search_form();?>
        </article>
    <?php endif;?>
</aside>