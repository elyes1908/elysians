<?PHP
include "../entities/employe.php";
include "../core/employeC.php";

	$employe1C = new EmployeC();
	
	$db=config::getconnexion();
$liste= $employe1C->afficherEmployes();
$today=date("y.m.d,h:i:s");
if (isset($_POST['nom']) and isset($_POST['prenom'])){
	


				
				
					echo "<td>".['nom']."</td>"." "."<td>".['prenom']."</td>";
					
					
					
}


 
	  
?>