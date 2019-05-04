<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <title></title>
</head>

<body>

  <script>
      function alertsweet(){
          swal('Stock insuffisant!', 'veuillez demander de fournir des produits!', 'warning');
      }
        function alertsweet2(){
          swal('Aucun probleme!', 'Votre stock est largement suffisant.', 'success');
      }
    </script>
    
   <form method="POST" >
   <!-- <button type="button" name="alertestock" onclick="swal('Stock insuffisant!', 'veuillez demander de fournir des produits', 'warning');">AlerteStock</button>-->
    <button id ="alertee" type="button" name="alertestock" value="alertestock" onclick="alertsweet2();">AlerteStock</button>
    </form>
    
     <?php   
    include "../config.php";
    
 //if(isset($_POST['alertestock']))  
 //{  
     $sql="SELECT * FROM produit WHERE quantite = 1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
       
foreach($liste as $row){
?>
            <tr>
                <td>
                    <?PHP echo $row['marque']; ?>
                </td>
            </tr> 
            
            <?PHP                    
      if($row)  
      { 
  ?>        
    <script>
    document.getElementById('alertee').onclick = alertsweet();
    </script>  
     <?PHP   
      }
     else {
     ?>
        <script>
            document.getElementById('alertee').onclick = alertsweet2();
        </script>
     <?PHP
     }
     ?>
<?PHP
 }  
 
 ?> 
 
    
    
    
</body>

</html>


 