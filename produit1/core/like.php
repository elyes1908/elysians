<?php
include '../config.php';
$db = config::getConnexion();
	session_start();
	$a=$_SESSION['n'];

	$reference=$_POST['reference'];

	//$select= "SELECT * FROM `eval` WHERE `id_serveur`=$id_serv and `id_user`=$a";

	$result = $db->query("SELECT * FROM `rate` WHERE `id_produit`like $reference and `id_user`=$a");
	$count=$result->rowCount();
	//$row = mysql_fetch_array($result);
	
	//var_dump($result);

	if ($count == 0 ){
		$INSERT="INSERT INTO `rate` (`id_produit`, `id_user`) VALUES ($reference,$a);";
		$db->exec($INSERT);
	}  

	

if(isset($_POST['likeBTN'])  )
{	
	$sql ="UPDATE `rate` SET `etat` = 1  WHERE `rate`.`id_produit` like '$reference' AND `rate`.`id_user` = '$a' ";
	$db->exec($sql);


	header('Location: http://localhost/produit1/views/afficherProduitfront.php');
}

else if(isset($_POST['dislikeBTN'])  )
{	
	$sql ="UPDATE `rate` SET `etat` = -1  WHERE `rate`.`id_produit` like '$reference' AND `rate`.`id_user` = '$a' ";
	$db->exec($sql);


    
	header('Location: http://localhost/produit1/views/afficherProduitfront.php');
}



?>