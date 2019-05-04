<?php        
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "crudproduit");  
      header('Content-Type: text/csv; charset=utf-8'); 
	 $filename ="Fournisseurs_" . date('Ymd') . ".csv";
      header('Content-Disposition: attachment; filename='.$filename);  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('cin', 'nom', 'prenom', 'daitenaiss', 'marque', 'email'));  
      $query = "SELECT * from fournisseur ORDER BY  cin DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?> 
 
