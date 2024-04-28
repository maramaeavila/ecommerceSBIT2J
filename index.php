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
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
        <div class="container-fluid">
            <img src="./imgs/logo.png">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#"><i class="fa fa-cart-shopping white"></i></a>
                        <a href="#"><i class="fa fa-user-circle white"></i></a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <a href="login.html" class="btn btn-dark" role="button">Login</a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Home -->
    <section id="home">
        <div class="content">
            <p>Limited Time Only for Summer</p>
            <h1>Fashion</h1>
            <h3>Look Your Best On your Best Day</h3>
            <button id="btn-explore">Explore Now</button>
        </div>
    </section>

    <!-- About Us -->
    <section id="aboutus">
        <div class="container">
            <h2 data-text="About Us...">About Us...</h2>
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <img src="./imgs/products/itemId1.png" alt="">
                    </div>
                </div>
                <div class="col-sm">
                    <h3>Our Story</h3>
                    <p>Welcome to Renz and Co,
                        where shopping meets convenience and reliability! <br>
                        to create clothing that not only looks good but also feels good. <br>
                        Founded in 3 years ago, Renz and Co. was born out of a desire <br>
                        to redefine fashion by blending style, comfort, and sustainability. <br>
                        <br>
                        Our journey began in a small studio, where our founder, Renz and Co., <br>
                        poured their heart and soul into designing pieces that inspire confidence <br>
                        and self-expression. With a focus on quality craftsmanship and attention to detail, <br>
                        we set out to create clothing that stands the test of time. <br>
                    </p>
                    <button id="btn-aboutus">Learn More.</button>
                </div>
            </div>
        </div>
    </section>


    <!-- Categories -->
    <section id="categories">
        <div>
            <h1>Top Categories</h1>
        </div>
        <div class="wrapper">
            <div class="box-area">
                <div class="box">
                    <img src="./imgs/men.png" alt="">
                    <div class="overlay">
                        <h3>Men</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>

                <div class="box">
                    <img src="./imgs/women.png" alt="">
                    <div class="overlay">
                        <h3>Women</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>

                <div class="box">
                    <img src="./imgs/kid.PNG" alt="">
                    <div class="overlay">
                        <h3>Kid</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section id="products">
        <div>
            <h2>New Fashion Item</h2>
            <div class="prod-cat">
                <div class="All">
                    <h1>All</h1>
                </div>
                <div class="Clothing">
                    <h1>Clothing</h1>
                </div>
                <div class="Pants">
                    <h1>Pants</h1>
                </div>
                <div class="Accessories">
                    <h1>Accessories</h1>
                </div>
            </div>
            <hr>
            <div class="all-prod" id="prodSlider">
                <div class="prod">
                    <img src="./imgs/products/itemld1.png">
                    <div class="prod-info">
                        <h4 class="prod-title">Item 1</h4>
                        <p class="prod-price">₱ 800</p>
                        <a class="prod-btn" href="#">Add To Cart</a>
                    </div>
                </div>

                <div class="prod">
                    <img src="./imgs/products/itemld1.png">
                    <div class="prod-info">
                        <h4 class="prod-title">Item 1</h4>
                        <p class="prod-price">₱ 800</p>
                        <a class="prod-btn" href="#">Add To Cart</a>
                    </div>
                </div>

                <div class="prod">
                    <img src="./imgs/products/itemld1.png">
                    <div class="prod-info">
                        <h4 class="prod-title">Item 1</h4>
                        <p class="prod-price">₱ 800</p>
                        <a class="prod-btn" href="#">Add To Cart</a>
                    </div>
                </div>

                <div class="prod">
                    <img src="./imgs/products/itemld1.png">
                    <div class="prod-info">
                        <h4 class="prod-title">Item 1</h4>
                        <p class="prod-price">₱ 800</p>
                        <a class="prod-btn" href="#">Add To Cart</a>
                    </div>
                </div>

                <div class="prod">
                    <img src="./imgs/products/itemld1.png">
                    <div class="prod-info">
                        <h4 class="prod-title">Item 1</h4>
                        <p class="prod-price">₱ 800</p>
                        <a class="prod-btn" href="#">Add To Cart</a>
                    </div>
                </div>

                <div class="prod">
                    <img src="./imgs/products/itemld1.png">
                    <div class="prod-info">
                        <h4 class="prod-title">Item 1</h4>
                        <p class="prod-price">₱ 800</p>
                        <a class="prod-btn" href="#">Add To Cart</a>
                    </div>
                </div>

                <div class="prod">
                    <img src="./imgs/products/itemld1.png">
                    <div class="prod-info">
                        <h4 class="prod-title">Item 1</h4>
                        <p class="prod-price">₱ 800</p>
                        <a class="prod-btn" href="#">Add To Cart</a>
                    </div>
                </div>

                <div class="prod">
                    <img src="./imgs/products/itemld1.png">
                    <div class="prod-info">
                        <h4 class="prod-title">Item 1</h4>
                        <p class="prod-price">₱ 800</p>
                        <a class="prod-btn" href="#">Add To Cart</a>
                    </div>
                </div>

                <div class="prod">
                    <img src="./imgs/products/itemld1.png">
                    <div class="prod-info">
                        <h4 class="prod-title">Item 1</h4>
                        <p class="prod-price">₱ 800</p>
                        <a class="prod-btn" href="#">Add To Cart</a>
                    </div>
                </div>

                <div class="prod">
                    <img src="./imgs/products/itemld1.png">
                    <div class="prod-info">
                        <h4 class="prod-title">Item 1</h4>
                        <p class="prod-price">₱ 800</p>
                        <a class="prod-btn" href="#">Add To Cart</a>
                    </div>
                </div>
            </div>

            <div class="button-container">
                <button id="prevSlide" class="icon-button" aria-label="Previous">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                </button>
                <button id="nextSlide" class="icon-button" aria-label="Next">
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- contactus -->
    <section id="contactus">
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
    </section>



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

        document.getElementById('prevSlide').addEventListener('click', function() {
            $('#prodSlider').slick('slickPrev');
        });

        document.getElementById('nextSlide').addEventListener('click', function() {
            $('#prodSlider').slick('slickNext');
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
    </script>

</body>

</html>