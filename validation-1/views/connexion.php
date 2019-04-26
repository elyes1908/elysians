<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=date', 'root', '');
?>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
           
         <input type="email" name="mailconnect"  id="mailconnect" placeholder="mail"/> 
         <input type="password" name="mdpconnect" id="mdpconnect" placeholder="mot de passe"/>
         <input type="submit" name="formconnect" id="formconnect" value="se connecter"/>
         </form><?php
         session_start();
           
      if(isset($_POST['formconnect']))
      {
         $mailconnect=htmlspecialchars($_POST['mailconnect']);
         $mdpconnect=sha1($_POST['mdpconnect']);
         if( !empty($mailconnect)  AND !empty($mdpconnect))
         {
               $requser = $bdd->prepare("SELECT * FROM membres WHERE mail=? AND motdepasse=?");
               $requser->execute(array($mailconnect,$mdpconnect));
               $userexist = $requser->rowCount();
               if($userexist==1)
               {
                 
                  $userinfo = $requser->fetch();
            $_SESSION['id_membre'] = $userinfo['id_membre'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: ../web/index.php?id=".$_SESSION['id_membre']);
               }

               else
               {
                  $erreur="mauvais mail ou mot de passe";
               }
         }

         else 

         {
            $erreur="tous les champs doivent etre remplis";
         }

      }
       


     
      





         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }

         if(isset($succes))
         {
            echo'<font color="gren">' .$succes."</font>";
         }
         ?>
         <a href="../views/inscription.php">Créer un compte</a>
      </div>
   </body>
</html>