<?php
include("dbconection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chase Haymond Prove07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    
    
        <h1>Welcome to Your Reading History <br>
        <a id="pageLink" href="./index.php"> Search Your History</a> 
        &nbsp;-&nbsp;
        <a id="pageLink" href="./insert.php"> Add New Boook</a> 
        </h1>
    
    
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
    echo '<th id="title">Title</th>';
    echo '<th>Author</th>';
    echo '<th>Start Date</th>';
    echo '<th>End Date</th>';
    echo '</tr>';
    
    
    foreach ($db->query($query) as $row) {
        echo '<tr>';
        
        echo '<td id="title">' . $row['name'] . '</td>' .
             '<td>' . $row['firstname'] . " " . $row['lastname'] . '</td>' .
             '<td>' . $row['startdate'] . '</td>' .
             '<td>' . $row['enddate'] . '</td>' .
             '<td>' . '<button id="button" name="button" onClick=\'location.href="./insert.php?id=' . $row['id'] . '"\'>Edit</button>' . '</td>';

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
    echo '<th id="title">Title</th>';
    echo '<th>Author</th>';
    echo '<th>Start Date</th>';
    echo '<th>End Date</th>';
    echo '</tr>';
    
    
    foreach ($db->query($query) as $row) {
        echo '<tr>';
        
        echo '<td>' . $row['name'] . '</td>' .
             '<td>' . $row['firstname'] . " " . $row['lastname'] . '</td>' .
             '<td>' . $row['startdate'] . '</td>' .
             '<td>' . $row['enddate'] . '</td>' .
             '<td>' . '<button id="button" name="button" onClick=\'location.href="./insert.php?id=' . $row['id'] . '"\'>Edit</button>' . '</td>';

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
        
        echo '<td id="title">' . $row['name'] . '</td>' .
             '<td>' . $row['firstname'] . " " . $row['lastname'] . '</td>' .
             '<td>' . $row['startdate'] . '</td>' .
             '<td>' . $row['enddate'] . '</td>' .
             '<td>' . '<button id="button" name="button" onClick=\'location.href="./insert.php?id=' . $row['id'] . '"\'>Edit</button>' . '</td>';
        
        echo '</tr>';
    }
    
     echo '</table>';
}
?>
</body>
</html>