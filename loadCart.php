<?php

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT, GET, POST");
    header("Access-Control-Allow-Headers: Origin, Content-Type");

    $HOST = "localhost:3306";
    $USERNAME = "root";
    $PASSWORD = "Dulangaroot";
    $DB = "sliitProject";
    $connection = new mysqli($HOST, $USERNAME, $PASSWORD, $DB);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    if (isset($_GET['cartId'])) {
        $cartId = $_GET['cartId'];
        $sqlCart = "select distinct product_id from cart where cart_session_id='" . $cartId . "'";
        echo "sql created with cartId";
    } else {
        $sqlCart = "select distinct product_id from cart";
        echo "sql created without cartId";
    }
?>