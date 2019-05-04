
<?PHP
session_start();
include "../core/eventC.php";



$promoC=new EventC();
if (isset($_POST["id"]) AND isset($_SESSION['n']))
{   


	$i=$_POST["id"];

	 $id=$_POST["id"];
    $user_id=$_SESSION['n'];
	

	$sql="insert into participe (id,user_id) values (:id,:user_id)";

	
	$db = config::getConnexion();
	    try
		{
			$req=$db->prepare($sql);
								
			
			
			
			
		     $req->bindValue(':id',$id);
		     $req->bindValue(':user_id',$user_id);
		   
			
	         $req->execute();
	          $promoC->capacite_moins($i);
	       
			           
		}

	    catch (Exception $e)
	    {
        	echo 'Erreur: '.$e->getMessage();
        }
 
   
 
	header('Location:index.php');
	
    

}

else {
	echo"vous devez etre connectés pour pouvoir participer</br> " ;
     ?><a href="auth.html">se connecter</a>

<?php

}


?>


