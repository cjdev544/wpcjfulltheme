<?php if(get_next_post_link() || get_preview_post_link()):?>
    <div class="Pagination">
        <nav>
            <?php 
                echo paginate_links(array(
                    'prev_text' => __(',span>$laquo;Anteriores</span>', 'cjtheme'),
                    'next_text' => __('<span>Siguiente &raquo;</span>', 'cjtheme')
                ));
            ?>
        </nav>
    </div>
<?php endif;?>