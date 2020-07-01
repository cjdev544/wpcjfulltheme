<?php get_header();?>
    <div class="Content-container Page FullWidth Text-center">
        <main class="Main">
            <ul class="BlogList">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/post-card');?>
                <?php endwhile; ?>
            </ul>
        </main>
    </div>
<?php get_footer();?>