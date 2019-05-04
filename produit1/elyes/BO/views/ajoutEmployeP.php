<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
	<!-- Custom CSS -->
	<link href="../css/style.css" rel='stylesheet' type='text/css'/>
	<!-- Graph CSS -->
	<link href="../css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="../css/icon-font.min.css" type="text/css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<style>
	.table {
		padding-left: 250px;
	}
</style>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "crud";

// connect to mysql database

$connect = mysqli_connect( $hostname, $username, $password, $databaseName );

// mysql select query
$query = "SELECT * FROM `type`";

// for method 1

$result1 = mysqli_query( $connect, $query );

// for method 2

$result2 = mysqli_query( $connect, $query );

$options = "";

while ( $row2 = mysqli_fetch_array( $result2 ) ) {
	$options = $options . "<option>$row2[1]</option>";
}

?>

<body>
	<div class="header-section" style="padding-left: 200px">
		<!-- top_bg -->
		<div class="top_bg">
			<div class="header_top">
				<div class="top_right">
					<ul>
						<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/contact.html">help</a>
						</li>
						|
						<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/contact.html">Contact</a>
						</li>
						|
						<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/checkout.html">Delivery information</a>
						</li>
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
				<li> <a href="index.html"> <img  src="../../FO/images/log.png" alt="avatar"><i class="fa fa-tachometer"></i> <span>Home</span></a>
				</li>
				<li id="menu-academico"><a href="#"><i class="fa fa-table"></i> <span> New Arrivals</span> <span class="fa fa-angle-right" style="float: right"></span></a>
					<ul id="menu-academico-sub">
						<li id="menu-academico-avaliacoes"><a href="shoes.html">Shoes</a>
						</li>
						<li id="menu-academico-boletim"><a href="sunglasses.html">Sunglasses</a>
						</li>
					</ul>
				</li>
				<li id="menu-academico"><a href="sunglasses.html"><i class="fa fa-file-text-o"></i> <span>Sunglasses</span></a>
				</li>
				<li><a href="sweater.html"><i class="lnr lnr-pencil"></i> <span>Sweater</span></a>
				</li>
				<li id="menu-academico"><a href="catalog.html"><i class="fa fa-file-text-o"></i> <span>Catalog</span></a>
				</li>
				<li id="menu-academico"><a href="shoes.html"><i class="lnr lnr-book"></i> <span>Shoes</span></a>
				</li>
				<li><a href="bags.html"><i class="lnr lnr-envelope"></i> <span>Bags</span></a>
				</li>
				<li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Watches</span></a>
				</li>
				<li id="menu-academico"><a href="#"><i class="lnr lnr-layers"></i> <span>Tabs & Calender</span> <span class="fa fa-angle-right" style="float: right"></span></a>
					<ul id="menu-academico-sub">
						<li id="menu-academico-avaliacoes"><a href="tabs.html">Tabs</a>
						</li>
						<li id="menu-academico-boletim"><a href="calender.html">Calender</a>
						</li>
					</ul>
				</li>
				<li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Services</span> <span class="fa fa-angle-right" style="float: right"></span></a>
					<ul>
						<li><a href="web.html"> webs</a>
						</li>
						<li><a href="soins.html">Soins</a>
						</li>
					</ul>
				</li>
				</li>
				<li id="menu-academico"><a href="afficherEmploye.php"><i class="fa fa-table"></i> <span> Employes</span> <span class="fa fa-angle-right" style="float: right"></span></a>
					<ul id="menu-academico-sub">
						<li id="menu-academico-avaliacoes"><a href="afficherEmploye.php">Afficher les employes</a>
						</li>
						<li id="menu-academico-avaliacoes"><a href="ajoutEmploye.html">Ajouter employes</a>
						</li>
					</ul>
				</li>
				<li id="menu-academico"><a href="afficherSoins.php"><i class="fa fa-table"></i> <span> Soins</span> <span class="fa fa-angle-right" style="float: right"></span></a>
					<ul id="menu-academico-sub">
						<li id="menu-academico-avaliacoes"><a href="afficherSoins.php">Afficher les soins</a>
						</li>
						<li id="menu-academico-avaliacoes"><a href="ajoutSoins.html">Ajouter soins</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<form method="POST" action="ajoutEmploye.php" class="table">
		<table>
			<caption>Ajouter Employe</caption>
			<tr>
				<td>CIN</td>
				<td><input type="number" name="cin" id="cin" style="border-radius: 12px">
				</td>
				<td><span id="misscin"></span><br>
				</td>
			</tr>
			<tr>
				<td>Nom</td>

				<td><input type="text" name="nom" id="nom" style="border-radius: 12px" required>
				</td>
				<td><span id="missnom"></span><br>
				</td>
			</tr>
			<tr>
				<td>Prenom</td>
				<td><input type="text" name="prenom" id="prenom" style="border-radius: 12px" required>
				</td>
				<td><span id="missprenom"></span><br>
				</td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="image" id="image" style="border-radius: 12px" required>
				</td>
				<td><span id="missimage"></span><br>
				</td>
			</tr>
			<tr>
				<td>Type de Soin</td>
				<td>
					<div>
					<select name="specialite">
						
							<?php echo $options;?>
						
					</select>

				</td>
			</tr>
			<tr>
				<td>Nb Heures</td>
				<td><input type="number" name="nbH" id="nbH" style="border-radius: 12px" required>
				</td>
				<td><span id="missnbH"></span><br>
				</td>
			</tr>
			<tr>
				<td>tarif horaire</td>
				<td><input type="text" name="tarifH" id="tarifH" style="border-radius: 12px" required>
				</td>
				<td><span id="misstarifH"></span><br>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="ajouter" value="Ajouter" id="bouton" class="btn btn-primary" style="float: right ; border-radius: 12px">
				</td>
			</tr>
		</table>
	</form>
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
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="facebok"> </i></a>
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
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="facebok"> </i></a>
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


	<script>
		var formValid = document.getElementById( 'bouton' );
		var nom = document.getElementById( 'nom' );
		var missnom = document.getElementById( 'missnom' );
		var nomValid = /^[a-zA-Z][a-z]+([-'\s][a-zA-Z][a-z]+)?$/;

		formValid.addEventListener( 'click', validation );

		function validation( event ) {
			//Si le champ est vide
			if ( nom.validity.valueMissing ) {
				event.preventDefault();
				missnom.textContent = 'Nom manquant';
				missnom.style.color = 'red';


				//Si le format de données est incorrect
			} else if ( nomValid.test( nom.value ) == false ) {
				event.preventDefault();
				missnom.textContent = 'Format incorrect';
				missnom.style.color = 'orange';
			}
		}
		var formValid = document.getElementById( 'bouton' );
		var cin = document.getElementById( 'cin' );
		var misscin = document.getElementById( 'misscin' );
		var cinValid = /^[0-9]/;

		formValid.addEventListener( 'click', validation1 );

		function validation1( event ) {
			//Si le champ est vide
			if ( cin.validity.valueMissing ) {
				event.preventDefault();
				misscin.textContent = 'CIN manquant';
				misscin.style.color = 'red';
				//Si le format de données est incorrect
			} else if ( cinValid.test( cin.value ) == false ) {
				event.preventDefault();
				misscin.textContent = 'Format incorrect';
				misscin.style.color = 'orange';

			} else {}

		}
		var formValid = document.getElementById( 'bouton' );
		var prenom = document.getElementById( 'prenom' );
		var missprenom = document.getElementById( 'missprenom' );
		var prenomValid = /^[a-zA-Z][a-z]+([-'\s][a-zA-Z][a-z]+)?$/;

		formValid.addEventListener( 'click', validation2 );

		function validation2( event ) {
			//Si le champ est vide
			if ( prenom.validity.valueMissing ) {
				event.preventDefault();
				missprenom.textContent = 'Prénom manquant';
				missprenom.style.color = 'red';

				//Si le format de données est incorrect
			} else if ( prenomValid.test( prenom.value ) == false ) {
				event.preventDefault();
				missprenom.textContent = 'Format incorrect';
				missprenom.style.color = 'orange';
			}
		}
		var formValid = document.getElementById( 'bouton' );
		var nbH = document.getElementById( 'nbH' );
		var misspre = document.getElementById( 'missnbH' );
		var preValid = /^[0-9]/;

		formValid.addEventListener( 'click', validation3 );

		function validation3( event ) {
			//Si le champ est vide
			if ( nbH.validity.valueMissing ) {
				event.preventDefault();
				missnbH.textContent = 'Nb manquant';
				missnbH.style.color = 'red';
				//Si le format de données est incorrect
			} else if ( nbHValid.test( nbH.value ) == false ) {
				event.preventDefault();
				missnbH.textContent = 'Format incorrect';
				missnbH.style.color = 'orange';
			}
		}
		var formValid = document.getElementById( 'bouton' );
		var tarifH = document.getElementById( 'tarifH' );
		var misstarifH = document.getElementById( 'misstarifH' );
		var tarifHValid = /^[0-9]/;

		formValid.addEventListener( 'click', validation4 );

		function validation4( event ) {
			//Si le champ est vide
			if ( tarifH.validity.valueMissing ) {
				event.preventDefault();
				misstarifH.textContent = 'Tarif manquant';
				misstarifH.style.color = 'red';
				//Si le format de données est incorrect
			} else if ( tarifHValid.test( tarifH.value ) == false ) {
				event.preventDefault();
				misstarifH.textContent = 'Format incorrect';
				misstarifH.style.color = 'orange';
			}
		}
		var formValid = document.getElementById( 'bouton' );
		var image = document.getElementById( 'image' );
		var missimage = document.getElementById( 'missimage' );


		formValid.addEventListener( 'click', validation8 );

		function validation8( event ) {
			//Si le champ est vide
			if ( image.validity.valueMissing ) {
				event.preventDefault();
				missimage.textContent = 'Image manquante';
				missimage.style.color = 'red';
				//Si le format de données est incorrect
			}
		}
	</script>

</body>

</html>