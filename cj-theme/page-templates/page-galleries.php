<?php
/* Template name: Template para la Galería de Fotos */
get_header();
?>
<div class="Content-container Page FullWidth Text-center">
     <main class="Main">
        <?php while (have_posts()) : the_post(); ?>
            <section class="PostContent">                
                <h1><?php the_title(); ?></h1>
                <?php 
                    // Obtener la galería de la página actual
                    $gallery = get_post_gallery( get_the_ID(), false );
                    // Obtener los IDs de las imágenes
                    $gellery_img_ID = explode(',', $gallery['ids']);
                ;?>
                <ul class="GalleryImg">
                    <?php
                        $i = 1;
                        foreach($gellery_img_ID as $id):
                            $size = ($i == 4 || $i == 6) ? 'portrait' : 'min';
                            $imageThumb = wp_get_attachment_image_src($id, $size)[0];
                            $image = wp_get_attachment_image_src($id, 'full')[0];
                    ?>
                        <li>
                            <a href="<?php echo $image;?>" data-lightbox="gallery">
                                <img src="<?php echo $imageThumb;?>" alt="Imagen">
                            </a>
                        </li>
                    <?php $i++; endforeach;?>
                </ul>
            </section>
        <?php endwhile; ?>
    </main>
</div>
<?php get_footer();?>