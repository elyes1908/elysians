<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start (); 
 //$a=$_SESSION['n'];

?>

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Shopin A Ecommerce Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
<link href="css1/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="css1/style4.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script src="js1/jquery.min.js"></script>
<!--- start-rate---->
<script src="js1/jstarbox.js"></script>
	<link rel="stylesheet" href="css1/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
<link href="css1/form.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!--header-->
<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="index.php"><img src="images1/logo.png" alt=""></a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
						<li><?php 
				// On récupère nos variables de session
					if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
				{ 
					echo 'Bonjour <b>'.$_SESSION['l'];
					echo '<br><a href="./logout.php">Déconnecter</a>';

				}

				else { 
				      echo 'Veuillez vous connecter </br>';  
					  echo '<a href="./auth.html">Connecter</a>';

				}  
				//définir la session une session est un tableau temporaire 
				//1 er point c quoi une session
				// 
				?></li>
					</ul>
				</div>
				
			<div class="col-sm-5 header-social">		
					<ul >
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
						<li><a href="#"><i class="ic4"></i></a></li>
					</ul>
					
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="index.php">Home</a></li>
            
    		<li><a class="color" href="afficherProduitfront.php">Catalogue</a></li>			<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu1</h4>
									<ul>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Bags</a></li>
										<li><a href="product.html">Caps & Hats</a></li>
										<li><a href="product.html">Hoodies & Sweatshirts</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu2</h4>
								<ul>
										<li><a href="product.html">Jackets & Coats</a></li>
										<li><a href="product.html">Jeans</a></li>
										<li><a href="product.html">Jewellery</a></li>
										<li><a href="product.html">Jumpers & Cardigans</a></li>
										<li><a href="product.html">Leather Jackets</a></li>
										<li><a href="product.html">Long Sleeve T-Shirts</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu3</h4>
								
<ul>
										<li><a href="product.html">Shirts</a></li>
										<li><a href="product.html">Shoes, Boots & Trainers</a></li>
										<li><a href="product.html">Sunglasses</a></li>
										<li><a href="product.html">Sweatpants</a></li>
										<li><a href="product.html">Swimwear</a></li>
										<li><a href="product.html">Trousers & Chinos</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu4</h4>
								<ul>
									<li><a href="product.html">T-Shirts</a></li>
									<li><a href="product.html">Underwear & Socks</a></li>
									<li><a href="product.html">Vests</a></li>
									<li><a href="product.html">Jackets & Coats</a></li>
									<li><a href="product.html">Jeans</a></li>
									<li><a href="product.html">Jewellery</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1 col5">
						<img src="images1/me1.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li><a class="color3" href="product.html">Sale</a></li>
			<li><a class="color4" href="404.html">About</a></li>
            <li><a class="color5" href="typo.html">Short Codes</a></li>
            <li ><a class="color6" href="contact.html">Contact</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				<li>
				<a href="wishlist.html" >
				<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
				</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images1/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="js1/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">*
					<div class="login-search">
						<input type="submit" value="">
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
					</div>
					<p>Shopin</p>
				</div>				
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>		
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Products</h1>
		<em></em>
		<h2><a href="index.php">Home</a><label>/</label>Catalogue</h2>
	</div>
</div>
	<!--content-->
	<?PHP
	include "../config.php";
		include "../core/produitC.php";
		$produit1C=new produitC();
	   $db=config::getconnexion();
	   $req="SELECT s.reference, s.nom, s.categorie,s.prix,s.image, SUM(e.etat) total 
			 FROM produit s LEFT JOIN rate e 
			 ON s.reference like e.id_produit
       			GROUP BY s.reference " ;

$listeF=$db->query($req);

?>
<?PHP

