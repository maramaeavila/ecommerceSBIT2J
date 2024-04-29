<?php 

include "./config/connection.php";

$sql = "SELECT * FROM products";
$statement = oci_parse($conn, $sql);

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