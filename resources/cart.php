<?php 

require_once("../resources/config.php"); 

?>


<?php

if (isset($_GET['add'])) {
    
    // $_SESSION['product_'. $_GET['add']] +=1;
    
    // redirect("product.php");
    
    $query = query("SELECT * FROM product WHERE productId=".escape_string($_GET['add'])." ");
    
    confirm($query);
    
    while($row = fetch_array($query)){
        
        if($row['quantity'] != $_SESSION['product_'.$_GET['add']]){
            
            $_SESSION['product_'.$_GET['add']] +=1;
            redirect("../public/checkout.php");
        } else {
            
            set_message("We only have " . $row['quantity']." " . $row['productName']." available");
            redirect("../public/checkout.php");
        }
    }
}


if(isset($_GET['remove'])){
    
    $_SESSION['product_'.$_GET['remove']]--;
    
    if($_SESSION['product_'.$_GET['remove']] <1){
        unset($_SESSION{'item_quantity'});
    unset($_SESSION['item_total']);
        redirect("../public/checkout.php");
    } else {
        redirect("../public/checkout.php");
    }
}

if(isset($_GET['delete'])){
    
    $_SESSION['product_'.$_GET['delete']]= '0' ;
    unset($_SESSION{'item_quantity'});
    unset($_SESSION['item_total']);
    redirect("../public/checkout.php");
}




function cart(){
    
    
    $total =0;
    $item_quantity = 0;
    $item_name=1;
    $item_number=1;
    $amount =1;
    $quantity=1;
    
    
    foreach($_SESSION as $name => $value){
        
        if($value > 0 ) {
            
            if(substr($name, 0, 8 ) == "product_"){
            
            
            $length = strlen($name) - 8;
                
            $id = substr($name, 8, $length);    
                
            $query = query("SELECT * FROM product WHERE productId=".escape_string($id)." ");
    confirm($query);
    
    while($row = fetch_array($query)){
        
        $subtotal = $row['productSellingPrice'] * $value;
        
        $item_quantity += $value;
        
         $product_image = display_image($row['productImgUrl']);
        
        $product= <<<DELIMITER
        
        
        
        <tr>
                  <td class="static">
                    <img class="item-cart" style="object-fit: cover" src="../resources/{$product_image}" >
                  </td>
                  <td> {$row['productName']} </td>
                  <td style="width: 200px">  <p>{$value} {$row['unit']} </p></td>
                  <td>R {$row['productSellingPrice']}</td>
                  <td>
                    R {$subtotal}
                  </td>
                  <td>
                    <a href="../resources/cart.php?remove={$row['productId']}" data-toggle="tooltip" data-placement="bottom" title="Remove">
                     <i class="fas fa-minus-circle" style="color: black; font-size: 25px"></i>
                   </a>
                   <a href="../resources/cart.php?add={$row['productId']}" data-toggle="tooltip" data-placement="bottom" title="Add">
                     <i class="fas fa-plus-circle" style="color: black; font-size: 25px"></i>
                   </a>
                   <a href="../resources/cart.php?delete={$row['productId']}" data-toggle="tooltip" data-placement="bottom" title="Delete">
                     <i class="fas fa-times-circle" style="color: black; font-size: 25px"></i>
                   </a>
                  </td>
                </tr>
       
        <input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
  <input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
  <input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
  <input type="hidden" name="quantity_{$quantity}" value="{$value}">
        
    
  
DELIMITER;
        
        echo $product;
        
         $item_name++;
        $item_number++;
        $amount++;
        $quantity++;
        
        
    }
            $_SESSION['item_total']= $total+= $subtotal;
            $_SESSION['item_quantity'] = $item_quantity;
        }
        
            
            
            
        }
        
        
        
    }
    
    
}


function show_proceed_button(){
    
    if (isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >=1){
        
        if(isset($_SESSION['username'])){
            
            
            
            $paypal_button = <<<DELIMITER
    
        <div class="col-md-6 d-flex justify-content-end">
                <a href="invoice.php?"><input type="submit" name="checkout" value="Proceed to Checkout" id="button" class="btn btn-default"></a>
              </div>
    
DELIMITER;
    
    return $paypal_button;
        } else {
            return "You need to be connected";
        }
        
         
        
    }
    
   
}


function process_customer_report(){
    
   
    
    
    if (isset($_SESSION['username'])){
        
        $userId = $_SESSION['username'];
            echo $userId;
        
        $query = query("SELECT * FROM client WHERE clientId={$userId} ");
        
        confirm($query);
        
         while($row = fetch_array($query)){
         $name = $row['clientName'];
        $surname = $row['clientSurname'];
        $address = $row['clientAddress'];
        $city = $row['clientCity'];
        $country = $row['clientCountry'];
        $email  = $row['clientEmail'];
    
       
        
    }
        
    $shipment_company_id    = escape_string($_POST['shipment_company']);
        echo $shipment_company_id;
        
        $query2 = query("SELECT * FROM shipment WHERE shipmentId={$shipment_company_id} ");
        
        confirm($query2);
        
         while($row = fetch_array($query2)){
         $company_name = $row['companyName'];
        $companyPhone = $row['companyPhone'];
        $companyEmail = $row['companyEmail'];
    }
        
        
        
        
        
        
        
   
//    $amount = $_GET['amt'];
        
   
//    
//    $total =0;
//    $item_quantity = 0;
//        
//    
//        
//    confirm($send_order);
//    
//    foreach($_SESSION as $name => $value){
//        
//        if($value > 0 ) {
//            
//            if(substr($name, 0, 8 ) == "product_"){
//            
//            
//            $length = strlen($name) - 8;
//                
//            $id = substr($name, 8, $length);
//                
//                
//                
//            $query = query("SELECT * FROM products WHERE product_id=".escape_string($id)." ");
//    confirm($query);
//    
//                
//    while($row = fetch_array($query)){
//        $product_title = $row['product_title'];
//        $product_price = $row['product_price'];
//        $subtotal = $row['product_price'] * $value;
//        
//        $item_quantity += $value;
//        
//        $insert_report = query("INSERT INTO reports (product_id, order_id, product_price, product_title, product_quantity) VALUES ('{$id}', '{$last_id}', '{$product_price}', '{$product_title}', '{$value}')");
//        
//        confirm($insert_report);
//       
//        
//    }
//         $total+= $subtotal;
//         echo $item_quantity;
//         
//        }
//        
//            
//            
//            
//        }
//        
//        
//        
//    }
//      session_destroy();  
    } else {
        redirect("../public/index.php");
    }
    
    
}


?>