<?PHP
include "../entities/fournisseur.php";
include "../core/fournisseurC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['datenaiss']) and isset($_POST['marque']) and isset($_POST['email'])){
    $fournisseur1=new fournisseur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['datenaiss'],$_POST['marque'],$_POST['email']);

    $fournisseur1C=new fournisseurC();
    $fournisseur1C->ajouterFournisseur($fournisseur1);
    header('Location: afficherFournisseur.php');
}
else
{
	echo "Vérifiez les champs !";
}

?>