<?php
include '../config.php';
$db=config::getConnexion();
$query2= $db->query("UPDATE users SET users.pts_fid=users.pts_fid+10")or die($query2);
header('Location: http://localhost/test/views/checkout.php');

?>