<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="Tunahan Genç" name="author">

    <title>Home</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<!-- Navigation Start -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">E-Commerce Template</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-content">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                <!--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                -->
            </ul>

            <div class="authenticate-buttons d-grid gap-2 d-md-block">
                <a href="#" class="btn btn-warning btn-sm fw-bold" style="width: 80px;">Login</a>
            </div>
        </div>
    </div>
</nav><!-- Navigation End -->

<!-- Categories Start -->
<header class="categories-bar">
    <nav class="navbar navbar-expand-lg categories bg-light" style="background: #ced4da !important;">
        <div class="container">
            <a href="#" class="navbar-brand"></a>

            <button class="navbar-toggler collapsed float-end" type="button" data-bs-toggle="collapse"
                    data-bs-target="#categories-content">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="categories-content">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"--}}
{{--                           data-bs-auto-close="outside">Multilevel</a>--}}
{{--                        <ul class="dropdown-menu shadow">--}}
{{--                            <li><a class="dropdown-item" href="#">Gallery</a></li>--}}
{{--                            <li><a class="dropdown-item" href="blog.html">Blog</a></li>--}}
{{--                            <li class="dropstart">--}}
{{--                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Submenu--}}
{{--                                    Left</a>--}}
{{--                                <ul class="dropdown-menu shadow">--}}
{{--                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>--}}
{{--                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>--}}
{{--                                    <li><a class="dropdown-item" href=""> Third level 3</a></li>--}}
{{--                                    <li><a class="dropdown-item" href=""> Third level 4</a></li>--}}
{{--                                    <li><a class="dropdown-item" href=""> Third level 5</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="dropend">--}}
{{--                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"--}}
{{--                                   data-bs-auto-close="outside">Submenu Right</a>--}}
{{--                                <ul class="dropdown-menu shadow">--}}
{{--                                    <li><a class="dropdown-item" href=""> Second level 1</a></li>--}}
{{--                                    <li><a class="dropdown-item" href=""> Second level 2</a></li>--}}
{{--                                    <li><a class="dropdown-item" href=""> Second level 3</a></li>--}}
{{--                                    <li class="dropend">--}}
{{--                                        <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"--}}
{{--                                           data-bs-auto-close="outside">Let's go deeper!</a>--}}
{{--                                        <ul class="dropdown-menu dropdown-submenu shadow">--}}
{{--                                            <li><a class="dropdown-item" href=""> Third level 1</a></li>--}}
{{--                                            <li><a class="dropdown-item" href=""> Third level 2</a></li>--}}
{{--                                            <li><a class="dropdown-item" href=""> Third level 3</a></li>--}}
{{--                                            <li><a class="dropdown-item" href=""> Third level 4</a></li>--}}
{{--                                            <li class="dropend">--}}
{{--                                                <a href="#" class="dropdown-item dropdown-toggle"--}}
{{--                                                   data-bs-toggle="dropdown">Still don't have enough? Go much--}}
{{--                                                    deeper!</a>--}}
{{--                                                <ul class="dropdown-menu dropdown-submenu shadow">--}}
{{--                                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href=""> Third level 3</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href=""> Third level 4</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href=""> Third level 5</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a class="dropdown-item" href=""> Third level 5</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           data-bs-auto-close="outside">Megamenu</a>
                        <div class="dropdown-menu shadow">
                            <div class="mega-content px-md-4">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                            <h5>Service</h5>
                                            <div class="list-group">
                                                <a class="list-group-item" href="#">Accomodations</a>
                                                <a class="list-group-item" href="#">Terms & Conditions</a>
                                                <a class="list-group-item" href="#">Privacy</a>
                                                <a class="list-group-item" href="#">Lorum</a>
                                                <a class="list-group-item" href="#">Lorum</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                            <h5>Service</h5>
                                            <div class="list-group">
                                                <a class="list-group-item" href="#">Accomodations</a>
                                                <a class="list-group-item" href="#">Terms & Conditions</a>
                                                <a class="list-group-item" href="#">Privacy</a>
                                                <a class="list-group-item" href="#">Lorum</a>
                                                <a class="list-group-item" href="#">Lorum</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                            <h5>Service</h5>
                                            <div class="list-group">
                                                <a class="list-group-item" href="#">Accomodations</a>
                                                <a class="list-group-item" href="#">Terms & Conditions</a>
                                                <a class="list-group-item" href="#">Privacy</a>
                                                <a class="list-group-item" href="#">Lorum</a>
                                                <a class="list-group-item" href="#">Lorum</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 py-4 px-xl-5 px-4">
                                            <h5>Service</h5>
                                            <div class="list-group">
                                                <a class="list-group-item" href="#">Accomodations</a>
                                                <a class="list-group-item" href="#">Terms & Conditions</a>
                                                <a class="list-group-item" href="#">Privacy</a>
                                                <a class="list-group-item" href="#">Lorum</a>
                                                <a class="list-group-item" href="#">Lorum</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header><!-- Categories End -->

<!-- Campaigns Start -->
<div class="campaigns-area m-5 p-4 border">
    <div class="title">
        <h3>
            CAMPAIGNS
        </h3>
    </div>

    <div class="swiper mySwiper campaigns-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="campaign-card">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('storage/products/try-product-1.jpeg') }}" alt=".." class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                Campaigns 1
                            </h5>

                            <h6 class="card-subtitle mb-2 text-muted">
                                MAN CLOTHES
                            </h6>

                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad adipisci, alias architecto aspernatur deserunt distinctio eum ipsam iure molestias perferendis placeat quam recusandae rem temporibus vitae voluptatem voluptates? Officiis?
                            </p>

                            <a href="#" class="card-link">Show Products</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-button-next hidden"></div>
        <div class="swiper-button-prev hidden"></div>
        <div class="swiper-pagination"></div>
    </div>
</div><!-- Campaigns End -->

<!-- Footer Start -->
<footer class="text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">
                        E-Commerce Template
                    </h6>

                    <p>
                        Welcome to your own market. This is your private platform. This platform hosts your products and those of
                        other vendors you see as competitors. Will you be just a customer or will you be at the top?
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Web Links</h6>
                    <p>
                        <a href="#" class="text-white">Home</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">About Us</a>
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">
                        Useful links
                    </h6>
                    <p>
                        <a href="#" class="text-white">Login</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Popular Product List</a>
                    </p>
                    <p>
                        <a href="#" class="text-white">Help</a>
                    </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="fas fa-home mr-3"></i> İstanbul/Kağıthane, Yahya Kemal, TURKEY</p>
                    <p><i class="fas fa-envelope mr-3"></i> example@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 90 555 555 5555</p>
                    <p><i class="fas fa-phone mr-3"></i> + 90 555 555 5555</p>
                </div>
                <!-- Grid column -->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
            <div class="row d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                    <!-- Copyright -->
                    <div class="p-3">
                        © 2020 Copyright:
                        <a class="text-white" href="#">E-Commerce Template</a>
                    </div>
                    <!-- Copyright -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                    <!-- Facebook -->
                    <a
                        class="btn btn-outline-light btn-floating m-1"
                        role="button"
                    ><i class="fab fa-facebook-f"></i
                        ></a>

                    <!-- Twitter -->
                    <a
                        class="btn btn-outline-light btn-floating m-1"
                        role="button"
                    ><i class="fab fa-twitter"></i
                        ></a>

                    <!-- Google -->
                    <a
                        class="btn btn-outline-light btn-floating m-1"
                        role="button"
                    ><i class="fab fa-google"></i
                        ></a>

                    <!-- Instagram -->
                    <a
                        class="btn btn-outline-light btn-floating m-1"
                        role="button"
                    ><i class="fab fa-instagram"></i
                        ></a>
                </div>
                <!-- Grid column -->
            </div>
        </section>
        <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
</footer><!-- Footer End -->

<!-- JS -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(function () {
        let campaignsSwiperNextBtn = $('.campaigns-area .swiper-button-next');
        let campaignsSwiperPrevBtn = $('.campaigns-area .swiper-button-prev');

        setInterval(function () {
            let screenWidth = screen.width;

            if (screenWidth >= 1024) {
                campaignsSwiperNextBtn.removeClass('hidden')
                campaignsSwiperPrevBtn.removeClass('hidden')
            } else {
                campaignsSwiperNextBtn.addClass('hidden')
                campaignsSwiperPrevBtn.addClass('hidden')
            }
        }, 100);
    });

</script>
</body>
</html>
