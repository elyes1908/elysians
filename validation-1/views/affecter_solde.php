
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="wid_promoth=device-wid_promoth, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head> 
<body>

<?php
	include "../core/promoC.php";



$promoC=new PromoC();
?>
 
<form method="POST" action="solder.php">
	

<div class="container">
    


<div class="form-group col-md-6">
<label for=id">id produit</label>
<input type="number" class="form-control" name="id" id="id" placeholder="produit"  required>

</div>


<div class="form-group col-md-6">
<label for="id_promo">id promo</label>
<input type="number" class="form-control" name="id_promo" id="id_promo" placeholder="promo"  required>

</div>




	<td>

		<form method="POST" action="solder.php">
		<input type="submit" name="solder" value="solder" id="btn1" >

		
		

		


			</form>
</div>



</form>


</body>
</html>