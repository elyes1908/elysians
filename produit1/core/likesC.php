<?php

    class likesC {
function getlikestatus($idp,$idu){
    $sql="SELECT * from likes WHERE pid='".$idp."' and uid='".$idu."'";
    $db = config::getConnexion();

    try{
        $likeORunlike=$db->query($sql);
        return $likeORunlike;}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
                             } 
     
}
function getlikes_unlikes($id){
$sql="select sum(`like`) as like,sum(`unlike`) as unlike from likes where pid = ".$id;
$db = config::getConnexion();
try{
    $likeORunlike=$db->query($sql);
    return $likeORunlike;}
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
                         } 
 } 

function likeorUnlike($pid,$op,$uid){


    if($op == "like")
    {
        $gofor = "like";
    }
    elseif($op == "unlike")
    {
        $gofor = "unlike";
    }
  


    $sql="SELECT * from likes WHERE pid='".$pid."' and uid='".$uid."'";
  
    $db = config::getConnexion();
    try{
    $likeORunlike=$db->query($sql);
 
    foreach($likeORunlike as $row)
    {
    if($row['like'] == 1)  // if alredy liked set unlike for alredy liked product
    {
        
         $sql2 ="update likes set unlike=1,`like`=0 where id='".$row['id']."' and uid='".$uid."'";
        
         try{
            $req=$db->query($sql2);
        $req->execute();
          }
         catch (Exception $e){
            die('Erreur: '.$e->getMessage());
                             } 
            
    } elseif($row['unlike'] == 1){

        $sql2 ="update likes set like=1,`unlike`=0 where id='".$row['id']."' and uid='".$uid."'";
        try{
            $db->query($sql2);
           }
         catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        
        }
        }
    else
        {
            

        $sql2 ="INSERT INTO likes (pid,uid, $gofor) VALUES ('$pid','$uid','1')";
    
        try{
            $req=$db->prepare($sql2);
           
        $req->execute();
            }
         catch (Exception $e){
            die('Erreur: '.$e->getMessage());
                            } 
            
        }
    
        
                        }}catch (Exception $e){
                            die('Erreur: '.$e->getMessage());
                                             } }
                                            
                                            }
?>