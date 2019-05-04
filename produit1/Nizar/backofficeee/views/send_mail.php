<?php
    include "../entities/fournisseur.php";
    include "../core/fournisseurC.php";
   // if(isset($_POST['email']) && isset($_POST['nom']))
   // {
    //$mailto = $_POST['email'];
    $mailto = "nizar.benhmida@esprit.tn";
    $mailSub = "Your account Login and Password for Coeur de Marie website";
    //$mailMsg = $_POST['nom'];
    $mailMsg = "Test Email sent successfuly ! YOU DID IT !!!!!!!!!!!!!!!!!!!!!!";
   // }
    require 'PHPMailer-5.2.25/PHPMailerAutoload.php';

   

   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "nizar.benhmida@esprit.tn";
   $mail ->Password = "gonhunter001";
   $mail ->SetFrom("nizar.benhmida@esprit.tn");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }
?>