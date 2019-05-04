<?php  
include "../core/codec.php";
 $connect = mysqli_connect("localhost", "root", "", "test"); 
 if( isset($_POST["query"]))  
 { $codec1=new codec();
  $sql="SElECT num,montant,dateAjout from code where num like '%".$_POST["query"]."%' or montant like '%".$_POST["query"]."%' or dateAjout like '%".$_POST["query"]."%' " ;
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
<td>num</td>
<td>montant</td>
<td>dateajout</td>
<td>supprimer</td>
</tr>

<?PHP
foreach($listecode as $row){
  ?>
  <tr>
  <td><?PHP echo $row['num']; ?></td>
  <td><?PHP echo $row['montant']; ?></td>
  <td><?PHP echo $row['dateAjout']; ?></td>
  <td><form method="POST" action="supprimercode.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['num']; ?>" name="num">
  </form>
  </td>
  <?PHP
}
?>
</table>
<?php
}
 ?>