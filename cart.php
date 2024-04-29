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

    <!-- Cart -->
    <section id="cart" class="container my-5 py-5">
        <div class="container mt-5">
            <h2 class="font-weight-bold">My Cart</h2>
            <hr>
        </div>

        <table class="mt-5 pt-5">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody id="cart-body">
            </tbody>
        </table>

        <div class="cart-total">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td id="cart-sub-total">₱ 399</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td id="cart-total">₱ 399</td>
                </tr>
            </table>
        </div>

        <div class="checkout-container">
            <button class="btn checkout-btn" onclick="checkout()">Checkout</button>
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

        // fetch cart
        $.ajax({
            url: 'getCart.php',
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                if(result.success) {
                    var html = '';
                    var total = 0;
                    console.log(result.data)
                    $.each(result.data, function(index, row) {
                        html += '<tr><td><div class="prod-info"><img src="./uploads/'+row.PROD_IMAGE +'"><div><p>' + row.PROD_NAME + '</p><small><span>₱</span>' + row.PROD_PRICE + '</small><br><a class="remove-btn" href="#" id="remove-cart-item" data-record-id="' + row.ID + '">Remove</a></div></div></td><td><input type="number" value="'+row.QUANTITY+'" id="cart-quantity" data-record-id="' + row.ID + '" data-record-price="' + row.PROD_PRICE + '"></td><td><span>₱</span><span class="prod_price">'+row.TOTAL+'</span></td></tr>';
                        total += parseInt(row.TOTAL);
                    });
                    document.getElementById('cart-body').innerHTML = html;
                    document.getElementById('cart-sub-total').innerHTML ='₱ '+ total;
                    document.getElementById('cart-total').innerHTML = '₱ '+ total;

                    attachDeleteListener();
                    attachChangeAmountListener();
                }
            }
        });

        function removeCartItem(id) {
            $.ajax({
                url: 'removeCartItem.php?id=' + id,
                method: 'DELETE',
                dataType: 'json',
                success: function (result) {
                    if(result.success) {
                        window.location.reload();
                    }
                }
            });
        }

        function attachDeleteListener() {
            var removeButtons = document.querySelectorAll('#remove-cart-item');
            removeButtons.forEach(function(button) {
                button.addEventListener('click', function () {
                    var cartId = button.getAttribute('data-record-id');
                    removeCartItem(cartId);
                });
            });
        }

        function updateCartItem(id, quantity, price) {
            $.ajax({
                url: 'updateCartItem.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    id: id,
                    quantity: quantity,
                    total: quantity * price
                },
                success: function(result) {
                    console.log(result);
                    if(result.success) {
                        window.location.reload();
                    }
                }
            });
        }

        function attachChangeAmountListener() {
            var cartInputs = document.querySelectorAll('#cart-quantity');
            console.log(cartInputs);
            cartInputs.forEach(function(input) {
                input.addEventListener('change', function (e) {
                    var quantity = e.target.value;
                    var cart_id = input.getAttribute('data-record-id');
                    var price = input.getAttribute('data-record-price');
                    updateCartItem(cart_id, quantity, price);
                });
            });
        }

        function checkout() {
            window.location.href = 'checkout.php';
        }

       
    </script>

</body>

</html>