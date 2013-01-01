<?php
//PHPBasic - examples
//By C1D
include 'main.php';
//EXAMPLE OF RANDGEN()
echo randgen('ABCDEF123456',7);
//EXAMPLE OF IP()
echo ip();
//EXAMPLE OF GET() *NEEDS TO HAVE DATA SUBMITTED
echo request('test');
//EXAMPLE OF POST() *NEEDS TO HAVE POST SUBMITTED
echo post('test');
//EXAMPLE OF GET() *NEEDS TO HAVE GET SUBMITTED
echo get('test');
//EXAMPLE OF EMAIL()
if(email('bob@bob.com','test@test.com','Hello',"Hello,\nI am bob.\nThanks,\nBob")){
  echo 'sent!';
}
//EXAMPLE OF EMAIL_HTML()
if(email_html('bob@bob.com','test@test.com','Hello',"<h1>Hello,</h1>\n<h3>I am</h3><h2> bob.</h2>\n<h4>Thanks,</h4>\n<h1>Bob</h1>")){
  echo 'sent!';
}
//EXAMPLE OF DETECT_MOBLIE()
if(detect_mobile){
  echo 'You\'re using a mobile device';
}
//EXAMPLE OF SAFE()
echo safe('<iframe src="malicious_content"></iframe>');
//EXAMPLE OF getXML()
echo getXML('test.xml');
?>
