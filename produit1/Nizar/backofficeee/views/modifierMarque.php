<HTML>
<head>
</head>
<body>
<meta charset="utf-8">
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
                        <div style="border-top:1px ridge rgba(255, 255, 2s55, 0.15)"></div>
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
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<?PHP
include "../entities/marque.php";
include "../config.php";
include "../core/marqueC.php";
if (isset($_GET['id'])){
	$marqueC=new MarqueC();
    $result=$marqueC->recupererMarque($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];		
?>
<center>
<form method="POST">
<table>
<caption>Modifier Marque</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="id"  style="border: 1px solid gray;margin-top:10px" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom"  style="border: 1px solid gray" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Modifier" value="modifier" class="btn btn-danger"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
</center>
<?PHP
	}
}
if (isset($_POST['Modifier'])){
	$marque=new marque($_POST['id'],$_POST['nom']);
	$marqueC->modifierMarque($marque,$_POST['id_ini']);
	echo $_POST['id_ini'];
    //header("location: afficherMarque.php");
    ?>
    <script language="Javascript">
    
        window.location.replace("afficherMarque.php");
   
    </script>
    <?php
}?>

</body>
</HTMl>