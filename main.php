<?php
//PHPKids
//By C1D - 31/12/2012
//This function will generate a random string, It takes in $chars (example: $chars = 'ABCDEFG') and $charlen (the length
//of the randomly generated string).
function randgen($chars,$charlen){
	$size = strlen($chars);
	for( $i = 0; $i < $charlen; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}
  return $str;
}
//This function returns the user's ip
function ip(){
return $_SERVER['REMOTE_ADDR'];
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
?>