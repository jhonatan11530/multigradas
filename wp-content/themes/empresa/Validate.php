<?php
   /*
   * Template Name: Validate.php
   * Description: template de multigradas
   */

?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer;
$nombre = utf8_decode($_REQUEST["nombre"]);
$apellido = utf8_decode($_REQUEST["apellido"]);
$Telefono = $_REQUEST["Telefono"];
$correo = utf8_decode($_REQUEST["correo"]);
$mensaje = utf8_decode($_REQUEST["mensaje"]);

if(isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]){



        $secreto = "6LdPAAEVAAAAAAbYm5W63jTxIHmmk-16d5fKeVpZ";
    
        $ip = $_SERVER['REMOTE_ADDR'];
    
         $captcha = $_POST["g-recaptcha-response"];
    
        $resulreCaptcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secreto&response=$captcha&remoteip=$ip");
        
        $array =json_decode($resulreCaptcha,TRUE);

        if($array["success"]){
 try {
            //$mail->SMTPDebug = 4;                               // Habilitar el debug
        
           $mail->isSMTP();                                      // Usar SMTP
           $mail->Host = 'mail.multigradas.com.co';  // Especificar el servidor SMTP reemplazando por el nombre del servidor donde esta alojada su cuenta
           $mail->SMTPAuth = true;                               // Habilitar autenticacion SMTP
           $mail->Username = 'prueba@multigradas.com.co';                 // Nombre de usuario SMTP donde debe ir la cuenta de correo a utilizar para el envio
           $mail->Password = 'prueba123456@';                           // Clave SMTP donde debe ir la clave de la cuenta de correo a utilizar para el envio
           $mail->SMTPSecure = 'ssl';                            // Habilitar encriptacion
           $mail->Port = 465;                                    // Puerto SMTP                     
           $mail->Timeout = 30;
           $mail->AuthType = 'LOGIN';
        
           //Destinatarios 
           
           $mail->setFrom($correo);     //Direccion de correo remitente (DEBE SER EL MISMO "Username")
           $mail->addAddress('prueba@multigradas.com.co');     // Agregar el destinatario
             
        
        
        
           //Contenido
           $mail->isHTML(true);                                  
           $mail->Subject = 'Mensaje de la pagina web';
           $mail->Body = "UNA PERSONA A SOLICITADO UNA COTIZACION O TIENE ALGUNA DUDA AL RESPECTO ESTOS SON LOS DATOS DEL CLIENTE : <br><br> Nombre del cliente: $nombre  $apellido <br><br> Telefono de contacto: $Telefono <br><br> Correo electronico: $correo <br><br> Mensaje o Asunto: $mensaje <br><br><br><br> POR FAVOR LLAMAR AL CLIENTE PUEDE SER PARA UNA COTIZACION O PARA TENER INFORMACION DE LOS PRODUCTOS OFRECIDOS POR <strong>MULTI-GRADAS</strong>";
           // Contenido del mensaje. 
           
           $mail->send();
           echo 'El mensaje ha sido enviado';
           header('Location: https://multigradas.com.co/contacto');
        
        } catch (Exception $e) {
        echo 'El mensaje no pudo ser enviado. Mailer Error: ', $mail->ErrorInfo;
        }

        }
        else{
        echo "ERES SPAN";
        }
}else{
        header('Location: https://multigradas.com.co/contacto');
    }
?>