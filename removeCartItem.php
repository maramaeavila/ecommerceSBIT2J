<?php 

include "./config/connection.php";

$sql = "DELETE FROM cart WHERE id = :id";
$statement = oci_parse($conn, $sql);

oci_bind_by_name($statement, ':id', $_GET['id']);
$result = oci_execute($statement);

if($result) {
    $response = array(
        'success' => true,
    );
    echo json_encode($response);
}
?>