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
        Please enter your info
    <table>
    		<form  action="/action_page.php" method="get">
    		    <tr>
    		    	<th align="right"> Your Name: </th>
					<th align="left"><input type="text" name="name" ><br></th>
				</tr>
				<tr>
					<th align="right">Adress: </th>
					<th align="left"><input type="text" name="Adress"><br></th>
				</tr>
				<tr>
					<th align="right">City: </th>
					<th align="left"><input type="text" name="City"><br></th>
				</tr>
				<tr>
					<th align="right">Zip: </th> 
					<th align="left"><input type="text" name="Zip"><br></th>
				</tr>
				<tr>
					<th align="right">State: </th>
					<th align="left"><input type="text" name="State"><br> </th>
				</tr>
                <tr>
                    <th><button onclick="location.href='home.php'" type="button">continue shopping</button></th>
                    <th><button onclick="location.href='confirm.php'" type="button">complete the purchase</button></th>
                </tr>
 					<br>
 				</form>
 		</table>
    </p>
</body>
</html>