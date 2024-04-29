<?php
include "./config/connection.php";
session_start();

$sql = "SELECT * FROM useraccount WHERE username=:usernamex";
$stid = oci_parse($conn, $sql);
oci_bind_by_name($stid, ':usernamex', $_POST['uname']);
$res = oci_execute($stid);

$numRows = oci_fetch_all($stid, $row, null, null, OCI_FETCHSTATEMENT_BY_ROW);


if ($numRows > 0) {
    if (password_verify($_POST['pword'], $row[0]['PASSWORD'])) {
        $_SESSION['username'] = $row[0]['USERNAME'];
        $_SESSION['utype'] = $row[0]['USERTYPE'];
        if ($row[0]['USERTYPE'] == 2) {
            echo "successadmin";
        } else {
            echo "success";
        }
    } else echo "Invalid Password!";
} else {
    echo "Account not exists!";
}
