

<?php include '../dbConfig.php';

include '../entities/Cart.php';
$cart = new Cart;
?>
<html>
<body onload="window.print()">
    <div class="container">
    <div class="head">
			<div class=" logo">
				<a href="index.html"><img src="images1/logo.png" alt=""></a>	
			</div>
		</div>
    <div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login" style="padding-bottom:200px;padding-top:50px;">
					<center><strong>Votre Facture</strong></center>
            <hr width="75%" color="black">
				</div>
				

				<div class="clearfix"> </div>
		</div>
		</div>
        </div>
    <table class="table">
    <thead>
        <tr>
            <th>Nom du produit</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo $item["price"].' Dt'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo $item["subtotal"].' Dt'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>Aucun produit dans votre panier......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo $cart->total().' Dt'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
        
    
    </body>
</html>