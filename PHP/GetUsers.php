<?php
    //create a new database connection
    $db = new mysqli('localhost', 'root', '', 'PDFadmin') or die("Couldn't establish connection with the database.");
    //fetch the user file with the user class
    require "User.php";
    //create a query to select all the users from the database
    
?>