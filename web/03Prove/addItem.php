<?php
// Start the session
session_start();
?>


<html>
    <body>
    
        <h1>Welcome to Chase's Store &nbsp; - 
    <a id="pageLink" href="home.php"> Browse Items </a> 
        &nbsp;-&nbsp;
	<a id="pageLink" href="cart.php"> View Cart </a> 
    </h1>
    
    <?php        
//        echo $_GET['item'] . "<br>";    
//        
//        array_push($_SESSION['item'],$_GET['item']);
        if ($_GET['item'] == "glasses") {
            $_SESSION["glasses"]++;
            //echo $_SESSION["glasses"] . "<br>";
        }
        
        if ($_GET['item'] == "ramen") {
            $_SESSION["ramen"]++;
            //echo $_SESSION["ramen"] . "<br>";
        }
        
        if ($_GET['item'] == "shoes") {
            $_SESSION["shoes"]++;
            //echo $_SESSION["shoes"] . "<br>";
        }
        
        if ($_GET['item'] == "toothbrush") {
            $_SESSION["toothbrush"]++;
            //echo $_SESSION["toothbrush"] . "<br>";
        }
        
        echo $_SESSION["glasses"] . "<br>";
        echo $_SESSION["ramen"] . "<br>";
        echo $_SESSION["shoes"] . "<br>";
        echo $_SESSION["toothbrush"] . "<br>";
        
    ?>
    </body>
</html>