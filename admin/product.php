<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productname = isset($_POST['productname']) ? $_POST['productname'] : "";
    $catgender = isset($_POST['catgender']) ? $_POST['catgender'] : "";
    $category = isset($_POST['category']) ? $_POST['category'] : "";
    $size = isset($_POST['size']) ? $_POST['size'] : "";
    $productprice = isset($_POST['productprice']) ? $_POST['productprice'] : "";
    $productdescription = isset($_POST['productdescription']) ? $_POST['productdescription'] : "";

    if (isset($_FILES["productimage"]) && $_FILES["productimage"]["error"] == 0) {
        $targetDirectory = "../uploads/";
        $targetFile = $targetDirectory . basename($_FILES["productimage"]["name"]);
        $filename = $_FILES["productimage"]["name"];
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["productimage"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if ($_FILES["productimage"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["productimage"]["tmp_name"], $targetFile)) {
                echo "The file " . htmlspecialchars(basename($_FILES["productimage"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file uploaded.";
    }

    $random_strings = array();

    for ($i = 0; $i < 5; $i++) {
        $random_number = mt_rand(1, 10);
        $string_to_hash = "az" . $random_number;
        $md5_hash = md5($string_to_hash);
        $random_strings[] = $md5_hash;
    }

    foreach ($random_strings as $index => $hash) {
    }

    $sql_insert_product = "INSERT INTO products (prod_id, prod_name, prod_catgender, prod_category, prod_size, prod_price, prod_description, prod_image) 
                               VALUES (:prod_id, :prod_name, :prod_catgender, :prod_category, :prod_size, :prod_price, :prod_description, :prod_image)";
    $stmt_insert_product = oci_parse($conn, $sql_insert_product);
    oci_bind_by_name($stmt_insert_product, ':prod_id', $hash);
    oci_bind_by_name($stmt_insert_product, ':prod_name', $productname);
    oci_bind_by_name($stmt_insert_product, ':prod_catgender', $catgender);
    oci_bind_by_name($stmt_insert_product, ':prod_category', $category);
    oci_bind_by_name($stmt_insert_product, ':prod_size', $size);
    oci_bind_by_name($stmt_insert_product, ':prod_price', $productprice);
    oci_bind_by_name($stmt_insert_product, ':prod_description', $productdescription);
    oci_bind_by_name($stmt_insert_product, ':prod_image', $filename);
    oci_execute($stmt_insert_product);

    echo '<script>alert("Product added successfully");</script>';
    header("refresh:0;url=register.php");
    exit;
}
