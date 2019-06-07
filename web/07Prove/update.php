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
    
    
        <h1>Welcome to Your Reading History <br>
        <a id="pageLink" href="./index.php"> Search Your History </a> 
        &nbsp;-&nbsp;
        <a id="pageLink" href="./insert.php"> Add New Boook </a> 
        </h1>
    
    
    <strong>Update book's info</strong><br><br>
    
    
    
    
    
    
    <?php
    $id = $_GET['id'];
    
    $query = "SELECT * FROM books AS b
        JOIN authors AS a ON a.id = b.author_id
        JOIN history AS h ON h.book_id = b.id
        WHERE history_id=" . $_GET['id'];
    

    echo '<form action="" method="get">';
    
    foreach ($db->query($query) as $row) {
        
        echo 'Title: <input type="text" name="title" value="' . $row['name'] . '"><br>';
        
        echo 'Author First Name: <input type="text" name="fname" value=' . $row['firstname'] . '><br>';
        echo 'Author Last Name: <input type="text" name="f=lname" value=' . $row['lastname'] . '><br>';
                       
            
        echo 'Genre:  <select name="genre">';
        echo '<option value=""></option>';
        
        
        foreach ($db->query("SELECT * FROM genres") as $rowTwo) {
            $name = $rowTwo['genre'];
            
            if ($rowTwo['id'] == $row['genre']) {
                echo '<option value="' . $name . '" selected>' . $name . '</option>';
            } else {
                echo '<option value="' . $name . '">' . $name . '</option>';
            }
           
        }

        
        echo "</select><br>";
        
        echo 'Start Date: <input type="date" size="60" name="sdate" id="date" value=' . $row['startdate'] . '/><br>';
        echo 'Start Date: <input type="date" size="60" name="sdate" id="date" value=' . $row['enddate'] . '/><br>';
        
        <input type="submit" value="Add">
        
        
//        echo '<td>' . $row['name'] . '</td>' .
//             '<td>' . $row['firstname'] . " " . $row['lastname'] . '</td>' .
//             '<td>' . $row['startdate'] . '</td>' .
//             '<td>' . $row['enddate'] . '</td>' .
//             '</td>';

    }
    
    
    echo '</form>';
    
    ?>
    
    
    
    
</body>
</html>