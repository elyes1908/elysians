<?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "crudproduit");
$query = "SELECT * FROM  date_test";
$result = mysqli_query($connect, $query);
$chart_data = '';

while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ id:'"."event : ".$row["id"]."', cap:'" .$row["cap"]."',}, ";
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script src="product.js"></script>
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script src="js/simpleCart.min.js"> </script>
<script src="js/amcharts.js"></script>  
<script src="js/serial.js"></script>  
<script src="js/light.js"></script> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script><!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
   <!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
  
 </head>
 <body>


 <div class="page-container">
   <!--/content-inner-->
  <div class="left-content">
     <div class="inner-content">
    <!-- header-starts -->
      <div class="header-section">
      <!-- top_bg -->
            <div class="top_bg">
                
                  <div class="top_left">
                    <h2><span></span> Call us : 032 2352 782</h2>
                  </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
          <div class="clearfix"></div>
        <!-- /top_bg -->
        </div>
        <div class="header_bg">
              <div class="header">
                <div class="head-t">
                  <div class="logo">
                    
                  </div>
                    <!-- start header_right -->
                  
                    <div class="create_btn">
                  

                  


                    
                   
                  
                    
                      <a href="afficherEvent.php">Affichege</a>
                    </div>
                    
                
        
          <!-- //header-ends -->
        <!--content-->
      
            <!-- start content -->
                
        <!--//content-inner-->
      <!--/sidebar-menu-->
        
        <div class="sidebar-menu">
          <div class="logo">
                    <a href="indexb.php"><img src="images/logo99.png" class="img-responsive" alt=""> </a>
                  </div><br><br><br><br>
          <header class="logo1">
            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
          </header>
            <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
                  <ul id="menu" >
                    <li><a href="indexb.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
                      <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Gestion des Produits</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><a href="ajouterProduit.php">Ajouter Produit</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="afficherProduit.php">Afficher Produits</a></li>
                      
                      </ul>
                    </li>
                     <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Gestion Catégories</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><a href="ajouterCategorie.php">Ajouter Categorie</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="afficherCategorie.php">Afficher Catégorie</a></li>
                      
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
                      <li id="menu-academico-avaliacoes" ><a href="tabs.php">soldes</a></li>
                      <li id="menu-academico-boletim" ><a href="calender.php">Evénements</a></li>


                      </ul>
                   </li>
        
        <li id="menu-academico"><a href="afficherEmploye.php"><i class="fa fa-table"></i> <span> Employes</span> <span class="fa fa-angle-right" style="float: right"></span></a>
          <ul id="menu-academico-sub">
            <li id="menu-academico-avaliacoes"><a href="http://localhost/produit1/elyes/BO/views/afficherEmploye.php">Afficher les employes</a>
            </li>
            <li id="menu-academico-avaliacoes"><a href="http://localhost/produit1/elyes/BO/views/ajoutEmployeP.php">Ajouter employes</a>
            </li>
          </ul>
        </li>
        <li id="menu-academico"><a href="afficherSoins.php"><i class="fa fa-table"></i> <span> Soins</span> <span class="fa fa-angle-right" style="float: right"></span></a>
          <ul id="menu-academico-sub">
            <li id="menu-academico-avaliacoes"><a href="http://localhost/produit1/elyes/BO/views/afficherSoins.php">Afficher les soins</a>
            </li>
            <li id="menu-academico-avaliacoes"><a href="http://localhost/produit1/elyes/BO/views/ajoutSoins.html">Ajouter soins</a>
            </li>
          </ul>
        </li>
                  
                  </ul>
                </div>
                </div>
              <script>
              var toggle = true;
                    
              $(".sidebar-icon").click(function() {                
                if (toggle)
                {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position":"absolute"});
                }
+++               else
                {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                  $("#menu span").css({"position":"relative"});
                }, 400);
                }
                      
                      toggle = !toggle;
                    });
              </script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->
<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
  
  



  </script>                      



  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">event/participants</h2>
   <h3 align="center"></h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>




<script>
Morris.Bar({
	
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
  xkey:['id'],
  
 ykeys:['cap'],
 labels:['interaction aux events'],
 hideHover:'auto',
 stacked:true,
});
</script>