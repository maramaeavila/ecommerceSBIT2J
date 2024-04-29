<?php

$host = 'localhost';
$port = '1521';
$sid = 'xe';
$user = 'system';
$pass = 'avila';

$db_str = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = {$host})(PORT = {$port})))(CONNECT_DATA=(SID={$sid})))";

$conn = oci_connect($user, $pass, $db_str);

if (!$conn) {
    $error = oci_error();
    echo "Connection failed: " . $error['message'];
    exit;
} else {
    // echo "Connected to Oracle DB!<br>";
}

// $sql = "SELECT * FROM products";

// $statement = oci_parse($conn, $sql);

// oci_execute($statement);

// echo "<table border='1'>
//         <tr>
//             <th>Product ID</th>
//             <th>Product Name</th>
//             <th>Price</th>
//         </tr>";

// while ($row = oci_fetch_assoc($statement)) {
//     echo "<tr>
//             <td>{$row['PROD_ID']}</td>
//             <td>{$row['PROD_NAME']}</td>
//             <td>{$row['PROD_PRICE']}</td>
//           </tr>";
// }

// echo "</table>";

//oci_free_statement($statement);
// oci_close($conn);
