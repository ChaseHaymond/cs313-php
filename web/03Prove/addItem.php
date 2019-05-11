<?php
session_start(); 
$_SESSION['item']=$_GET['item'];
?>

<html>
    <body>
    
    
    <?php echo $_SESSION['item']; ?>
    </body>
</html>