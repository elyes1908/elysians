<?PHP
include "../core/PromoC.php";
$promoC=new PromoC();
if (isset($_POST["id_promo"])){
	$promoC->supprimerPromo($_POST["id_promo"]);
	header('Location: afficherPromo.php');
}

?>