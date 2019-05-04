<?php  
include "../core/commandeC.php";
 $connect = mysqli_connect("localhost", "root", "", "test"); 
 if( isset($_POST["query"]))  
 { $codec1=new commandeC();
  $sql="SElECT id,total_price,created,customer_id,modified,status from orders where id like '%".$_POST["query"]."%' or total_price like '%".$_POST["query"]."%' or created like '%".$_POST["query"]."%' or customer_id like '%".$_POST["query"]."%' or modified like '%".$_POST["query"]."%' or status like '%".$_POST["query"]."%' " ;
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
      $listecode=$liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

                ?>
                  <table border="1" width="100%" id="tablepanier">
<tr>
<td>id</td>
<td>customer_id</td>
<td>total_price</td>
<td>created</td>
<td>modified</td>
<td>status</td>
<td>supprimer</td>
</tr>

<?PHP
foreach($listecode as $row){
  ?>
  <tr>
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['customer_id']; ?></td>
  <td><?PHP echo $row['total_price']; ?></td>
  <td><?PHP echo $row['created']; ?></td>
  <td><?PHP echo $row['modified']; ?></td>
  <td><?PHP echo $row['status']; ?></td>
  <td><form method="POST" action="supprimerCommande.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
  </form>
  </td>
  <?PHP
}
?>
</table>
<?php
}
 ?>