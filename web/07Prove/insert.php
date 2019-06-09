<?php
include("dbconection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chase Haymond Prove07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    
    
            <h1>Welcome to Your Reading History <br>
        <a id="pageLink" href="./index.php"> Search Your History </a> 
        &nbsp;-&nbsp;
        <a id="pageLink" href="./insert.php"> Add New Boook </a> 
        </h1>
    
    
    <strong>Insert a new book</strong><br><br>
    <form action="./insertBook.php" method="get">
        
Title: <input type="text" name="title"><br>
        
        
Author First Name: <input type="text" name="authorFName" list="authorF" />
        <datalist id="authorF">
            <?php

                foreach ($db->query("SELECT * FROM authors") as $row) {
                    $name = $row['firstname'];
                    echo '<option>' . $name . '</option>';
                }

            ?>     
        </datalist><br>
        
Author Last Name: <input type="text" name="authorLname" list="authorL" />
        <datalist id="authorL">
            <?php

                foreach ($db->query("SELECT * FROM authors") as $row) {
                    $name = $row['lastname'];
                    echo '<option>' . $name . '</option>';
                }

            ?>     
        </datalist><br>
        
        
Genre:  <select name="genre">
        
        <option value=""></option>
        
        <?php
        
        foreach ($db->query("SELECT * FROM genres") as $row) {
            $name = $row['genre'];
            echo '<option value="' . $name . '">' . $name . '</option>';
        }

        ?> 
        
        </select><br>
        
        
Start Date: <input type="date" size="60" name="sdate" id="date"/><br>
End Date: <input type="date" size="60" name="edate" id="date"/><br>
        
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