<?PHP
include "../config.php";
class FournisseurC {
function afficherFournisseur ($fournisseur){
		echo "CIN: ".$fournisseur->getCin()."<br>";
		echo "Nom: ".$fournisseur->getNom()."<br>";
		echo "Prenom: ".$fournisseur->getPrenom()."<br>";
		echo "Date de naissance: ".$fournisseur->getDateNaiss()."<br>";
        echo "Marque: ".$fournisseur->getMarque()."<br>";
        echo "E-mail: ".$fournisseur->getEmail()."<br>";
	}

function ajouterFournisseur($fournisseur){
		$sql="insert into fournisseur (cin,nom,prenom,datenaiss,marque,email) values (:cin,:nom,:prenom,:datenaiss,:marque,:email)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$fournisseur->getCin();
        $nom=$fournisseur->getNom();
        $prenom=$fournisseur->getPrenom();
        $datenaiss=$fournisseur->getDateNaiss();
        $marque=$fournisseur->getMarque();
        $email=$fournisseur->getEmail();

		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':datenaiss',$datenaiss);
        $req->bindValue(':marque',$marque);
        $req->bindValue(':email',$email);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
function afficherFournisseurs(){
		
		$sql="SELECT * From fournisseur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function supprimerFournisseur($cin){
		$sql="DELETE FROM fournisseur where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function modifierFournisseur($fournisseur,$cin){
		$sql="UPDATE fournisseur SET cin=:cinn, nom=:nom, prenom=:prenom, datenaiss=:datenaiss, marque=:marque, email=:email WHERE cin=:cin";
		
		$db = config::getConnexion();
		
try{		
        $req=$db->prepare($sql);
		$cinn=$fournisseur->getCin();
        $nom=$fournisseur->getNom();
        $prenom=$fournisseur->getPrenom();
        $datenaiss=$fournisseur->getDateNaiss();
        $marque=$fournisseur->getMarque();
        $email=$fournisseur->getEmail();

		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':datenaiss'=>$datenaiss,':marque'=>$marque, ':email'=>$email);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':datenaiss',$datenaiss);
        $req->bindValue(':marque',$marque);
        $req->bindValue(':email',$email);
		
            $s=$req->execute();
			
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

function recupererFournisseur($cin){
		$sql="SELECT * from fournisseur where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
function rechercherListeFournisseurs($mrq){
		$sql="SELECT * from fournisseur where marque=$mrq";
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