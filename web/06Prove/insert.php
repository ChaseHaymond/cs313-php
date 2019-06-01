<?php
include("dbconection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chase Haymond Prove06</title>
</head>
<body >
   instert
    <form action="" method="get">
        
        Title: <input type="text" name="title"><br>
        
        
        Author: <input type="text" list="cars" />
        <datalist id="cars">
            <?php

                foreach ($db->query("SELECT * FROM authors") as $row) {
                    $name = $row['firstname'] . " " . $row['lastname'];
                    echo '<option>' . $name . '</option>';
                }

            ?>     
        </datalist><br>
        
        
        <input type="submit" value="Add">
    </form>
 
<?php
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