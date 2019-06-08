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
    $fName = $_GET['fname'];
    $lName = $_GET['lname'];
    $genre = $_GET['genre'];
    $sdate = $_GET['sdate'];
    $edate = $_GET['edate'];
    $histId = $_GET['histId'];
    
    $authorId = 0;
    $genreId = 0;
    
    foreach ($db->query('SELECT * FROM authors') as $row) {
        $dbName = $row['firstname'] . " " . $row['lastname'];
        if(strtoupper($dbName) == strtoupper($fname . $lname)) {
            $authorId = $row['id'];
        }
    }
    
    foreach ($db->query('SELECT * FROM genres') as $row) {
        $dbName = $row['genre'];
        if(strtoupper($dbName) == strtoupper($genre)) {
            $genreId = $row['id'];
        }
    }
    
    
    
    
    $query = "SELECT * FROM books AS b
        JOIN authors AS a ON a.id = b.author_id
        JOIN history AS h ON h.book_id = b.id
        WHERE history_id=1";// . $_GET['id'];
    
    
    foreach ($db->query($query) as $row) {
        
//        $query = 'UPDATE authors SET firstName = "' . $fName . '",  lastName = "' . $lName . '" WHERE author_id = ' . $row['author_id'];
//        echo $query;
//        $stmt = $db->prepare($query);
//        //$stmt->bindValue(':firstName', $author, PDO::PARAM_STR);
//        $stmt->execute();
//        
//        
////        UPDATE Customers
////        SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
////        WHERE CustomerID = 1;
    }
    
    
    
    $newPage = "./index.php";
    header("Location: $newPage");
    die();

    
    
?>
</body>
</html>