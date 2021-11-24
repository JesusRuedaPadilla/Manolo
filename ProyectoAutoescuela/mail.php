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
    $mail->Username   = "jesus.rp163@gmail.com"; 
    // introducir clave
    $mail->Password   = "goku9037";       
    $mail->SetFrom('jesus.rp163@gmail.com', 'Prueba imagenes correos');
    // asunto
    $mail->Subject    = "Jesus Rueda";
    // cuerpo
    $mail->addEmbeddedImage("./imagenes/B8TZWKxCEAEJDOs.jpg","foto");
    $mail->MsgHTML('<h1>Imagenes y archivo</h1><br><img src="cid:foto">');
    // adjuntos
    $mail->addAttachment("2DAW.pdf");
   
    // destinatario
    $address = "wwbhty@gmail.com";
    $mail->AddAddress($address, "Test");
    // enviar
    $resul = $mail->Send();
    if(!$resul) {
      echo "Error" . $mail->ErrorInfo;
    } else {
      echo "Enviado";
    }

?>