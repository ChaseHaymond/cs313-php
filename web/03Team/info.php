<?php 

    $email = $_POST["email"];

<a href="mailto: $email"> test </a>

    echo "User Name: " . $_POST["name"] . "<br>"; 
	//echo "Email: " . "<a href=\"mailto:" . $_POST["email"]> . "\">" . $_POST["email"] . "</a><br>";
    echo "Email: " . $_POST["email"] . "<br>";
	echo "Major: " . $_POST["major"] . "<br>";
	echo "Comment: " . $_POST["comment"] . "<br>";
	?>