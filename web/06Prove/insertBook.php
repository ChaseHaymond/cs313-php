<?php
include("dbconection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chase Haymond Prove06</title>
</head>
<body >

<?php

    $title = $_GET['title'];
    $author = $_GET['author'];
    $genre = $_GET['genre'];
    $sdate = $_GET['sdate'];
    $edate = $_GET['edate'];
    
    $authorId = 0;
    $genreId = 0;
    
    foreach ($db->query('SELECT * FROM authors') as $row) {
        $dbName = $row['firstname'] . " " . $row['lastname'];
        if(strtoupper($dbName) == strtoupper($author)) {
            $authorId = $row['id'];
        }
    }
    
    foreach ($db->query('SELECT * FROM genres') as $row) {
        $dbName = $row['genre']
        if(strtoupper($dbName) == strtoupper($genre)) {
            $genreId = $row['id'];
        }
    }
    
    if(authorId == 0) {
        $db = get_db();
    
        $stmt = $db->prepare('INSERT INTO authore(firstName) VALUES(' . $author . ');');
        $stmt->exicute();
    }
    
    $authorId = $pdo->lastInsertId('authors_id_seq');
    
    $db = get_db();
    
    $stmt = $db->prepare('INSERT INTO books(name, author, genre) VALUES(' . $title . ', ' . $authorId . ', ' . $genreId . ');');
    $stmt->exicute();
    
    
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