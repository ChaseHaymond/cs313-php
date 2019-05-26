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
        
        Search by:
        <input type="radio" name="search" value="author" checked> Author<br>
        <input type="radio" name="search" value="title"> Title<br>
        <input type="radio" name="search" value="date"> Date<br><br>
        
        
        
        Search: <input type="text" name="search"><br>
        <input type="submit" value="Search">
    </form>
    <button id="button" name="button" onClick='location.href="?showAll=1"'>Show All Books</button>
    
    <br>
    <br>
 
<?php
$search = $_GET['search'];          
$query = "SELECT * 
            FROM books 
            WHERE LOWER(name)=" ."LOWER('" . $search ."')";
foreach ($db->query($query) as $row) {
    echo '<strong>' . $row['name'] . '</strong>' . '&nbsp;';
    echo '</p><br>';
}
    
if($_GET['showAll']){showAll();}
    
function showAll() {
    foreach ($db->query('SELECT * FROM books') as $row) {
        echo '<strong>' . $row['name'] . '</strong>' . '&nbsp;';
        echo '</p><br>';
    }
}
?>
</body>
</html>