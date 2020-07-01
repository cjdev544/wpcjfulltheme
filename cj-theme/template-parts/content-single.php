<p>
    <small>
        <i class="fas fa-calendar"></i>
        <?php the_time(get_option('date_format'));?>
        &bull;
        <i class="fas fa-user-circle"></i>
        <?php the_author_posts_link();?> 
    </small>
</p>
<p>
    <i class="fas fa-tags"></i>
    <?php _e('Categorías: ', 'cjtheme'); the_category(', ')?>
</p>
<p>
    <i class="fas fa-hashtag"></i>
    <?php _e('Etiquetas: ', 'cjtheme'); the_tags(', ');?>
</p>
