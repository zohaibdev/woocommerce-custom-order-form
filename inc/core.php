<?php

function add_create_order_link_my_account($items)
{
    $items['create-order'] = 'Create Order';
    return $items;
}
add_filter('woocommerce_account_menu_items', 'add_create_order_link_my_account');

function add_create_order_endpoint()
{
    add_rewrite_endpoint('create-order', EP_ROOT | EP_PAGES);
}
add_action('init', 'add_create_order_endpoint');

function bbloomer_add_product_request_link_my_account($items)
{
    $items = array(
        'dashboard'       => __('Dashboard', 'woocommerce'),
        'create-order'  => __('Create New Order', 'woocommerce'),
        'orders'  => __('Orders', 'woocommerce'),
        'edit-address'    => _n('Addresses', 'Address', (int) wc_shipping_enabled(), 'woocommerce'),
        'payment-methods' => __('Payment methods', 'woocommerce'),
        'edit-account'    => __('Account details', 'woocommerce'),
        'customer-logout' => __('Logout', 'woocommerce')
    );
    return $items;
}
add_filter('woocommerce_account_menu_items', 'bbloomer_add_product_request_link_my_account');

function create_order_query_vars($vars)
{
    $vars[] = 'create-order';
    return $vars;
}
add_filter('query_vars', 'create_order_query_vars', 0);

function create_order_form()
{
    ob_start();
    $form = require_once __DIR__ . '/../template/form.php';
    $form = ob_get_clean();
    echo $form;
}
add_action('woocommerce_account_create-order_endpoint', 'create_order_form');

function create_order()
{
    $Data = $_POST['order'];

    if($Data != null){
        global $woocommerce;

        $user_id = get_current_user_id();
        $order = wc_create_order();
        $order->set_customer_id($user_id);
        $order->set_address($Data['billing'], 'billing');
        $order->set_address($Data['shipping'], 'shipping');

        $ship_rate_ob = new WC_Shipping_Rate();
        $ship_rate_ob->id = 0;
        $ship_rate_ob->label = 'Delivery Charges (Inc, Tax)';
        $ship_rate_ob->taxes = array();
        $ship_rate_ob->cost = $Data['product']['delivery_charges'];
        $order->add_shipping($ship_rate_ob);

        $product_id = create_product($Data['product']);
        $order->add_product(get_product($product_id), 1);   
        
        unset($Data['product']['delivery_charges']);
        unset($Data['product']['amount']);
        foreach ($order->get_items() as $item_id => $item_obj) {
            foreach ($Data['product'] as $key => $value) {
                wc_update_order_item_meta($item_id, $key, $value);
            }
        }

        $order->calculate_totals();
        $order->update_status("Processing", 'Imported order', TRUE);

        echo json_encode(array('success'=> true, 'msg' => 'Your order has been created'));
    } else {
        echo json_encode(array('success'=> false, 'msg' => 'Data not found'));
    }

    wp_die();
}
add_action('wp_ajax_create_order', 'create_order');
add_action('wp_ajax_nopriv_create_order', 'create_order');

function create_product($product)
{
    $post_id = wp_insert_post(
        array(
            'post_title' => 'Item',
            'post_type' => 'product',
            'post_status' => 'private'
        )
    );

    wp_set_object_terms( $post_id, 'simple', 'product_type' );
    update_post_meta( $post_id, '_visibility', 'visible' );
    update_post_meta( $post_id, '_stock_status', 'instock');
    update_post_meta( $post_id, 'total_sales', '0' );
    update_post_meta( $post_id, '_downloadable', 'no' );
    update_post_meta( $post_id, '_virtual', 'yes' );
    update_post_meta( $post_id, '_regular_price', $product['amount'] );
    update_post_meta( $post_id, '_sku', $post_id );
    update_post_meta( $post_id, '_price',  $product['amount'] );
    update_post_meta( $post_id, '_manage_stock', 'yes' );
    update_post_meta( $post_id, 'user_id', get_current_user_id() );
    wc_update_product_stock($post_id, 1, 'set');
    update_post_meta( $post_id, '_backorders', 'no' );

    return $post_id;
}