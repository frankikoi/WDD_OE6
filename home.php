<?php
    session_start();


?>

<html> 
    <head>
        <title>WEBDEV_OE5</title>
    </head>
<body>
    <div class = "box">
    <h1> WELCOME </h1> <?php
    echo $_SESSION['email'];
  
    
    ?>
    <br><br>
    <h2> <a href = "index.html">Logout</a></h2> </div>
</body>
</hmtl>