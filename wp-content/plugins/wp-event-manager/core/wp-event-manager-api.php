<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * WP_Event_Manager_API API
 *
 * This API class handles API requests.
 */
 
class WP_Event_Manager_API {

	/**
	 * The single instance of the class.
	 *
	 * @var self
	 * @since  2.5
	 */
	private static $_instance = null;

	/**
	 * Allows for accessing single instance of class. Class should only be constructed once per call.
	 *
	 * @since  2.5
	 * @static
	 * @return self Main instance.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	 
	public function __construct() {

		add_filter( 'query_vars', array( $this, 'add_query_vars'), 0 );

		add_action( 'parse_request', array( $this, 'api_requests'), 0 );
	}

	/**
	 * add_query_vars function.
	 *
	 * @access public
	 * @return void
	 */

	public function add_query_vars( $vars ) {

		$vars[] = 'event-manager-api';
		
		return $vars;
	}
	
	/**
	 * add_endpoint function.
	 *
	 * @access public
	 * @return void
	 */

	public function add_endpoint() {

		add_rewrite_endpoint( 'event-manager-api', EP_ALL );
	}

	/**
	 * API request - Trigger any API requests (handy for third party plugins/gateways).
	 *
	 * @access public
	 * @return void
	 */

	public function api_requests() {
	    
		global $wp;

		if ( ! empty( $_GET['event-manager-api'] ) )

			$wp->query_vars['event-manager-api'] = $_GET['event-manager-api'];

		if ( ! empty( $wp->query_vars['event-manager-api'] ) ) {

			// Buffer, we won't want any output here

			ob_start();
			
			// Get API trigger	
			$api = strtolower( esc_attr( $wp->query_vars['event-manager-api'] ) );
			
			// Load class if exists
			if ( has_action( 'event_manager_api_' . $api ) && class_exists( $api ) )
				$api_class = new $api();

			// Trigger actions
			do_action( 'event_manager_api_' . $api );
			
			// Done, clear buffer and exit
			ob_end_clean();
			wp_die();
		}
	}
}
WP_Event_Manager_API::instance();