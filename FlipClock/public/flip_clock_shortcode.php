<?php

defined( 'ABSPATH' ) or die();


if ( ! class_exists( 'Flip_Clock_Shortcode')):
    class Flip_Clock_Shortcode {

        public static function executeFlipShortCode( $attr ) {
                      
            wp_enqueue_style( 'flip-clock-css', plugins_url() . '/FlipClock/public/css/flip-clock.css' );
            wp_enqueue_script ( 'flip-clock-js', plugins_url() . '/FlipClock/public/js/flip-clock.js' );
            
            $day = 21;
            $month = 2; //this equates to march
            $year = 2022;
            
            if ( isset( $attr['day']) ) {
                $day = $attr['day'];
            }
            
            if ( isset( $attr['month']) ) {
                $month = $attr['month'];
            }
            
            if (isset( $attr['year']) ) {
                $year = $attr['year'];
            }
            
            wp_localize_script( 'flip-clock-js', 'deadlineDate', array($day, $month, $year)  );

            return '<div id="count-down"></div>';
        }
        
    }

endif;
