<?PHP
include "../config.php";

class PromoC 
{
      
    function ajouterPromo($promo)
	{
		$sql="insert into promo (id_promo,deb_p,fin_p,taux,image) values (:id_promo, :deb_p,:fin_p,:taux,:image)";
		$db = config::getConnexion();
	    try
		{
			$req=$db->prepare($sql);
								
			 $id_promo=$promo->get_id_promo();
		     $deb_p=$promo->get_deb_p();
			 $fin_p=$promo->get_fin_p();
			 $taux=$promo->get_taux();
			 $image=$promo->get_image();
			
		     $req->bindValue(':id_promo',$id_promo);
			 $req->bindValue(':deb_p',$deb_p);
			 $req->bindValue(':fin_p',$fin_p);
			 $req->bindValue(':taux',$taux);
			 $req->bindValue(':image',$image);
			
			
	         $req->execute();
			           
		}

	    catch (Exception $e)
	    {
        	echo 'Erreur: '.$e->getMessage();
        }
		
	}

	 /****************************************************************************************************/

function reduction($id,$nouv)
    {
  
			$sql2="UPDATE produit  SET produit.prix_final=$nouv WHERE id=$id";

			$db = config::getConnexion();

	    
	        $req2=$db->prepare($sql2);


	        $req2->bindValue(':id',$id);
	      

            




		    try
		    {   
	                $req2->execute();
	            




	              // header('Location: index.php');
            }
            catch (Exception $e)
            {
                  die('Erreur: '.$e->getMessage());
            }
	}



	 /**********************************************************************************/
	  function recupererPromo($id_promo)

	{
			$sql="SELECT * from promo where id_promo=$id_promo";
			$db = config::getConnexion();
			try
			{
			
			   $liste=$db->query($sql);
			   return $liste;
			}
	        catch (Exception $e)
	        {
	            die('Erreur: '.$e->getMessage());
	        }
	}
    
    /****************************************************************************************************/

	function afficherPromos($promo)

    {
		    echo "id_promo: ".$promo->calcul(id_promo)."<br>";
		  
			
	}
	

    /****************************************************************************************************/

    function afficherPromo()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		    $sql="SElECT * From promo";
		    $db = config::getConnexion();
		    try
		    {
				$liste=$db->query($sql);
		 		return $liste;
		    }
            catch (Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }	
	}

	/****************************************************************************************/

    function supprimerPromo($id_promo)
    {
			$sql="DELETE FROM promo where id_promo= :id_promo";
			$db = config::getConnexion();
	        $req=$db->prepare($sql);
			$req->bindValue(':id_promo',$id_promo);
		    try
		    {
	              $req->execute();
	              // header('Location: index.php');
            }
            catch (Exception $e)
            {
                  die('Erreur: '.$e->getMessage());
            }
	}

	/*******************************************************************************************/
	
	function modifierEmploye($promo,$id_promo)
	{
		    $sql="UPDATE promo SET  id_promo=:id_promo,deb_p=:deb_p,fin_p=:fin_p,taux=:taux,image=:image WHERE id_promo=:id_promo";
		    
		
		    $db = config::getConnexion();
		   // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            try
            {		
			        $req=$db->prepare($sql);
					$id_promo=$promo->get_id_promo();
			        $deb_p=$promo->get_deb_p();
			        $fin_p=$promo->get_fin_p();
			        $taux=$promo->get_taux();
			        $image=$promo->get_image();
			        $datas = array(':id_promo'=>$id_promo,':deb_p'=>$deb_p,':fin_p'=>$fin_p,':taux'=>$taux ,':image'=>$image);
				
				   // $req->bindValue(':titree',$titree);
					$req->bindValue(':id_promo',$id_promo);
					$req->bindValue(':deb_p',$deb_p);
					$req->bindValue(':fin_p',$fin_p);
					$req->bindValue(':taux',$taux);
					$req->bindValue(':image',$image);
					
					
			        $s=$req->execute();
				

						
			           // header('Location: index.php');
            }
            catch (Exception $e)
            {
                    echo " Erreur ! ".$e->getMessage();
			        echo " Les datas : " ;
		 	        print_r($datas);
            }

  }
    /*********************************************************************************/

  function calcul($id_promo)
  {
      $tot=30;
    if (isset($_GET['id_promo']))

    {  
		$promoC=new promoC();
	    $result=$promoC->recupererPromo($_GET['id_promo']);
		foreach($result as $row)
		{
			$id_promo=$row['id_promo'];
			$deb_p=$row['deb_p'];
			$fin_p=$row['fin_p'];
			$taux=$row['taux'];
		
		}


        $tot=$tot-($tot*$taux/100);
        echo $tot;

	}











  }
            
       

    /************************************************************************************/
        
	
}

?>
