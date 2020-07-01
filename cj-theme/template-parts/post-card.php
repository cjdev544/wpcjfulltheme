<li class="Card Gradient BlogItem">
    <article>
        <?php 
            the_category();
            the_post_thumbnail('mid');
        ?>
        <div class="ClassContent">
            <a href="<?php the_permalink();?>">
                <h3><?php the_title();?></h3>
            </a>
            <p class="Meta">
                <span>Por: </span>
                <i class="fas fa-user-circle"></i>
                <?php the_author_posts_link();?>
                <span> Publicado el: </span>
                <?php the_time(get_option('date_format'));?>
            </p>
        </div>
    </article>                       
</li>