<?php 
include "config.php";


if(isset($_POST['User'])){
    
    $uname=$_POST['User'];
    $password=$_POST['Pass'];
    
    $sql="select * from loginform where User='".$uname."'AND Pass='".$password."' limit 1";
    
  header('location: BO/views/AfficherEmploye.php');
        
}
?>