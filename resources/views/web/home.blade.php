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
    <style>
        .categories-bar .navbar-nav .nav-item {
            margin: 0 10px;
        }

        .categories-bar .navbar-nav .nav-link {
            font-size: 16px;
            font-weight: 400;
            display: inline-block;
        }

        .categories-bar .dropdown-menu .dropdown-item {
            margin-bottom: 10px;
        }

        .categories-bar .dropdown-menu .dropdown-item:hover {
            background-color: #212529;
            color: #fff;
        }

        .categories-bar .dropdown-mega .dropdown-menu {
            width: 100%;
        }

        .categories-bar .dropdown-mega h5 {
            padding-bottom: 12px;
            border-bottom: 1px solid rgba(0, 0, 0, .125);
            margin: 0;
        }

        .categories-bar .list-group-item {
            font-size: 16px;
            color: #3F3B51;
            border: 0;
            border-bottom: 1px solid rgba(0, 0, 0, .125);
            padding: 12px 0;
            transition: 300ms all;
        }

        .categories-bar .list-group-item:hover {
            color: #ffc107;
        }

        /* Responsive */
        @media(max-width: 991.5px) {
            .categories-bar .navbar-brand {
                font-size: 30px
            }

            .categories-bar .navbar-nav .nav-item {
                margin: 5px 10px;
            }
        }
    </style>
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
    <nav class="navbar navbar-expand-lg categories bg-light">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-content">
                <i class="fas fa-stream text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           data-bs-auto-close="outside">Multilevel</a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="#">Gallery</a></li>
                            <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                            <li class="dropstart">
                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Submenu
                                    Left</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 3</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 4</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 5</a></li>
                                </ul>
                            </li>
                            <li class="dropend">
                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                   data-bs-auto-close="outside">Submenu Right</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href=""> Second level 1</a></li>
                                    <li><a class="dropdown-item" href=""> Second level 2</a></li>
                                    <li><a class="dropdown-item" href=""> Second level 3</a></li>
                                    <li class="dropend">
                                        <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                           data-bs-auto-close="outside">Let's go deeper!</a>
                                        <ul class="dropdown-menu dropdown-submenu shadow">
                                            <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                            <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                            <li><a class="dropdown-item" href=""> Third level 3</a></li>
                                            <li><a class="dropdown-item" href=""> Third level 4</a></li>
                                            <li class="dropend">
                                                <a href="#" class="dropdown-item dropdown-toggle"
                                                   data-bs-toggle="dropdown">Still don't have enough? Go much
                                                    deeper!</a>
                                                <ul class="dropdown-menu dropdown-submenu shadow">
                                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                                    <li><a class="dropdown-item" href=""> Third level 3</a></li>
                                                    <li><a class="dropdown-item" href=""> Third level 4</a></li>
                                                    <li><a class="dropdown-item" href=""> Third level 5</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href=""> Third level 5</a></li>
                                </ul>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
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
</header>

<!-- JS -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
