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
    
    
    <?php        
        echo $_GET['item'] . "<br>";    
        
        array_push($_SESSION['item'],$_GET['item']);
        
        print_r( $_SESSION['item']);
            
        echo "<br>";
        
        foreach($_SESSION['item'] as $x => $x_value) {
            echo $x_value;
            echo "<br>";
        }
    ?>
    
<!--
    <p id="content">
        Contents of your cart <br><br>
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
    </p>
-->
    
</body>
</html>