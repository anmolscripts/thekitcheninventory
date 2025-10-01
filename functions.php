<?php
function twentytwentyone_child_enqueue_styles() {
    // Parent style
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Child style
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
add_action('wp_enqueue_scripts', 'twentytwentyone_child_enqueue_styles');


add_action("wp_ajax_run_stored_procedure", "handle_run_stored_procedure");
add_action("wp_ajax_nopriv_run_stored_procedure", "handle_run_stored_procedure");
function handle_run_stored_procedure() {
    global $wpdb;
    $result = [];
    // Input le lo
    $sp_name = sanitize_text_field($_POST['sp_name']); // frontend se aayega
    $params  = isset($_POST['params']) ? $_POST['params'] : [];

    // ✅ Allowed SP list
    $allowed_sps = ['insert_invoice'];
    if (!in_array($sp_name, $allowed_sps)) {
        wp_send_json_error("Stored Procedure not allowed.");
    }

    // ✅ Params extract
    $p_client       = sanitize_text_field($params['client']);
    $p_invoice_date = sanitize_text_field($params['date']);
    $p_sgst         = floatval($params['sgst']);
    $p_cgst         = floatval($params['cgst']);
    $p_igst         = floatval($params['igst']);
    $p_roundoff     = floatval($params['roundoff']);
    $p_category     = sanitize_text_field($params['category']);
    $p_items        = wp_json_encode($params['rowData']); // JSON convert

    // ✅ CALL query
    $sql = "CALL insert_invoice(%s, %s, %f, %f, %f, %f, %s, %s)";
    $prepared = $wpdb->prepare(
        $sql,
        $p_client,
        $p_invoice_date,
        $p_sgst,
        $p_cgst,
        $p_igst,
        $p_roundoff,
        $p_category,
        $p_items
    );

    $result[''] = $
    $result['prepared'] = $prepared;


    $result['query'] = $wpdb->get_results($prepared);

    wp_send_json_success($result);
}


add_action( 'wp_ajax_nopriv_get_data', 'my_ajax_handler' );
add_action( 'wp_ajax_get_data', 'my_ajax_handler' );

function my_ajax_handler() {
    wp_send_json_success( 'It works' );
}