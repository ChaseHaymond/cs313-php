<?php
include("dbconection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chase Haymond Prove07</title>
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

    $query = 'INSERT INTO books (name, author_id, genre) VALUES (:name, :authorId, :genre)';
    $stmt = $db->prepare($query);
    
    $stmt->bindValue(':name', $title, PDO::PARAM_STR);
    $stmt->bindValue(':authorId', $authorId, PDO::PARAM_INT);
    $stmt->bindValue(':genre', $genreId, PDO::PARAM_INT);
                         
                         
    $stmt->execute();
    
    $userId = 1;
    $bookId = $db->lastInsertId('books_id_seq');
    
    $newSdate = date('Y-m-d', strtotime($sdate));
    $newEdate = date('Y-m-d', strtotime($edate));
    
    if(!$_GET['edate']){
        $query = 'INSERT INTO history (user_id, book_id, startDate) VALUES (:user_id, :book_id, :startDate)';
        $stmt = $db->prepare($query);

        $stmt->bindValue(':user_id', $userId, PDO::PARAM_STR);
        $stmt->bindValue(':book_id', $bookId, PDO::PARAM_INT);
        $stmt->bindValue(':startDate', $newSdate, PDO::PARAM_STR);

        $stmt->execute();
    } else {
        $query = 'INSERT INTO history (user_id, book_id, startDate, endDate) VALUES (:user_id, :book_id, :startDate, :endDate)';
        $stmt = $db->prepare($query);

        $stmt->bindValue(':user_id', $userId, PDO::PARAM_STR);
        $stmt->bindValue(':book_id', $bookId, PDO::PARAM_INT);
        $stmt->bindValue(':startDate', $newSdate, PDO::PARAM_STR);
        $stmt->bindValue(':endDate', $newEdate, PDO::PARAM_STR);


        $stmt->execute();
    }
    
    echo 'ns - ' . $newSdate . ', ne - ' . $newEdate;
    
//    $query = 'INSERT INTO history (user_id, book_id, startDate, endDate) VALUES (:user_id, :book_id, :startDate, :endDate)';
//    $stmt = $db->prepare($query);
//    
//    $stmt->bindValue(':user_id', $userId, PDO::PARAM_STR);
//    $stmt->bindValue(':book_id', $bookId, PDO::PARAM_INT);
//    $stmt->bindValue(':startDate', $newSdate, PDO::PARAM_STR);
//    $stmt->bindValue(':endDate', $newEdate, PDO::PARAM_STR);
//                         
//                         
//    $stmt->execute();
    
    $newPage = "./index.php";
    header("Location: $newPage");
    die();

    
    
?>
</body>
</html>