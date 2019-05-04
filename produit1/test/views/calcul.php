<?php
include '../config.php';
$fid=$_POST['fid'];
$tot=$_POST['tot'];
$tot_f=0;
if (isset($_POST['fid_b']))
{
      $tot_f= $tot- $fid;    
}
header ('location :http://localhost/test/views/checkout.php');
?>