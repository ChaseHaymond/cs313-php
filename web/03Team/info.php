<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your Major is: <?php echo $_POST["major"]; ?><br><br>
<?php echo $_POST["comment"]; ?> <br> <br>
    Countries you have been to: 
    if isset($_POST['test']) {
        <?php echo isset($_POST['test']) <br>
    }
    if isset($_POST['NAmerica']) {
        <?php echo isset($_POST['test']) <br>
    }
    if isset($_POST['SAmerica']) {
        <?php echo isset($_POST['test']) <br>
    }
    if isset($_POST['Europe']) {
        <?php echo isset($_POST['test']) <br>
    }
    if isset($_POST['Africa']) {
        <?php echo isset($_POST['test']) <br>
    }
    if isset($_POST['Asia']) {
        <?php echo isset($_POST['test']) <br>
    }
    if isset($_POST['Antarctica']) {
        <?php echo isset($_POST['Antarctica']) <br>
    }
    

</body>
</html>
