<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Aadhar Gaur</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --text-light: #7f8c8d;
            --white: #f8f9fa;
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
            background-color: var(--white);
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
            color: var(--white) !important;
            background: var(--gradient);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            background: var(--gradient);
            color: var(--white);
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
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 5px;
            background: var(--gradient);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 5px;
        }

        /* Project Filters */
        .project-filters {
            text-align: center;
            margin-bottom: 3rem;
        }

        .project-filters .btn {
            background-color: var(--white);
            color: var(--primary-color);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 30px;
            padding: 10px 25px;
            margin: 5px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .project-filters .btn:hover,
        .project-filters .btn.active {
            background: var(--gradient);
            color: var(--white);
            border-color: transparent;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Project Card */
        .project-card {
            background: var(--white);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .project-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .project-image {
            width: 100%;
            height: 220px;
            overflow: hidden;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .project-card:hover .project-image img {
            transform: scale(1.05);
        }

        .project-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .project-category {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 10px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .project-title a {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s ease;
        }

        .project-title a:hover {
            color: var(--secondary-color);
        }

        .project-description {
            font-size: 1rem;
            color: var(--text-light);
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .project-tech-tags {
            margin-top: 15px;
            margin-bottom: 20px;
        }

        .project-tech-tags span {
            display: inline-block;
            background-color: var(--white);
            color: var(--primary-color);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            margin: 0 5px 8px 0;
            font-weight: 500;
        }

        .project-links {
            margin-top: auto;
            /* Pushes links to the bottom */
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .project-links a {
            display: inline-flex;
            align-items: center;
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .project-links a:hover {
            color: var(--primary-color);
            transform: translateX(5px);
        }

        .project-links a i {
            margin-right: 8px;
        }


        /* Pagination */
        .pagination {
            justify-content: center;
            margin-top: 4rem;
        }

        .page-item .page-link {
            background-color: var(--white);
            color: var(--primary-color);
            border: 1px solid rgba(0, 0, 0, 0.1);
            margin: 0 5px;
            border-radius: 8px;
            transition: all 0.3s ease;
            min-width: 40px;
            text-align: center;
        }

        .page-item.active .page-link,
        .page-item .page-link:hover {
            background: var(--gradient);
            color: var(--white);
            border-color: transparent;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .page-item.disabled .page-link {
            background-color: var(--white);
            color: var(--text-light);
            cursor: not-allowed;
        }


        /* Footer */
        .footer {
            background: var(--primary-color);
            color: var(--white);
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
            color: var(--white);
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

            .project-filters .btn {
                padding: 8px 18px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
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
                        <a class="nav-link active" href="projects.html">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center hero-content">
                    <h1>My Creative Projects</h1>
                    <p class="lead">A showcase of my full-stack development work, from backend systems to intuitive
                        user interfaces.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Explore My Work</h2>

            <div class="project-filters" data-aos="fade-up" data-aos-delay="100">
                <button class="btn active" data-filter="all">All</button>
                <button class="btn" data-filter="backend">Backend Development</button>
                <button class="btn" data-filter="api">API Development</button>
                <button class="btn" data-filter="fullstack">Fullstack Web App</button>
                <button class="btn" data-filter="mobile">Mobile Backend</button>
            </div>

            <div class="row g-4" id="project-grid">
            </div>

            <nav aria-label="Project Pagination" data-aos="fade-up" data-aos-delay="200">
                <ul class="pagination" id="pagination-container">
                </ul>
            </nav>

        </div>
    </section>

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

    <button class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        const projectData = [
            {
                id: 1,
                title: "Advanced E-commerce Backend System",
                category: "backend",
                description: "A robust e-commerce backend handling product catalogs, order management, payment gateways, and user authentication.",
                image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 220'><rect width='400' height='220' fill='%233498db'/><text x='50%' y='50%' font-family='Arial' font-size='30' fill='white' text-anchor='middle' dominant-baseline='middle'>E-commerce Backend</text></svg>",
                tech: ["Laravel", "MySQL", "Redis", "REST API"],
                liveLink: "#",
                githubLink: "#"
            },
            {
                id: 2,
                title: "Real-time Chat Application API",
                category: "api",
                description: "Developed a high-performance API and WebSocket server for a real-time chat application, supporting direct messages and group chats.",
                image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 220'><rect width='400' height='220' fill='%232ecc71'/><text x='50%' y='50%' font-family='Arial' font-size='30' fill='white' text-anchor='middle' dominant-baseline='middle'>Chat API</text></svg>",
                tech: ["PHP", "WebSockets", "Redis", "Node.js"],
                liveLink: "#",
                githubLink: "#"
            },
            {
                id: 3,
                title: "Project Management Dashboard",
                category: "fullstack",
                description: "A full-stack dashboard for managing projects, tasks, and team collaborations with a responsive UI.",
                image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 220'><rect width='400' height='220' fill='%239b59b6'/><text x='50%' y='50%' font-family='Arial' font-size='30' fill='white' text-anchor='middle' dominant-baseline='middle'>Project Dashboard</text></svg>",
                tech: ["Laravel", "Vue.js", "MySQL", "Bootstrap"],
                liveLink: "#",
                githubLink: "#"
            },
            {
                id: 4,
                title: "User Authentication & Authorization Module",
                category: "backend",
                description: "Built a secure and flexible module for user authentication (JWT) and role-based authorization for web applications.",
                image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 220'><rect width='400' height='220' fill='%23f1c40f'/><text x='50%' y='50%' font-family='Arial' font-size='30' fill='white' text-anchor='middle' dominant-baseline='middle'>Auth Module</text></svg>",
                tech: ["Laravel", "JWT", "OAuth2", "Passport"],
                liveLink: "#",
                githubLink: "#"
            },
            {
                id: 5,
                title: "Mobile App Backend for Fitness Tracker",
                category: "mobile",
                description: "Developed the backend API for a fitness tracking mobile application, managing user data, workout logs, and progress.",
                image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 220'><rect width='400' height='220' fill='%23e67e22'/><text x='50%' y='50%' font-family='Arial' font-size='30' fill='white' text-anchor='middle' dominant-baseline='middle'>Fitness Backend</text></svg>",
                tech: ["Laravel", "REST API", "PostgreSQL"],
                liveLink: "#",
                githubLink: "#"
            },
            {
                id: 6,
                title: "Content Management System (CMS)",
                category: "fullstack",
                description: "A custom CMS for managing website content, including articles, pages, and media, with an intuitive admin interface.",
                image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 220'><rect width='400' height='220' fill='%231abc9c'/><text x='50%' y='50%' font-family='Arial' font-size='30' fill='white' text-anchor='middle' dominant-baseline='middle'>Custom CMS</text></svg>",
                tech: ["PHP", "CodeIgniter", "jQuery", "MySQL"],
                liveLink: "#",
                githubLink: "#"
            },
            {
                id: 7,
                title: "Invoice Management System",
                category: "backend",
                description: "A system to generate, track, and manage invoices for small businesses, including client and product management.",
                image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 220'><rect width='400' height='220' fill='%23c0392b'/><text x='50%' y='50%' font-family='Arial' font-size='30' fill='white' text-anchor='middle' dominant-baseline='middle'>Invoice System</text></svg>",
                tech: ["Laravel", "Livewire", "MySQL"],
                liveLink: "#",
                githubLink: "#"
            },
            {
                id: 8,
                title: "Online Booking System API",
                category: "api",
                description: "API for a flexible online booking system, supporting reservations for services, appointments, and events.",
                image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 220'><rect width='400' height='220' fill='%238e44ad'/><text x='50%' y='50%' font-family='Arial' font-size='30' fill='white' text-anchor='middle' dominant-baseline='middle'>Booking API</text></svg>",
                tech: ["Laravel", "REST API", "Queues"],
                liveLink: "#",
                githubLink: "#"
            },
            {
                id: 9,
                title: "Blog Platform with Admin Panel",
                category: "fullstack",
                description: "A complete blogging platform with user authentication, post creation, comments, and an admin panel for content moderation.",
                image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 220'><rect width='400' height='220' fill='%23d35400'/><text x='50%' y='50%' font-family='Arial' font-size='30' fill='white' text-anchor='middle' dominant-baseline='middle'>Blog Platform</text></svg>",
                tech: ["Laravel", "Blade", "MySQL"],
                liveLink: "#",
                githubLink: "#"
            }
        ];

        const projectsContainer = document.getElementById('project-grid');
        const projectFilters = document.querySelector('.project-filters');
        const paginationContainer = document.getElementById('pagination-container');

        let currentFilter = 'all';
        let projectsPerPage = 6; // Number of projects to display per page
        let currentPage = 1;

        // Function to create a project card HTML
        function createProjectCard(project) {
            const techTagsHtml = project.tech.map(tech => `<span>${tech}</span>`).join('');
            return `
                <div class="col-lg-4 col-md-6 mb-4 project-item" data-category="${project.category}" data-aos="fade-up">
                    <article class="project-card">
                        <div class="project-image">
                            <img src="${project.image}" alt="${project.title}">
                        </div>
                        <div class="project-content">
                            <div class="project-category">${project.category.toUpperCase()}</div>
                            <h3 class="project-title"><a href="project-detail.html?id=${project.id}">${project.title}</a></h3>
                            <div class="project-description">${project.description}</div>
                            <div class="project-tech-tags">
                                ${techTagsHtml}
                            </div>
                            <div class="project-links">
                                <a href="${project.liveLink}" target="_blank" rel="noopener noreferrer"><i class="fas fa-external-link-alt me-1"></i> Live Demo</a>
                                <a href="${project.githubLink}" target="_blank" rel="noopener noreferrer"><i class="fab fa-github me-1"></i> GitHub</a>
                            </div>
                        </div>
                    </article>
                </div>
            `;
        }

        // Function to display projects based on filter and pagination
        function displayProjects() {
            projectsContainer.innerHTML = ''; // Clear existing projects

            const filteredProjects = projectData.filter(project => {
                return currentFilter === 'all' || project.category === currentFilter;
            });

            const totalPages = Math.ceil(filteredProjects.length / projectsPerPage);

            // Ensure currentPage is valid
            if (currentPage > totalPages && totalPages > 0) {
                currentPage = totalPages;
            } else if (currentPage < 1 && totalPages > 0) {
                currentPage = 1;
            } else if (totalPages === 0) {
                currentPage = 1; // No projects, reset to page 1
            }


            const startIndex = (currentPage - 1) * projectsPerPage;
            const endIndex = startIndex + projectsPerPage;
            const projectsToDisplay = filteredProjects.slice(startIndex, endIndex);

            if (projectsToDisplay.length === 0 && filteredProjects.length > 0) {
                // If current page is empty but there are filtered projects, go to previous page
                currentPage = Math.max(1, currentPage - 1);
                displayProjects(); // Re-call to display correct page
                return;
            } else if (projectsToDisplay.length === 0 && filteredProjects.length === 0) {
                projectsContainer.innerHTML = `
                    <div class="col-12 text-center py-5">
                        <p class="lead text-muted">No projects found for this category.</p>
                    </div>
                `;
            }


            projectsToDisplay.forEach(project => {
                projectsContainer.innerHTML += createProjectCard(project);
            });

            setupPagination(totalPages); // Setup pagination controls
            AOS.refresh(); // Refresh AOS to animate newly added elements

            // Scroll to the top of the project grid after updating content
            const projectsSection = document.getElementById('projects');
            if (projectsSection) {
                window.scrollTo({
                    top: projectsSection.offsetTop - 120, // Adjust for fixed header
                    behavior: 'smooth'
                });
            }
        }

        // Function to setup pagination controls
        function setupPagination(totalPages) {
            paginationContainer.innerHTML = ''; // Clear existing pagination

            if (totalPages <= 1) {
                paginationContainer.style.display = 'none'; // Hide pagination if only one page
                return;
            } else {
                paginationContainer.style.display = 'flex'; // Show pagination
            }

            // Previous button
            const prevItem = document.createElement('li');
            prevItem.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
            prevItem.innerHTML = `<a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>`;
            prevItem.addEventListener('click', (e) => {
                e.preventDefault();
                if (currentPage > 1) {
                    currentPage--;
                    displayProjects();
                }
            });
            paginationContainer.appendChild(prevItem);

            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                const pageItem = document.createElement('li');
                pageItem.className = `page-item ${i === currentPage ? 'active' : ''}`;
                pageItem.innerHTML = `<a class="page-link" href="#">${i}</a>`;
                pageItem.addEventListener('click', (e) => {
                    e.preventDefault();
                    currentPage = i;
                    displayProjects();
                });
                paginationContainer.appendChild(pageItem);
            }

            // Next button
            const nextItem = document.createElement('li');
            nextItem.className = `page-item ${currentPage === totalPages ? 'disabled' : ''}`;
            nextItem.innerHTML = `<a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>`;
            nextItem.addEventListener('click', (e) => {
                e.preventDefault();
                if (currentPage < totalPages) {
                    currentPage++;
                    displayProjects();
                }
            });
            paginationContainer.appendChild(nextItem);
        }

        // Event listeners for filter buttons
        projectFilters.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function () {
                projectFilters.querySelectorAll('.btn').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                currentFilter = this.dataset.filter;
                currentPage = 1; // Reset to first page on filter change
                displayProjects();
            });
        });

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

        // Initialize AOS and display projects on load
        window.addEventListener('DOMContentLoaded', function () {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
            displayProjects(); // Initial display of all projects
        });
    </script>
</body>

</html>
