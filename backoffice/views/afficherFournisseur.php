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


    <!--
    <div class="sidebar-menu">
        <div class="menu">
            <ul id="menu">
                <li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
                <li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span> New Arrivals</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="shoes.html">Shoes</a></li>
                        <li id="menu-academico-boletim"><a href="sunglasses.html">Sunglasses</a></li>
                    </ul>
                </li>
                <li id="menu-academico"><a href="sunglasses.html"><i class="fa fa-file-text-o"></i> <span>Sunglasses</span></a></li>
                <li><a href="sweater.html"><i class="lnr lnr-pencil"></i> <span>Sweater</span></a></li>
                <li id="menu-academico"><a href="catalog.html"><i class="fa fa-file-text-o"></i> <span>Catalog</span></a></li>
                <li id="menu-academico"><a href="shoes.html"><i class="lnr lnr-book"></i> <span>Shoes</span></a></li>
                <li><a href="bags.html"><i class="lnr lnr-envelope"></i> <span>Bags</span></a></li>
                <li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Watches</span></a></li>
                <li id="menu-academico"><a href="#"><i class="lnr lnr-layers"></i> <span>Tabs & Calender</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="tabs.html">Tabs</a></li>
                        <li id="menu-academico-boletim"><a href="calender.html">Calender</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Services</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul>
                        <li><a href="web.html"> webs</a></li>
                        <li><a href="soins.html">Soins</a></li>
                    </ul>
                </li>
                </li>
                <li id="menu-academico"><a href="afficherMarque.php"><i class="fa fa-table"></i> <span> Marques</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="afficherMarque.php">Afficher les Marques</a></li>
                        <li id="menu-academico-avaliacoes"><a href="ajoutMarque.html">Ajouter marques</a></li>
                    </ul>
                </li>
                <li id="menu-academico"><a href="afficherSoins.php"><i class="fa fa-table"></i> <span> Fournisseurs</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="afficherFournisseur.php">Afficher les fournisseurs</a></li>
                        <li id="menu-academico-avaliacoes"><a href="ajoutFournisseur.html">Ajouter fournisseurs</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    -->
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

    <!--
    <div>
        <form action="rechercher.php" method="get" class="crud" style="padding-top:50px;">
            <div class="form-row">
                <div style="margin-right:10px"> <input type="submit" name="s" value="Rechercher" class="btn btn-danger"></div>
                <div><input type="search" name="terme" class="form-control" placeholder="Cherchez un fournisseur"></div>
            </div>
        </form>
    -->
    <?PHP
    $output = NULL;
        if(isset($_POST['submit']))
        {
            //connect to the database
            
            $db=config::getconnexion();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //real_escape to prevent sql injection
            $search = $_POST['search'];
            
            $result=$db->mysql_query(" SELECT * FROM fournisseur WHERE nom LIKE '$search'");
       
        $test = fetch_array($result);
        if($test > 0){
            while($rows = $result->fetch())
            {
                $cin = $rows['cin'];
                $prenom = $rows['prenom'];
                $marque = $rows['marque'];
                echo"ddddddddddddddddddddd";
              $output = "Cin : $cin <br> Prenom : $prenom <br> Marque : $marque";
              
            }
            }
        else{
            $output = "No results!";
            }
        }   
    ?>
    <form method="POST">
        <input type="text" name="search" class="form-control" style="width:300px;margin-top: 25px;margin-left: 250px;">
        <input type="submit" name="submit" value="Rechercher" class=" btn btn-danger" style="margin-left:445px;margin-top: 10px;">
    </form>
    <?PHP echo $output ?>

    <form method="post" class="crud">
        <button type="submit" name="tri" style="margin-top:10px" class="btn btn-danger">Tri ASC</button>
        <button type="submit" name="tria" style="margin-top:10px" class="btn btn-danger">Tri Desc</button>
    </form>

    <div style="padding-left:250px;">
        <table class="table">
            <tr>
                <td>CIN</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Date de naissance</td>
                <td>Marque</td>
                <td>E-mail</td>
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

</HTML>