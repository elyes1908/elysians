<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="wid_promoth=device-wid_promoth, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>

 
<?PHP
include "../core/eventC.php";


$event1C=new EventC();
//$nb=$promo1C->calculPeriode($promo1C);
$listeEvent=$event1C->afficherParticipant($_POST["id"]);




//var_dump($listePromo->fetchAll());
?>

<div class="container">
     <h2>nous sommes hereux d'accueuillir nos chers membres :</h2>
    
	 <table class="table table-striped">
			<tr>
			<th>pseudo</th>
			<th>mail</th>
			<th>event</th>
		
		
			
			
			</tr>

			<?PHP
		foreach($listeEvent as $row){
		?>
			<tr>
			<td><?PHP echo $row['pseudo']; ?></td>
			<td><?PHP echo $row['mail']; ?></td>
			<td><?PHP echo $row['titre']; ?></td>
		
	       
		
			








     
<?php
          

  ?>


     	</td>



		
		  
        
		 
       

			</tr>


			<?PHP


			}
			?>
		</table>
</div>



</body>
</html>

