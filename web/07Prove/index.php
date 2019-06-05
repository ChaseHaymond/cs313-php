<?php
include("dbconection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chase Haymond Prove06</title>
    <link rel="stylesheet" href="style.css">
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
    
    
    
    echo '<table>';
    echo '<tr>';
    echo '<th>Title</th>';
    echo '<th>Author</th>';
    echo '<th>Start Date</th>';
    echo '<th>End Date</th>';
    echo '</tr>';
    
    
    foreach ($db->query($query) as $row) {
        echo '<tr>';
        
        echo '<td>' . $row['name'] . '</td>' .
             '<td>' . $row['firstname'] . " " . $row['lastname'] . '</td>' .
             '<td>' . $row['startdate'] . '</td>' .
             '<td>' . $row['enddate'] . '</td>';

        echo '</tr>';
    }
    
    echo '</table>';
    
} else if($searchType == 'books'){
    $query = "SELECT * FROM books AS b
        JOIN authors AS a ON a.id = b.author_id
        JOIN history AS h ON h.book_id = b.id
        WHERE LOWER(name)=" ."LOWER('" . $search ."')";
    
    
    echo '<table>';
    echo '<tr>';
    echo '<th>Title</th>';
    echo '<th>Author</th>';
    echo '<th>Start Date</th>';
    echo '<th>End Date</th>';
    echo '</tr>';
    
    foreach ($db->query($query) as $row) {
        
        echo '<tr>';
        
        echo '<td>' . '<strong>Title: </strong> ' . $row['name'] . '</td>' .
             '<td>' . '<strong>, Author: </strong> ' . $row['firstname'] . " " . $row['lastname'] . '</td>' .
             '<td>' . '<strong>, Date Started: </strong> ' . $row['startdate'] . '</td>' .
             '<td>' . '<strong>, Date Finished: </strong> ' . $row['enddate'] . '</td>';
        
        echo '</tr>';
    }
    
    echo '</table>';
    
} else if($searchType == 'authors'){
    $query = "SELECT * FROM books AS b
        JOIN authors AS a ON a.id = b.author_id
        JOIN history AS h ON h.book_id = b.id
        WHERE LOWER(lastname)=" ."LOWER('" . $search ."')";
    
    echo '<table>';
    echo '<tr>';
    echo '<th>Title</th>';
    echo '<th>Author</th>';
    echo '<th>Start Date</th>';
    echo '<th>End Date</th>';
    echo '</tr>';
    
    foreach ($db->query($query) as $row) {
        
        echo '<tr>';
        
        echo '<td>' . '<strong>Title: </strong> ' . $row['name'] . '</td>' .
             '<td>' . '<strong>, Author: </strong> ' . $row['firstname'] . " " . $row['lastname'] . '</td>' .
             '<td>' . '<strong>, Date Started: </strong> ' . $row['startdate'] . '</td>' .
             '<td>' . '<strong>, Date Finished: </strong> ' . $row['enddate'] . '</td>';
        
        echo '</tr>';
    }
    
     echo '</table>';
}
?>
</body>
</html>