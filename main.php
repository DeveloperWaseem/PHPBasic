<?php
//PHPBasic
//By C1D
//This function will generate a random string, It takes in $chars (example: $chars = 'ABCDEFG') and $charlen (the length
//of the randomly generated string).
function randgen($chars,$charlen){
	size = strlen($chars);
	for( $i = 0; $i < $charlen; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}
	return $str;
}
//This function returns the user's ip
function ip(){
	return $_SERVER['REMOTE_ADDR'];
}
//This function replaces the $_REQUEST['str'] variable
function request($value){
	if(isset($_REQUEST[$value])){
		return $_REQUEST[$value];
	}else{
		return false;
	}
}
//This function replaces the $_POST['str'] variable
function post($value){
	if(isset($_POST[$value])){
		return $_POST[$value];
	}else{
		return false;
	}
}
//This function replaces the $_GET['str'] variable
function get($value){
	if(isset($_GET[$value])){
		return $_GET[$value];
		}else{
			return false;
		}
}
//This function sends a email
function email($from, $to, $subject,$msg){
	mail($to, $subject, $msg, '','-f'.$from);
}
//This function sends a HTML email and does the headers for you!
function email_html($from, $to, $subject, $msg){
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	mail($to, $subject, $msg, $headers,'-f'.$from);
}
//This function detects if the users is using a mobile device
function detect_mobile(){
	if(preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|playbook|sagem|sharp|sie-|silk|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])){
		return true;
	}else{
		return false;
	}
}
//This function removes html code and makes the text safe for mysql
function safe_text($str){
	return mysql_real_escape_string(htmlentities($str, ENT_QUOTES, 'utf-8'));
}
//This function gets the XML from a webpage/API
function getXML($url){
    if(simplexml_load_file($url)){
    return simplexml_load_file($url);
    }else{
    return 'PHPBasic ERROR // Sorry the site disabled this function or this is not a real XML file.<br>
            PHPBasix Troubleshoot (For siteowner) // Please enable "allow_url_fopen" in your php.ini or check your XML <br>
            formatting!';
    }
}
?>
