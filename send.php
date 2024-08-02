<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
if (isset($_POST["send"])) {

  $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'sreedheshnafoodproducts<br>@gmail.com';   //SMTP write your email
    $mail->Password   = 'szxjdpquanogdicj';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('sreedheshnafoodproducts<br>@gmail.com'); // Sender Email and name
    $mail->addAddress('sreedheshnafoodproducts<br>@gmail.com');     //Add a recipient email  
    $mail->addReplyTo('sreedheshnafoodproducts<br>@gmail.com'); // reply to sender email

    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = $_POST["subject"];   // email subject headings
    $mail->Body    =  'Message: ' . $_POST["msg"] . '<br>Name: ' . $_POST["qwq"] . '<br>Email: ' . $_POST["email"]; //email message

    // $mail->Body = 'Message: ' . $_POST["message"] . '<br>Name: ' . $_POST["name"] . '<br>Email: ' . $_POST["email"];


    // Success sent message alert
    $mail->send();
    echo
    " 
    <script> 
     alert('Message was sent successfully!');
     document.location.href = 'index.html';
    </script>
    ";
}
?>