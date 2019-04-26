

<?php
try
{
 $bdd = new PDO("mysql:host=localhost;dbname=date", "root", "");
 $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
  die("Une érreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");

if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
 $terme = $_GET['terme'];
 $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête

 if (isset($terme))
 {
  $terme = strtolower($terme);
  $select_terme = $bdd->prepare("SELECT titre, deb,fin,cap ,des,image FROM date_test WHERE titre LIKE ? ");
  $select_terme->execute(array("%".$terme."%"));
 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}




?>
<!DOCTYPE html>
<head> 
</head>
<body>


                  
  <?php
  while($terme_trouve = $select_terme->fetch())
  {
  	  ?>  <div class="element" id="columns" >
                            
                        
                            <figure>
                                
                              
                                      
                                    
                                 
                                       <h4><?php echo $terme_trouve['titre']; ?></h4>
                                       <div><?php echo $terme_trouve['deb']; ?></div>
                                       <div><?php echo $terme_trouve['fin']; ?></div>
                                       <td><img height="300" width="300" src="<?php echo $terme_trouve['image'];?>"/></td>
      
                                </figure>     
                                <br>
                                        
                            </div>
                        
                                
                             
                             
                           
                    


                  <?php
  
  }
  $select_terme->closeCursor();
   ?>
 </body>
</html>