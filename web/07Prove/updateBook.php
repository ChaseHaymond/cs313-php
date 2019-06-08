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
        WHERE history_id=" . $_GET['histId'];
    
    
    foreach ($db->query($query) as $row) {
        
//        $query = 'UPDATE authors SET firstName = "' . $fName . '",  lastName = "' . $lName . '" WHERE author_id = ' . $row['author_id'];
//        echo $query;
//        $stmt = $db->query($query);
//        echo "1";
//        //$stmt->bindValue(':firstName', $author, PDO::PARAM_STR);
//        $stmt->execute();
//        echo "2";
        
        $aId = $row['author_id'];
        echo "1";
        $statement = $db->query("UPDATE authors SET firstName=$fName, lastName=$lName WHERE author_id=$aId");
        echo "2";
        $statement->execute();
        echo "3";
        
//        //$statement = $db->prepare("select Employee_ID from REPT_Employee where Employee_ID=:empid"); 
//        $stmt = db->prepare("UPDATE authors SET fName=':fName', lName=:'lName' WHERE author_id=:author_id");
//        //$statement->bindParam(":empid",$empid);
//        $stmt->bindParam(":fName",$fName);
//        $stmt->bindParam(":lName",$lName);
//        $stmt->bindParam(":author_id",$row['author_id']);
//        //$statement->execute();
//        $stmt->execute();
        
        
//        UPDATE Customers
//        SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
//        WHERE CustomerID = 1;
    }
    
    echo "3";
    
    $newPage = "./index.php";
    echo "4";
    header("Location: $newPage");
    die();

    
    
?>
</body>
</html>