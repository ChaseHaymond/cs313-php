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
    
<?php
    // Set session variables
    $_SESSION["item"] = "none";
?>
    
    
    //$_SESSION[cart]=array();

    
    <h1>Welcome to Chase's Store &nbsp; - 
    <a id="pageLink" href="home.php"> Browse Items </a> 
        &nbsp;-&nbsp;
	<a id="pageLink" href="cart.php"> View Cart </a> 
    </h1>
    
    <p id="content">
     <table>
          <tr>
            <td id="picture"><img src="glasses2.jpg" alt="glasses" height="100px"></td>
            <td id="desc">A good pair of sunglasses</td>
            <td id="price">$20.00</td>
          </tr>
         <tr>
             <td id="add"><button>Add To Cart</button></td>
         </tr>
         <tr>
            <td id="picture"><img src="ramen.jpg" alt="ramen" height="100px"></td>
            <td id="desc">Some anazing chicken ramen</td>
            <td id="price">$1.00</td>
          </tr>
          <tr>
             <td id="add">
                <form action="addItem.php?item=ramen" method="get">
                    <input type="hidden" name="ramenItme" value="ramen">
                    <input type="submit" value="Add To Cart" />
                </form>
              </td>
          </tr>
          <tr>
            <td id="picture"><img src="shoes.jpg" alt="shoes" height="100px"></td>
            <td id="desc">Some of the best brown shoes around</td>
            <td id="price">$50.00</td>
          </tr>
         <tr>
             <td id="add"><button>Add To Cart</button></td>
         </tr>
         <tr>
            <td id="picture"><img src="toothbrush.jpg" alt="toothbrush" height="100px"></td>
            <td id="desc">A small brush with a long handle, for cleaning the teeth.<sup><a  href="https://www.dictionary.com/browse/toothbrush"> [1] </a></sup></td>
            <td id="price">$30.00</td>
          </tr>
         <tr>
             <td id="add"><button>Add To Cart</button></td>
         </tr>
    </table> 
    
</body>
    

</html>