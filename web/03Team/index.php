<?php
    $majors = array("CS"=>"Computer Science", "WD"=>"Web Design and Development", "CIT"=>"Computer Information and Technology", "CE" => "Computer Engineering");
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="info.php" method="post">

	Name:<input type="text" name="name"><br>
	Email:<input type="text" name="email"><br>

	<label>Major</label> <br>
    
    <input type="radio" name="major" value="Computer Science"> Computer Science  <br>
    <input type="radio" name="major" value="Web Design and Development"> Web Design and Development  <br>
    <input type="radio" name="major" value="Computer Information and Technology"> Computer Information and Technology  <br>
    <input type="radio" name="major" value="Computer Engineering"> Computer Engineering  <br>
	

	Comment: <br> <textarea name="comment"></textarea>

    <button type="submit"> Submit</button><br>


	<input type="checkbox" name="NAmerica" value="North America"> North America <br>
	<input type="checkbox" name="SAmerica" value="South America"> South America <br>
	<input type="checkbox" name="Europe" value="Europe"> Europe <br>
	<input type="checkbox" name="Asia" value="Asia"> Asia <br>
	<input type="checkbox" name="Australia" value="Australia"> Australia <br>
	<input type="checkbox" name="Africa" value="Africa"> Africa <br>
	<input type="checkbox" name="Antartica" value="Antarctica"> Antarctica <br>




</form>


</body>
</html>