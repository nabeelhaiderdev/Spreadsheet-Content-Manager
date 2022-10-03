<?php 

/**
 * Generated by the WordPress Option Page generator
 * at http://jeremyhixon.com/wp-tools/option-page/
 */

class SpreadsheetContentManager {
	private $spreadsheet_content_manager_options;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'spreadsheet_content_manager_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'spreadsheet_content_manager_page_init' ) );
	}

	public function spreadsheet_content_manager_add_plugin_page() {
		add_menu_page(
			'Spreadsheet Content Manager', // page_title
			'Spreadsheet Content Manager', // menu_title
			'manage_options', // capability
			'spreadsheet-content-manager', // menu_slug
			array( $this, 'spreadsheet_content_manager_create_admin_page' ), // function
			'dashicons-media-spreadsheet', // icon_url
			59 // position
		);
	}

	public function spreadsheet_content_manager_create_admin_page() {
		$this->spreadsheet_content_manager_options = get_option( 'spreadsheet_content_manager_option_name' ); ?>

		<div class="wrap">
			<h2>Spreadsheet Content Manager</h2>
			<p></p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
					settings_fields( 'spreadsheet_content_manager_option_group' );
					do_settings_sections( 'spreadsheet-content-manager-admin' );
					submit_button();
				?>
			</form>
		</div>
	<?php }

	public function spreadsheet_content_manager_page_init() {
		register_setting(
			'spreadsheet_content_manager_option_group', // option_group
			'spreadsheet_content_manager_option_name', // option_name
			array( $this, 'spreadsheet_content_manager_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'spreadsheet_content_manager_setting_section', // id
			'Settings', // title
			array( $this, 'spreadsheet_content_manager_section_info' ), // callback
			'spreadsheet-content-manager-admin' // page
		);

		add_settings_field(
			'api_key_0', // id
			'API Key', // title
			array( $this, 'api_key_0_callback' ), // callback
			'spreadsheet-content-manager-admin', // page
			'spreadsheet_content_manager_setting_section' // section
		);

		add_settings_field(
			'first_spreadsheet_id_1', // id
			'First Spreadsheet ID', // title
			array( $this, 'first_spreadsheet_id_1_callback' ), // callback
			'spreadsheet-content-manager-admin', // page
			'spreadsheet_content_manager_setting_section' // section
		);

		add_settings_field(
			'second_spreadsheet_id_2', // id
			'Second Spreadsheet ID', // title
			array( $this, 'second_spreadsheet_id_2_callback' ), // callback
			'spreadsheet-content-manager-admin', // page
			'spreadsheet_content_manager_setting_section' // section
		);
	}

	public function spreadsheet_content_manager_sanitize($input) {
		$sanitary_values = array();
		if ( isset( $input['api_key_0'] ) ) {
			$sanitary_values['api_key_0'] = sanitize_text_field( $input['api_key_0'] );
		}

		if ( isset( $input['first_spreadsheet_id_1'] ) ) {
			$sanitary_values['first_spreadsheet_id_1'] = sanitize_text_field( $input['first_spreadsheet_id_1'] );
		}

		if ( isset( $input['second_spreadsheet_id_2'] ) ) {
			$sanitary_values['second_spreadsheet_id_2'] = sanitize_text_field( $input['second_spreadsheet_id_2'] );
		}

		return $sanitary_values;
	}

	public function spreadsheet_content_manager_section_info() {
		
	}

	public function api_key_0_callback() {
		printf(
			'<input class="regular-text" type="text" name="spreadsheet_content_manager_option_name[api_key_0]" id="api_key_0" value="%s">',
			isset( $this->spreadsheet_content_manager_options['api_key_0'] ) ? esc_attr( $this->spreadsheet_content_manager_options['api_key_0']) : ''
		);
	}

	public function first_spreadsheet_id_1_callback() {
		printf(
			'<input class="regular-text" type="text" name="spreadsheet_content_manager_option_name[first_spreadsheet_id_1]" id="first_spreadsheet_id_1" value="%s">',
			isset( $this->spreadsheet_content_manager_options['first_spreadsheet_id_1'] ) ? esc_attr( $this->spreadsheet_content_manager_options['first_spreadsheet_id_1']) : ''
		);
	}

	public function second_spreadsheet_id_2_callback() {
		printf(
			'<input class="regular-text" type="text" name="spreadsheet_content_manager_option_name[second_spreadsheet_id_2]" id="second_spreadsheet_id_2" value="%s">',
			isset( $this->spreadsheet_content_manager_options['second_spreadsheet_id_2'] ) ? esc_attr( $this->spreadsheet_content_manager_options['second_spreadsheet_id_2']) : ''
		);
	}

}
if ( is_admin() )
	$spreadsheet_content_manager = new SpreadsheetContentManager();

/* 
 * Retrieve this value with:
 * $spreadsheet_content_manager_options = get_option( 'spreadsheet_content_manager_option_name' ); // Array of All Options
 * $api_key_0 = $spreadsheet_content_manager_options['api_key_0']; // API Key
 * $first_spreadsheet_id_1 = $spreadsheet_content_manager_options['first_spreadsheet_id_1']; // First Spreadsheet ID
 * $second_spreadsheet_id_2 = $spreadsheet_content_manager_options['second_spreadsheet_id_2']; // Second Spreadsheet ID
 */