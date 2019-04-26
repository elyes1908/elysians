

<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=crud', 'root', '');

if(isset($_POST['forminscription']) )
{
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
   {

      $pseudo=htmlspecialchars($_POST['pseudo']);
      $mail=htmlspecialchars($_POST['mail']);
      $mail2=htmlspecialchars($_POST['mail2']);
      $mdp=sha1($_POST['mdp']);
      $mdp2=sha1($_POST['mdp2']);


      if($mail==$mail2)
      {  
           if(filter_var($mail, FILTER_VALIDATE_EMAIL))
            {
               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist==0)
                {


                      if($mdp==$mdp2)


                      {
                        
                             $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                             $insertmbr->execute(array($pseudo, $mail, $mdp));
                            $succes="votre compte a été bien crée"  ;
                      }

                        else 

                        {
                           $erreur="les mots de passe ne correspondent pas";
                        }


                  }
                  else 
                  {
                     $erreur="mail déja utilisé";
                  }
            }

            else { $erreur="erreur syntax mail";}

         }

           else 

      {
         $erreur="les mails ne correspondent pas";
      }

 
        
      
    




   }

   else 

   {


      $erreur="veuillez remplir tous les champs";
   }
}

?> 
<!DOCTYPE html>
<html>
<head>
<title>Shopin A Ecommerce Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />   
<!--//theme-style-->
<script src="js/jquery.min.js"></script>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
   <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
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
</head>
<body>
<!--header-->
<div class="header">
<div class="container">
      <div class="head">
         <div class=" logo">
            <a href="index.html"><img src="images/logo.png" alt=""></a> 
         </div>
      </div>
   </div>
   <div class="header-top">
      <div class="container">
      <div class="col-sm-5 col-md-offset-2  header-login">
               <ul >
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Register</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
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
            <li><a class="color" href="index.html">Accueil</a></li>
            
         <li class="dropdown mega-dropdown active">
             <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Femmes<span class="caret"></span></a>
            <div class="dropdown-menu ">
                    <div class="menu-top">
                  <div class="col1">
                     <div class="h_nav">

                           <ul>
                              <li><a href="product.html">Accessories</a></li>
                              <li><a href="cheveux femmes.html">Cheveux</a></li>
                              <li><a href="product.html">Visage</a></li>
                              <li><a href="product.html">Corps</a></li>

                           </ul>
                     </div>
                  </div>



                  <div class="col1 col5">
                  <img src="images/me.png" class="img-responsive" alt="">
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </li>
         <li class="dropdown mega-dropdown active">
             <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Hommes<span class="caret"></span></a>
            <div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
                  <div class="col1">
                     <div class="h_nav">

                           <ul>
                              <ul>
                                 <li><a href="product.html">Accessories</a></li>
                                 <li><a href="product.html">Cheveux</a></li>
                                 <li><a href="product.html">Visage</a></li>
                                 <li><a href="product.html">Corps</a></li>

                              </ul>

                           </ul>
                     </div>
                  </div>

                  <div class="col1 col5">
                  <img src="images/me1.png" class="img-responsive" alt="">
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </li>

         <li><a class="color4" href="404.html">About</a></li>

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
                     <img src="images/cart.png" alt=""/></h3>
                  </a>
                  <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

               </div>
               <div class="clearfix"> </div>
               
                  <!----->

                  <!---pop-up-box---->               
         <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
         <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
         <!---//pop-up-box---->
         <div id="small-dialog" class="mfp-hide">
            <div class="search-top">
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
      <h1>Login</h1>
      <em></em>
      <h2><a href="index.html">Home</a><label>/</label>Login</h2>
   </div>
</div>

      <div align="center">
         <h2>Inscription</h2>
         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="pseudo">Pseudo :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail2">Confirmation du mail :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" value="<?php if(isset($mdp)) { echo $mdp; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" value="<?php if(isset($mdp2)) { echo $mdp2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }

         if(isset($succes))
         {
            echo'<font color="gren">' .$succes."</font>";
         }
         ?>
      <div class="col-md-6 login-right">
             <h3>Completely Free Account</h3>
             
             <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
             libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
            <a href="connexion.php" class=" hvr-skew-backward">login</a>

         </div>
         
         <div class="clearfix"> </div>
         </form>
      </div>

</div>

<!--//login-->

         <!--brand-->
      <div class="container">
         <div class="brand">
            <div class="col-md-3 brand-grid">
               <img src="images/ic.png" class="img-responsive" alt="">
            </div>
            <div class="col-md-3 brand-grid">
               <img src="images/ic1.png" class="img-responsive" alt="">
            </div>
            <div class="col-md-3 brand-grid">
               <img src="images/ic2.png" class="img-responsive" alt="">
            </div>
            <div class="col-md-3 brand-grid">
               <img src="images/ic3.png" class="img-responsive" alt="">
            </div>
            <div class="clearfix"></div>
         </div>
         </div>
         <!--//brand-->
      
   <!--//content-->
      <!--//footer-->
   <div class="footer">
   <div class="footer-middle">
            <div class="container">
               <div class="col-md-3 footer-middle-in">
                  <a href="index.html"><img src="images/log.png" alt=""></a>
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
                  <li><a href="#"><img src="images/f1.png" class="img-responsive" alt=""></a></li>
                  <li><a href="#"><img src="images/f2.png" class="img-responsive" alt=""></a></li>
                  <li><a href="#"><img src="images/f3.png" class="img-responsive" alt=""></a></li>
               </ul>
               <p class="footer-class">&copy; 2016 Shopin. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
               <div class="clearfix"> </div>
            </div>
         </div>
      </div>
      <!--//footer-->

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

   <script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 
</body>
</html>