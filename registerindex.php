<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

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

    <!-- navbar -->
    <?php
    include "header.php";
    ?>

    <!-- Register -->
    <section id="register" class="my-5 py-5">
        <div class="container text-center mt-3 pt-3">
            <h2 class="form-weight-bold">Register</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="register-form">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="register-name" name="name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="register-email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Contact No.</label>
                    <input type="tel" class="form-control" id="register-contactno" name="contactno" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" id="register-address" name="address" placeholder="Home Address" required>
                    <input type="text" class="form-control" id="register-city" name="city" placeholder="City" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" id="register-username" name="username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="register-password" name="password" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="register-confirmpassword" name="confirmpassword" required>
                </div>
                <div class="form-group">
                    <input type="button" onclick="registerAccount()" class="btn" id="register-btn" value="Signup">
                </div>
                <div class="form-group">
                    <a href="login.php" id="login-url" class="btn">Do you have an account? Login</a>
                </div>
            </form>
        </div>
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

    <script>
        function validateEmail(emailField) {
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if (reg.test(emailField) == false) {
                return false;
            }
            return true;
        }

        function registerAccount() {
            if ($("#register-name").val() == "") {
                alert("Please input Name");
                $("#register-name").focus();
                return false;
            } else if ($("#register-email").val() == "") {
                alert("Please input Email");
                $("#register-email").focus();
                return false;
            } else if ($("#register-contactno").val() == "") {
                alert("Please input Contact Number");
                $("#register-contactno").focus();
                return false;
            } else if ($("#register-username").val() == "") {
                alert("Please input Username");
                $("#register-username").focus();
                return false;
            } else if ($("#register-password").val() == "") {
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
                url: 'register.php',
                data: $("#register-form").serialize(),
                type: "POST",
                success: function(msg) {
                    if (msg == "success") window.location.href = "login.php";
                    else alert(msg);
                }
            });

        }
    </script>
</body>

</html>