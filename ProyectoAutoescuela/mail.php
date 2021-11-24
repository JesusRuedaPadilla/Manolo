<?php   
    use PHPMailer\PHPMailer\PHPMailer;
    require "./vendor/autoload.php";
    $mail = new PHPMailer();
    $mail->IsSMTP();
    // cambiar a 0 para no ver mensajes de error
    $mail->SMTPDebug  = 2;                          
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = "tls";                 
    $mail->Host       = "smtp.gmail.com";    
    $mail->Port       = 587;                 
    // introducir usuario de google
    $mail->Username   = "correo del usuario que lo envia"; 
    // introducir clave
    $mail->Password   = "contraseña correo";       
    $mail->SetFrom('correo usuario que lo envia', 'Prueba imagenes correos');
    // asunto
    $mail->Subject    = "Nombre del correo ";
    // cuerpo
    $mail->addEmbeddedImage("./imagenes/imagen que quieres subir.jpg","foto");
    $mail->MsgHTML('<h1>Imagenes y archivo</h1><br><img src="cid:foto">');
    // adjuntos
    $mail->addAttachment("archivo que vamos a adjuntar junto con su extension (ej: hola.txt)");
   
    // destinatarios
    $address = "correo del que lo recibe";
    $mail->AddAddress($address, "Test");
    // enviar
    $resul = $mail->Send();
    if(!$resul) {
      echo "Error" . $mail->ErrorInfo;
    } else {
      echo "Enviado";
    }

?>