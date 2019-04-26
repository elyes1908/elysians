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
<?PHP
include "../core/marqueC.php";
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
</body>
</html>