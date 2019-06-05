<?php
include("dbconection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chase Haymond Prove06</title>
</head>
<body >
    <button id="button" name="button" onClick='location.href="./insert.php"'>Click Here To Add A New Book</button>
    <form action="" method="get">
        
        Search by: <br>
        <input type="radio" name="searchType" value="authors"> Authors Last Name<br>
        <input type="radio" name="searchType" value="books" selected> Title<br>
        <br>
        
        
        
        Search: <input type="text" name="search"><br>
        <input type="submit" value="Search">
    </form>
    <button id="button" name="button" onClick='location.href="?showAll=1"'>Show All Books You Have Read</button>
    
    <br>
    <br>
 
<?php
$search = $_GET['search']; 
$searchType = $_GET['searchType'];
    
if($_GET['showAll']){
    $query = "SELECT * FROM books AS b
        JOIN authors AS a ON a.id = b.author_id
        JOIN history AS h ON h.book_id = b.id";
    
    
    foreach ($db->query($query) as $row) {
        echo '<strong>Title: </strong> ' . $row['name'] . 
             '<strong>, Author: </strong> ' . $row['firstname'] . " " . $row['lastname'] .
             '<strong>, Date Started: </strong> ' . $row['startdate'] .
             '<strong>, Date Finished: </strong> ' . $row['enddate'] .
             '&nbsp;';
        
        echo '</p><br>';
    }
    
} else if($searchType == 'books'){
    $query = "SELECT * FROM books AS b
        JOIN authors AS a ON a.id = b.author_id
        JOIN history AS h ON h.book_id = b.id
        WHERE LOWER(name)=" ."LOWER('" . $search ."')";
    
    
    foreach ($db->query($query) as $row) {
        echo '<strong>Title: </strong> ' . $row['name'] . 
             '<strong>, Author: </strong> ' . $row['firstname'] . " " . $row['lastname'] .
             '<strong>, Date Started: </strong> ' . $row['startdate'] .
             '<strong>, Date Finished: </strong> ' . $row['enddate'] .
             '&nbsp;';
        
        echo '</p><br>';
    }
} else if($searchType == 'authors'){
    $query = "SELECT * FROM books AS b
        JOIN authors AS a ON a.id = b.author_id
        JOIN history AS h ON h.book_id = b.id
        WHERE LOWER(lastname)=" ."LOWER('" . $search ."')";
    
    
    foreach ($db->query($query) as $row) {
        echo '<strong>Title: </strong> ' . $row['name'] . 
             '<strong>, Author: </strong> ' . $row['firstname'] . " " . $row['lastname'] .
             '<strong>, Date Started: </strong> ' . $row['startdate'] .
             '<strong>, Date Finished: </strong> ' . $row['enddate'] .
             '&nbsp;';
        
        echo '</p><br>';
    }
}
        
if($_GET['showAll']){showAll();}
    
function showAll() {
    
    echo '<table style="width:100%">';
    echo '<tr>';
    echo '<th>Title</th>';
    echo '<th>Author</th>';
    echo '<th>Start Date</th>';
    echo '<th>End Date</th>';
    echo '</tr>';
    
    $query = "SELECT * 
            FROM books 
            WHERE LOWER(name)=" ."LOWER('" . $search ."')";
    foreach ($db->query($query) as $row) {
        echo '<tr>';
        echo '<td><strong>Title: </strong> ' . $row['name'] . '</td>' .
             '<td><strong>, Author: </strong> ' . $row['firstName'] . " " . $row['lastName'] . '</td>' .
             '<td><strong>, Date Started: </strong> ' . $row['starteDate'] . '</td>' .
             '<td><strong>, Date Finished: </strong> ' . $row['endDate'] . '</td>' .
             '&nbsp;';
        echo '</p><br>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
</body>
</html>