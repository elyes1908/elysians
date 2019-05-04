<?PHP
include "../entities/fournisseur.php";
include "../core/fournisseurC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['datenaiss']) and isset($_POST['marque']) and isset($_POST['email']) and isset($_POST['numfournitures'])){
    
    //ajout
    $fournisseur1=new fournisseur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['datenaiss'],$_POST['marque'],$_POST['email'], $_POST['numfournitures']);
    $fournisseur1C=new fournisseurC();
    $fournisseur1C->ajouterFournisseur($fournisseur1);
    }

else
{
	echo "Vérifiez les champs !";
}
?>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


    $Email = $_POST['email'];
    $Password = $_POST['marque'];



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
    
    $to_array = explode(',', $Email);
    foreach($to_array as $address)
    {
    $mail->addAddress($address, 'Fournissseur');
    }
    $mail->addAddress($Email);
    
    $body = '<center><h2> Merci davoir inscrit  à notre site web!</h2></center> <br> Ci joint vous trouverez votre Email et Mot de passe: <br> <strong> Email: </strong>'.$Email.'<br> <strong>Password: </strong>'.$Password.'<br>';
   
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

<script language="Javascript">
    
        window.location.replace("afficherFournisseur.php");
   
</script>






