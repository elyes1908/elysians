<?PHP
include "../core/marqueC.php";
include "../config.php";
$marqueC=new MarqueC();
if (isset($_POST["id"])){
	$marqueC->supprimerMarque($_POST["id"]);
	header('Location: afficherMarque.php');
}

?>