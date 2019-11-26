<?php

require_once('Flip_Clock_Menu_Class.php');

// add_action('admin_init', array('Flip_Clock_Menu_Class', 'registerSettings'));
add_action('admin_menu', array('Flip_Clock_Menu_Class', 'flipClockOptionsMenu'));
