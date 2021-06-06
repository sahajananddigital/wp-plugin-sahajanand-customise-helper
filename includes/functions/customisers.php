<?php
/*
 * @package Hari_Easy_Customise_Helper_Functions
 */

class Hari_Easy_Customise_Helper_Functions{

    /**
	 * A reference to an instance of this class.
	 */
	private static $instance;

    public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new Hari_Easy_Customise_Helper_Functions();
		}

		return self::$instance;

	}

    public function __construct(){
        
        add_action( 'after_theme_setup', array($this, 'custom_new_menu'));
    }
      
    public function custom_new_menu() {
        $menus = array(
            'hari-footer-menu' => __( 'Footer Menu' ),
            'hari-main-menu' => __( 'Extra Menu' )
        );
        // $menus = apply_filters('hari_customiser_register_nav_menu', $menus);
        register_nav_menus($menus);
    }

}