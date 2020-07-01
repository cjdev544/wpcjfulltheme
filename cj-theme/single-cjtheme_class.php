<?php get_header(); ?>
<div class="Content-container">
    <main class="Main">
        <?php while (have_posts()) : the_post(); ?>
            <section class="PostContent SingleClass">
                <article>
                    <h1><?php the_title(); ?></h1>
                    <?php
                        if (has_post_thumbnail()) :
                            the_post_thumbnail('mid', array(
                                'class' => 'PageImg'
                            ));
                        endif;
                    ?>
                    <?php
                        $startClass = get_field('hora_inicio');
                        $endClass = get_field('hora_fin');
                    ?>
                    <p class="SingleHour"><?php the_field('dia_de_clases'); ?> - <?php echo $startClass . ' a ' . $endClass ?></p>
                    <?php the_content(); ?>
                </article>
            </section>
        <?php endwhile; ?>
    </main>
    <?php get_sidebar('class'); ?>
</div>
<?php get_footer(); ?>