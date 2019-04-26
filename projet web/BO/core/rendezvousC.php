<?PHP
include "../config.php";
class rendezvousC {
function afficherrendezvous ($rendezvous){
		echo "IDrdv: ".$rendezvous->getIDrdv()."<br>";
	
		echo "nomClient: ".$rendezvous->getnomClient()."<br>";
		echo "prenomClient: ".$rendezvous->getprenomClient()."<br>";
		echo "date: ".$rendezvous->getdate()."<br>";
		echo "soin: ".$rendezvous->getsoin()."<br>";
	    
	}
	
	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	} 
	function ajouterrendezvous($rendezvous){
		$sql="insert into rendezvous (IDrdv,nomClient,prenomClient,soin,date) values (:IDrdv, :nomClient,:prenomClient, :soin, :date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	    $IDrdv=$rendezvous->getIDrdv();
	   
	    $nomClient=$rendezvous->getnomClient();
	    $prenomClient=$rendezvous->getprenomClient();
	    $date=$rendezvous->getdate();
	    $soin=$rendezvous->getsoin();
        
       
		$req->bindValue(':IDrdv',$IDrdv);
		
		$req->bindValue(':nomClient',$nomClient);
		$req->bindValue(':prenomClient',$prenomClient);
		$req->bindValue(':soin',$soin);
		$req->bindValue(':date',$date);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherRendezvouss(){
		//$sql="SElECT * From rendezvous e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From rendezvous";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerrendezvous($IDrdv){
		$sql="DELETE FROM rendezvous where IDrdv= :IDrdv";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':IDrdv',$IDrdv);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierrendezvous($rendezvous,$IDrdv){
		$sql="UPDATE rendezvous SET IDrdv=:IDrdvv, prenomClient=:prenomClient,nomClient=:nomClient, date=:date , soin=:soin WHERE IDrdv=:IDrdv";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

	    $IDrdvv=$rendezvous->getIDrdv();
	 
	    $nomClient=$rendezvous->getnomClient();
	    $prenomClient=$rendezvous->getprenomClient();
	    $date=$rendezvous->getdate();
	    $soin=$rendezvous->getsoin();
        
		$datas = array(':IDrdvv'=>$IDrdvv,':IDrdv'=>$IDrdv,':nomClient'=>$nomClient, ':prenomClient'=>$prenomClient,':date'=>$date,':soin'=>$soin);
		$req->bindValue(':IDrdvv',$IDrdvv);
		$req->bindValue(':IDrdv',$IDrdv);
	
		$req->bindValue(':nomClient',$nomClient);
		$req->bindValue(':prenomClient',$prenomClient);
		$req->bindValue(':soin',$soin);
		$req->bindValue(':date',$date);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererrendezvous($IDrdv){
		$sql="SELECT * from rendezvous where IDrdv=$IDrdv";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
	
	function rechercherListerendezvous($IDrdv){
		$sql="SELECT * from rendezvous where IDrdv=$IDrdv";
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