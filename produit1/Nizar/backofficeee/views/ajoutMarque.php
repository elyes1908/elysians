
<?PHP
include "../entities/marque.php";
include "../core/marqueC.php";
  include "../config.php";
if (isset($_POST['id']) and isset($_POST['nom'])){
$marque1=new marque($_POST['id'],$_POST['nom']);

$marque1C=new MarqueC();
$marque1C->ajouterMarque($marque1);
header('Location: afficherMarque.php');
	
}else{
	echo "vérifier les champs";
}

?>
