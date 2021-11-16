<?php 
require_once("connect.php");

if (isset($_POST['button'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $login_query = "SELECT email, password, firstname from users_tbl where email = '$user' AND password = '$pass'";
   

    $result = mysqli_query($dbc, $login_query);
    
    if(mysqli_num_rows($result)){
        include("home.php");
         $_SESSION['email'] = $user;
        
    }
    else {
        echo '<script> alert("Incorrect username or Password")</script>';
        include("index.html");
    }

}

?>