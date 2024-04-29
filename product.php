<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <!-- navbar -->
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
                    <a href="login.html" class="btn btn-dark" role="button">Login</a>
                </form>
            </div>
        </div>
    </nav> -->
    <?php
    include "header.php";
    ?>

    <!-- Categories -->
    <section id="categories" class="w-100 my-5 py-5">
        <div>
            <h1>Top Categories</h1>
        </div>
        <div class="row p-0 m-0">
            <!-- Men -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="./imgs/men.png">
                <div class="details">
                    <h2>Men</h2>
                    <button class="btn btn-dark">Shop Now</button>
                </div>
            </div>
            <!-- Women -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="./imgs/women.png">
                <div class="details">
                    <h2>Women</h2>
                    <button class="btn btn-dark">Shop Now</button>
                </div>
            </div>
            <!-- Kid -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="./imgs/kid.PNG">
                <div class="details">
                    <h2>Kid</h2>
                    <button class="btn btn-dark">Shop Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section id="products">
        <div>
            <h2>Our Products</h2>
            <div class="prod-cat">
                <nav id="prodcat">
                    <a href="All">All</a>
                    <a href="T-Shirt">T-Shirt</a>
                    <a href="All">Jeans</a>
                    <a href="Jeans">Jackets</a>
                    <a href="Sweatpants">Sweatpants</a>
                    <a href="Dress">Dress</a>
                    <a href="Undergarments">Undergarments</a>
                </nav>
            </div>

            <hr>
            <div class="all-prod" id="prodSlider">
                /** Products inserted here from AJAX */
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination mt-5">
                    <li class="page-item"><a class="page-link">Previous</a></li>
                    <li class="page-item"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">Next</a></li>
                </ul>

            </nav>
        </div>
    </section>

    <!-- Banner -->
    <section id="banner">
        <div class="container">
            <h4 class="text-center">Shop the Latest Trends in Renz and Co!</h4>
            <h1 class="text-center">"Explore our Stylish Collection Today."</h1>
        </div>
    </section>

    <!-- contactus -->
    <!-- <section id="contactus">
        <div class="contact-content">
            <div class="contact-info">
                <div><i class="fa-solid fa-location-dot"></i> Quezon City, Philippines</div>
                <div><i class="fa-solid fa-envelope"></i>renzandco@gmail.com</div>
                <div><i class="fa-solid fa-mobile"></i>0000-000-000</div>
            </div>
            <div class="contact-form">
                <h2>Contact Us</h2>
                <form class="contact" action="" method="post">
                    <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                    <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                    <textarea name="message" rows="5" placeholder=""></textarea>
                </form>
                <button class="btn btn-dark" type="submit">SEND</button>
            </div>
        </div>
    </section> -->
    <?php
    include "Footercontactus.php";
    ?>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $('#categories .box-area').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        document.addEventListener('DOMContentLoaded', function() {
            let section = document.querySelectorAll('section');
            let navLinks = document.querySelectorAll('nav a');

            window.onscroll = () => {
                section.forEach(sec => {
                    let top = window.scrollY;
                    let offset = sec.offsetTop;
                    let height = sec.offsetHeight;
                    let id = sec.getAttribute('id');

                    if (top >= offset && top < offset + height) {
                        navLinks.forEach(links => {
                            links.classList.remove('active');
                            document.querySelector('nav a[href*=' + id + ']').classList.add('active');
                        })
                    }
                })
            }
        });

        $.ajax({
            url: 'getAllProducts.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                if (data.success) {
                    var html = ''
                    $.each(data.data, function(index, element) {
                        console.log(element)
                        html += '<div class="prod"> <img src="./uploads/' + element.PROD_IMAGE + '" alt=' + element.PROD_NAME + '> <div class="prod-info">  <h4 class="prod-title">' + element.PROD_NAME + '</h4> <p class="prod-price">₱ ' + element.PROD_PRICE + '</p><a class="prod-btn" href="single_product.php?id=' + element.PROD_ID + '">Add To Cart</a></div></div>';
                    });
                    document.getElementById('prodSlider').innerHTML = html
                }
            }
        });
    </script>

</body>

</html>