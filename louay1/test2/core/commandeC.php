<?PHP
include "../config.php";
class commandeC {
function afficherCommande ($commande){
		echo "id: ".$commande->getid()."<br>";
		echo "customer_id: ".$commande->getcustomer_id()."<br>";
        echo "total_price: ".$commande->gettotal_price()."<br>";
        echo "created: ".$commande->getcreated()."<br>";
        echo "modified: ".$commande->getmodified()."<br>";
        echo "status: ".$commande->getstatus()."<br>";
	}
    
    
	function ajouterCommande($commande){
		$sql="insert into orders (id,customer_id,total_price,created,modified,status) values (:id,:customer_id,:total_price,:created,:modified,:status)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$commande->getid();
        $customer_id=$commande->getcustomer_id();
        $total_price=$commande->gettotal_price();
        $created=$commande->getcreated();
        $modified=$commande->getmodified();
        $status=$commande->getstatus();
		$req->bindValue(':id',$id);
		$req->bindValue(':customer_id',$customer_id);
        $req->bindValue(':total_price',$total_price);
        $req->bindValue(':created',$created);
        $req->bindValue(':modified',$modified);
        $req->bindValue(':status',$status);    


            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCommandes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From orders";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCommande($id){
		$sql="DELETE FROM orders where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCommande($commande,$id){
		$sql="UPDATE orders SET id=:idd, customer_id=:customer_id, total_price=:total_price, created=:created, modified=:modified, status=:status WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$commande->getid();
        $customer_id=$commande->getcustomer_id();
        $total_price=$commande->gettotal_price();
        $created=$commande->getcreated();
        $modified=$commande->getmodified();
        $status=$commande->getstatus();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':customer_id'=>$customer_id,  ':total_price'=>$total_price, ':created'=>$created, ':modified'=>$modified, ':status'=>$status,);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':customer_id',$customer_id);
        $req->bindValue(':total_price',$total_price);
        $req->bindValue(':created',$created);
        $req->bindValue(':modified',$modified);
        $req->bindValue(':status',$status);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCommande($id){
		$sql="SELECT * from orders where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecommande($id_cus){
		$sql="SELECT * from orders where customer_id=$id_cus";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function tri($str,$stc){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT id,total_price,created from orders order by $str $stc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>