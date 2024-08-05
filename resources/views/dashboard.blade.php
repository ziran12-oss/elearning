<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #165aeb;
        }
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #9cb9df;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: rgb(19, 15, 233);
            display: block;
        }
        .sidebar a:hover {
            background-color: #f0a51c;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            min-height: 100vh;
        }
        .card {
            margin-bottom: 20px;
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        .navbar {
            background-color: #343a40;
            color: rgb(233, 146, 32);
        }
        .navbar .navbar-brand {
            color: rgb(211, 133, 16);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark">
        <span class="navbar-brand mb-0 h1">Dashboard</span>
    </nav>
    <div class="d-flex">
        <div class="sidebar">
            <h2 class="text-white text-center">Menu</h2>
            <a href="#home"><i class="fas fa-home"></i> Home</a>
            <a href="#services"><i class="fas fa-cogs"></i> Services</a>
            <a href="#clients"><i class="fas fa-users"></i> Clients</a>
            <a href="#contact"><i class="fas fa-envelope"></i> Contact</a>
        </div>
        <div class="content">
            <h2>Welcome to the Dashboard</h2>
            <p>This is a simple and modern dashboard layout with a sidebar and main content area.</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-line fa-3x"></i>
                            <h5 class="card-title mt-3">halaman 1</h5>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-user-friends fa-3x"></i>
                            <h5 class="card-title mt-3">halaman 2</h5>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-cogs fa-3x"></i>
                            <h5 class="card-title mt-3">halaman 3</h5>
                            <p class="card-text">Some example text.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="services">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <i class="fas fa-cloud fa-3x"></i>
                                            <h6 class="card-title mt-3">Cloud Services</h6>
                                            <p class="card-text">We provide scalable and secure cloud solutions for your business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <i class="fas fa-lock fa-3x"></i>
                                            <h6 class="card-title mt-3">Cybersecurity</h6>
                                            <p class="card-text">Protect your data with our advanced cybersecurity services.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <i class="fas fa-code fa-3x"></i>
                                            <h6 class="card-title mt-3">Software Development</h6>
                                            <p class="card-text">Get custom software solutions tailored to your business needs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
