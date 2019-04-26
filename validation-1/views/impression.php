
<?PHP
include "../core/eventC.php";


$event1C=new EventC();
//$nb=$promo1C->calculPeriode($promo1C);
$listeEvent=$event1C->afficherEvent();




//var_dump($listePromo->fetchAll());
?>

<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="wid_promoth=device-wid_promoth, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>

<body id="target" onload="window.print()">

<div class="container">
     <h2>Events</h2>
     <p>Affichage des evenements :</p>          
	 <table class="table table-striped">
			<tr>
			<th>id</th>
			<th>titre</th>
			<th>date debut</th>
			<th>date fin</th>
			<th>capacite</th>
			<th>description</th>
			<th>image</th>



			
		
			
			</tr>

			<?PHP
		foreach($listeEvent as $row){
		?>
			<tr>
			<td><?PHP echo $row['id']; ?></td>
			<td><?PHP echo $row['titre']; ?></td>
			<td><?PHP echo $row['deb']; ?></td>
			<td><?PHP echo $row['fin']; ?></td>
			<td><?PHP echo $row['cap']; ?></td>
			<td><?PHP echo $row['des']; ?></td>
			 <td><img height="50" width="50" src="<?php echo $row['image'];?>"/></td>
			

	       
		
			

			
     
<?php
          

  ?>


     	</td>


			

        
		 
       

			</tr>


			<?PHP


			}
			?>
		</table>
</div>

