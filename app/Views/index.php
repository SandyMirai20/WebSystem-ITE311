<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ITE311 GOMEZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEik9_T8r59F25K4qJS8VAbbKbH5MvEDvuzGQbCfKPrX5rbIauA0tI3qvNgkZRoWjQVfF5fy1H9nAhW_MsSQ2-Lc1dTOnkakv7NGb6TJhLDzdSaMnN5GWIOnqthFFMg6klioMmC7A3Uf92qi/s1600/12507352_1268775533136107_7154641655473723099_n.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
        }
        .content-overlay {
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .jumbotron-overlay {
            background-color: rgba(220, 53, 69, 0.7);
            border-radius: 10px;
        }
        .main-title {
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
        }
        .section-title {
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <!-- Navigation with Login/Register buttons on the right -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">
                <i class="fas fa-graduation-cap"></i> ITE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                    </li>
                </ul>
                <!-- Login and Register buttons on the right side -->
                <div class="d-flex">
                    <?php if (session()->get('isLoggedIn')): ?>
                        <div class="dropdown">
                            <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user"></i> <?= session()->get('name') ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= base_url('dashboard') ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url('logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <a href="<?= base_url('login') ?>" class="btn btn-outline-light me-2">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                        <a href="<?= base_url('register') ?>" class="btn btn-danger">
                            <i class="fas fa-user-plus"></i> Register
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="jumbotron jumbotron-overlay text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 main-title">Information Technology Education Program</h1>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron content-overlay p-5 rounded">
                    <h1 class="display-4 main-title">Welcome to ITE LMS </h1>
                    <p class="lead">Your digital classroom for courses, lessons, and quizzes.</p>
                    <hr class="my-4">
                    <p>Empowering ITE students with easy access to courses, lessons, and quizzes.</p>
                    <?php if (!session()->get('isLoggedIn')): ?>
                        <a class="btn btn-danger btn-lg" href="<?= base_url('register') ?>" role="button">
                            <i class="fas fa-rocket"></i> Get Started
                        </a>
                    <?php else: ?>
                        <a class="btn btn-success btn-lg" href="<?= base_url('dashboard') ?>" role="button">
                            <i class="fas fa-tachometer-alt"></i> Go to Dashboard
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card h-100 content-overlay">
                    <div class="card-body text-center">
                        <i class="fas fa-book fa-3x text-danger mb-3"></i>
                        <h5 class="card-title section-title">Courses</h5>
                        <p class="card-text">Access a wide variety of Information Technology courses designed for your learning journey.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 content-overlay">
                    <div class="card-body text-center">
                        <i class="fas fa-play-circle fa-3x text-danger mb-3"></i>
                        <h5 class="card-title section-title">Interactive Lessons</h5>
                        <p class="card-text">Engage with interactive lessons that make learning Information Technology fun and effective.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 content-overlay">
                    <div class="card-body text-center">
                        <i class="fas fa-question-circle fa-3x text-danger mb-3"></i>
                        <h5 class="card-title section-title">Quizzes & Tests</h5>
                        <p class="card-text">Test your knowledge with comprehensive quizzes and assessments.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-danger text-light mt-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>ITE</h5>
                    <p>Learning Management System for Information Technology Education</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; <?= date('Y') ?> ITE311 GOMEZ. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
                        
=======
<!doctype html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <nav>
        <a href="<?= base_url('index.php') ?>">Home</a> |
        <a href="<?= base_url('index.php/about') ?>">About</a> |
        <a href="<?= base_url('index.php/contact') ?>">Contact</a>
    </nav>

    <h1>Homepage</h1>
</body>
</html>
>>>>>>> 53f19cc5b3bf96b96cac056b0d7eebf4c08b344d
