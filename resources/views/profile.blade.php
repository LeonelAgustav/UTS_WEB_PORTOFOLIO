<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Creative Designer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e54c8;
            --secondary-color: #8f94fb;
            --dark-color: #333;
            --light-color: #f9f9f9;
            --text-color: #444;
            --white: #fff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--light-color);
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        header.scrolled {
            background: var(--white);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            color: var(--white);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        header.scrolled .logo {
            color: var(--primary-color);
        }

        .menu-btn {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: var(--white);
            transition: color 0.3s ease;
        }

        header.scrolled .menu-btn {
            color: var(--primary-color);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            padding: 8px 12px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        header.scrolled .nav-links a {
            color: var(--dark-color);
        }

        .nav-links a:hover,
        .nav-links a.active {
            background: var(--white);
            color: var(--primary-color);
        }

        header.scrolled .nav-links a:hover,
        header.scrolled .nav-links a.active {
            background: var(--primary-color);
            color: var(--white);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url('/api/placeholder/1200/800');
            background-size: cover;
            background-position: center;
            opacity: 0.2;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            width: 100%;
            color: var(--white);
        }

        .hero h1 {
            font-size: 64px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.1;
        }

        .hero p {
            font-size: 18px;
            max-width: 600px;
            margin-bottom: 30px;
        }

        .cta-btn {
            display: inline-block;
            background-color: var(--white);
            color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .cta-btn:hover {
            background-color: transparent;
            color: var(--white);
            border: 2px solid var(--white);
            transform: translateY(-3px);
        }

        .social-icons {
            margin-top: 30px;
        }

        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            color: var(--white);
            margin-right: 15px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background: var(--white);
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        /* About Section */
        section {
            padding: 100px 0;
        }

        section:nth-child(even) {
            background-color: var(--white);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 36px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 3px;
            background: var(--primary-color);
        }

        .section-title p {
            font-size: 16px;
            color: #777;
            max-width: 700px;
            margin: 0 auto;
        }

        .about-content {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 50px;
        }

        .about-img {
            flex: 1;
            min-width: 300px;
            position: relative;
        }

        .about-img img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .about-img::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            border: 5px solid var(--primary-color);
            border-radius: 10px;
            top: 20px;
            left: 20px;
            z-index: -1;
        }

        .about-text {
            flex: 1;
            min-width: 300px;
        }

        .about-text h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .about-text p {
            margin-bottom: 25px;
        }

        .info-list {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 30px;
        }

        .info-column {
            flex: 1;
            min-width: 250px;
        }

        .info-item {
            margin-bottom: 15px;
            display: flex;
        }

        .info-item strong {
            min-width: 120px;
            display: inline-block;
            color: var(--dark-color);
        }

        /* Skills */
        .skills {
            margin-top: 40px;
        }

        .skill-item {
            margin-bottom: 20px;
        }

        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .skill-bar {
            height: 10px;
            background: #e9ecef;
            border-radius: 5px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border-radius: 5px;
            transition: width 1.5s ease;
        }

        /* Portfolio Section */
        .portfolio-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .filter-btn {
            padding: 8px 20px;
            margin: 5px;
            background: none;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            font-weight: 600;
            cursor: pointer;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: var(--primary-color);
            color: var(--white);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .portfolio-item {
            overflow: hidden;
            border-radius: 10px;
            position: relative;
            height: 250px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .portfolio-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .portfolio-item:hover .portfolio-img {
            transform: scale(1.1);
        }

        .portfolio-info {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .portfolio-item:hover .portfolio-info {
            opacity: 1;
        }

        .portfolio-title {
            color: var(--white);
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .portfolio-category {
            color: var(--secondary-color);
            font-size: 14px;
            margin-bottom: 20px;
        }

        .portfolio-links a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--white);
            color: var(--primary-color);
            margin: 0 5px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .portfolio-links a:hover {
            background: var(--primary-color);
            color: var(--white);
        }

        /* Footer */
        footer {
            background: var(--dark-color);
            color: var(--white);
            padding: 60px 0 20px;
            text-align: center;
        }

        .footer-content {
            max-width: 600px;
            margin: 0 auto;
            margin-bottom: 40px;
        }

        .footer-logo {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--white);
        }

        .footer-text {
            margin-bottom: 30px;
            color: #bbb;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .footer-links a {
            color: #bbb;
            margin: 0 15px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--secondary-color);
        }

        .footer-social {
            margin-bottom: 30px;
        }

        .footer-social a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: var(--white);
            margin: 0 10px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-social a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        .copyright {
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 14px;
            color: #999;
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary-color);
            color: var(--white);
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate {
            opacity: 0;
        }

        .animate.fadeInUp {
            animation: fadeInUp 1s ease forwards;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .menu-btn {
                display: block;
            }

            .nav-links {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background: var(--white);
                flex-direction: column;
                align-items: center;
                justify-content: center;
                transition: all 0.3s ease;
            }

            .nav-links.active {
                left: 0;
            }

            .nav-links li {
                margin: 15px 0;
            }

            .nav-links a {
                color: var(--dark-color);
                font-size: 18px;
            }

            .hero h1 {
                font-size: 40px;
            }
        }
    </style>
</head>

<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Portfolio</a>
                <div class="menu-btn" id="menuBtn">
                    <i class="fas fa-bars"></i>
                </div>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content animate fadeInUp">
                <h1>Creative Designer & Developer</h1>
                <p>I craft beautiful, functional websites and applications that help businesses grow and succeed in the digital world.</p>
                <a href="#portfolio" class="cta-btn">View My Work</a>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>About Me</h2>
                <p>Here you'll find information about me, what I do, and my current skills in terms of programming and technology</p>
            </div>
            <div class="about-content">
                <div class="about-img animate fadeInUp">
                    <img src="/api/placeholder/500/500" alt="Profile Image">
                </div>
                <div class="about-text animate fadeInUp">
                    <h3>UI/UX Designer & Web Developer</h3>
                    <p>I'm a passionate designer and developer with expertise in creating user-friendly and visually appealing digital experiences. With a strong background in both design and development, I bridge the gap between aesthetics and functionality.</p>
                    <p>My goal is to deliver high-quality solutions that not only look great but also perform exceptionally well for my clients and their users.</p>
                    <div class="info-list">
                        <div class="info-column">
                            <div class="info-item">
                                <strong>Birthday:</strong> <span>1 May 1995</span>
                            </div>
                            <div class="info-item">
                                <strong>Website:</strong> <span>www.example.com</span>
                            </div>
                            <div class="info-item">
                                <strong>Phone:</strong> <span>+123 456 7890</span>
                            </div>
                            <div class="info-item">
                                <strong>City:</strong> <span>City Name, Country</span>
                            </div>
                        </div>
                        <div class="info-column">
                            <div class="info-item">
                                <strong>Age:</strong> <span>30</span>
                            </div>
                            <div class="info-item">
                                <strong>Degree:</strong> <span>Master's in Design</span>
                            </div>
                            <div class="info-item">
                                <strong>Email:</strong> <span>email@example.com</span>
                            </div>
                            <div class="info-item">
                                <strong>Freelance:</strong> <span>Available</span>
                            </div>
                        </div>
                    </div>
                    <a href="#contact" class="cta-btn">Contact Me</a>
                </div>
            </div>
            <div class="skills animate fadeInUp">
                <h3>My Skills</h3>
                <div class="skill-item">
                    <div class="skill-name">
                        <span>HTML & CSS</span>
                        <span>95%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 95%;"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">
                        <span>JavaScript</span>
                        <span>85%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 85%;"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">
                        <span>React</span>
                        <span>80%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 80%;"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">
                        <span>UI/UX Design</span>
                        <span>90%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 90%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>My Portfolio</h2>
                <p>Here are some of my most recent projects showcasing my skills and experience</p>
            </div>
            <div class="portfolio-filter">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="web">Web</button>
                <button class="filter-btn" data-filter="app">App</button>
                <button class="filter-btn" data-filter="design">Design</button>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item" data-category="web">
                    <img src="/api/placeholder/600/400" alt="Portfolio Item" class="portfolio-img">
                    <div class="portfolio-info">
                        <h3 class="portfolio-title">E-commerce Website</h3>
                        <p class="portfolio-category">Web Design</p>
                        <div class="portfolio-links">
                            <a href="#"><i class="fas fa-plus"></i></a>
                            <a href="#"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item" data-category="app">
                    <img src="/api/placeholder/600/400" alt="Portfolio Item" class="portfolio-img">
                    <div class="portfolio-info">
                        <h3 class="portfolio-title">Fitness App</h3>
                        <p class="portfolio-category">App Development</p>
                        <div class="portfolio-links">
                            <a href="#"><i class="fas fa-plus"></i></a>
                            <a href="#"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item" data-category="design">
                    <img src="/api/placeholder/600/400" alt="Portfolio Item" class="portfolio-img">
                    <div class="portfolio-info">
                        <h3 class="portfolio-title">Brand Identity</h3>
                        <p class="portfolio-category">Brand Design</p>
                        <div class="portfolio-links">
                            <a href="#"><i class="fas fa-plus"></i></a>
                            <a href="#"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item" data-category="web">
                    <img src="/api/placeholder/600/400" alt="Portfolio Item" class="portfolio-img">
                    <div class="portfolio-info">
                        <h3 class="portfolio-title">Corporate Website</h3>
                        <p class="portfolio-category">Web Development</p>
                        <div class="portfolio-links">
                            <a href="#"><i class="fas fa-plus"></i></a>
                            <a href="#"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item" data-category="app">
                    <img src="/api/placeholder/600/400" alt="Portfolio Item" class="portfolio-img">
                    <div class="portfolio-info">
                        <h3 class="portfolio-title">Travel App</h3>
                        <p class="portfolio-category">Mobile App</p>
                        <div class="portfolio-links">
                            <a href="#"><i class="fas fa-plus"></i></a>
                            <a href="#"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item" data-category="design">
                    <img src="/api/placeholder/600/400" alt="Portfolio Item" class="portfolio-img">
                    <div class="portfolio-info">
                        <h3 class="portfolio-title">UI Design Kit</h3>
                        <p class="portfolio-category">UI/UX Design</p>
                        <div class="portfolio-links">
                            <a href="#"><i class="fas fa-plus"></i></a>
                            <a href="#"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Me</h2>
                <p>Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your vision.</p>
            </div>
            <div class="contact-info">
                <div class="contact-card animate fadeInUp">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>My Address</h3>
                    <p>City Name, Country</p>
                </div>
                <div class="contact-card animate fadeInUp">
                    <i class="fas fa-envelope"></i>
                    <h3>Email Me</h3>
                    <p>email@example.com</p>
                </div>
                <div class="contact-card animate fadeInUp">
                    <i class="fas fa-phone-alt"></i>
                    <h3>Call Me</h3>
                    <p>+123 456 7890</p>
                </div>
            </div>
            <div class="contact-form animate fadeInUp">
                <form action="#" method="post">
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                    </div>