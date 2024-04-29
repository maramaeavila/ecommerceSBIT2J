<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product</title>

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
    <?php
    include "header.php";
    ?>
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

    <!-- Single Product -->
    <section id="single-product" class="container my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <img class="img-fluid w-100 pb-1" src="./imgs/products/itemld1.png" id="mainImg">
                <!-- <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="./imgs/products/itemId1.png" width="100%" class="small-img" id="image1">
                    </div>
                    <div class="small-img-col">
                        <img src="./imgs/products/itemId2.png" width="100%" class="small-img" id="image2">
                    </div>
                    <div class="small-img-col">
                        <img src="./imgs/products/itemId3.png" width="100%" class="small-img" id="image3">
                    </div>
                    <div class="small-img-col">
                        <img src="./imgs/products/itemId4.png" width="100%" class="small-img" id="image3">
                    </div>
                </div> -->
            </div>

            <div class="col-lg-6 col-md-12 col-12 pt-5">
                <h6>Men Shoes</h6>
                <h3 class="py-4" id="product-name">Men's Fashion</h3>
                <h2 id="product-price">₱ 800</h2>
                <h6>Quantity</h6>
                <div>
                    <button id="increment" class="size-btn" onclick="increment()">+</button>
                    <label for="qty">
                        <input type="number" name="qty" id="qty" value="1" min="1">
                    </label>
                    <button id="decrement" class="size-btn" onclick="decrement()">-</button>
                </div>
                <button class="prod-btn" onclick="addToCart()">Add To Cart</button>
            </div>
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
        var mainImg = document.getElementById("mainImg");
        var smallImg = document.getElementsByClassName("small-img");
        for (let i = 0; i < smallImg.length; i++) {
            smallImg[i].addEventListener('click', function() {
                mainImg.src = smallImg[i].src;
            });
        }

        var product = {}

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

        $('#prodSlider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
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

        // document.getElementById('prevSlide').addEventListener('click', function() {
        //     $('#prodSlider').slick('slickPrev');
        // });

        // document.getElementById('nextSlide').addEventListener('click', function() {
        //     $('#prodSlider').slick('slickNext');
        // });

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

        function increment() {
            document.getElementById('qty').stepUp(1);
        }

        function decrement() {
            document.getElementById('qty').stepDown(1);
        }

        function addToCart() {
            const qty = $('#qty').val();
            if (qty < 1) {
                alert('Minimum allowed is 1')
                return false
            } else {
                $.ajax({
                    url: 'addToCart.php',
                    data: {
                        quantity: qty,
                        productId: "<?= $_GET['id'] ?>",
                        total: qty * product.PROD_PRICE
                    },
                    type: 'POST',
                    success: function(msg) {
                        if (msg == 'success') alert('Added')
                        else alert(msg)
                    }
                })
            }
        }

        $.ajax({
            url: 'getProduct.php',
            data: {
                prod_id: "<?= $_GET['id'] ?>"
            },
            dataType: 'json',
            success: function(result) {
                if (result.success) {
                    console.log(result.data);
                    product = result.data;
                    document.getElementById('product-name').innerHTML = result.data.PROD_NAME;
                    document.getElementById('product-price').innerHTML = "₱ " + result.data.PROD_PRICE;
                    document.getElementById('mainImg').src = "./uploads/" + result.data.PROD_IMAGE;
                    document.getElementById('mainImg').alt = result.data.PROD_NAME;
                }
            }
        });
    </script>

</body>

</html>