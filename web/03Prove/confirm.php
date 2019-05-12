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
    <p id="content">
        <h1>Thank You For Your Order</h1> <br><br>
        
        <?php
            $shoes = $_SESSION["shoes"];
            $glasses = $_SESSION["glasses"];
            $toothbrush = $_SESSION["toothbrush"];
            $ramen = $_SESSION["ramen"];
        
            echo "<table>";
            if ($shoes > 0) {
                echo "<tr>";
                    echo "<td> Item: Shoes </td>";
                    echo "<td> Quantity: " . $shoes . "</td>";
                    echo "<td> - price - $" . 50 * $shoes . ".00</td>";
                
                    echo "<td>";
                    echo "<form action=\"removeItem.php\" method=\"get\">";
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
                    echo "<td> - price - $" . 20 * $glasses . ".00</td>";
                
                    echo "<td>";
                    echo "<form action=\"removeItem.php\" method=\"get\">";
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
                    echo "<td> - price - $" . 30 * $toothbrush . ".00</td>";
                
                    echo "<td>";
                    echo "<form action=\"removeItem.php\" method=\"get\">";
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
                    echo "<td> - price - $" .  $ramen . ".00</td>";
                
                    echo "<td>";
                    echo "<form action=\"removeItem.php\" method=\"get\">";
                    echo "<input type=\"hidden\" name=\"item\" value=\"ramen\">";
                    echo "<input type=\"submit\" value=\"Remove From Cart\" />";
                    echo "</form>";
                    echo "</td>";
                
                echo "</tr>";
            }
        
            echo "<tr>";
            echo "<td> <button onclick=\"window.location.href = 'checkout.php';\">Checkout</button>";
            echo "</tr>";
            echo "</table>";

        ?>
        
        
    </p>
    
</body>
</html>