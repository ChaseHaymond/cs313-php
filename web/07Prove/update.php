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
        
        Author First Name: <input type="text" name="fname" value= $row['firstname'] /><br>
        Author Last Name: <input type="text" name="lname" value= $row['lastname'] /><br>
            
            
            
        Genre:  <select name="genre">
        <option value=""></option>
        
        <?php
        
        foreach ($db->query("SELECT * FROM genres") as $rowTeo) {
            $name = $rowTwo['genre'];
            
            if ($rowTwo['genre'] = $row['genre']) {
                echo '<option value="' . $name . '" selected>' . $name . '</option>';
            } else {
                echo '<option value="' . $name . '">' . $name . '</option>';
            }
           
        }

        ?> 
        
        </select><br>
        
        
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