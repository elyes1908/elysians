<?PHP
include "../config.php";
class SoinsC {
function afficherSoins ($soins){
		echo "Id: ".$soins->getid()."<br>";
		echo "Nom: ".$soins->getNom()."<br>";
		echo "Type: ".$soins->get_type()."<br>";
		echo "Image: ".$soins->getimage()."<br>";
		echo "Prix: ".$soins->getprix()."<br>";
	}
	function calculerSalaire($soins){
		echo $soins->getNbHeures() * $soins->getTarifHoraire();
	}
	function ajouterSoins($soins){
		$sql="insert into soins (id,nom,type,image,prix) values (:id, :nom,:type,:image,:prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$soins->getid();
        $nom=$soins->getNom();
        $type=$soins->get_type();
        $image=$soins->getimage();
        $prix=$soins->getprix();
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':type',$type);
		$req->bindValue(':image',$image);
		$req->bindValue(':prix',$prix);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherSoinss(){
		//$sql="SElECT * From soins e inner join formationphp.soins a on e.id= a.id";
		$sql="SElECT * From soins";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerSoins($id){
		$sql="DELETE FROM soins where id= :id";
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
	function modifierSoins($soins,$id){
		$sql="UPDATE soins SET id=:idd, nom=:nom,type=:type,image=:image,prix=:prix WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$soins->getid();
        $nom=$soins->getNom();
        $type=$soins->get_type();
        $image=$soins->getimage();
        $prix=$soins->getprix();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':type'=>$type,':image'=>$image,':prix'=>$prix);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':type',$type);
		$req->bindValue(':image',$image);
		$req->bindValue(':prix',$prix);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererSoins($id){
		$sql="SELECT * from soins where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListesoinss($tarif){
		$sql="SELECT * from soins where tarifHoraire=$tarif";
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