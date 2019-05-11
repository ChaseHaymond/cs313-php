<?php
session_start(); 
?>

<html>
    <body>
    
    
    <?php 
        
        $_SESSION['item']=$_GET['item'];
        
        echo $_SESSION['item']; 
        
        
        $message = echo $_SESSION['item'];
echo "<script type='text/javascript'>alert('$message');</script>";
        
        
        ?>
    </body>
</html>