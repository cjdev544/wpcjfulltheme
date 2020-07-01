<aside class="Author">
    <h3><?php _e('Información del Autor:', 'cjtheme');?></h3>
    <div class="Author-info">
        <figure>
            <?php echo get_avatar(get_the_author_meta('ID'), 500);?>
        </figure>
        <ul>
            <li>
                <i class="fas fa-user-circle"></i>
                <?php the_author();?>
            </li>
            <li>
                <i class="fas fa-male"></i>
                <?php echo get_the_author_meta('first_name').' '.get_the_author_meta('last_name');?>
            </li>
            <li>
                <i class="fas fa-envelope"></i>
                <?php echo get_the_author_meta('user_email');?>
            </li>
            <li>
                <i class="fas fa-sitemap"></i>
                <a href="<?php get_the_author_meta('user_url');?>" target="_blank"></a>
                <?php echo get_the_author_meta('user_url');?>
            </li>
            <li>
                <i class="fas fa-calendar"></i>
                <?php echo get_the_author_meta('user_registered');?>
            </li>
            <li>
                <i class="fas fa-address-book"></i>
                <?php echo get_the_author_meta('description');?>
            </li>
            <li>
                <i class="fas fa-newspaper"></i>
                <p>Post Escritos: </p>
                <?php echo get_the_author_posts();?>
            </li>
        </ul>
    </div>
</aside><hr>