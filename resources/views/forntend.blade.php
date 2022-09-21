<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-COMMERCE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{asset('assets/forntend/style.css') }}">
</head>

<body>
    <div class="container-fluid card">
        <header>
            <div class="row ">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 text-center">
                            <a class="navbar-brand" href="#"><img
                                    src="https://images-platform.99static.com//y0rb96b9CUsj6F8lqnkVOPlBuyY=/0x0:999x999/fit-in/500x500/99designs-contests-attachments/109/109048/attachment_109048124"
                                    height="60" width="150" alt=""></a>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <img class="img ms-md-5 ms-lg-0"
                                src="https://th.bing.com/th/id/OIP.GzdIdwawwaDLXahsPhPlLAHaDi?w=314&h=167&c=7&r=0&o=5&pid=1.7"
                                alt="" height="80px" width="400px">
                        </div>
                        <div class="col-lg-1 text-center">
                            <a href="#" class="btn btn-tag btn-rounded text-danger" data-mdb-close="true" style="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                    class="bi bi-bell pt-2 mt-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-lg-2 mb-2 mt-3 text-center">
                            <button class="btn " style="background-color: #993339;">
                                <a class="text-light fs-5" href="login.html"> Sign in</a>
                            </button>
                            <button class="btn" style="background-color: #cc0040;">
                                <a class="text-light fs-5" href="register.html">Sign Up</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar sticky-top" style="background-color:   #00e64d


;">
            <div class="container-fluid">
                <div class="dropdown">
                <button class="btn text-danger me-3" type="button" data-bs-toggle="dropdown" aria-expanded="false"> <h3>CATEGORY</h3> 
                    </button>
                    <ul class="dropdown-menu text-center">
                        <li><a class="dropdown-item" href="#">Grocery</a></li>
                        <li><a class="dropdown-item" href="#">Kitchen</a></li>
                        <li><a class="dropdown-item" href="#">Applicens</a></li>
                        <li><a class="dropdown-item" href="#">Toys & Games</a></li>
                        <li><a class="dropdown-item" href="#">Sports & Fittenss</a></li>
                        <li><a class="dropdown-item" href="#">Mobiles & Accessories</a></li>
                        <li><a class="dropdown-item" href="#">Books</a></li>
                        <li><a class="dropdown-item" href="#">Furniture</a></li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto p-2 mb-2 mb-lg-0">
                        <a href="{{ route('home')}}">
                            <li class="nav-item {{ Route::is('home') ?  'active' : ''}}">
                                <button class="btn me-3 {{ Route::is('home') ?  'active' : ''}}" type="button" data-bs-auto-close="true"
                                    aria-expanded="false">
                                    Home
                                </button>
                            </li>
                        </a>
                        <a href="{{ route('productlist')}}">
                            <li class="nav-item {{ Route::is('productlist') ?  'active' : ''}}">
                                <button class="btn me-3 {{ Route::is('productlist') ?  'active' : ''}}" type="button" data-bs-auto-close="true" aria-expanded="false">
                                    Product
                                </button>
                            </li>
                        </a>
                        <a href="{{ route('about')}}">
                            <li class="nav-item {{ Route::is('about') ?  'active' : ''}}">
                                <button class="btn me-3 {{ Route::is('about') ?  'active' : ''}}" type="button" data-bs-auto-close="true" aria-expanded="false">
                                    About
                                </button>
                            </li>
                        </a>
                        <a href="{{ route('contact')}}">
                            <li class="nav-item nav-item {{ Route::is('contact') ?  'active' : ''}}">
                                <button class="btn me-3 nav-item {{ Route::is('contact') ?  'active' : ''}}" type="button" data-bs-auto-close="true" aria-expanded="false">
                                    Contact
                                </button>
                            </li>
                        </a>
                
                        <li class="nav-item dropdown">
                            <button class="btn dropdown-toggle me-3" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                GALLERY
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item text-center" href="#">Action</a></li>
                                <li><a class="dropdown-item text-center" href="#">Another action</a></li>
                                <li><a class="dropdown-item text-center" href="#">Something else here</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                        <div class="input-group">
                            <input type="text" placeholder="Search ..." class="form-control">
                            <button class="btn btn-secondary " type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        @yield('content')
    <!-- ................................ -->
    <!-- fooder//////////////////////////////// -->
    <footer class="text-center text-lg-start bg-light text-muted col-sm-12">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center bg-secondary justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none text-light d-lg-block">
                <span>Cotruct With Us :</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div class="text-light">
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>

                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            shantobepary575@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 7XXXXXXX85</p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            Published by- Shanto Bepary
            <a class="text-reset fw-bold" href="#">sbrs.com.bd</a>
        </div>
        <!-- Copyright -->
    </footer>
    </div>


    <!-- modal......................... -->
    ...

    </div>

    <!-- Footer -->

    <!-- Footer -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
        integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>