include "../entities/produit.php";
include "../entities/promo.php";

	   if(isset($_POST['tri']))
	   {
		   $listeF=$db->query("SElECT * From produit ORDER BY prix");
	   }
	   	else   if(isset($_POST['triA']))
	   {
		   $listeF=$db->query("SElECT * From produit order by prix DESC ");
	   }
		
		 	else   if(isset($_POST['filtreC']))
	   {
		   $listeF=$db->query("SElECT * From produit where categorie like'corps' ");
	   }
			 	else   if(isset($_POST['filtreV']))
	   {
		   $listeF=$db->query("SElECT * From produit where categorie='visage' ");
	   }
	 	else   if(isset($_POST['filtreCH']))
	   {
		   $listeF=$db->query("SElECT * From produit where categorie='cheveux' ");
	   }
		else if (isset($_POST['toplike']))
		{
			$listeF=$db->query("SELECT s.reference, s.nom, s.categorie,s.prix,s.image, sum(e.etat) total 
			 FROM produit s LEFT JOIN rate e 
			 ON s.reference like e.id_produit
       			GROUP BY s.reference 
				Order by SUM(e.etat) DESC" );
		}
	   else $listeF=$produit1C->afficherProduits();

	   

	?>
	<form method="post">
	<div class="col-md-3 product-bottom">
			<!--categories-->

						
					
						
     
			<div class=" rsidebar span_1_of_left">
				 
				<h4 class="cate" ><a href="affichage.php"  style="color: brown">Tri</a></h4>
							 <ul class="menu-drop">
								 
							   <button type="submit" style="background-color:transparent" name="tri" value="Prix Croissant" >Prix Croissant</button><br>
								<button type="submit" style="background-color:transparent" name="triA" value="Prix décroissant">Prix Decroissant</button>
							   								
							</ul>
				  <hr>
					
	  					  <h4 class="cate" ><a href="affichage.php"  style="color: brown">Catégorie</a></h4>
							 <ul class="menu-drop">
							   
							  <button type="submit" style="background-color:transparent" name="filtreC" value="Prix Croissant" >Corps</button><br>
								<button type="submit" style="background-color:transparent" name="filtreV" value="Prix décroissant">Visage</button><br>
								 <button type="submit" style="background-color:transparent" name="filtreCH" value="Prix Croissant" >Cheveux</button><br><hr>
								 <button type="submit" style="background-color:transparent" name="toplike" value="toplike" >top like</button>
								
								
							</ul>
				  </div>
		
	</div>
	</form>
		<div class="product">
			<div class="container">
			<div class="col-md-9">
				<div class="mid-popular">
					
					<?PHP
foreach($listeF as $row){
	?>
					
<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="../images/<?PHP echo $row['image']; ?>" class="img-responsive" alt="">
						<div class="zoom-icon ">
						<a class="picture" href="../images/<?PHP echo $row['image']; ?>" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
						<a href="single.html"><i class="glyphicon glyphicon-menu-right icon"></i></a>
						</div>
						</div></div>
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
							<span> <?PHP echo $row['nom']; ?></span>
							<h6><a href="single.html"> <?PHP echo $row['categorie']; ?></a></h6>
							</div>

							<div class="img item_add">
							

								<a  href="../test/core/cartAction.php?action=addToCart&reference=<?php echo $row["reference"]; ?>"><img src="images1/ca.png" alt=""></a>
							
							</div>
							<div class="clearfix"></div>
							</div>

  <div class="women-top">
				            <?php if($row['id_promo']!=NULL){ ?>
						     <br> <br>
                             <?PHP echo  "EN SOLDE" ?> 
					     	<p ><label><s style="color: red"><span style="color: black"><?PHP echo $row['prix']; ?> DT</span></s></label></p>
                             <?PHP echo $row['prix_solde']; ?> 

	           <div class="clearfix"></div>
	           </div>

                         <?php } ?>


							<div class="mid-2">
								<p ><em class="item_price"> <?PHP echo $row['prix']; ?>DT</em></p>
								  <div class="block">
									<div></div>
								</div>
								
								<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p ><em class="item_price"> <?PHP  ini_set('display_errors', 'off'); echo $row['total']; ?></em></p>
								  <div class="block">
									<div></div>
								</div>
								
								<div class="clearfix"></div>
							</div>


							<?php $reference=$row['reference']; ?>

							<div>
								
								<form action="../core/like.php" method="POST">
						
					    <input type="hidden" value="<?php echo $reference ?>" name="reference" id="reference" > 
						<td>  <button class="fa fa-thumbs-up like-btn" name="likeBTN"><span class=""></span></button>
						 <button class="fa fa-thumbs-down like-btn" name="dislikeBTN"></span></button> </td>

						</form>
							</div>
							
						</div>
					</div>
					</div>
					
	
	<?PHP
}
?>
					
					
					
					
					
					
					
					
			</div>
				</div>
		
			<!--categories-->
		
		
				<!--initiate accordion-->
				  <script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
				 
					
					 <!---->
					 
				   				
		</div>
			<div class="clearfix"></div>
			</div>
				<!--products-->
			
			<!--//products-->
		<!--brand-->
		<div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="images1/ic.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images1/ic1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images1/ic2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images1/ic3.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
			
			
		</div>
	<!--//content-->
		<!--//footer-->
	<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="col-md-3 footer-middle-in">
						<a href="index.php"><img src="images1/log.png" alt=""></a>
						<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
					</div>
					
					<div class="col-md-3 footer-middle-in">
						<h6>Information</h6>
						<ul class=" in">
							<li><a href="404.html">About</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="contact.html">Site Map</a></li>
						</ul>
						<ul class="in in1">
							<li><a href="#">Order History</a></li>
							<li><a href="wishlist.html">Wish List</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Tags</h6>
						<ul class="tag-in">
							<li><a href="#">Lorem</a></li>
							<li><a href="#">Sed</a></li>
							<li><a href="#">Ipsum</a></li>
							<li><a href="#">Contrary</a></li>
							<li><a href="#">Chunk</a></li>
							<li><a href="#">Amet</a></li>
							<li><a href="#">Omnis</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Newsletter</h6>
						<span>Sign up for News Letter</span>
							<form>
								<input type="text" value="Enter your E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
								<input type="submit" value="Subscribe">	
							</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<ul class="footer-bottom-top">
						<li><a href="#"><img src="images1/f1.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="images1/f2.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="images1/f3.png" class="img-responsive" alt=""></a></li>
					</ul>
					<p class="footer-class">&copy; 2016 Shopin. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--//footer-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="js1/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js1/bootstrap.min.js"></script>
 <!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css1/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>
</body>
</html>