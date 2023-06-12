<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT, GET, POST");
    header("Access-Control-Allow-Headers: Origin, Content-Type");

    if (isset($_GET['eid'])) {
        deleteUser($_GET['eid']);
    }

    function deleteUser ($eid)
    {

        $HOST = "localhost:3306";
        $USERNAME = "root";
        $PASSWORD = "Dulangaroot";
        $DB = "sliitProject";
        $conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DB);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $preSQL = "SELECT * FROM employee_manage_answer WHERE eid=". $eid;

        $result = mysqli_query($conn, $preSQL);

        while ($row = mysqli_fetch_array($result)) {
            $sql = "DELETE FROM employee_manage_answer WHERE eid=". $eid;
            mysqli_query($conn, $sql);
        }

        $preSQL = "SELECT * FROM employee_manage_product WHERE eid=" . $eid;

        $result = mysqli_query($conn, $preSQL);

        while ($row = mysqli_fetch_array($result)) {
            $sql = "DELETE FROM employee_manage_product WHERE eid=". $eid;
            mysqli_query($conn, $sql);
        }

        $preSQL = "SELECT * FROM employee_manage_question WHERE eid=" . $eid;

        $result = mysqli_query($conn, $preSQL);

        while ($row = mysqli_fetch_array($result)) {
            $sql = "DELETE FROM employee_manage_question WHERE eid=". $eid;
            mysqli_query($conn, $sql);
        }

        $sql = "DELETE FROM employee WHERE eid=" . $eid;

        if (mysqli_query($conn, $sql)) {
            echo "Successfully deteled!";
        } else {
            echo "Error occurred in deleting record: " . $conn->error;
        }

    }
?>
