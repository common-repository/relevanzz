<?php
/*
   Plugin Name: Relevanzz - Repeat sales with Social Ads
   Plugin URI: https://github.com/relevanzz/relevanzz-woocommerce
   description: Easily integrate Relevanzz with your WooCommerce  
   Version: 1.0.0
   Author: Relevanzz
   Author URI: https://relevanzz.com
   License: GPL2
   */

defined('ABSPATH') || die('Executing outside of the WordPress context.');

require_once __DIR__ . '/src/class-relevanzz-woocommerce-api.php';

$api = new WC_RLZ_API();