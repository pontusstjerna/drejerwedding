<?php 

/**
* @package WeddingRegisterInterest
*/


/*

Plugin Name: Wedding Register Interest
Plugin URI: http://pontek.se
Description: I Like Juice
Version: 1.0
Author: Pontus Stjernström
Author URI: http://pontek.se
License: GPLv2 or later
Text-Domain: wedding-register-interest

*/

defined('ABSPATH') or die('Hey you idiot, please don\'t access my shit!');

class WeddingRegisterInterest {

    __construct() {

    }

    function activate() {

    }

    function inactivate() {

    }

    function uninstall() {

    }
}

if (class_exists('WeddingRegisterInterest')) {
    $plugin = new WeddingRegisterInterest();
}

register_activation_hook( __FILE__, array($plugin, 'activate'));
