<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        nav {
            background: #343a40;
        }

        nav .nav-link {
            color: #fff;
        }

        section {
            padding: 80px 0;
        }

        .about,
        .portfolio,
        .contact {
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .section-title p {
            font-size: 16px;
            color: #666;
        }

        .about .content img {
            border-radius: 50%;
            width: 150px;
            /* Adjusted width */
            height: 150px;
            /* Adjusted height */
            object-fit: cover;
        }

        footer {
            background: #343a40;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            margin-top: auto;
        }

        .text-center {
            text-align: center;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-center {
            justify-content: center;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Me Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title text-center">
                <h2>About Me</h2>
                <p>Passionate In Full Stack Developer</p>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-4">
                    <img src="{{asset('img/Profile_Foto.jpg')}}" class="img-fluid w-50" alt="Profile Photo of Leonel Marcelino Agustav">
                </div>
                <div class="col-md-6">
                    <h3>Full Stack Developer</h3>
                    <p>Student In Bina Nusantara University</p>
                    <ul class="list-unstyled">
                        <li><strong>Nama:</strong> Leonel Marcelino Agustav</li>
                        <li><strong>No HP:</strong> 082141915618</li>
                        <li><strong>Jurusan:</strong> Computer Science</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="text-center">
                <h2>Deskripsi Diri</h2>
                <p>Mahasiswa Bina Nusantara University dengan jurusan computer science yang menempuh semester ke 4</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Leonel. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>