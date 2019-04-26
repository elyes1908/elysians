<?PHP
include "../config.php";
class CommC {
function afficherComm ($comm){
                echo "name: ".$comm->getname()."<br>";
                echo "ID: ".$comm->getID()."<br>";
                echo "comment: ".$comm->getcomment()."<br>";
               
        }
       
        function ajouterComm($comm){
                $sql="insert into comm (name,ID,comment) values (:name, :ID,:comment)";
                $db = config::getConnexion();
                try{
        $req=$db->prepare($sql);
                
        $name=$comm->getname();
        $ID=$comm->getID();
        $comment=$comm->getcomment();
        
                $req->bindValue(':name',$name);
                $req->bindValue(':ID',$ID);
                $req->bindValue(':comment',$comment);
               
                
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
                
        }
        
        function afficherComms(){
                //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
                $sql="SElECT * From comm";
                $db = config::getConnexion();
                try{
                $liste=$db->query($sql);
                return $liste;
                }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }       
        }
        function supprimerComm($ID){
                $sql="DELETE FROM comm where ID= :ID";
                $db = config::getConnexion();
        $req=$db->prepare($sql);
                $req->bindValue(':ID',$ID);
                try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
        function modifierComm($comm,$ID){
                $sql="UPDATE comm SET name=:name, ID=:ID,comment=:commentn WHERE ID=:ID";
                
                $db = config::getConnexion();
                //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{            
        $req=$db->prepare($sql);
        $commentn=$comm->getcomment();
        $name=$comm->getname();
      //  $ID=$comm->getID();
        // ':ID'=>$ID,
                $datas = array(':name'=>$name,':commentn'=>$commentn,':comment'=>$comment);
                $req->bindValue(':commentn',$commentn);
                $req->bindValue(':name',$name);
        //        $req->bindValue(':ID',$ID);
                $req->bindValue(':comment',$comment);
                
                
                
            $s=$req->execute();
                        
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
                
        }
        function recupererComm($ID){
                $db = config::getConnexion();
                $sql="SELECT * from comm where ID=($ID)" ;
                try{
                $liste=$db->query($sql);
                return $liste;
                }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
        function rechercherListeComm($tarif){
                $sql="SELECT * from comm where name=$namen";
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