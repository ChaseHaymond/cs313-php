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
        $dbName = $row['genre'];
        if(strtoupper($dbName) == strtoupper($genre)) {
            $genreId = $row['id'];
        }
    }
    
    if(authorId == 0) {
        $db = get_db();
    
        $stmt = $db->prepare('INSERT INTO authore(firstName) VALUES(' . $author . ');');
        $stmt->exicute();
    }
    

    
    echo "HERE";
    
    
?>
</body>
</html>