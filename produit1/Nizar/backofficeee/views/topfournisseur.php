
           
          
         <!DOCTYPE html>
<html lang="">

<head>
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
    <title></title>
</head>
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


<body>
    
      <?php   
    include "../config.php";
    
 //if(isset($_POST['alertestock']))  
 //{  
     $sql="SELECT * FROM fournisseur WHERE numfournitures = (select MAX(numfournitures) FROM fournisseur)";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
       
foreach($liste as $row){
?>
         <div style=padding-left:250px>
               <table class="table">
               <tr>
                  <td>
                   <?PHP echo "<strong>Top fournisseur: </strong>".$row['nom']." ".$row['prenom']."<br><strong> Numéro de fournitures<strong> ".$row['numfournitures']?>
               </td>
               </tr>
                
                </table>
            </div>
                    
              
            
 <?PHP
                       }
    ?>
    
    
    
</body>

</html>