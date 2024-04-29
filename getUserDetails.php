<?php 
    include "./config/connection.php";
    $username = "Sample user";

    $sql = "SELECT * FROM useraccount WHERE username = :username";
    $stmt = oci_parse($conn, $sql);

    // oci_bind_by_name($stmt, ':prod_id', $_SESSION['username']);
    oci_bind_by_name($stmt, ':username', $username);
    
    try {
        $result = oci_execute($stmt);
        if($result) {
            $record = oci_fetch_assoc($stmt);
            $response = array(
                'success' => true,
                'data' => $record
            );
            echo json_encode($response);
        } else {
            $response = array(
                'success' => false,
                'message' => 'Something went wrong.'
            );
            echo json_encode($response);
        }
    } catch (Exception $e) {
        $response = array(
            'success' => false,
            'message' => 'Something went wrong.'
        );
        echo json_encode($response);
    }

    
?>