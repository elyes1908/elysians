<?php 


include "../core/promoC.php";

$promoC=new PromoC();





	$sql="SELECT produit.prix  AS prix, promo.taux AS taux  FROM produit JOIN promo ON produit.id_promo = promo.id_promo";
	$db = config::getConnexion();
	    try
		{
			

			           
		}

	    catch (Exception $e)
	    {
        	echo 'Erreur: '.$e->getMessage();
        	echo "h";
        }
 
   
 





	
    




















?>