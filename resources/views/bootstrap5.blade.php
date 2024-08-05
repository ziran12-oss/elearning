<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2b2ee6;
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
        
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="{{ asset('1.png') }}" alt="logo" class="img-fluid" width= '60%' height= 'auto'>
           
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
                            <a href="{{ url('/home/')}}" class="btn btn-primary" type="submit">home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/friends/')}}" class="btn btn-primary" type="submit">friends</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Materi
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Triwulan 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="https://drive.google.com/file/u/0/d/1GxSt954-vJM3aXVfmrKXLUc0jUOhCxVf/view?usp=sharing/view/PVVETXhRVE1kYWIwNTY5MDM0YzE%3D&pli=1"> Word For Business</a></li>
                                        <li><a class="dropdown-item" href="https://drive.google.com/file/d/15-aNOeYCh6eWZAxn4l0gAphZsv6zLb2l/view">Excel For Business</a></li>
                                        <li><a class="dropdown-item" href="https://drive.google.com/file/d/1snv1mOEGCInrlYYuqU7aqQgrc2hPcZfm/view">PowerPoint For Business</a></li>
                                        <li><a class="dropdown-item" href="https://drive.google.com/file/d/1tVPYzRNPAm9bUtF4x_ZcmHYqt91gmUNz/view"> SOHO Networking</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Triwulan 2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="https://drive.google.com/file/d/1UhBlYaXSFp0y3ULkp5Hx6QbnTlVFmdj5/view">UI Ux Design</a></li>
                                        <li><a class="dropdown-item" href="https://drive.google.com/file/d/11y_MKron9xF6J6VVmBjNvboCwYgCiv7-/view">Aplikasi Web CMS</a></li>
                                        <li><a class="dropdown-item" href="https://drive.google.com/file/d/1NsBGzQemKNWxugkHGr61hcFkgqgviKpY/view">Web Programing</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Triwulan 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="https://drive.google.com/file/d/1YHOioE2XdiLVqWv6RW7raTYQtZylMP-j/view">Desain Grafis KIB</a></li>
                                        <li><a class="dropdown-item" href="https://drive.google.com/file/d/1C6uZf8Yrj2McG_WUgLv0BQlP9OFEXnf3/view">Mobile Programing</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Triwulan 4</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="https://drive.google.com/file/d/1C3bgMK0vT991PNHI7YKDBiZ2KqkTbbMo/view">Digital Marketing KIBD</a></li>
                                        <li><a class="dropdown-item" href="https://drive.google.com/file/d/1Kzw6OnEc4cotPhxjb7JCy7CgspZd1DGV/view">Content Creation</a></li>
                                        <li><a class="dropdown-item" href="https://drive.google.com/file/d/1D3df9l0pSSwAPnt_3uizgodciMijcyGI/view">Desain Sprint</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
<main class="container" 
    style="background-color: #ebb506">
    @yield('konten')
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
