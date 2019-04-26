<?PHP
include "../config.php";
class MarqueC {
function afficherMarque ($marque){
		echo "id: ".$marque->getid()."<br>";
		echo "nom: ".$marque->getnom()."<br>";
	}

	function ajouterMarque($marque){
		$sql="INSERT INTO marque (id,nom) values (:id, :nom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$marque->getid();
        $nom=$marque->getnom();
       
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
	
		
            $req->execute();
           echo "values inserted successfully";
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function afficherMarques(){

		$sql="SElECT * From marque";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerMarque($id){
		$sql="DELETE FROM marque where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
  
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierMarque($marque,$id){
		$sql="UPDATE marque SET id=:idd, nom=:nom WHERE id=:id";
		
		$db = config::getConnexion();

try{		
        $req=$db->prepare($sql);
		$idd=$marque->getid();
        $nom=$marque->getnom();
      
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		
		
		
            $s=$req->execute();
			
     
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererMarque($id){
		$sql="SELECT * from marque where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeMarques($idd){
		$sql="SELECT * from marque where id=$idd";
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