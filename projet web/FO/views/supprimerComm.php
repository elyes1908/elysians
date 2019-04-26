<?PHP
include "../core/commC.php";
$commC=new CommC();
if (isset($_POST["ID"])){
	$commC->supprimerComm($_POST["ID"]);
	header('Location: afficherComm.php');
}

?>