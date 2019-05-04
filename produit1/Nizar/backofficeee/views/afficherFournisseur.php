<HTML>

<head>
</head>
<style>
    .crud {
        padding-left: 500px;
    }
</style>

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
                                        <a href="http://localhost/produit1/views/indexb.php"><img src="http://localhost/produit1/views/images/logo99.png" class="img-responsive" alt=""> </a>
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
include "../core/fournisseurC.php";
$fournisseur1C=new fournisseurC();
$listefournisseurs=$fournisseur1C->afficherFournisseurs();
    
    $db=config::getconnexion();
    
    if(isset($_POST['tri']))
{
	$listefournisseurs=$db->query("SELECT * FROM `fournisseur` ORDER BY `fournisseur`.`cin` ASC");
}
else if(isset($_POST['tria']))
{
	$listefournisseurs=$db->query("SELECT * FROM `fournisseur` ORDER BY `fournisseur`.`cin` DESC");
	
}
	else $listefournisseurs=$fournisseur1C->afficherFournisseurs();	
?>

    
    <div>
        <form action="rechercher.php" method="get"  style="padding-top:50px; margin-left:250px;">
            <div class="form-row">
                <div style="margin-right:10px"> <input type="submit" name="s" value="Rechercher" class="btn btn-danger"></div>
                <div><input type="search" name="terme" class="form-control" placeholder="Tapez le nom..."></div>
            </div>
        </form>
    
  
   <!-- <form method="POST">
        <input type="text" name="search" class="form-control" style="width:300px;margin-top: 25px;margin-left: 250px;" placeholder="Rechercher...">
        <input type="submit" name="submit" value="Rechercher" class=" btn btn-danger" style="margin-left:250px;margin-top: 10px;">
    </form>
    -->
  

       <div class="form-row">
    <form method="post" style="margin-left:250px">
        <button type="submit" name="tri" style="margin-top:10px" class="btn btn-danger">Tri ASC</button>
        <button type="submit" name="tria" style="margin-top:10px" class="btn btn-danger">Tri DESC </button>
        <a href="ImprimerListe.php" style="margin-top:10px" class="btn btn-info">imprimer</a>
       
    </form>
    <form action="Export.php" style="margin-left:5px">
         <button type="submit" name="export" style="margin-top:10px" class="btn btn-success">Export CSV </button>
    </form>
    <form action="topfournisseur.php" style="margin-left:5px">
         <button type="submit" name="topf" style="margin-top:10px" class="btn btn-success">Top Fournisseur</button>
    </form>
    </div>
    
    <div style="padding-left:250px;">
        <table class="table">
            <tr>
                <td>CIN</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Date de naissance</td>
                <td>Marque</td>
                <td>E-mail</td>
                <td>Numéro de Fournitures</td>
                <td>Supprimer</td>
                <td>Modifier</td>
            </tr>
            <?PHP
foreach($listefournisseurs as $row){
?>
            <tr>
                <td>
                    <?PHP echo $row['cin']; ?>
                </td>
                <td>
                    <?PHP echo $row['nom']; ?>
                </td>
                <td>
                    <?PHP echo $row['prenom']; ?>
                </td>
                <td>
                    <?PHP echo $row['datenaiss']; ?>
                </td>
                <td>
                    <?PHP echo $row['marque']; ?>
                </td>
                <td>
                    <?PHP echo $row['email']; ?>
                </td>
                <td>
                    <?PHP echo $row['numfournitures']; ?>
                </td>
                <td>
                    <form method="POST" action="supprimerFournisseur.php">
                        <input type="submit" name="Supprimer" value="Supprimer" class="btn btn-danger">
                        <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
                    </form>
                </td>
                <td><a href="modifierFournisseur.php?cin=<?PHP echo $row['cin']; ?>">
                        <input type="submit" name="modifier" value="modifier" class="btn btn-primary"></a>
                </td>
            </tr>
            <?PHP
}
?>
      
        </table>
    </div>
    </div>
    <div class="fo-top-di" style="padding-left: 250px;margin-top:100px">
			<div class="foot-top">
				
					<div class="col-md-6 s-c">
						<li>
							<div class="fooll">
								<h1>follow us on</h1>
							</div>
						</li>
						<li>
							<div class="social-ic">
								<ul>
									<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="facebok"> </i></a></li>
									<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="twiter"> </i></a></li>
									<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="goog"> </i></a></li>
									<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="be"> </i></a></li>
										<div class="clearfix"></div>	
								</ul>
							</div>
						</li>
							<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 s-c">
						<div class="stay">
									<div class="stay-left">
										<form>
											<input type="text" placeholder="Enter your email" required="">
										</form>
									</div>
									<div class="btn-1">
										<form>
											<input type="submit" value="join">
										</form>
									</div>
										<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				
			</div>

</HTML>