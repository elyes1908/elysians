<?php
include '../config.php';
$db=config::getConnexion();
$query2= $db->query("UPDATE users SET pts_fid=pts_fid+10") or die($query2);
header('Location: http://localhost/produit/test/views/checkout.php');

?>