<html>
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

<?PHP
   ob_start();
include "../entities/fournisseur.php";
include "../core/fournisseurC.php";

if (isset($_GET['cin'])){
	$fournisseurC=new fournisseurC();
    $result=$fournisseurC->recupererFournisseur($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$datenaiss=$row['datenaiss'];
        $marque=$row['marque'];
        $email=$row['email'];
        $numfournitures=$row['numfournitures'];
        	}
}
?>
    <center>
        <form method="POST" class="formulaire">
            <table>
                <caption>Modifier Fournisseur</caption>
                <tr>
                    <td>CIN</td>
                    <td><input type="number" name="cin" style="border: 1px solid gray;margin-top:10px"  value="<?PHP echo $cin ?>"></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom" style="border: 1px solid gray" value="<?PHP echo $nom ?>"></td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td><input type="text" name="prenom" style="border: 1px solid gray" value="<?PHP echo $prenom ?>"></td>
                </tr>
                <tr>
                    <td>Date de naissance</td>
                    <td><input type="date" name="datenaiss" style="border: 1px solid gray" value="<?PHP echo $datenaiss ?>"></td>
                </tr>
                <tr>
                    <td>Marque</td>
                    <td><input type="text" name="marque"  style="border: 1px solid gray"value="<?PHP echo $marque ?>"></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><input type="mail" name="email"  style="border: 1px solid gray"value="<?PHP echo $email ?>"></td>
                </tr>
                <tr>
                    <td>Numero de fournitures</td>
                    <td><input type="text" name="numfournitures"  style="border: 1px solid gray"value="<?PHP echo $email ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Modifier" style="border: 1px solid gray" value="Modifier" class="btn btn-danger"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" name="cin_ini" style="border: 1px solid gray" value="<?PHP echo $_GET['cin'];?>"></td>
                </tr>
            </table>
        </form>
    </center>
<?PHP

if (isset($_POST['Modifier'])){
	$fournisseur=new fournisseur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['datenaiss'],$_POST['marque'],$_POST['email'],$_POST['numfournitures']);
	$fournisseurC->modifierFournisseur($fournisseur,$_POST['cin_ini']);
	 ?>
    <script language="Javascript">
    
        window.location.replace("afficherFournisseur.php");
   
    </script>
    <?php
}?>
 
  
?>
</body>
</html>