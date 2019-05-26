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
        
        Search by: <br>
        <input type="radio" name="searchType" value="authors"> Author<br>
        <input type="radio" name="searchType" value="books"> Title<br>
        <input type="radio" name="searchType" value="history"> Date<br><br>
        
        
        
        Search: <input type="text" name="search"><br>
        <input type="submit" value="Search">
    </form>
    <button id="button" name="button" onClick='location.href="?showAll=1"'>Show All Books</button>
    
    <br>
    <br>
 
<?php
$search = $_GET['search']; 
$searchType = $_GET['searchType'];
    
if($searchType == 'books'){
    $query = "SELECT * FROM books AS b
        JOIN authors AS a ON a.id = b.author_id
        JOIN history AS h ON h.book_id = b.id
        WHERE LOWER(name)=" ."LOWER('" . $search ."')";
    
    
    foreach ($db->query($query) as $row) {
        echo '<strong>Title: </strong> ' . $row['name'] . 
             '<strong>, Author: </strong> ' . $row['firstName'] . " " . $row['lastName'] .
             '<strong>, Date Started: </strong> ' . $row['starteDate'] .
             '<strong>, Date Finished: </strong> ' . $row['endDate'] .
             '&nbsp;';
        
        echo '</p><br>';
    }
}       
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
if($_GET['showAll']){showAll();}
    
function showAll() {
    $query = "SELECT * 
            FROM books 
            WHERE LOWER(name)=" ."LOWER('" . $search ."')";
    foreach ($db->query($query) as $row) {
        echo '<strong>Title: </strong> ' . $row['name'] . 
             '<strong>, Author: </strong> ' . $row['firstName'] . " " . $row['lastName'] .
             '<strong>, Date Started: </strong> ' . $row['starteDate'] .
             '<strong>, Date Finished: </strong> ' . $row['endDate'] .
             '&nbsp;';
        echo '</p><br>';
    }
}
?>
</body>
</html>