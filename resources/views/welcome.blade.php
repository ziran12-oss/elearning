<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #ebb506;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #004085;
        }
        .navbar-nav .nav-link {
            font-weight: 500;
            color: #004085;
        }
        .navbar-nav .nav-link:hover {
            color: #ebb506;
        }
        .offcanvas-header {
            background-color: #004085;
            color: #ebb506;
        }
        .offcanvas-body {
            background-color: #ebb506;
        }
        .dropdown-submenu {
            position: relative;
        }
        .dropdown-submenu > .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
        .container {
            margin-top: 20px;
        }
        .custom-image {
            width: 100px;
            height: auto;
            /* Tambahkan gaya lain sesuai kebutuhan */
        }
        .section {
            padding: 50px 25px;
        }
        .welcome {
            background-color: #2b2ee6;
            color: white;
            padding: 50px 25px;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          
                <img src="{{ asset('1.png') }}" alt="logo" class="img-fluid" width= '50%' height= 'auto'>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profil Saya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Schedules</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Materi
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Triwulan 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Word Untuk Bisnis</a></li>
                                        <li><a class="dropdown-item" href="#">Excel Untuk Bisnis</a></li>
                                        <li><a class="dropdown-item" href="#">PowerPoint Untuk Bisnis</a></li>
                                        <li><a class="dropdown-item" href="#">Jaringan SOHO</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Triwulan 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Desain UI Ux</a></li>
                                        <li><a class="dropdown-item" href="#">Aplikasi Web CMS</a></li>
                                        <li><a class="dropdown-item" href="#">Pemrograman Web</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Triwulan 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Desain Grafis KIB</a></li>
                                        <li><a class="dropdown-item" href="#">Pemrograman Seluler</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Triwulan 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Pemasaran Digital KIBD</a></li>
                                        <li><a class="dropdown-item" href="#">Pembuatan Konten</a></li>
                                        <li><a class="dropdown-item" href="#">Desain Sprint</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<main class="container">
    <div class="welcome">
        <h1>Selamat Datang, [Nama Pengguna]</h1>
        <p>Senang melihat Anda kembali!</p>
    </div>

    <div class="section">
        <h2>Kursus Terbaru</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Word untuk Bisnis</h5>
                        <p class="card-text">Pelajari cara menggunakan Word untuk meningkatkan produktivitas bisnis Anda.</p>
                        <a href="#" class="btn btn-primary">Lanjutkan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Excel untuk Bisnis</h5>
                        <p class="card-text">Kuasai Excel untuk analisis data dan laporan bisnis yang lebih baik.</p>
                        <a href="#" class="btn btn-primary">Lanjutkan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Desain UI/UX</h5>
                        <p class="card-text">Belajar cara membuat antarmuka pengguna yang menarik dan mudah digunakan.</p>
                        <a href="#" class="btn btn-primary">Lanjutkan</a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.dropdown-submenu .dropdown-toggle').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.stopPropagation();
                event.preventDefault();
                var nextEl = element.nextElementSibling;
                if (nextEl && nextEl.classList.contains('show')) {
                    nextEl.classList.remove('show');
                } else {
                    var dropdownMenus = element.closest('.dropdown-menu').querySelectorAll('.show');
                    dropdownMenus.forEach(function(menu) {
                        menu.classList.remove('show');
                    });
                    nextEl.classList.add('show');
                }
            });
        });
    });
    
</script>
</body>
</html>
