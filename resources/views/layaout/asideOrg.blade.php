<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">
    <style>


    </style>
</head>
<body>
    <header class="navbar "style="background-color: #ff0000;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container-fluid mt-3">
        <div class="row">

            <aside class="col-md-2 shadow h-full">

                <h3>Aside Content</h3>
                <ul class="nav-links custom-links">
                    <!-- Statistiques -->
                    <li><a href="">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Événements</span>
                    </a></li>


                    <li><a href="">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Événements</span>
                    </a></li>


                    <li><a href="">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Événements</span>
                    </a></li>
                    <!-- Catégories -->
                    <li><a href="">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Catégories</span>
                    </a></li>

                    <!-- Réservation -->
                    <li><a href="">
                        <i class="uil uil-newspaper"></i>
                        <span class="link-name">Réservation</span>
                    </a></li>
                </ul>



            </aside>

            <!-- Content (70% width) -->
            <main class="col-md-9">
               @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
