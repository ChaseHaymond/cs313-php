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
        WHERE LOWER(history_id)=" ."LOWER('" . $_GET['id']  . "')";
    
    
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
             '<td>' . '<button id="button" name="button" onClick=\'location.href="./update.php?id=' . $row['history_id'] . '"\'>Edit</button>' . '</td>';

        echo '</tr>';
    }
    
    echo '</table>';
    
    ?>
    
    
    
    
</body>
</html>