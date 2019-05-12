<?php
session_start(); 
?>

<html>
    <body>
    
    
    <?php        
        echo $_GET['item'] . "<br>";    
        
        array_push($_SESSION['item'],$_GET['item']);
        
        print_r( $_SESSION['item'])
    ?>
    </body>
</html>