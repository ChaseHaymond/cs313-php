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
            echo $x_value;
            echo "<br>";
        }
        
//        header("Location: home.php"); /* Redirect browser */
//        exit();
    ?>
    </body>
</html>