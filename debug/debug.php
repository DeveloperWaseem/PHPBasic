<?php
//PHPBasic
//By C1D
//This file starts debug mode.
//Read README.MD for use.
function debug_randgen($str, $int){
	if(!is_string($str)){
		$error = 'PHPBasic [DEBUG MODE] - The charmap variable should be a string, Check wiki for use!';
	}elseif(!is_int($int)){
		$error = 'PHPBasic [DEBUG MODE] - ERROR: - The charmap variable should be a integer, Check wiki for use!';
	}elseif($str = ''){
		$error = 'PHPBasic [DEBUG MODE] - The charmap variable is empty, Check wiki for use!';
	}else{
		$error = 'PHPBasic [DEBUG MODE] - There seems to be no errors!';
	}
	return $error;
}
function debug_request($value){
	if(!isset($_REQUEST[$value])){
		$error = 'PHPBasic [DEBUG MODE] - Could not find '.$value;
	}else{
		$error = 'PHPBasic [DEBUG MODE] - There seems to be no errors!';
	}
	return $error;
}
function debug_post($value){
	if(!isset($_POST[$value])){
		$error = 'PHPBasic [DEBUG MODE] - It seems like the value wasn\'t set';
	}else{
		$error = 'PHPBasic [DEBUG MODE] - There seems to be no errors!';
	}
	return $error;
}
function debug_get($value){
	if(!isset($_GET[$value])){
		$error = 'PHPBasic [DEBUG MODE] - It seems like the value wasn\'t set';
	}else{
		$error = 'PHPBasic [DEBUG MODE] - There seems to be no errors!';
	}
	return $error;
}
function debug_detect_mobile(){
	if(!preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|playbook|sagem|sharp|sie-|silk|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])){
	}
		$error = 'PHPBasic [DEBUG MODE] - It seems like your not using a mobile.';
	}else{
		$error = 'PHPBasic [DEBUG MODE] - There seems to be no errors!';
	}
	return $error;
}
//This function gets the XML from a webpage/API
function debug_getXML($url){
    if(!simplexml_load_file($url)){
    $error = "PHPBasic [DEBUG MODE] // Sorry the site disabled this function or this is not a real XML file!\n
            PHPBasic Troubleshoot (For site-owner) // Please enable \"allow_url_fopen\" in your php.ini or check your XML\n
            formatting!";
    }else{
    	$error = 'PHPBasic [DEBUG MODE] - There seems to be no errors!';
    }
    return $error;
}
function debug_safestring($s){
	if(!is_string($s)){
		return 'PHPBasic [DEBUG MODE] - Integer can\'t be used';
	}
}
?>
