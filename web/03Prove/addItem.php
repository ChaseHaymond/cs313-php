<?php
// Start the session
session_start();
?>


<html>
    <body>
    
    
    <?php        
//        echo $_GET['item'] . "<br>";    
//        
//        array_push($_SESSION['item'],$_GET['item']);
        if ($_GET['item'] == "glasses") {
            $_SESSION["glasses"]++;
            echo $_SESSION["glasses"] . "<br>";
        }
        
        echo $_SESSION["ramen"] = 0;
        
    ?>
    </body>
</html>