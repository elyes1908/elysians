<?php
try
{
 $bdd = new PDO("mysql:host=localhost;dbname=crud1", "root", "");
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
  $select_terme = $bdd->prepare("SELECT cin,nom,prenom FROM fournisseur WHERE nom LIKE ? OR prenom LIKE ?");
  $select_terme->execute(array("%".$terme."%", "%".$terme."%"));
 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Les résultats de recherche</title>
</head>
<style>
    .element {
        width: 250px;
        height: 350px;
        margin: 0px;
        position: relative;
        display: inline-block;
        vertical-align: top;
       
    }

    div#columns figure {
        display: inline-block;
        background: #f47721;
        border: 2px solid #f47721;
        box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
        -webkit-column-break-inside: avoid;
        -moz-column-break-inside: avoid;
        column-break-inside: avoid;
        padding: 15px;
        padding-bottom: 5px;
        background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
        opacity: 1;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }
    #columns figure:hover {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        transform: scale(1.1);
        background-color:red;

    }

    #columns:hover figure:not(:hover) {
        opacity: 0.4;
        background-color:red;
    }
</style>

<body>
    <?php
  while($terme_trouve = $select_terme->fetch())
  {
  	  ?>
  	  <center>
    <div class="element" id="columns">
        <figure>
            <h4>
                <?php echo $terme_trouve['nom']; ?>
            </h4>
            <p>
                <?php echo $terme_trouve ['prenom']; ?>
            </p>
            <div>
                <?php echo $terme_trouve['cin']; ?>
            </div>
        </figure>
    </div>
    </center>








    <?php
  
  }
  $select_terme->closeCursor();
   ?>
</body>

</html>