<?php

class Settings_Revisions_Command_Line_Interface {
	public $plugin = null;

	function __construct( $args = array() ) {
		$args = wp_parse_args( $args, get_object_vars( $this ) );
		foreach ( $args as $key => $value ) {
			$this->$key = $value;
		}

		// @todo Add some useful commands
		//Settings_Revisions_Cli_Command::$plugin_instance = $this->plugin;
		//WP_CLI::add_command( SETTINGS_REVISIONS_SLUG, 'Settings_Revisions_Cli_Command' );
	}
}
