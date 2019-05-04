<?PHP
include "../config.php";
class codec {
	function ajoutcode($code){
		$sql="insert into code (num,montant,validite,dateAjout) values (:num,:montant,:validite,:dateAjout)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $num=$code->getnum();
        $montant=$code->getmontant();
        $validite=$code->getvalidite();
        $dateAjout=$code->getdateajout();
		$req->bindValue(':num',$num);
		$req->bindValue(':montant',$montant);
		$req->bindValue(':validite',$validite);
		$req->bindValue(':dateAjout',$dateAjout);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function affichercode(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From code";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function affichercodep(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT num,montant From code";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercode($num){
		$sql="DELETE FROM code where num= :num";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercode($code,$num){
		$sql="UPDATE code SET num=:num, montant=:montant,validite=:validite,dateajout=:dateAjout WHERE num=:num";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$num=$code->getnum();
        $montant=$code->getmontant();
        $validite=$code->getvalidite();
        $dateAjout=$code->getdateajout();

		$datas = array(':num'=>$num, ':montant'=>$montant, ':validite'=>$validite,':dateAjout'=>$dateajout);
		$req->bindValue(':num',$num);
		$req->bindValue(':montant',$montant);
		$req->bindValue(':validite',$validite);
		$req->bindValue(':dateAjout',$dateajout);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
function montant($str){
		$sql="select montant from code where num=$str";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}	
function validite($str){
		$sql="select validite from code where num=$str";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}	
function dateajout($str){
		$sql="select dateAjout from code where num=$str";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function verif($str){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT count(*) as 'verif' from code where num=$str";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
function affichcode(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT num,montant,dateajout from code";
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
		$sql="SElECT num,montant,dateAjout from code order by $str $stc";
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