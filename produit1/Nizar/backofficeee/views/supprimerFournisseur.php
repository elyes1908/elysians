<?PHP
include "../core/fournisseurC.php";
$fournisseurC=new FournisseurC();
if (isset($_POST["cin"])){
	$fournisseurC->supprimerFournisseur($_POST["cin"]);
	header('Location: afficherFournisseur.php');
}

?>