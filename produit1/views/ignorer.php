
<?PHP
session_start();
include "../core/eventC.php";



$promoC=new EventC();
if (isset($_POST["id"]) AND isset($_SESSION['n']))
{   

	$nb=0;
	$i=$_POST["id"];


	$sql="DELETE FROM participe where id= :id";
	$db = config::getConnexion();
	    try
		{
			$req=$db->prepare($sql);
								
			 $id=$_POST["id"];
			
			
			
		     $req->bindValue(':id',$id);
		  
			
	         $req->execute();
	            $promoC->capacite_plus($i);
	       
			           
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


