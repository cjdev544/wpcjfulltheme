<?php get_header(); ?>
<div class="Content-container">
    <main class="Main">
        <?php  
            if(is_category()):
                $term_title = __('Resultados para la categoría:', 'cjtheme');
            endif;
            if(is_tag()):
                $term_title = __('Resultados para la etiqueta:', 'cjtheme');
            endif;
        ?>
        <div class="TermsResults">
            <h3><?php echo $term_title; ?></h3>
            <mark><?php single_term_title();?></mark><hr>
        </div>
        <?php  
            if(have_posts()): while(have_posts()): the_post();
                get_template_part( 'template-parts/content-main');
            endwhile; else:
                get_template_part( 'template-parts/content-none');
            endif;
        ?>
    </main>
    <?php  
        get_template_part( 'template-parts/pagination');
        get_sidebar();
    ?>
</div>
<?php get_footer(); ?>