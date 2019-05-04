<!doctype html>
<html >
<head>
<meta charset="utf-8">
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
</head>
	<style>
	.table
		{
			padding-left: 250px;
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
      <li><a href="index.html"><i class="fa fa-tachometer"></i><img  src="../../FO/images/log.png" alt="avatar"> <span>Home</span></a></li>
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
<?PHP
include "../entities/soins.php";
include "../core/soinsC.php";
if (isset($_GET['id'])){
	$soinsC=new SoinsC();
    $result=$soinsC->recupererSoins($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$type=$row['type'];
		$image=$row['image'];
		$prix=$row['prix'];
?>
<form method="POST" class="table">
<table>
<caption>Modifier Soins</caption>
<tr>
<td>ID</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>" id="id" style="border-radius: 12px" required></td>
	<td><span id="missid"></span><br></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>" id="nom" style="border-radius: 12px" required></td>
	<td><span id="missnom"></span><br></td>
</tr>
<tr>
<td>Type</td>
<td><input type="text" name="type" value="<?PHP echo $type ?>" id="type" style="border-radius: 12px" required></td>
	<td><span id="misstype"></span><br></td>
</tr>
<tr>
<td>Image</td>
<td><input type="file" name="image" value="<?PHP echo $image ?>" id="image" style="border-radius: 12px" required></td>
	<td><span id="missimage"></span><br></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="text" name="prix" value="<?PHP echo $prix ?>" id="prix" style="border-radius: 12px" required></td>
	<td><span id="missprix"></span><br></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="Modifier" id="bouton" class="btn btn-info" style="border-radius: 12px;float: right" ></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>" ></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$soins=new soins($_POST['id'],$_POST['nom'],$_POST['type'],$_POST['image'],$_POST['prix']);
	$soinsC->modifierSoins($soins,$_POST['id_ini']);
	echo $_POST['id_ini'];
	//header('Location: afficherSoins.php');
echo '<script language="Javascript">
           <!--
                 document.location.replace("afficherSoins.php");
           // -->
     </script>';

}
?>
	
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
	var formValid = document.getElementById('bouton');
            var nom = document.getElementById('nom');
            var missnom = document.getElementById('missnom');
            var nomValid = /^[a-zA-Z][a-z]+([-'\s][a-zA-Z][A-Z]+)?$/;
            
            formValid.addEventListener('click', validation);
            
            function validation(event){
                //Si le champ est vide
                if (nom.validity.valueMissing){
                    event.preventDefault();
                    missnom.textContent = 'Nom manquant';
                    missnom.style.color = 'red';
                //Si le format de données est incorrect
                }else if (nomValid.test(nom.value) == false){
                    event.preventDefault();
                    missnom.textContent = 'Format incorrect';
                    missnom.style.color = 'orange';
                }
            }
		var formValid = document.getElementById('bouton');
            var image = document.getElementById('image');
            var missimage= document.getElementById('missimage');
            
            
            formValid.addEventListener('click', validationi);
            
            function validationi(event){
                //Si le champ est vide
                if (image.validity.valueMissing){
                    event.preventDefault();
                    missimage.textContent = 'Image manquante';
                    missimage.style.color = 'red';
                //Si le format de données est incorrect
                }
            }
	var formValid = document.getElementById('bouton');
            var id = document.getElementById('id');
            var missid = document.getElementById('missid');
            var idValid = /^[0-9]/;
            
            formValid.addEventListener('click', validation1);
            
            function validation1(event){
                //Si le champ est vide
                if (id.validity.valueMissing){
                    event.preventDefault();
                    missid.textContent = 'ID manquant';
                    missid.style.color = 'red';
                //Si le format de données est incorrect
                }else if (idValid.test(id.value) == false){
                    event.preventDefault();
                    missid.textContent = 'Format incorrect';
                    missid.style.color = 'orange';
                }
            }
	var formValid = document.getElementById('bouton');
            var type = document.getElementById('type');
            var misstype = document.getElementById('misstype');
            var typeValid = /^[a-zA-Z][a-z]+([-'\s][a-zA-Z][a-z]+)?$/;
            
            formValid.addEventListener('click', validation2);
            
            function validation2(event){
                //Si le champ est vide
                if (type.validity.valueMissing){
                    event.preventDefault();
                    misstype.textContent = 'Type manquant';
                    misstype.style.color = 'red';
                //Si le format de données est incorrect
                }else if (typeValid.test(type.value) == false){
                    event.preventDefault();
                    misstype.textContent = 'Format incorrect';
                    misstype.style.color = 'orange';
                }
            }
	
		var formValid = document.getElementById('bouton');
            var prix = document.getElementById('prix');
            var missprix = document.getElementById('missprix');
            var prixValid = /^[0-9]/;
            
            formValid.addEventListener('click', validation4);
            
            function validation4(event){
                //Si le champ est vide
                if (prix.validity.valueMissing){
                    event.preventDefault();
                    missprix.textContent = 'Prix manquant';
                    missprix.style.color = 'red';
                //Si le format de données est incorrect
                }else if (prixValid.test(prix.value) == false){
                    event.preventDefault();
                    missprix.textContent = 'Format incorrect';
                    missprix.style.color = 'orange';
                }
            }
	
	</script>
</body>
</HTMl>