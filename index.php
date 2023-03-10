<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Products</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" style="">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem;">
        <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip"
            data-bs-placement="right" data-bs-original-title="Icon-only">
            <svg class="bi" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="visually-hidden">Icon-only</span>
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
                <a href="#" class="nav-link active py-3 border-bottom" aria-current="page" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                    <svg class="bi" width="24" height="24" role="img" aria-label="Home">
                        <use xlink:href="#home"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-original-title="Dashboard">
                    <svg class="bi" width="24" height="24" role="img" aria-label="Dashboard">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-original-title="Orders">
                    <svg class="bi" width="24" height="24" role="img" aria-label="Orders">
                        <use xlink:href="#table"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-original-title="Products">
                    <svg class="bi" width="24" height="24" role="img" aria-label="Products">
                        <use xlink:href="#grid"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-original-title="Customers">
                    <svg class="bi" width="24" height="24" role="img" aria-label="Customers">
                        <use xlink:href="#people-circle"></use>
                    </svg>
                </a>
            </li>
        </ul>
        <div class="dropdown border-top">
            <a href="#"
                class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle"
                id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>

</html>
