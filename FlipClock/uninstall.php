<?php

global $wpdb;

$table_name =
// $wpdb->prepare('SELECT * FROM xy where id = %d', 5 );

$wpdb->query( 'DROP TABLE IF EXISTS $table_name');