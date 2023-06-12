<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT, GET, POST");
    header("Access-Control-Allow-Headers: Origin, Content-Type");

    $HOST = "localhost:3306";
    $USERNAME = "root";
    $PASSWORD = "Dulangaroot";
    $DB = "sliitProject";
    $conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DB);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['qid'])) {
        $questionId = $_GET['qid'];
        $sqlCart = "select * from answer where qid=".$questionId;
        $mysqli_result = mysqli_query($conn, $sqlCart);
        $row = mysqli_fetch_array($mysqli_result);

        echo json_encode($row['answer']);

    } else {
        echo "Can not fetch data!";
    }

?>
