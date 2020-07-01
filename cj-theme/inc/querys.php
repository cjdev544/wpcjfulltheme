<?php

if (!function_exists('cjtheme_class_list')) :
    function cjtheme_class_list($numberOfClass = -1)
    { ?>

        <div class="ClassList">
            <ul class="Class-list">
                <?php
                    $args = array(
                        'post_type' => 'cjtheme_class',
                        'posts_per_page' => $numberOfClass
                    );
                    $class = new WP_Query($args);
                    while ($class->have_posts()) : $class->the_post();
                ?>

                    <li class="Card Class Gradient">
                        <?php the_post_thumbnail('mid'); ?>
                        <div class="ClassContent">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <?php
                            $startClass = get_field('hora_inicio');
                            $endClass = get_field('hora_fin');
                            ?>
                            <p><?php the_field('dia_de_clases'); ?> - <?php echo $startClass . ' a ' . $endClass ?></p>
                        </div>
                    </li>

                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
<?php }
endif; ?>