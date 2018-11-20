<?php


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



?>