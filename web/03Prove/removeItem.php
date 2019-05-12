<?php
// Start the session
session_start();
?>


<html>
    <body>
    
    <?php        

        if ($_GET['item'] == "glasses") {
            $_SESSION["glasses"] = 0;
            //echo $_SESSION["glasses"] . "<br>";
        }
        
        if ($_GET['item'] == "ramen") {
            $_SESSION["ramen"] = 0;
            //echo $_SESSION["ramen"] . "<br>";
        }
        
        if ($_GET['item'] == "shoes") {
            $_SESSION["shoes"] = 0;
            //echo $_SESSION["shoes"] . "<br>";
        }
        
        if ($_GET['item'] == "toothbrush") {
            $_SESSION["toothbrush"] = 0;
            //echo $_SESSION["toothbrush"] . "<br>";
        }
        
        
        header("Location: cart.php"); /* Redirect browser */
        exit();
        
    ?>
    </body>
</html>