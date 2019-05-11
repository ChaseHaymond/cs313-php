<?php
session_start(); 
$_SESSION['item']=$_GET['item'];
?>

<html>
    <body>
    
    
    <?php echo $_SESSION['item']; 
        
        
        $message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";
        
        
        ?>
    </body>
</html>