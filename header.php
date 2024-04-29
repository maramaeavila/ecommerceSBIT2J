<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
    <div class="container-fluid">
        <img src="./imgs/logo.png">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="product.html">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contactus.html">Contact Us</a>
                </li>

                <li class="nav-item">
                    <a href="cart.html"><i class="fa fa-cart-shopping white"></i></a>
                    <a href="account.html"><i class="fa fa-user-circle white"></i></a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <a href="login.html" class="btn btn-dark" role="button">Login</a>  } ?>
            </form>
        </div>
    </div>
</nav>
navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
    <div class="container-fluid">
        <img src="./imgs/logo.png">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="product.php">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>

                <li class="nav-item">
                    <a href="cart.php"><i class="fa fa-cart-shopping white"></i></a>
                    <a href="account.php"><i class="fa fa-user-circle white"></i></a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <?php if ($_SESSION['username'] == "") { ?><a href="login.php" class="btn btn-dark" role="button">Login</a><?php } ?>

            </form>
        </div>
    </div>
</nav>