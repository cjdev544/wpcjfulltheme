<?php 
/* Template name: Página con sidebar a la izquierda */
get_header();
?>
<div class="Content-container Page Sidebar-left">
    <?php 
        get_sidebar();
        get_template_part('template-parts/content-page');
    ?>
</div>
<?php get_footer();?>