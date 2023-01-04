<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body class="d-flex flex-column min-vh-100">
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> --}}
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <span class="fs-4">Evoba</span>
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-dark">Food Bloggers</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Location</a></li>
                    <ul class="navbar-nav">
                        <li class="navbar-brand dropdown">
                            <a class="navbar-brand dropdown-toggle text-decoration-none px-2 link-dark" href="/" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown">
                                Kategori
                            </a>
                            <ul class="navbar-brand dropdown-menu aria-labelledby text-decoration-none">
                                <li><a class="dropdown-item rounded-2 px-2 link-dark" href="#">Chinese Food</a></li>
                                <li><a class="dropdown-item rounded-2 px-2 link-dark" href="#">Japanese Food</a></li>
                                <li><a class="dropdown-item rounded-2 px-2 link-dark" href="#">Indonesian Food</a></li>
                                <li><a class="dropdown-item rounded-2 px-2 link-dark" href="#">Western Food</a></li>
                            </ul>
                        </li>
                    </ul>
                </ul>
                <div class="btn-toolbar">
                    <form action="#">
                        <button type="submit" class="btn btn-link text-decoration-none">Login</button>
                    </form>
                    <form action="#">
                        <button type="submit" class="btn btn-link text-decoration-none">Register</button>
                    </form>
                </div>
            </header>
        </div>

        {{-- <div class="container">

            <a class="navbar-brand" href="#">Evoba</a>
            <a class="navbar-brand" href="#">Food Bloggers</a>
            <a class="navbar-brand" href="#">Location</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="navbar-brand dropdown">
                        <a class="navbar-brand dropdown-toggle " href="/" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="navbar-brand dropdown-menu aria-labelledby" id="navbarDropdownMenuLink d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px">
                            <li><a class="dropdown-item rounded-2" href="#">Chinese Food</a></li>
                            <li><a class="dropdown-item rounded-2" href="#">Japanese Food</a></li>
                            <li><a class="dropdown-item rounded-2" href="#">Indonesian Food</a></li>
                            <li><a class="dropdown-item rounded-2" href="#">Western Food</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="btn-toolbar">
                <form action="#">
                    <button type="submit" class="btn btn-link text-decoration-none">Login</button>
                </form>
                <form action="#">
                    <button type="submit" class="btn btn-link text-decoration-none">Register</button>
                </form>
            </div>
        </div> --}}
    {{-- </nav> --}}

    @yield('body')

    <br>
    <br>

    <footer class="bg-light navbar-light mt-auto">
        <p class="text-center text-muted">© Barbatos Shop</p>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

</html>



