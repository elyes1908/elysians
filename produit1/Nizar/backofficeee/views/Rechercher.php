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
  $select_terme = $bdd->prepare("SELECT cin,nom,prenom,marque,datenaiss,email FROM fournisseur WHERE nom LIKE ? OR prenom LIKE ?");
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
    <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="../css/icon-font.min.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<style>
    .element {
        width: 250px;
        height: 350px;
        margin: 0px;
        position: relative;
        display: inline-block;
        vertical-align: top;
        margin-top:20px;
        margin-left
       
    }

    div#columns figure {
        display: inline-block;
        background: #c72828;
        border: 2px solid #c72828;
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
        background-color:#9f3f72;

    }

    #columns:hover figure:not(:hover) {
        opacity: 0.4;
        background-color:#734577;
    }
</style>

<body>
    <div class="header-section" style="padding-left: 200px">
        <!-- top_bg -->
        <div class="top_bg">
            <div class="header_top">
                <div class="top_right">
                    <ul>
                        <li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/contact.html">help</a></li>
                        |
                        <li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/contact.html">Contact</a></li>
                        |
                        <li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/checkout.html">Delivery information</a></li>
                    </ul>
                </div>
                <div class="top_left">
                    <h2><span></span> Call us : 032 2352 782</h2>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
        <div class="clearfix"></div>
        <!-- /top_bg -->
    </div>


 
  <div class="sidebar-menu">
                    <div class="logo">
                                        <a href="http://localhost/produit1/views/indexb.php"><img src="images/logo99.png" class="img-responsive" alt=""> </a>
                                    </div><br><br><br><br>
                    <header class="logo1">
                        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
                    </header>
                        <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
                                    <ul id="menu" >
                                        <li><a href="http://localhost/produit1/views/indexb.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
                                          <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Gestion des Produits</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                           <ul id="menu-academico-sub" >
                                           <li id="menu-academico-avaliacoes" ><a href="http://localhost/produit1/views/ajouterProduit.php">Ajouter Produit</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="http://localhost/produit1/views/afficherProduit.php">Afficher Produits</a></li>
                                            
                                          </ul>
                                        </li>
                                         <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Gestion Catégories</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                           <ul id="menu-academico-sub" >
                                           <li id="menu-academico-avaliacoes" ><a href="http://localhost/produit1/views/ajouterCategorie.php">Ajouter Categorie</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="http://localhost/produit1/views/afficherCategorie.php">Afficher Catégorie</a></li>
                                            
                                          </ul>
                                        </li>
                                         <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Gestion des Marques</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                           <ul id="menu-academico-sub" >
                                           <li id="menu-academico-avaliacoes" ><a href="http://localhost/produit1/nizar/backofficeee/views/ajoutMarque.html">Ajouter Marque</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="http://localhost/produit1/nizar/backofficeee/views/afficherMarque.php">Afficher Marques</a></li>
                                            
                                          </ul>
                                        </li>
                                        <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Gestion des Fournisseurs</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                           <ul id="menu-academico-sub" >
                                           <li id="menu-academico-avaliacoes" ><a href="http://localhost/produit1/nizar/backofficeee/views/ajoutFournisseur.html">Ajouter Fournisseur</a></li>
                                            <li id="menu-academico-avaliacoes" ><a href="http://localhost/produit1/nizar/backofficeee/views/afficherFournisseur.php">Afficher Fournisseurs</a></li>
                                            
                                          </ul>
                                        </li>

                                        <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Marketing</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                                         <ul id="menu-academico-sub" >
                                            <li id="menu-academico-avaliacoes" ><a href="http://localhost/produit1/views/tabs.php">soldes</a></li>
                                            <li id="menu-academico-boletim" ><a href="http://localhost/produit1/views/calender.php">Evénements</a></li>


                                          </ul>
                                     </li>
                                 </ul></div>
   </div>
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
               <div>
               <div>
                <?php echo $terme_trouve['datenaiss']; ?>
            </div>
               <div>
                <?php echo $terme_trouve['marque']; ?>
            </div>
               <div>
                <?php echo $terme_trouve['email']; ?>
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