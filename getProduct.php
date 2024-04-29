<?php 

include "./config/connection.php";

$sql = "SELECT * FROM products WHERE prod_id = :prod_id";
$statement = oci_parse($conn, $sql);

oci_bind_by_name($statement, ':prod_id', $_GET['prod_id']);
$result = oci_execute($statement);

if($result) {
    $record = oci_fetch_assoc($statement);
    $response = array(
        'success' => true,
        'data' => $record
    );
    echo json_encode($response);
}
?>