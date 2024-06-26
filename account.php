<?php
include "./config/connection.php";
session_start();


$sql = "SELECT * FROM useraccount WHERE username=:usernamex";

$stid = oci_parse($conn, $sql);
oci_bind_by_name($stid, ':usernamex', $_SESSION['username']);
oci_execute($stid);
$row = oci_fetch_assoc($stid);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing EShop</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <?php
    include "header.php";
    ?>
    <!-- Account -->
    <section id="account" class="my-5 py-5">
        <div class="row container mx-auto">
            <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 sol-sm-12">
                <h3 class="font-weight-bold">Account Info</h3>
                <hr class="mx-auto">
                <div class="account-info">
                    <p>Name: <span><?= $row['NAME'] ?></span></p>
                    <p>Email: <span><?= $row['NAME'] ?></span></p>
                    <p><a href="" id="order-btn">My Orders</a></p>
                    <p><a href="logout.php" id="logout-btn">Logout</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 sol-sm-12">
                <form id="account-form">
                    <h3>Change Password</h3>
                    <hr class="mx-auto">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="username" name="username" value="<?= $_SESSION['username'] ?>">
                        <label>Password</label>
                        <input type="password" class="form-control" id="account-password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="account-confirmpassword" name="confirmpassword" required>
                    </div>
                    <div class="form-group">
                        <input type="button" onclick='changepw();' value="Change Password" class="btn" id="changepass-btn">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Orders -->
    <section id="orders" class="container my-5 py-5">
        <div class="container mt-2">
            <h2 class="font-weight-bold">My Orders</h2>
            <hr>
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Date</th>
            </tr>
            <tr>
                <td>
                    <div class="prod-info">
                        <img src="./imgs/products/itemId1.png">
                        <div>
                            <p class="mt-3">Black Custom TShirt</p>
                        </div>
                    </div>
                </td>
                <td>
                    <span>2024-04-29</span>
                </td>
            </tr>
        </table>
    </section>

    <!-- Banner -->
    <section id="banner">
        <div class="container">
            <h4 class="text-center">Shop the Latest Trends in Renz and Co!</h4>
            <h1 class="text-center">"Explore our Stylish Collection Today."</h1>
        </div>

    </section>

    <?php
    include "Footercontactus.php";
    ?>



    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>
<script>
    function changepw() {

        if ($("#register-password").val() == "") {
            alert("Please input Password");
            $("#register-password").focus();
            return false;
        } else if ($("#register-confirmpassword").val() == "") {
            alert("Please input Confirm Password");
            $("#register-confirmpassword").focus();
            return false;
        } else if ($("#register-confirmpassword").val() != $("#register-password").val()) {
            alert("Password must be same with confirm password!");
            $("#register-confirmpassword").focus();
            return false;
        }

        $.ajax({
            url: 'changepassword.php',
            data: $("#account-form").serialize(),
            type: "POST",
            success: function(msg) {
                alert(msg);
            }
        });

    }
</script>

</html>