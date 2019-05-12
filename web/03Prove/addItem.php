<?php
session_start(); 
?>

<html>
    <body>
    
    
    <?php 
        
        $_SESSION['test'] = "test";
        
        $_SESSION['item'] = $_GET['item'];
        
        echo $_SESSION['item']; 
        
        echo "Favorite local is " . $_SESSION["test"] . ".<br>";
        echo "Favorite session is " . $_SESSION["item"] . ".<br>";
        
        
        $message = "test";
echo "<script type='text/javascript'>alert('$message');</script>";
        
        
        ?>
    </body>
</html>