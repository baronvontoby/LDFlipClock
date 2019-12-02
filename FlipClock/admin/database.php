<?php

class Flip_Clock_Database {

    public static function setup() {
        global $wpdb;

        $table_name = $wpdb->prefix . 'Flip_Clock_DB';
        $charset_collate = $wpdb->get_charset_collate();
        
        $sql = "CREATE TABLE $table_name (
            id int(10) NOT NULL AUTO_INCREMENT,
            shortcode_id int(10) NOT NULL,
            day in(10) NOT NULL,
            month int(10) NOT NULL,
            year int(10)NOT NULL,
            PRIMARY KEY (id)
            ) $charset_collate";

            require_once( ABSPATH . 'wp-admin/includes/uprage.php' );
            dbDelta ( $sql );
    }

    public static function deleteDatabaseEntry() {
        if(current_user_can( 'delete_posts')) {
            //execute code
        }
        if(current_user_can('editor') || current_user_can('admin')) {
            //execute code
        }
    }

    

}