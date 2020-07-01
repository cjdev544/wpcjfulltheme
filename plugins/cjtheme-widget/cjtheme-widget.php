<?php
/*
Plugin Name: Cj-gym - Widget
Plugin URI:
Description: Add Widgets in cj-gym Theme
Version: 1.0.0
Author: Jefferson Campos (CjDev)
Author URI:
Text Domain: cjtheme
*/

if(!defined('ABSPATH')) die();

/**
 * Adds cjtheme_widget widget.
 */
class cjtheme_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'cjtheme_widget', // Base ID
			esc_html__( 'Clases cjtheme', 'cjtheme' ), // Name
			array( 'description' => esc_html__( 'Widget Personalizado', 'cjtheme' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        
        $numberClass = $instance['numberClass'];
        if($numberClass == '') {
            $numberClass = 2;
        }
        
        ?>
            <ul>
                <?php
                    $args = array(
                        'post_type' => 'cjtheme_class',
                        'posts_per_page' => $numberClass
                    );
                    $class = new WP_Query($args);
                    while($class->have_posts()): $class->the_post();
                ?>
                <li>
                    <article class="SidebarList-class">
                        <a href="<?php the_permalink();?>">
                            <div class="SidebarList-img">
                                <?php the_post_thumbnail('thumbnail');?>
                            </div> 
                            <div class="SidebarList-content">                                
                                    <h3><?php the_title();?></h3>                        
                                <?php
                                    $startClass = get_field('hora_inicio');
                                    $endClass = get_field('hora_fin');
                                ?>
                                <p><?php the_field('dia_de_clases'); ?> - <?php echo $startClass . ' a ' . $endClass ?></p>
                            </div>
                        </a>
                    </article>
                </li>
                <?php endwhile; wp_reset_postdata();?>
            </ul>
        <?php


		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$numberClass = ! empty( $instance['numberClass'] ) ? $instance['numberClass'] : esc_html__( 'Cuántas Clases Deseas Mostrar?', 'cjtheme' );
		?>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('numberClass'));?>">
                <?php esc_attr_e('Cuántas Clases Deseas Mostrar en el Lateral?', 'cjtheme');?>
            </label>
            <input 
                class="widefat"
                name="<?php echo esc_attr( $this->get_field_name('numberClass') );?>"
                id="<?php echo esc_attr( $this->get_field_id('numberClass') );?>"
                type="number"
                value="<?php echo esc_attr($numberClass);?>"
            />
        </p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['numberClass'] = ( ! empty( $new_instance['numberClass'] ) ) ? sanitize_text_field( $new_instance['numberClass'] ) : '';

		return $instance;
	}

} // class cjtheme_widget

// register cjtheme_widget widget
function register_cjtheme_widget() {
    register_widget( 'cjtheme_widget' );
}
add_action( 'widgets_init', 'register_cjtheme_widget' );