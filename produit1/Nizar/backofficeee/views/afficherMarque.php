<HTML>

<head>
</head>
<style>
    .crud{
        padding-left: 250px;
    }
    </style>
<body>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
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
    
  <!-- les fonctions sweetalert -->  
<script>
      function alertsweet(){
          swal('Stock insuffisant!', 'veuillez demander de fournir des produits!', 'warning');
      }
        function alertsweet2(){
          swal('Aucun probleme!', 'Votre stock est largement suffisant.', 'success');
      }
    </script>
    
    
    <div style="margin-left:250px">
    <!-- le formulaire de la boutton consulter alerte, alertsweet2 (aucun probleme est par defaut) -->
     <form method="POST" >
    <button id ="alertee" type="button" name="alertestock" value="alertestock" onclick="alertsweet2();" class="btn btn-danger" style="margin-top:10px;">Consulter état du stock</button>
    </form>
    <form action="topmarque.php" style="margin-left:5px">
         <button type="submit" name="topm" style="margin-top:10px" class="btn btn-success">Top Marque</button>
    </form>
    </div>
    
    <!-- code php ; recuperation de data est changement du onclick -->
        <?php   
        include "../config.php";
    include "../core/marqueC.php";
    
 //if(isset($_POST['alertestock']))  
 //{  
     $sql="SELECT * FROM produit WHERE quantite = 1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
       
foreach($liste as $row){
?>
           <!-- <tr>
                <td>
                <?PHP //echo $row['marque']; ?>
                </td>
            </tr> -->
            
            <?PHP                    
      if($row)  
      { 
  ?>        
    <script>
    document.getElementById('alertee').onclick = alertsweet();
    </script>  
     <?PHP   
      }
     else {
     ?>
        <script>
            document.getElementById('alertee').onclick = alertsweet2();
            
        </script>
     <?PHP
     }
     ?>
<?PHP
 }  
 
 ?> 

<!-- afficahge des marques -->

<?PHP

$marque1C=new MarqueC();
$listeMarques=$marque1C->afficherMarques();
?>

<div class="crud">
<table class="table">
<tr>
<td>ID</td>
<td>Nom</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeMarques as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	
	<td><form method="POST" action="supprimerMarque.php">
	<input type="submit" name="supprimer" value="supprimer" class="btn btn-danger">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierMarque.php?id=<?PHP echo $row['id']; ?>">
	<input type="submit" name="modifier" value="modifier" class="btn btn-primary"></a></td>
	</tr>
	<?PHP
}
?>
</table>
</div>
<div class="fo-top-di" style="padding-left: 250px;margin-top:500px">
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
</body>
</html>