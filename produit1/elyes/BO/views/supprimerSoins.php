<<?PHP
include "../core/soinsC.php";
$soinsC=new SoinsC();
if (isset($_POST["id"])){
	$soinsC->supprimerSoins($_POST["id"]);
	header('Location: afficherSoins.php');
}

?>