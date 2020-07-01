<?php
/* Template name: Template SOLO para página de Clases */
get_header();
?>
<div class="Content-container Page FullWidth Text-center">
    <main class="Main">
        <?php while (have_posts()) : the_post(); ?>
            <section class="PostContent">                
                <h1><?php the_title(); ?></h1>
                <?php the_content();?>
            </section>
        <?php endwhile; ?>
        <?php cjtheme_class_list(); ?>
    </main>
</div>
<?php get_footer(); ?> 