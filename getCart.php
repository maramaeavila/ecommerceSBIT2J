<?php 
session_start();
include "./config/connection.php";

$sql = "SELECT * FROM cart INNER JOIN products ON cart.productid = products.prod_id WHERE username = :username";
$statement = oci_parse($conn, $sql);

oci_bind_by_name($statement, ':username', $_SESSION['username']);
$result = oci_execute($statement);

if($result) {
    $records = array();
    while($row = oci_fetch_assoc($statement)) {
        $records[] = $row;
    }
    $response = array(
        'success' => true,
        'data' => $records
    );
    echo json_encode($response);
}
?>