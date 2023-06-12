<?php

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT, GET, POST");
    header("Access-Control-Allow-Headers: Origin, Content-Type");
    
    if (isset($_GET['addtoCart'])) {
        AddDatabase($_GET['id'], $_GET['cartId']);
    }
    
    function AddDatabase($Id, $cartId) {
        
        $HOST = "localhost:3306";
        $USERNAME = "root";
        $PASSWORD = "Dulangaroot";
        $DB = "sliitProject";
        $conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DB);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "select * from cart where cart_session_id='" . $cartId . "' AND product_id=" . $Id;
        $mysqli_result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($mysqli_result);
        if ($row != '') {
            $sql = "UPDATE cart SET qty=" . ($row['qty'] + 1) . " WHERE cart_session_id='" . $cartId . "'";
            if (mysqli_query($conn, $sql)) {
                echo "Updated successfully!";
            } else {
                echo "Error occurred in updating record: " . $conn->error;
            }
        } else {
            $sql = "INSERT INTO cart (product_id, cart_session_id, qty) VALUES (" . $Id . ", '" . $cartId . "', 1)";
            if (mysqli_query($conn, $sql)) {
                echo "Added to the cart successfully!";
            } else {
                echo "Error occurred in inserting data : " . mysqli_error($conn);
            }
        }
    }
    
?>