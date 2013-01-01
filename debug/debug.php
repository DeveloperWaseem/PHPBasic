<?php
//PHPBasic
//By C1D
//This file starts debug mode.
//Read README.MD for use.
function debug_randgen($str, $int){
	if(!is_string($str)){
		$error = 'PHPBasic [DEBUG MODE] - ERROR: CHARMAP_NOT_STRING';
	}
	if(!is_int($int)){
		$error = 'PHPBasic [DEBUG MODE] - ERROR: CHALEN_NOT_INTEGER';
	}
	if($str = ''){
		$error = 'PHPBasic [DEBUG MODE] - ERROR: CHARMAP_BLANK';
	}
}
?>