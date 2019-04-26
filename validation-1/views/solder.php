
<?PHP


include "../core/promoC.php";
$promoC=new PromoC();
if (isset($_POST["id"]) AND isset($_POST["id_promo"])  )
{   
		$id_promo=$_POST['id_promo'];
		$id=$_POST['id'];
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
         
      
            WHERE produit.id=$id"

    

            );
            
            /************************************/
            $requete_prom=$bdd->query("SELECT taux,deb_p,fin_p
            FROM promo
         
      
            WHERE promo.id_promo=$id_promo "

    

            );
            /*******************************/
           // $resultat=$requete->fetch();
           $resultat_prod=$requete_prod->fetch();
           $resultat_prom=$requete_prom->fetch();
			
		   $prix= $resultat_prod['prix'];
		   $taux= $resultat_prom['taux'];
		   $deb= $resultat_prom['deb_p'];
		   $fin= $resultat_prom['fin_p'];
		

		  $prix_apres_solde=$prix-($prix*$taux)/100;
          echo $prix_apres_solde;
          $promoC->reduction($id,$prix_apres_solde);


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
	echo"vous devez etre connectés pour pouvoir participer</br> " ;
     ?><a href="../views/connexion.php">se connecter</a>

<?php

}


?>


