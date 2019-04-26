<?PHP
include "../core/eventC.php";
$promoC=new EventC();
if (isset($_POST["id"])){
	$promoC->supprimerEvent($_POST["id"]);
	header('Location: afficherEvent.php');
}

?>