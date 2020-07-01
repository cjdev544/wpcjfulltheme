<?php get_header('front');?>

    <section class="Welcome Text-center Section">
        <h2 class="HSecition"><?php the_field('encabezado_bienvenida');?></h2>
        <p><?php the_field('texto_bienvenida');?></p>
    </section>

    <div class="AreasSection">
        <ul class="Area-container">
            <li class="AreaItem">
                <?php 
                    $area1 = get_field('area_1');
                    $img = wp_get_attachment_image_src($area1['area_imagen'], 'mid')[0];
                ;?>
                <img src="<?php echo esc_attr($img);?>" alt="">
                <p><?php echo esc_html($area1['area_titulo']);?></p>
            </li>
            <li class="AreaItem">
                <?php 
                    $area2 = get_field('area_2');
                    $img = wp_get_attachment_image_src($area2['area_imagen'], 'mid')[0];
                ;?>
                <img src="<?php echo esc_attr($img);?>" alt="">
                <p><?php echo esc_html($area2['area_titulo']);?></p>
            </li>
            <li class="AreaItem">
                <?php 
                    $area3 = get_field('area_3');
                    $img = wp_get_attachment_image_src($area3['area_imagen'], 'mid')[0];
                ;?>
                <img src="<?php echo esc_attr($img);?>" alt="">
                <p><?php echo esc_html($area3['area_titulo']);?></p>
            </li>
            <li class="AreaItem">
                <?php 
                    $area4 = get_field('area_4');
                    $img = wp_get_attachment_image_src($area4['area_imagen'], 'mid')[0];
                ;?>
                <img src="<?php echo esc_attr($img);?>" alt="">
                <p><?php echo esc_html($area4['area_titulo']);?></p>
            </li>
        </ul>
    </div>

    <section class="HomeClass">
        <h2 class="Text-center">Nuestras Clases</h2>
        <?php cjtheme_class_list(4); ?>
        <div class="HomeButton">
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Clases')));?>" class="HomeButton">
                Ver todas las Clases
            </a>
        </div>
    </section>

    <section class="Instrurtors">
        <div class="Instructor-container Section">
            <h2 class="Text-center">Nuestros Instructores</h2>
            <p class="Text-center">Instructores profesionales que te ayudaran a lograr tus objetivos.</p>

            <ul class="InstructorsList">
                <?php 
                    $args = array(
                        'post_type' => 'cjtheme_instructors',
                        'posts_per_page' => 4
                    );
                    $instrutors = new WP_Query($args);
                    while($instrutors->have_posts()): $instrutors->the_post();
                ;?>
                    <li class="Instructor">
                        <?php the_post_thumbnail('mid');?>
                        <div class="InstructorContent Text-center">
                            <h3><?php the_title();?></h3>
                            <p><?php the_content();?></p>
                            <div class="InstructorTag">
                                <?php 
                                    $tags = get_field('especialidad');
                                    foreach($tags as $tag):
                                ;?>
                                        <span class="Tag"><?php echo esc_html($tag);?></span>

                                    <?php endforeach;?>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; wp_reset_postdata();?>
            </ul>
        </div>
    </section>

    <?php 
        $args = array(
            'post_type' => 'cjtheme_comentsotro',
            'posts_per_page' => 1
        );
        $imgtestimonials = new WP_Query($args);
        while($imgtestimonials->have_posts()): $imgtestimonials->the_post();
        $img = get_the_post_thumbnail_url();
    ;?>
    
    <section class="Testimonials" style="
                                    background-image: 
                                        linear-gradient(rgba(0,0,0,.75), rgba(0,0,0,.75)),
                                        url(<?php echo esc_url($img);?>);
                                    ">
        <div class="Testimonials-contain">
            <h2 class="Text-center"><?php the_title();?></h2>
        <?php endwhile; wp_reset_postdata();?>
            <ul class="TestimonialsList">
            <?php 
                $args = array(
                    'post_type' => 'cjtheme_coments',
                    'posts_per_page' => 5
                );
                $testimonials = new WP_Query($args);
                while($testimonials->have_posts()): $testimonials->the_post();
            ;?>
                <li class="Testimonial Text-center">
                    <blockquote>
                        <p><?php the_content();?></p>
                    </blockquote>
                    <footer>
                        <?php the_post_thumbnail('thumbnail');?>
                        <p><?php the_title();?></p>
                    </footer>
                </li>
                <?php endwhile; wp_reset_postdata();?>
            </ul>
        </div>
    </section>

    <section class="HomeBlog Section">
        <h2 class="Text-center">Nuestro Blog</h2>
        <p class="Text-center">Aprende tips de nuestros instructores expertos</p>
        <ul class="BlogList">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4
                );
                $posts = new WP_Query($args);
                while($posts->have_posts()): $posts->the_post();
                    get_template_part('template-parts/post-card');
                endwhile; wp_reset_postdata();
            ?>            
        </ul>
    </section>

<?php get_footer('front');?>