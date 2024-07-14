<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- navbar part start -->
    <nav class="mb-5 navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">E-Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <ul>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- navbar part end -->

    @yield('content')

    <!-- product part start -->

    <div class="container mb-5">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card product-item" style="width:18rem;">
                    <img src="{{ asset('frontend_assets') }}/image/asad.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="mb-2 card-subtitle text-body-secondary">Camera</h6>
                        <h5 class="card-title">Sony Camera</h5>
                        <p class="card-text">10000 Taka</p>
                        <a href="" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card product-item" style="width:18rem;">
                    <img src="{{ asset('frontend_assets') }}/image/asad.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="mb-2 card-subtitle text-body-secondary">Camera</h6>
                        <h5 class="card-title">Sony Camera</h5>
                        <p class="card-text">10000 Taka</p>
                        <a href="" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card product-item" style="width:18rem;">
                    <img src="{{ asset('frontend_assets') }}/image/asad.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="mb-2 card-subtitle text-body-secondary">Camera</h6>
                        <h5 class="card-title">Sony Camera</h5>
                        <p class="card-text">10000 Taka</p>
                        <a href="" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card product-item" style="width:18rem;">
                    <img src="{{ asset('frontend_assets') }}/image/asad.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="mb-2 card-subtitle text-body-secondary">Camera</h6>
                        <h5 class="card-title">Sony Camera</h5>
                        <p class="card-text">10000 Taka</p>
                        <a href="" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- product part end -->

    <!-- Footer part start -->
    <div class="mt-auto footer bg-dark text-light">
        <div class="py-5 row d-flex">
            <div class="text-center col">
                <h5>E-Shop</h5>
                <p>Copyright © 2024 E-shopc., - All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer part end -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
