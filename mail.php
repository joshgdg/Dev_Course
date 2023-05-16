<?php

extract($_POST);

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $message= $_POST['message'];
}

try {
  
    $mail->isSMTP();                                              //Send using SMTP
    $mail->Host       = '';                    //Set the SMTP server to send through
    $mail->SMTPAuth   =  true;                                    //Enable SMTP authentication
    $mail->Username   = '';                 //SMTP username
    $mail->Password   = '';                             //SMTP password
    $mail->SMTPSecure =  PHPMailer::ENCRYPTION_SMTPS;             //Enable implicit TLS encryption
    $mail->Port       =  465;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    $mail->addAddress("support@dxb-stocks.com");                              
    $mail->AddReplyTo($email, $name);
    
    $mail->isHTML(true);                                            //Set email format to HTML
    $mail->Subject =   "More Informations";
    $mail->Body    =   "Nom: $name<br>
                        Mail: $email<br>
                        Tel: $phone<br>
                        $message<br>";
    
    $mail->send();
    $alert = '<div class="alert-success">
              <span>Message sent ! Thanks you.</span>
              </div>';
  
} catch (Exception $e){
    $alert = '<div class="alert-error">
              <span>' .$e-> getMessage().'</span>
              </div>';
}  

?>