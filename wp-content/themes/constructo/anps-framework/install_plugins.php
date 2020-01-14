<?php
require_once  get_template_directory() . '/anps-framework/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'widebox_register_required_plugins');
function widebox_register_required_plugins() {
    $plugins = array(
        array(
            'name' => 'Revolution Slider WP',
            'slug' => 'revslider',
            'source' => 'http://astudio.si/preview/plugins/'.'constructo'.'/revslider.zip',
        ),
        array(
            'name' => 'Contact form 7',
            'slug' => 'contact-form-7',
            'required' => true,
        ),
        array(
            'name' => 'Visual Composer',
            'slug' => 'js_composer',
            'source' => 'http://astudio.si/preview/plugins/'.'constructo'.'/js_composer.zip',
            'required' => false,
        ),
        array(
            'name' => 'WooCommerce',
            'slug' => 'woocommerce',
            'required' => false,
        ),
        array(
            'name' => 'Envato Market',
            'slug' => 'envato-market',
            'source' => 'http://astudio.si/preview/plugins/envato-market.zip', 
        ),
    );
    $config = array(
        'menu'         => 'install-required-plugins',
        'is_automatic' => true,
    );
    tgmpa($plugins, $config);
}
