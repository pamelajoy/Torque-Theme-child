<?php

add_filter('torque_include_bootstrap', function($value){
	return 1;
});

require_once( 'inc/custom-post-types.php' );