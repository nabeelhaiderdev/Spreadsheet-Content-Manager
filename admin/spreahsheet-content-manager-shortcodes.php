<?php

function sheet_value_shortcode($atts) {
    $spreadsheet_content_manager_options = get_option( 'spreadsheet_content_manager_option_name' ); // Array of All Options

	// $API = 'AIzaSyAuaseTXCNfhG36xLn9KLO_pgvsDXe-n30';
    // $google_spreadsheet_ID  = '14-Myj3GDFFZdzrI-VWTH5WEEjqTT-gumQsyuo49udtc';
	// $google_spreadsheet_ID2 = '1CHntevO9qSF2V3Pqh5ayTrIE1A94SN8_oZajoJ3UEQM';

    $API = $spreadsheet_content_manager_options['api_key_0']; // API Key
    $google_spreadsheet_ID = $spreadsheet_content_manager_options['first_spreadsheet_id_1']; // First Spreadsheet ID
    $google_spreadsheet_ID2 = $spreadsheet_content_manager_options['second_spreadsheet_id_2']; // Second Spreadsheet ID
	
	$api_key = esc_attr($API);

	$sheetnumber = $atts['sheetnumber'];

	if($sheetnumber == 1){
		$current_spreadsheet_id = $google_spreadsheet_ID;
	} elseif($sheetnumber == 2){
		$current_spreadsheet_id = $google_spreadsheet_ID2;
	}

	$table = $atts['table'];
	$column = $atts['column'];
	$row = $atts['row'];

	$target_value = 'Sheet'. $table ."!" . $column .  $row;

	$get_cell = new WP_Http();
	$cell_url = "https://sheets.googleapis.com/v4/spreadsheets/$current_spreadsheet_id/values/$target_value?&key=$api_key";	
	$cell_response = $get_cell -> get( $cell_url);
	$json_body = json_decode($cell_response['body'],true);	
	$cell_value = $json_body['values'][0][0];
	return $cell_value;
}
add_shortcode('cm', 'sheet_value_shortcode');

