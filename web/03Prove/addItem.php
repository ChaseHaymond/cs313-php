<?php
session_start(); 
?>

<html>
    <body>
    
    
    <?php 
        $_SESSION['item'] = $_GET['item'];
        
        echo $_SESSION['item'];      
        
        ?>
    </body>
</html>