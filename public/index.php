<?php // Silence is golden

function sheet_value_shortcode($atts) {
    $API = 'AIzaSyAuaseTXCNfhG36xLn9KLO_pgvsDXe-n30';
    $google_spreadsheet_ID = '14-Myj3GDFFZdzrI-VWTH5WEEjqTT-gumQsyuo49udtc';
    $api_key = esc_attr( $API);

    $location = $atts['location'];

    $get_cell = new WP_Http();
    $cell_url = "https://sheets.googleapis.com/v4/spreadsheets/$google_spreadsheet_ID/values/$location?&key=$api_key";	
    $cell_response = $get_cell -> get( $cell_url);
    $json_body = json_decode($cell_response['body'],true);	
    $cell_value = $json_body['values'][0][0];
    return $cell_value;
}
add_shortcode('get_sheet_value', 'sheet_value_shortcode');