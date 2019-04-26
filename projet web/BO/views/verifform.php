
<?php
try
{
 $bdd = new PDO("mysql:host=localhost;dbname=crud", "root", "");
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
  $select_terme = $bdd->prepare("SELECT IDrdv, nomClient,prenomClient,soin ,date FROM rendezvous WHERE nomClient LIKE ? OR prenomClient LIKE ? OR  soin LIKE ?");
  $select_terme->execute(array("%".$terme."%","%".$terme."%","%".$terme."%"));
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
  <meta charset = "utf-8" >
	 <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="../css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="../css/icon-font.min.css" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  <title>Les résultats de recherche</title>
 </head>
    <style>
 .element {
width: 250px; 
height: 350px;
margin:0px;
position:relative;
display:inline-block;
vertical-align:top;    
}
div#columns figure {
    display: inline-block;
    background: #FEFEFE;
    border: 2px solid #FAFAFA;
    box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
    margin: 0 0px 15px;
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

#columns figure:hover{
    -webkit-transform: scale(1.1);
    -moz-transform:scale(1.1);
    transform: scale(1.1);

}
#columns:hover figure:not(:hover) {
    opacity: 0.4;
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
      
	<div class="sidebar-menu" >
<div class="menu">
    <ul id="menu" >
      <li><a href="index.php"><i class="fa fa-tachometer"></i> <img  src="../../FO/images/log.png" alt="avatar"><span>Home</span></a></li>
      <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> New Arrivals</span> <span class="fa fa-angle-right" style="float: right"></span></a>
        <ul id="menu-academico-sub" >
          <li id="menu-academico-avaliacoes" ><a href="shoes.html">Shoes</a></li>
         <li id="menu-academico-boletim" ><a href="sunglasses.html">Sunglasses</a></li>
        </ul>
      </li>
      <li id="menu-academico" ><a href="sunglasses.html"><i class="fa fa-file-text-o"></i> <span>Sunglasses</span></a></li>
      <li><a href="sweater.html"><i class="lnr lnr-pencil"></i> <span>Sweater</span></a></li>
      <li id="menu-academico" ><a href="catalog.html"><i class="fa fa-file-text-o"></i> <span>Catalog</span></a></li>
      <li id="menu-academico" ><a href="shoes.html"><i class="lnr lnr-book"></i> <span>Shoes</span></a></li>
      <li><a href="bags.html"><i class="lnr lnr-envelope"></i> <span>Bags</span></a></li>
      <li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Watches</span></a></li>
      <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Tabs & Calender</span> <span class="fa fa-angle-right" style="float: right"></span></a>
        <ul id="menu-academico-sub" >
          <li id="menu-academico-avaliacoes" ><a href="tabs.html">Tabs</a></li>
          <li id="menu-academico-boletim" ><a href="calender.html">Calender</a></li>
        </ul>
      </li>
      <li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Services</span> <span class="fa fa-angle-right" style="float: right"></span></a>
        <ul>
          <li><a href="web.html"> webs</a></li>
          <li><a href="soins.html">Soins</a></li>
        </ul>
      </li>
		 </li>
        <li id="menu-academico"><a href="afficherEmploye.php"><i class="fa fa-table"></i> <span> Employes</span> <span class="fa fa-angle-right" style="float: right"></span></a>
          <ul id="menu-academico-sub">
            <li id="menu-academico-avaliacoes"><a href="afficherEmploye.php">Afficher les employes</a></li>
            <li id="menu-academico-avaliacoes"><a href="ajoutEmploye.html">Ajouter employes</a></li>
          </ul>
        </li>
        <li id="menu-academico"><a href="afficherSoins.php"><i class="fa fa-table"></i> <span> Soins</span> <span class="fa fa-angle-right" style="float: right"></span></a>
          <ul id="menu-academico-sub">
            <li id="menu-academico-avaliacoes"><a href="afficherSoins.php">Afficher les soins</a></li>
            <li id="menu-academico-avaliacoes"><a href="ajoutSoins.html">Ajouter soins</a></li>
          </ul>
        </li>
    </ul>
  </div>
</div>
  <?php
  while($terme_trouve = $select_terme->fetch())
  {
  	  ?>  <div class="element" id="columns" style="padding-left: 250px" >
                            
                        
                            <figure>
                
              
                                    
                                 
                                       <h4><?php echo $terme_trouve['IDrdv']; ?></h4>
                                       <p><?php echo $terme_trouve ['nomClient']; ?></p>
                                       <div  ><?php echo $terme_trouve['prenomClient']." H"; ?></div>
								<div  ><?php echo $terme_trouve['date'] ." Dt/H"; ?></div>
                <div  ><?php echo $terme_trouve['soin'] ." Dt/H"; ?></div>
								
								
				
                                </figure>     
                                        
                            </div>
                        
                                
                             
                             
                           
                    


                  <?php
  
  }
  $select_terme->closeCursor();
   ?>
	<div class="fo-top-di" style="padding-left: 250px">
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
			<div class="footer">
					<div class="col-md-3 cust">
						<h4>CUSTOMER CARE</h4>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/contact.html">Help Center</a></li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/faq.html">FAQ</a></li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/details.html">How To Buy</a></li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/checkout.html">Delivery</a></li>
					</div>
					<div class="col-md-2 abt">
						<h4>ABOUT US</h4>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/products.html">Our Stories</a></li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/products.html">Press</a></li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/faq.html">Career</a></li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/contact.html">Contact</a></li>
					</div>
					<div class="col-md-2 myac">
						<h4>MY ACCOUNT</h4>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/register.html">Register</a></li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/checkout.html">My Cart</a></li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/checkout.html">Order History</a></li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/details.html">Payment</a></li>
					</div>
					<div class="col-md-5 our-st">
						<div class="our-left">
							<h4>OUR STORES</h4>
						</div>
						
							<li><i class="add"> </i>Mark peter</li>
							<li><i class="phone"> </i>012-586987</li>
							<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
					</div>
					<div class="clearfix"> </div>
						<p>© 2016 Gretong. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	
 </body>
</html>