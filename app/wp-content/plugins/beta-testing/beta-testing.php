<?php
/*
Plugin Name: WP Beta Testing
Description:
Version: 0.0.1
Author: muraokashotaro
License: GPLv2 or later
*/

/**
 * 5.6から追加されたアプリケーションパスワードのhook.
 */
add_filter('wp_is_application_passwords_available', '__return_true');