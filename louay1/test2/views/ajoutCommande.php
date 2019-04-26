<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";

if (isset($_POST['id']) and isset($_POST['customer_id']) and isset($_POST['total_price']) and isset($_POST['created']) and isset($_POST['modified'])and isset($_POST['status'])){
$commande1=new commande($_POST['id'],$_POST['customer_id'],$_POST['total_price'],$_POST['created'],$_POST['modified'],$_POST['status']);
$commande1C=new commandeC();
$commande1C->ajouterCommande($commande1);
header('Location: afficherCommande.php');
	
}else{
	echo "vérifier les champs";
}


?>