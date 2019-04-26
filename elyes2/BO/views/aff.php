<?PHP
include "../entities/employe.php";
include "../core/employeC.php";


if (isset ($_POST['id']) and isset ($_POST['soin'])and isset ($_POST['date']) and isset ($_POST['nom'])   )
{$affecter=new employe($_POST['id'],$_POST['soin'],$_POST['date'],$_POST['nom']);
	
	
	
	
	

	$sql="INSERT INTO `crud`.`affectation` (`id`, `soin`, `date`, `nom`) VALUES ('0', 'corps', '2019-04-04', 'elyes')" ;
	$db = config::getConnexion();
	    try
		{
			$req=$db->prepare($sql);
								
			 $soin=$_POST['soin'];
	$date=$_POST['date'];
			 
			
			
		     $req->bindValue(':soin',$soin);
			 $req->bindValue(':date',$date);

		   
			
	         $req->execute();
	       

header('Location: afficherEmploye.php');
	
}
	catch (Exception $e)
	    {
        	echo 'Erreur: '.$e->getMessage();
        }
 
}

else{
	echo "vérifier les champs";
}
//*/
?>