<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

include "../entities/fournisseur.php";
include "../core/fournisseurC.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST['submit']))
{
    $Email = $_POST['email'];
}


try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                        // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'nizarbenhmida001@gmail.com';                     // SMTP username
    $mail->Password   = 'nizarbenhmida';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    

    //Recipients
    $mail->setFrom('nizar.benhmida@esprit.tn', 'Admin Coeur De marie');
    
    $mail->addAddress('nizarbenhmida001@gmail.com');
    $body = $Email;
    //$body = '<p><strong>This is working yes!<strong> Here is your email :! <p>';
    
 

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Test email sent successfully';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>