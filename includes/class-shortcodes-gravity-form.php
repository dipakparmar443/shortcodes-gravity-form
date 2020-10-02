<?php
/**
 * Class for Shortcodes for Gravity Form Addon.
 *
 * @package WordPress
 */

// If check class exists.
if ( ! class_exists( 'Shortcodes_for_Gravity_Form_Addon' ) ) {

	/**
	 * Declare class.
	 */
	class Shortcodes_for_Gravity_Form_Addon {

		/**
		 * Calling construct.
		 */
		public function __construct() {
			add_action( 'init', array( $this, 'init' ) );
		}

		public function init(){
			if ( is_admin() && class_exists( 'GFForms' ) ){
				add_filter( 'gform_form_list_columns', array( $this, 'shortcodes_gravity_form_custom_column' ), 10, 1 );
				add_action( 'gform_form_list_column_shortcode', array( $this, 'shortcodes_gravity_form_custom_column_shortcode' ), 10, 1 );
			}
		}

		public function shortcodes_gravity_form_custom_column( $columns ){
			$new_column = array( 'shortcode' => __( 'Shortcodes', 'shortcodes-gravity-form' ) );
			$column = array_merge( $columns, $new_column );
			return $column;
		}

		public function shortcodes_gravity_form_custom_column_shortcode( $item ){
			echo '<code>[gravityform id="'. $item->id .'"]</code>';
		}
	}
}
