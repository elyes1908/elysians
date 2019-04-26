<?PHP
include "../entities/rendezvous.php";
include "../core/rendezvousC.php";

if (isset($_POST['prenomClient']) and isset($_POST['nomClient']) and isset($_POST['date']) and isset($_POST['soin'])){

$IDrdv=$_POST['IDrdv'];

$prenomClient=$_POST['prenomClient'];
$nomClient=$_POST['nomClient'];
$soin=$_POST['soin'];
$date=$_POST['date'];
$today=date("Y-m-d");
if($date>=$today)
{

$rendezvous1=new rendezvous($IDrdv,$nomClient,$prenomClient,$soin,$date);
$rendezvous1C=new rendezvousC();
$rendezvous1C->ajouterrendezvous($rendezvous1);
header('Location: afficherrendezvous.php');
	
}}else{
	echo "vérifier les champs";
}
//*/

?>