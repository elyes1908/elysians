
<?PHP
include "../core/produitC.php";
include "../core/promoC.php";
$promoC=new PromoC();
if (isset($_POST["reference"]) AND isset($_POST["id_promo"])  )
{   
		$id_promo=$_POST['id_promo'];
		$id=$_POST['reference'];
		$today=date('Y-m-d');

	    $bdd = config::getConnexion();
	    try
		{
			/*$requete=$bdd->query("SELECT prix , taux
            FROM produit
            JOIN promo
            ON produit.id_promo= promo.id_promo
            WHERE promo.id_promo=$id_promo AND produit.id=$id "

    

            );
            */
         
            
            $requete_prod=$bdd->query("SELECT prix 
            FROM produit
         
      
            WHERE produit.reference=$id"

    

            );
            
            /************************************/
            $requete_prom=$bdd->query("SELECT id_promo,taux,deb_p,fin_p
            FROM promo
         
      
            WHERE promo.id_promo=$id_promo "

    

            );
            /*******************************/
           // $resultat=$requete->fetch();
           $resultat_prod=$requete_prod->fetch();
           $resultat_prom=$requete_prom->fetch();
			
		   $prix= $resultat_prod['prix'];
		   $okeed= $resultat_prod['prix'];
		   $taux= $resultat_prom['taux'];
		   $deb= $resultat_prom['deb_p'];
		   $fin= $resultat_prom['fin_p'];
       $id_promo= $resultat_prom['id_promo'];
		

		      $prix_apres_solde=$prix-($prix*$taux)/100;
          // echo $prix_apres_solde;
      
          if($today>=$deb)
          {
          $promoC->reduction($id,$prix_apres_solde,$id_promo);
           header('Location: afficherProduit.php');
          }

          if($today>$fin OR $today<$deb)
          {
             


                  $promoC->reduction_non($id);

          }


         /* $sql="insert into produit_en_promo (id,id_promo) values (:id,:id_promo)";
          $req=$bdd->prepare($sql);
								
		
			
			
		     $req->bindValue(':id',$id); 
		     $req->bindValue(':id_promo',$id_promo);

		   
		   
			
	         $req->execute();

	       
*/
           

		}

	    catch (Exception $e)
	    {
        	echo 'Erreur: '.$e->getMessage();
        }
 
   
 

	
    

}

else {
	echo"verifier les champs</br> " ;
     ?><a href="../views/connexion.php">se connecter</a>

<?php

}


?>


