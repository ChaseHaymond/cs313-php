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
        $stmt->execute();
    }
    echo $authorId;
    $authorId = $db->lastInsertId('authors_id_seq');
    echo '1';
    //$db = get_db();
    echo '2';
    $query = 'INSERT INTO books (name, author, genre) VALUES (:name, :author_id, :genre)';
    $stmt = $db->prepare($query);
    echo '3';
    
    $stmt->bindValue(':name', $title, PDO::PARAM_STR);
    $stmt->bindValue(':author_id', $authorId, PDO::PARAM_INT);
    $stmt->bindValue(':genre', $genreId, PDO::PARAM_INT);
                         
                         
    $stmt->execute();
    echo '4';
    echo "HERE";
    
    $newPage = "./index.php";
    header("Location: $newPage");
    die();
    
    echo "HERE";
    
    
?>
</body>
</html>