<?php
/**
 * Plugin Name: Eth Bacoor Plugin
 * Plugin URI: 
 * Description: Web3 login. Enable crypto wallet logins to WordPress.
 * Author: Bacoor
 * Version: 0.1.0
 * Author URI:
 */

 //Khởi tạo function cho shortcode
function create_shortcode() {
    echo "<button>Test Eth Bacoor Plugin Plugin</button>";
}
//Tạo shortcode tên là [test_shortcode] và sẽ thực thi code từ function create_shortcode
add_shortcode( 'test_button', 'create_shortcode' );