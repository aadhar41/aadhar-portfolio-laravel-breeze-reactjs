<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me - Aadhar Gaur</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --text-light: #7f8c8d;
            --bg-light: #f8f9fa;
            --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--primary-color);
            overflow-x: hidden;
            background-color: var(--bg-light);
        }

        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            padding: 1rem 0;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--secondary-color) !important;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link {
            font-weight: 500;
            color: var(--primary-color) !important;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem !important;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--bg-light) !important;
            background: var(--gradient);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            background: var(--gradient);
            color: var(--bg-light);
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="none"><path d="M0,0 L1000,0 L1000,80 Q500,120 0,80 Z" fill="rgba(255,255,255,0.1)"/></svg>');
            background-size: cover;
            background-position: bottom;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #fff, #f0f8ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero .lead {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        /* Section Styles */
        .section {
            padding: 80px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 3rem;
            color: var(--primary-color);
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--gradient);
            border-radius: 2px;
        }

        /* Contact Section Specifics */
        .contact-info-card {
            background: var(--bg-light);
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .contact-info-card:hover {
            transform: translateY(-5px);
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .contact-item i {
            width: 50px;
            height: 50px;
            background: var(--gradient);
            color: var(--bg-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 1.2rem;
            flex-shrink: 0;
            /* Prevent icon from shrinking */
        }

        .contact-item div {
            flex-grow: 1;
        }

        .contact-item h6 {
            margin-bottom: 0.3rem;
            font-weight: 600;
            color: var(--secondary-color);
            font-size: 1.1rem;
        }

        .contact-item p,
        .contact-item a {
            margin-bottom: 0;
            font-size: 1rem;
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-item a:hover {
            color: var(--secondary-color);
        }

        .contact-form-card {
            background: var(--bg-light);
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            height: 100%;
            transition: transform 0.3s ease;
        }

        .contact-form-card:hover {
            transform: translateY(-5px);
        }


        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #ced4da;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
            outline: 0;
        }

        .contact-form-card .btn-primary {
            background: var(--gradient);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .contact-form-card .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(118, 75, 162, 0.4);
        }

        /* Footer */
        .footer {
            background: var(--primary-color);
            color: var(--bg-light);
            padding: 3rem 0 2rem;
            margin-top: 4rem;
        }

        .social-links a {
            width: 50px;
            height: 50px;
            background: var(--gradient);
            color: white;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--gradient);
            color: var(--bg-light);
            transform: translateY(-3px);
        }

        /* Scroll to Top */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--gradient);
            color: var(--bg-light);
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .scroll-top.show {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            transform: translateY(-3px);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero .lead {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .contact-info-card,
            .contact-form-card {
                padding: 1.5rem;
                margin-bottom: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Aadhar Gaur</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.html">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center hero-content">
                    <h1>Get In Touch</h1>
                    <p class="lead">Have a project in mind or just want to say hello? Send me a message!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Content Section -->
    <section class="section pt-0 mt-4" id="contact-content">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="contact-info-card">
                        <h4 class="mb-4 text-center">Contact Information</h4>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h6>Email</h6>
                                <a href="mailto:aadhar41@gmail.com">aadhar41@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <h6>Phone</h6>
                                <a href="tel:+917737138843">+91 7737138843</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fab fa-linkedin-in"></i>
                            <div>
                                <h6>LinkedIn</h6>
                                <a href="https://linkedin.com/in/aadhar-gaur" target="_blank"
                                    rel="noopener noreferrer">linkedin.com/in/aadhar-gaur</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fab fa-github"></i>
                            <div>
                                <h6>GitHub</h6>
                                <a href="https://github.com/aadhar-gaur" target="_blank"
                                    rel="noopener noreferrer">github.com/aadhar-gaur</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h6>Location</h6>
                                <p>Jaipur, Rajasthan, India</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="contact-form-card">
                        <h4 class="mb-4 text-center">Send Me a Message</h4>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" required placeholder="John Doe">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" id="email" required
                                        placeholder="john.doe@example.com">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" required
                                    placeholder="Regarding a project opportunity...">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="message" rows="5" required
                                    placeholder="Type your message here..."></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane me-2"></i> Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-light pt-5 pb-3">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-2 text-primary">Aadhar Gaur</h5>
                    <p class="mb-0 text-secondary">Senior PHP Developer sharing knowledge and insights about web
                        development.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <nav
                        class="footer-nav mb-3 d-inline-flex flex-wrap gap-2 justify-content-lg-end justify-content-center">

                        <a href="index.html"
                            class="footer-link px-3 py-1 rounded-pill text-light text-decoration-none border border-secondary border-opacity-25 transition-all"
                            style="background:rgba(255,255,255,0.03);">Home</a>
                        <a href="about.html"
                            class="footer-link px-3 py-1 rounded-pill text-light text-decoration-none border border-secondary border-opacity-25 transition-all"
                            style="background:rgba(255,255,255,0.03);">About</a>
                        <a href="projects.html"
                            class="footer-link px-3 py-1 rounded-pill text-light text-decoration-none border border-secondary border-opacity-25 transition-all"
                            style="background:rgba(255,255,255,0.03);">Projects</a>
                        <a href="blog.html"
                            class="footer-link px-3 py-1 rounded-pill text-light text-decoration-none border border-secondary border-opacity-25 transition-all"
                            style="background:rgba(255,255,255,0.03);">Blog</a>
                        <a href="contact.html"
                            class="footer-link px-3 py-1 rounded-pill text-light text-decoration-none border border-secondary border-opacity-25 transition-all"
                            style="background:rgba(255,255,255,0.03);">Contact</a>
                    </nav>
                    <div class="social-links">
                        <a href="mailto:aadhar41@gmail.com" title="Email"
                            class="btn btn-outline-light btn-sm rounded-circle me-2">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="https://linkedin.com/in/aadhar-gaur" target="_blank" title="LinkedIn"
                            class="btn btn-outline-light btn-sm rounded-circle me-2">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="tel:+917737138843" title="Phone"
                            class="btn btn-outline-light btn-sm rounded-circle me-2">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="https://github.com/aadhar-gaur" target="_blank" title="GitHub"
                            class="btn btn-outline-light btn-sm rounded-circle">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0 small text-secondary">&copy; 2025 Aadhar Gaur. All rights reserved.</p>
                </div>
            </div>
        </div>

    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Scroll to top button functionality
        const scrollTopBtn = document.getElementById('scrollTop');
        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
            }
        });
        scrollTopBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Initialize AOS
        window.addEventListener('DOMContentLoaded', function () {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
        });

        // Basic Contact Form Submission (using mailto)
        // NOTE: For a real website, you would typically send this form data to a backend server.
        // This 'mailto' approach is for demonstration purposes in a static HTML environment.
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            if (name && email && subject && message) {
                const mailtoLink = `mailto:aadhar41@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent('Name: ' + name + '\nEmail: ' + email + '\n\nMessage:\n' + message)}`;

                window.location.href = mailtoLink; // Open default email client

                // Inform the user that their email client will open
                // Using a custom modal or message box is preferred over alert()
                // For this example, I'll use a simple alert as a placeholder.
                alert('Your email client will now open with your message pre-filled. Please click "Send" from your email application.');

                // Reset the form after submission
                this.reset();
            } else {
                alert('Please fill in all fields before sending the message.');
            }
        });
    </script>
</body>

</html>
