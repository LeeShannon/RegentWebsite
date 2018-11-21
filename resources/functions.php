<?php

$uploads = "uploads";
/************************* HELPERS FUNCTIONS *************************/


function set_message($msg){

    if(!empty($msg)){

        $_SESSION['message'] = $msg;

    } else {
        $msg ="";
    }

}

function display_message(){
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}


function redirect($location) {
    header("Location: $location");
}

function query($sql){

    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result){

    global $connection;

    if(!result){
        die("QUERY FAILED".mysqli_error($connection));
    }

}

function escape_string($string){

    global $connection;

    return mysqli_real_escape_string($connection, $string);
}


function fetch_array($result){

    return mysqli_fetch_array($result);

}

function last_id(){
    global $connection;

    return mysqli_insert_id($connection);
}



function display_image($picture){

    global $uploads;

    return $uploads. DS .$picture;
}


/************************* FRONT END GET PRODUCT *************************/
function login_user(){

    if(isset($_POST['submit'])){

        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);


        $query = query("SELECT * FROM client WHERE clientEmail= '{$email}' AND clientPassphrase ='{$password}'");

        confirm($query);

        if(mysqli_num_rows($query) ==0){
            set_message("Your Email and/or Password are wrong");
            redirect("index.php");
            exit();
        } else {

            $_SESSION['username'] = $email;
            redirect("Website");
        }



    }
}

function add_user(){

    if(isset($_POST['register'])){

        $userName = escape_string($_POST['fname']);
        $userSurname = escape_string($_POST['sname']);
        $email = escape_string($_POST['email']);
        $userPhone = escape_string($_POST['phone']);
        $userCountry = escape_string($_POST['country']);
        $userCity = escape_string($_POST['city']);
        $address = escape_string($_POST['address']);
        $password= escape_string($_POST['password']);
        $password2= escape_string($_POST['password2']);

        if($password != $password2){

            set_message("Please Ensure your passwords match.");
            redirect("Register.php");
        } else {
            $query = query("INSERT INTO client(clientName, clientEmail, clientPhoneNumber, clientCity, clientCountry, clientSurname, clientPassPhrase, clientAddress) VALUES ('{$userName}','{$email}','{$userPhone}','{$userCity}','{$userCountry}','{$userSurname}','{$password}','{$address}')");
        confirm($query);

        set_message("User Created");

        redirect("index.php");

        }

    }
}


// Get Products

function get_products(){

    $query = query("SELECT * FROM product");
    confirm($query);

    while($row = fetch_array($query)){

        $product_image = display_image($row['productImgUrl']);

        $product = <<<DELIMETER

         <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail" style="margin-bottom:20px;">
            <a href="itemDetail.php?id={$row['productId']}"><img src="../resources/$product_image" style="width:100%; height: 300px"></a>
            <div class="caption">
                <h4 class="pull-right">R {$row['productSellingPrice']}</h4>
                <h4><a href="itemDetail.php?id={$row['productId']}">{$row['productName']}</a></h4>
                <a class="btn  btn-outline-info" href="../resources/cart.php?add={$row['productId']}">Add to cart</a>
            </div>
        </div>
    </div>

DELIMETER;

        echo $product;
    }

}

// Get Products



?>
