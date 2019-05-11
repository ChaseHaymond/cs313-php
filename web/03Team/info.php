<?php 

    $email = $_POST["email"];

    echo "User Name: " . $_POST["name"] . "<br>"; 
    echo "<a href='".$link_address."'>Mail To: {$email} </a>";
	echo "Major: " . $_POST["major"] . "<br>";
	echo "Comment: " . $_POST["comment"] . "<br>";
	?>