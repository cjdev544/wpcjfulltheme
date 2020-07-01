<?php //https://developer.wordpress.org/reference/functions/get_search_form/ ?>
<form role="search" method="get" class="Search" action="<?php home_url('/');?>">
    <input type="search" id="s" placeholder="<?php echo esc_attr_x('Buscar...', 'cjtheme');?>" value="<?php echo get_search_query();?>" name="s" title="<?php esc_attr_x('Buscar:', 'cjtheme');?>">
    <label for="s">
        <i class="fas fa-search"></i>
        <span class="screen-reader-text"><?php echo _x('Buscar:', 'cjtheme');?></span>
    </label>
    <input type="submit" value="<?php esc_attr_x('Buscar:', 'cjtheme');?>">
</form>