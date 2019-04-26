<?PHP
include "../core/rendezvousC.php";
$rendezvousC=new rendezvousC();
if (isset($_POST["IDrdv"])){
	$rendezvousC->supprimerrendezvous($_POST["IDrdv"]);
	header('Location: afficherrendezvous.php');
}

?>