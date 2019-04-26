<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "crud");  
      header('Content-Type: text/csv; charset=utf-8'); 
	 $filename ="Employe_" . date('Ymd') . ".csv";
      header('Content-Disposition: attachment; filename='.$filename);  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('cin', 'nom', 'prenom', 'nbHeure', 'tarifHoraire', 'image'));  
      $query = "SELECT * from employe ORDER BY  cin DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?> 