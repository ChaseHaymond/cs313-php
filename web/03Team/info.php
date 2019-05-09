<?php echo "User Name: " . $_POST["name"] . "<br>"; 
	echo "Email: " . "<a href=\"mailto:" . $_POST["email"]> . "\">" . $_POST["email"] . "</a><br>";
	echo "Major: " . isset($_POST["major"]) . "<br>";
	echo "Comment: " . $_POST["comment"] . "<br>";
	?>