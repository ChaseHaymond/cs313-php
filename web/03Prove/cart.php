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
//            $message = "S: " . $shoes . ", G: " . $glasses . ", T: " . $toothbrush . ", R: " . $ramen;
//            echo "<script type='text/javascript'>alert('$message');</script>";
        
            echo "<table>";
            if ($shoes > 0) {
                echo "<tr>";
                    echo "<td> Item: Shoes </td>";
                    echo "<td> Quantity: " . $shoes . "</td>";
                    echo "<td> price - " . 50 * $shoes . "</td>";
                
                    echo "<td>";
                    echo "<form action=\"addItem.php\" method=\"get\">";
                    echo "<input type=\"hidden\" name=\"item\" value=\"shoes\">";
                    echo "<input type=\"submit\" value=\"Remove From Cart\" />";
                    echo "</form>";
                    echo "</td>";
                
                
                echo "</tr>";
            }
        
            if ($glasses > 0) {
                echo "<tr>";
                    echo "<td> Item: Glasses </td>";
                    echo "<td> Quantity: " . $glasses . "</td>";
                    echo "<td> price - " . 20 * $glasses . "</td>";
                
                    echo "<td>";
                    echo "<form action=\"addItem.php\" method=\"get\">";
                    echo "<input type=\"hidden\" name=\"item\" value=\"glasses\">";
                    echo "<input type=\"submit\" value=\"Remove From Cart\" />";
                    echo "</form>";
                    echo "</td>";
                
                
                echo "</tr>";
            }
        
            if ($toothbrush > 0) {
                echo "<tr>";
                    echo "<td> Item: Toothbrush </td>";
                    echo "<td> Quantity: " . $toothbrush . "</td>";
                    echo "<td> price - " . 30 * $toothbrush . "</td>";
                
                    echo "<td>";
                    echo "<form action=\"addItem.php\" method=\"get\">";
                    echo "<input type=\"hidden\" name=\"item\" value=\"toothbrush\">";
                    echo "<input type=\"submit\" value=\"Remove From Cart\" />";
                    echo "</form>";
                    echo "</td>";
                
                echo "</tr>";
            }
        
            if ($ramen > 0) {
                echo "<tr>";
                    echo "<td> Item: Ramen </td>";
                    echo "<td> Quantity: " . $ramen . "</td>";
                    echo "<td> price - $" .  $ramen . ".00</td>";
                
                    echo "<td>";
                    echo "<form action=\"addItem.php\" method=\"get\">";
                    echo "<input type=\"hidden\" name=\"item\" value=\"ramen\">";
                    echo "<input type=\"submit\" value=\"Remove From Cart\" />";
                    echo "</form>";
                    echo "</td>";
                
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