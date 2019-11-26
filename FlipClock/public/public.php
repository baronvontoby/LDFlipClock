<?php
defined( 'ABSPATH' ) or die();

require_once( 'flip_clock_shortcode.php' );


add_shortcode( 'flip_clock', array ( 'Flip_Clock_Shortcode', 'executeFlipShortCode' ) );