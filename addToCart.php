<?php
    include "./config/connection.php";
    session_start();
    // $username = $_SESSION['username'];
    $sql = "INSERT INTO cart (username, productid, quantity, total)
            VALUES (:username, :productid, :quantity, :total)";
    

    $statement = oci_parse($conn, $sql);

    oci_bind_by_name($statement, ':username', $_SESSION['username']);
    oci_bind_by_name($statement, ':productid', $_POST['productId']);
    oci_bind_by_name($statement, ':quantity', $_POST['quantity']);
    oci_bind_by_name($statement, ':total', $_POST['total']);

    $result = oci_execute($statement);

    if ($result) {
        echo "success";
    }

?>