<?php

include '../entities/Cart.php';
$cart = new Cart;

include '../dbConfig.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['reference'])){
        $productID = $_REQUEST['reference'];
        // get product details
        $query = $db->query("SELECT * FROM produit WHERE reference = ".$productID);
        $row = $query->fetch_assoc();
        $prixsolde=$row['prix_solde'];
        if ($prixsolde==null) {
            $prixsolde=$row['prix'];
            # code...
        }
        $itemData = array(
            'reference' => $row['reference'],
            'nom' => $row['nom'],
            'prix' => $row['prix'],
             'prix' => $prixsolde,
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'../views/viewCart.php':'../views/viewCart.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['reference'])){
        $itemData = array(
            'rowid' => $_REQUEST['reference'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['reference'])){
        $deleteItem = $cart->remove($_REQUEST['reference']);
        header("Location: ../views/viewCart.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO orders (customer_id, total_price, created, modified) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
        
        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO order_items (order_id, product_id, quantity) VALUES ('".$orderID."', '".$item['reference']."', '".$item['qty']."');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: ../views/orderSuccess.php?reference=$orderID");
            }else{
                header("Location: ../views/checkout.php");
            }
        }else{
            header("Location: ../views/checkout.php");
        }
    }else{
        header("Location: ../produit/views/affichage.php");
    }
}else{
    header("Location: ../produit/views/affichage.php");
}