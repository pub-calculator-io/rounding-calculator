<?php
/*
Plugin Name: CI Rounding calculator
Plugin URI: https://www.calculator.io/rounding-calculator/
Description: This rounding calculator rounds off numbers to the nearest whole number, significant digit, or decimal place. You can round the decimal numbers to the nearest tenths, hundredths, or thousandths.
Version: 1.0.0
Author: Rounding Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_rounding_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Rounding Calculator by www.calculator.io";

function display_calcio_ci_rounding_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Rounding Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_rounding_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_rounding_calculator', 'display_calcio_ci_rounding_calculator' );