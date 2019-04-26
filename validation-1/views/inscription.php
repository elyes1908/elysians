<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=date', 'root', '');

if(isset($_POST['forminscription']) )
{
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
   {

      $pseudo=htmlspecialchars($_POST['pseudo']);
      $mail=htmlspecialchars($_POST['mail']);
      $mail2=htmlspecialchars($_POST['mail2']);
      $mdp=sha1($_POST['mdp']);
      $mdp2=sha1($_POST['mdp2']);


      if($mail==$mail2)
      {  
           if(filter_var($mail, FILTER_VALIDATE_EMAIL))
            {
               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist==0)
                {


                      if($mdp==$mdp2)


                      {
                        
                             $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                             $insertmbr->execute(array($pseudo, $mail, $mdp));
                            $succes="votre compte a été bien crée"  ;
                      }

                        else 

                        {
                           $erreur="les mots de passe ne correspondent pas";
                        }


                  }
                  else 
                  {
                     $erreur="mail déja utilisé";
                  }
            }

            else { $erreur="erreur syntax mail";}

         }

           else 

      {
         $erreur="les mails ne correspondent pas";
      }

 
        
      
    




   }

   else 

   {


      $erreur="veuillez remplir tous les champs";
   }
}

?> 
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Inscription</h2>
         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="pseudo">Pseudo :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail2">Confirmation du mail :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" value="<?php if(isset($mdp)) { echo $mdp; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" value="<?php if(isset($mdp2)) { echo $mdp2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }

         if(isset($succes))
         {
            echo'<font color="gren">' .$succes."</font>";
         }
         ?>
      </div>
   </body>
</html>