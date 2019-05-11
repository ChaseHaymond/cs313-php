<?php
    function addRamen() {
        $_SESSION[cart]=array_diff($_SESSION[cart],"ramen");
        echo "<script type='text/javascript'>alert('Clicked Ramen');</script>";
    }
?> 