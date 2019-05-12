<?php
session_start(); 
?>

<html>
    <body>
    
    
    <?php        
        echo $_GET['item'] . "<br>";    
        
        array_push($_SESSION['item'],$_GET['item']);
        
        print_r( $_SESSION['item']);
            
        echo "<br>";
        
        foreach($_SESSION['item'] as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
    ?>
    </body>
</html>