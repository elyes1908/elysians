<?PHP
include "../config.php";
class EmployeC {
function afficherEmploye ($employe){
		echo "Cin: ".$employe->getCin()."<br>";
		echo "Nom: ".$employe->getNom()."<br>";
		echo "Prénom: ".$employe->getPrenom()."<br>";
		echo "Image: ".$employe->getimage()."<br>";
		
		echo "nb heures: ".$employe->getNbHeures()."<br>";
	echo "tarif heure: ".$employe->getTarifHoraire()."<br>";
		echo "salaire: ".$salaire->getsalaire()."<br>";
	}

	function ajouterEmploye($employe){
		$sql="insert into employe  (cin,nom,prenom,specialite,image,nbHeures,tarifHoraire) values (:cin, :nom,:prenom,:specialite,:image,:nbH,:tarifH)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
		$image=$employe->getimage();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
        $specialite=$employe->getspecialite();
			
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':specialite',$specialite);
		$req->bindValue(':image',$image);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		
		
			
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEmployes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From employe ORDER BY `employe`.`nbHeures` DESC ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEmploye($cin){
		$sql="DELETE FROM employe where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEmploye($employe,$cin){
		$sql="UPDATE employe SET cin=:cinn, nom=:nom,prenom=:prenom,image=:image,nbHeures=:nbH,tarifHoraire=:tarifH,specialite=:specialite WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
		$image=$employe->getimage();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
        $specialite=$employe->getspecialite();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':image'=>$image,':nbH'=>$nb,':tarifH'=>$tarif,':specialite'=>$specialite);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':image',$image);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		$req->bindValue(':specialite',$specialite);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($cin){
		$sql="SELECT * from employe where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
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