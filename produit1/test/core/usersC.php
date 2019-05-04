<?php
include "../config.php";
class usersC {

function ajouterUsers($users){
		$sql="insert into users (user_id,user_name,user_email,user_pass,joining_date,role) values (:user_id,:user_name,:user_email,:user_pass,:joining_date,:role)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $user_id=$users->getuser_id();
        $user_name=$users->getuser_name();
        $user_email=$users->getuser_email();
        $user_pass=$users->getuser_pass();
        $joining_date=$users->getjoining_date();
        $role=$users->getrole();
		$req->bindValue(':user_id',$user_id);
		$req->bindValue(':user_name',$user_name);
		$req->bindValue(':user_email',$user_email);
		$req->bindValue(':user_pass',$user_pass);
		$req->bindValue(':joining_date',$joining_date);
		$req->bindValue(':role',$role);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	}
	?>