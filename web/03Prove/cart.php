<?php
// Start the session
session_start();
?>

<html>
<head>
    <title>Chase's Store</title>
    <link rel="stylesheet" href="style.css">
</head>
    
<body>
    <h1>Welcome to Chase's Store &nbsp; - 
    <a id="pageLink" href="home.php"> Browse Items </a> 
        &nbsp;-&nbsp;
	<a id="pageLink" href="cart.php"> View Cart </a> 
    </h1>
    
    <p id="content">
        Contents of your cart <br><br>
        
        <?php
            $shoes = $_SESSION["shoes"];
            $glasses = $_SESSION["glasses"];
            $toothbrush = $_SESSION["toothbrush"];
            $ramen = $_SESSION["ramen"];
            $message = "S: " . $shoes . ", G: " . $glasses . ", T: " . $toothbrush . ", R: " . $ramen;
            echo "<script type='text/javascript'>alert('$message');</script>";
        
            echo "<table>";
            if ($shoes > 0) {
                echo "<tr>";
                    echo "<td> Item: Shoes </td>";
                    echo "<td> Quantity: " . $shoes . "</td>";
                    echo "<td> price - " . 20 * $shoes . "</td>";
                echo "</tr>";
            }
        
            echo "</table>";
        ?>
<!--
     <table>
          <tr>
            <td id="picture"><img src="glasses2.jpg" alt="glasses" height="100px"></td>
            <td id="desc">A good pair of sunglasses</td>
            <td id="price">$20.00</td>
          </tr>
         <tr>
            <td id="picture"><img src="glasses2.jpg" alt="glasses" height="100px"></td>
            <td id="desc">A good pair of sunglasses</td>
            <td id="price">$20.00</td>
          </tr>
         <tr>
             <td id="checkout"><button onclick="location.href='checkout.php'" type="button">Checkout</button></td>
         </tr>
         
         
    </table> 
-->
    </p>
    
</body>
</html>