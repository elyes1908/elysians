<?PHP
include "../entities/soins.php";
include "../core/soinsC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['type']) and isset($_POST['image']) and isset($_POST['prix'])){
$soins1=new soins($_POST['id'],$_POST['nom'],$_POST['type'],$_POST['image'],$_POST['prix']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$soins1C=new SoinsC();
$soins1C->ajouterSoins($soins1);
header('Location: afficherSoins.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>