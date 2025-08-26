<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - ITE311 GOMEZ</title>
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
                        <a class="nav-link" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('contact') ?>">Contact</a>
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
                        <a href="<?= base_url('register') ?>" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i> Register
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <!-- Page Header -->
        <div class="row">
            <div class="col-12">
                <div class="bg-danger text-white p-5 rounded mb-4">
                    <h1 class="display-4 mb-3 main-title"><i class="fas fa-envelope"></i> Contact Us</h1>
                    <p class="lead mb-0">Have a question or feedback? Reach out to us</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm content-overlay">
                    <div class="card-body p-5">
                        <h3 class="text-danger mb-4 section-title">Send a Message</h3>
                        
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                        </form>
                        
                        <hr class="my-4">
                        
                        <div class="row text-center">
                            <div class="col-md-4">
                                <i class="fas fa-envelope fa-2x text-danger mb-2"></i>
                                <p class="mb-0">Itee.edu.ph</p>
                            </div>
                            <div class="col-md-4">
                                <i class="fas fa-phone fa-2x text-danger mb-2"></i>
                                <p class="mb-0">+63 (98) 141-7869</p>
                            </div>
                            <div class="col-md-4">
                                <i class="fas fa-map-marker-alt fa-2x text-danger mb-2"></i>
                                <p class="mb-0">IT Department, Ramon Magsaysay Memorial College</p>
                            </div>
                        </div>
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
