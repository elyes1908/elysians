<!doctype html>
<html>

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
        <div class="menu">
            <ul id="menu">
               <li> <a href="auth.html"> <img  src="../images/logo.png" alt="avatar"><i class="fa fa-tachometer"></i> 
                <li><a href="auth.html"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
                <li id="menu-academico"><a href="auth.html"><i class="fa fa-table"></i> <span> New Arrivals</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="shoes.html">Shoes</a></li>
                        <li id="menu-academico-boletim"><a href="sunglasses.html">Sunglasses</a></li>
                    </ul>
                </li>
                <li id="menu-academico"><a href="sunglasses.html"><i class="fa fa-file-text-o"></i> <span>Sunglasses</span></a></li>
                <li><a href="sweater.html"><i class="lnr lnr-pencil"></i> <span>Sweater</span></a></li>
                <li id="menu-academico"><a href="catalog.html"><i class="fa fa-file-text-o"></i> <span>Catalog</span></a></li>
                <li id="menu-academico"><a href="shoes.html"><i class="lnr lnr-book"></i> <span>Shoes</span></a></li>
                <li><a href="Statistiques_marques.html"><i class="lnr lnr-envelope"></i> <span>Statistiques Marques</span></a></li>
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
<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "crud1");
$query = "SELECT * FROM stat ";
$result = mysqli_query($connect, $query);
$chart_data = '';

while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ id:'"."ID Fournisseur : ".$row["id"]."', salaire:'" .$row["salaire"]."',}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Salaires des fournisseurs </h2>
   <h3 align="center"></h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>




<script>
	formatY = function (y) {
            return 'salaire '+y+' Dt';
        },
Morris.Bar({
	
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
  xkey:['id'],
yLabelFormat:formatY,
 ykeys:['salaire'],
 labels:['Salaire en DT '],
	barColors: ["#328e72", "#1531B2", "#1AB244", "#B29215"],
 hideHover:'auto',
 stacked:true,
});
</script>
	<div class="fo-top-di" style="padding-left: 200px">
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
							<li><a href="https://www.facebook.com/CoeurDeMarieBeautyLounge/?ref=br_rs"><i class="facebok"> </i></a>
							</li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="twiter"> </i></a>
							</li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="goog"> </i></a>
							</li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="be"> </i></a>
							</li>
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
		<div class="footer">
			<div class="col-md-3 cust">
				<h4>CUSTOMER CARE</h4>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/contact.html">Help Center</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/faq.html">FAQ</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/details.html">How To Buy</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/checkout.html">Delivery</a>
				</li>
			</div>
			<div class="col-md-2 abt">
				<h4>ABOUT US</h4>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/products.html">Our Stories</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/products.html">Press</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/faq.html">Career</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/contact.html">Contact</a>
				</li>
			</div>
			<div class="col-md-2 myac">
				<h4>MY ACCOUNT</h4>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/register.html">Register</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/checkout.html">My Cart</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/checkout.html">Order History</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/details.html">Payment</a>
				</li>
			</div>
			<div class="col-md-5 our-st">
				<div class="our-left">
					<h4>OUR STORES</h4>
				</div>

				<li><i class="add"> </i>Mark peter</li>
				<li><i class="phone"> </i>012-586987</li>
				<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a>
				</li>
			</div>
			<div class="clearfix"> </div>
			<p>© 2016 Gretong. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a>
			</p>
		</div>
	</div>
</body>



</html>