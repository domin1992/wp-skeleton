<?php

class MyCustomWidget extends WP_Widget{
    function __construct(){
        $widgetOptions = array(
            'title' => 'O nas',
        );
		parent::__construct(false, 'My Custom Widget', $widgetOptions);
	}

	function widget($args, $instance){
        echo 'My Custom Widget View';
	}

	function update($new_instance, $old_instance){
        $new_instance = wp_parse_args($new_instance, array(
            'title' => '',
        ));

        $instance = $old_instance;

        $instance['title'] = $new_instance['title'];

        return $instance;
	}

	function form($instance){
        $instance = wp_parse_args(
			(array)$instance,
			array(
                'title' => 'O nas',
			)
		);
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>"/>
        </p>
		<?php
	}
}