<?php
include("dbconection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chase Haymond Prove05</title>
</head>
<body >
    <form action="" method="get">
        Book: <input type="text" name="book"><br>
        <input type="submit" value="Search">
    </form>
 
<?php
$name = $_GET['book'];          
$query = "SELECT * 
            FROM books 
            WHERE LOWER(name)=" ."LOWER('" . $name ."')";
foreach ($db->query($query) as $row) {
    echo '<strong>' . $row['name'] . '</strong>' . '&nbsp;';
    echo '</p><br>';
}
?>
</body>
</html>