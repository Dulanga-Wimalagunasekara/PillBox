<?php
    
    $HOST = "localhost:3306";
    $USERNAME = "root";
    $PASSWORD = "Dulangaroot";
    $DB = "sliitProject";
    $conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DB);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
