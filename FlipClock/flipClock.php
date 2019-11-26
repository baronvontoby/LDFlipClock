<?php

/*
Plugin Name:        Flip Clock
Plugin URI:         http://lorenzocodes.com
Description:        A simple flip clock to do countdowns for whatever your heart desires.
Version:            1.0.0
Author:             Lorenzo Dandrea
Author URI:         http://lorenzocodes.com
*/

defined( 'ABSPATH' ) or die();

if(!class_exists('LDFlipClock')):
    
    final class LDFlipClock {
    
        private static $instance = null;

        private function __construct() {

            $this->initializeHooks();
            // $this->setupDatabase();

        }

        public static function getInstance() {
            if(is_null(self::$instance)){
                self::$instance = new self();
            }
            return self::$instance;
        }

        private function initializeHooks () {
            if(is_admin()) {
                require_once('admin/route.php');
            }

            require_once( 'public/public.php' );
    
        }

        private function setupDatabase() {
            reuqire_once( 'admin/database.php' );
            register_activation_hook( __FILE__, array ( 'Flip_Clock_Database', 'setup' ));
        }
    }
endif;

LDFlipClock::getInstance();