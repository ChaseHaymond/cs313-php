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
    
    
    
    if($authorId == 0) {
        //$db = get_db();
        
        $query = 'INSERT INTO authors (firstName) VALUES (:firstName)'; 
        $stmt = $db->prepare($query);
        $stmt->bindValue(':firstName', $author, PDO::PARAM_STR);
        //$stmt->execute();
    }
    echo $authorId;
    $authorId = $pdo->lastInsertId('authors_id');
    echo $authorId;
    $db = get_db();
    echo $authorId;
    $stmt = $db->prepare('INSERT INTO books(name, author, genre) VALUES(' . $title . ', ' . $authorId . ', ' . $genreId . ');');
    echo $authorId;
    $stmt->execute();
    echo $authorId;
    echo "HERE";
    
    $newPage = "./index.php";
    header("Location: $newPage");
    die();
    
    echo "HERE";
    
    
?>
</body>
</html>