<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leonel Marcelino Agustav - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        nav {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            top: 0;
            z-index: 1000;
        }

        nav .nav-link {
            color: #fff;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav .nav-link:hover {
            color: #9ec5fe;
        }

        section {
            padding: 80px 0;
        }

        .hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            color: white;
            padding: 120px 0 80px;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .about,
        .skills,
        .portfolio,
        .certificates {
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #1e3a8a;
        }

        .section-title p {
            font-size: 1.1rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: #3b82f6;
            margin: 20px auto 0;
            border-radius: 2px;
        }

        .about .content img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .skill-item {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .skill-item:hover {
            transform: translateY(-5px);
        }

        .skill-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #3b82f6;
        }

        .project-card {
            margin-bottom: 20px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            height: 180px;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-card .card-body {
            padding: 20px;
        }

        .certificate-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .certificate-card:hover {
            transform: translateY(-5px);
        }

        .certificate-card img {
            width: 100%;
            /* Pastikan gambar mengisi lebar kartu */
            height: auto;
            /* Biarkan tinggi mengikuti proporsi */
            object-fit: cover;
            /* Menjaga tampilan proporsional */
            border-radius: 8px;
            /* Opsional, untuk mempercantik tampilan */
        }

        .certificate-card .card-body {
            padding: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .social-links {
            margin-top: 20px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: #3b82f6;
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: #1e3a8a;
            transform: translateY(-3px);
        }

        footer {
            background: #1e3a8a;
            color: #fff;
            text-align: center;
            padding: 25px 0;
            margin-top: auto;
        }

        .progress {
            height: 10px;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #3b82f6;
            border-color: #3b82f6;
        }

        .btn-primary:hover {
            background-color: #1e3a8a;
            border-color: #1e3a8a;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container text-center">
            <h1>Leonel Marcelino Agustav</h1>
            <p class="lead">Full Stack Developer & Computer Science Student</p>
            <div class="mt-4">
                <a href="#certificates" class="btn btn-light btn-lg me-2">View My Certificates</a>
                <a href="#portfolio" class="btn btn-outline-light btn-lg">View My Work</a>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>About Me</h2>
                <p>Passionate Full Stack Developer</p>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img src="{{asset('img/Profile_Foto.jpg')}}" class="img-fluid w-75" alt="Profile Photo of Leonel Marcelino Agustav">
                    <div class="social-links mt-4">
                        <a href="https://www.linkedin.com/in/leonel-agustav-942a7b30a/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://github.com/LeonelAgustav" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.instagram.com/leonel_ma_20" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h3>Full Stack Developer</h3>
                    <p class="fst-italic">Computer Science Student at Bina Nusantara University</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-chevron-right text-primary me-2"></i> <strong>Name:</strong> Leonel Marcelino Agustav</li>
                                <li><i class="fas fa-chevron-right text-primary me-2"></i> <strong>Phone:</strong> 082141915618</li>
                                <li><i class="fas fa-chevron-right text-primary me-2"></i> <strong>City:</strong> Malang, Indonesia</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-chevron-right text-primary me-2"></i> <strong>Degree:</strong> Computer Science</li>
                                <li><i class="fas fa-chevron-right text-primary me-2"></i> <strong>Semester:</strong> 4</li>
                                <li><i class="fas fa-chevron-right text-primary me-2"></i> <strong>Email:</strong> leonel.agustav@binus.ac.id</li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-4">
                        I am a fourth-semester Computer Science student at Bina Nusantara University with a passion for full-stack development. My journey in technology began with a curiosity about how digital solutions can solve real-world problems, and I've been honing my skills in both front-end and back-end development ever since.
                    </p>
                    <p>
                        I enjoy building intuitive user interfaces and robust server-side applications. I'm constantly learning new technologies and methodologies to improve my craft and stay at the forefront of the ever-evolving tech landscape.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills bg-white">
        <div class="container">
            <div class="section-title">
                <h2>Skills</h2>
                <p>My Technical Expertise</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Frontend Development</h4>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>HTML/CSS</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>JavaScript</span>
                            <span>50%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Backend Development</h4>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>PHP</span>
                            <span>85%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>Golang</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>MySQL</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="skill-item text-center">
                        <div class="skill-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h5>Web Development</h5>
                        <p>Creating responsive and user-friendly web applications</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="skill-item text-center">
                        <div class="skill-icon">
                            <i class="bi bi-window"></i>
                        </div>
                        <h5>APP Development</h5>
                        <p>Creating mobile and desktop applications</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="skill-item text-center">
                        <div class="skill-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h5>Database Design</h5>
                        <p>Creating efficient database structures and queries</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="skill-item text-center">
                        <div class="skill-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h5>Network Architecture</h5>
                        <p>Designing and implementing network architectures</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio</h2>
                <p>My Recent Projects</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="project-card bg-light rounded p-4">
                        <h5 class="mb-2 text-center">E-Commerce Website</h5>
                        <p class="mb-4">A responsive and user-friendly e-commerce website with Cart</p>
                        <div class="mt-auto d-flex justify-content-between align-items-end">
                            <div>
                                <span class="badge bg-primary me-1">HTML/CSS</span>
                                <span class="badge bg-primary me-1">JS</span>
                                <span class="badge bg-secondary me-1">PHP</span>
                                <span class="badge bg-success">MySQL</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card bg-light rounded p-4">
                        <h5 class="mb-2 text-center">Task Management App</h5>
                        <p class="mb-4">A collaborative task manager with real-time updates</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-primary me-1">Vue.js</span>
                                <span class="badge bg-secondary me-1">Express</span>
                                <span class="badge bg-success">Socket.io</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card bg-light rounded p-4">
                        <h5 class="mb-2 text-center">Library Management System</h5>
                        <p class="mb-4">A library management system with user authentication, borrow and return features</p>
                        <div class="mt-auto d-flex justify-content-between align-items-end">
                            <div>
                                <span class="badge bg-primary me-1">Java</span>
                                <span class="badge bg-success">MySQL</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="certificates bg-white">
        <div class="container">
            <div class="section-title">
                <h2>Certificates</h2>
                <p>My Achievements and Qualifications</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="certificate-card">
                        <img src="{{asset('img/CCNA-_Introduction_to_Networks.jpg')}}" alt="Certificate 1">
                        <div class="card-body">
                            <div style="height: 5rem;">
                                <h5>CCNA: Introduction to Networks</h5>
                            </div>
                            <p><i class="fas fa-award text-warning me-2"></i>Cisco</p>
                            <p class="text-muted"><i class="far fa-calendar-alt me-2"></i>February 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="certificate-card">
                        <img src="{{asset('img/CCNA-_Switching-_Routing-_and_Wireless_Essentials.jpg')}}" alt="Certificate 2">
                        <div class="card-body">
                            <div style="height: 5rem;">
                                <h5>CCNA: Switching, Routing, and Wireless Essentials</h5>
                            </div>
                            <p><i class="fas fa-award text-warning me-2"></i>Cisco</p>
                            <p class="text-muted"><i class="far fa-calendar-alt me-2"></i>February 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="certificate-card">
                        <img src="{{asset('img/CCNA-_Enterprise_Networking-_Security-_and_Automation.jpg')}}" alt="Certificate 3">
                        <div class="card-body">
                            <div style="height: 5rem;">
                                <h5>CCNA: Enterprise Networking, Security, and Automation</h5>
                            </div>
                            <p><i class="fas fa-award text-warning me-2"></i>Cisco</p>
                            <p class="text-muted"><i class="far fa-calendar-alt me-2"></i>February 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="certificate-card">
                        <img src="{{asset('img/CyberOps_Associate.jpg')}}" alt="Certificate 4">
                        <div class="card-body">
                            <div style="height: 5rem;">
                                <h5>CyberOps Associate</h5>
                            </div>
                            <p><i class="fas fa-award text-warning me-2"></i>Cisco</p>
                            <p class="text-muted"><i class="far fa-calendar-alt me-2"></i>February 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="certificate-card">
                        <img src="{{asset('img/FEBIC.jpg')}}" alt="Certificate 4">
                        <div class="card-body">
                            <div style="height: 4rem;">
                                <h5>Suppoting Committee in FEB-UB International Conference</h5>
                            </div>
                            <p><i class="fas fa-award text-warning me-2"></i>AIBPM</p>
                            <p class="text-muted"><i class="far fa-calendar-alt me-2"></i>October 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Leonel Marcelino Agustav</h3>
                    <p>Full Stack Developer & Computer Science Student</p>
                    <div class="social-links justify-content-center">
                        <a href="https://www.linkedin.com/in/leonel-agustav-942a7b30a/" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://github.com/LeonelAgustav" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.instagram.com/leonel_ma_20" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <p class="mt-3">&copy; 2025 Leonel Marcelino Agustav. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('nav a, .hero a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId.startsWith('#')) {
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 70,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });

        // Active navigation highlighting
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;

                if (pageYOffset >= sectionTop - 150) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>