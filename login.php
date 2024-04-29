<!DOCTYPE html>
<html lang="en">
<?php
session_start();

// Function to validate user login
function validateUserLogin($username, $password)
{
    // Your validation logic for regular users here
    // Example: Check the database for the provided credentials
}

// Function to validate admin login
function validateAdminLogin($username, $password)
{
    // Check if the provided credentials are for the admin
    if ($username === "admin" && $password === "adminpassword") {
        $_SESSION['admin'] = true;
        return true;
    } else {
        return false;
    }
}

// Check if the login request is for admin
if (isset($_POST['adminLogin']) && $_POST['adminLogin'] === 'true') {
    $username = $_POST['uname'];
    $password = $_POST['pword'];

    if (validateAdminLogin($username, $password)) {
        echo "successadmin";
    } else {
        echo "Invalid admin credentials";
    }
    exit;
}

// Regular user login validation
$username = $_POST['uname'];
$password = $_POST['pword'];

if (validateUserLogin($username, $password)) {
    echo "success";
} else {
    echo "Invalid credentials";
}
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

    <?php
    include "header.php";
    ?>
    <!-- Login -->
    <section id="login" class="my-5 py-5">
        <div class="container text-center mt-3 pt-3">
            <h2 class="form-weight-bold">Login</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="login-form">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" id="login-username" name="username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="login-password" name="password" required>
                </div>
                <div class="form-group">
                    <input type="button" onclick="doLogin();" class="btn" id="login-btn" value="Login">
                </div>
                <div class="form-group">
                    <a href="registerindex.php" id="register-url" class="btn">Don't have account? Signup</a>
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
        function doLogin() {
            $.ajax({
                url: 'validateLogin.php',
                data: {
                    uname: $("#login-username").val(),
                    pword: $("#login-password").val(),
                },
                type: "POST",
                success: function(msg) {
                    console.log(msg);
                    if (msg == "success") {
                        window.location.href = "index.php";
                    } else if (msg == "successadmin") {
                        window.location.href = "./admin/register.php";
                    } else {
                        alert(msg);
                    }
                }
            });
        }
    </script>


</body>

</html>