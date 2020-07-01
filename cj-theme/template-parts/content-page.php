<main class="Main">
        <?php while(have_posts()): the_post();?>
        <section class="PostContent">
            <article>
                <h1><?php the_title();?></h1>
                <?php 
                    if(has_post_thumbnail()):
                        the_post_thumbnail('big', array(
                            'class' => 'PageImg'
                        ));
                    endif;
                    the_content();
                ?>
            </article>
        </section>
        <?php endwhile;?>
    </main>