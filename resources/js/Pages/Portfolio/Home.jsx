import React, { useEffect } from 'react';
import { Head } from '@inertiajs/react';

export default function Home() {
    // useEffect(() => {
    //     // Dynamically load CSS files
    //     const bootstrapCSS = document.createElement('link');
    //     bootstrapCSS.rel = 'stylesheet';
    //     bootstrapCSS.href = 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css';
    //     document.head.appendChild(bootstrapCSS);

    //     const fontAwesomeCSS = document.createElement('link');
    //     fontAwesomeCSS.rel = 'stylesheet';
    //     fontAwesomeCSS.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css';
    //     document.head.appendChild(fontAwesomeCSS);

    //     const aosCSS = document.createElement('link');
    //     aosCSS.rel = 'stylesheet';
    //     aosCSS.href = 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css';
    //     document.head.appendChild(aosCSS);

    //     const customCSS = document.createElement('link');
    //     customCSS.rel = 'stylesheet';
    //     customCSS.href = '/portfolio/assets/css/style.css';
    //     document.head.appendChild(customCSS);

    //     // Dynamically load JS files
    //     const bootstrapJS = document.createElement('script');
    //     bootstrapJS.src = 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js';
    //     bootstrapJS.async = true;
    //     document.body.appendChild(bootstrapJS);

    //     const aosJS = document.createElement('script');
    //     aosJS.src = 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js';
    //     aosJS.async = true;
    //     document.body.appendChild(aosJS);

    //     const customJS = document.createElement('script');
    //     customJS.src = '/portfolio/assets/js/main.js';
    //     customJS.async = true;
    //     document.body.appendChild(customJS);

    //     return () => {
    //         document.head.removeChild(bootstrapCSS);
    //         document.head.removeChild(fontAwesomeCSS);
    //         document.head.removeChild(aosCSS);
    //         document.head.removeChild(customCSS);
    //         document.body.removeChild(bootstrapJS);
    //         document.body.removeChild(aosJS);
    //         document.body.removeChild(customJS);
    //     };
    // }, []);

    return (
        <>
            <Head title="Aadhar Gaur - Senior PHP Developer" />
            {/* External CSS/JS should be loaded globally via Vite or your main layout */}
            <nav className="navbar navbar-expand-lg fixed-top">
                <div className="container">
                    <a className="navbar-brand" href="#home">Aadhar Gaur</a>
                    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span className="navbar-toggler-icon"></span>
                    </button>
                    <div className="collapse navbar-collapse" id="navbarNav">
                        <ul className="navbar-nav ms-auto">
                            <li className="nav-item"><a className="nav-link" href="#home">Home</a></li>
                            <li className="nav-item"><a className="nav-link" href="#about">About</a></li>
                            <li className="nav-item"><a className="nav-link" href="#skills">Skills</a></li>
                            <li className="nav-item"><a className="nav-link" href="#experience">Experience</a></li>
                            <li className="nav-item"><a className="nav-link" href="#projects">Projects</a></li>
                            <li className="nav-item"><a className="nav-link" href="#contact">Contact</a></li>
                            <li className="nav-item"><a className="nav-link" href="#blog">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section id="home" className="hero">
                <div className="container">
                    <div className="row align-items-center">
                        <div className="col-lg-8 hero-content">
                            <h1>Aadhar Gaur</h1>
                            <p className="lead">Senior PHP Developer | Backend Specialist | Laravel &amp; Yii Expert</p>
                            <p className="mb-4">Results-driven developer with 10+ years of experience in backend development,
                                specializing in scalable web applications and RESTful API development.</p>
                            <div className="hero-buttons">
                                <a href="#contact" className="btn btn-light me-3">
                                    <i className="fas fa-envelope me-2"></i>Get In Touch
                                </a>
                                <a href="#projects" className="btn btn-outline-light">
                                    <i className="fas fa-code me-2"></i>View Projects
                                </a>
                            </div>
                        </div>
                        <div className="col-lg-4 text-center">
                            <div className="profile-img-container">
                                <img src="/portfolio/assets/img/profile/avatar-5.png" alt="Aadhar Gaur"
                                    className="profile-img img-fluid rounded-circle shadow" width="180" height="180" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about" className="section">
                <div className="container">
                    <h2 className="section-title" data-aos="fade-up">About Me</h2>
                    <div className="row">
                        <div className="col-lg-6" data-aos="fade-right">
                            <h3>Professional Summary</h3>
                            <p>Results-driven Senior PHP Developer with 10+ years of experience in backend development,
                                specializing in scalable web applications and RESTful API development. Proven expertise in PHP,
                                Laravel, Yii framework, and MySQL with a track record of successfully delivering 15+
                                enterprise-level projects.</p>
                            <p>Strong background in agile methodologies, code optimization, and cross-functional team
                                leadership.</p>
                        </div>
                        <div className="col-lg-6" data-aos="fade-left">
                            <h3>Key Achievements</h3>
                            <ul className="list-unstyled">
                                <li className="mb-3">
                                    <i className="fas fa-check-circle text-primary me-2"></i>
                                    Led development of 6-7 diverse Laravel projects simultaneously at RG InfoTech
                                </li>
                                <li className="mb-3">
                                    <i className="fas fa-check-circle text-primary me-2"></i>
                                    Engineered high-performance backend services for large-scale Vendor Management System
                                </li>
                                <li className="mb-3">
                                    <i className="fas fa-check-circle text-primary me-2"></i>
                                    Mentored 5+ junior developers and improved team productivity by 25%
                                </li>
                                <li className="mb-3">
                                    <i className="fas fa-check-circle text-primary me-2"></i>
                                    Successfully delivered 15+ enterprise-level projects
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section id="skills" className="section bg-light">
                <div className="container">
                    <h2 className="section-title" data-aos="fade-up">Technical Skills</h2>
                    <div className="row">
                        <div className="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div className="card">
                                <div className="card-header">
                                    <h5 className="mb-0"><i className="fas fa-code me-2"></i>Programming Languages</h5>
                                </div>
                                <div className="card-body">
                                    <div className="skill-item">PHP</div>
                                    <div className="skill-item">JavaScript</div>
                                    <div className="skill-item">HTML5</div>
                                    <div className="skill-item">CSS3</div>
                                    <div className="skill-item">SQL</div>
                                    <div className="skill-item">Java</div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div className="card">
                                <div className="card-header">
                                    <h5 className="mb-0"><i className="fas fa-layer-group me-2"></i>Frameworks &amp; Libraries</h5>
                                </div>
                                <div className="card-body">
                                    <div className="skill-item">Laravel</div>
                                    <div className="skill-item">Yii Framework</div>
                                    <div className="skill-item">CodeIgniter</div>
                                    <div className="skill-item">CakePHP</div>
                                    <div className="skill-item">jQuery</div>
                                    <div className="skill-item">Bootstrap</div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div className="card">
                                <div className="card-header">
                                    <h5 className="mb-0"><i className="fas fa-database me-2"></i>Databases &amp; Tools</h5>
                                </div>
                                <div className="card-body">
                                    <div className="skill-item">MySQL</div>
                                    <div className="skill-item">MongoDB</div>
                                    <div className="skill-item">RESTful APIs</div>
                                    <div className="skill-item">Git/GitHub</div>
                                    <div className="skill-item">WordPress</div>
                                    <div className="skill-item">MVC Architecture</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="cv-download" className="section" data-aos="fade-up">
                <div className="container">
                    <h2 className="section-title">Download My Resume</h2>
                    <div className="row justify-content-center text-center">
                        <div className="col-lg-8">
                            <p className="lead mb-4">
                                Access my full professional resume for a comprehensive overview of my experience, skills, and
                                qualifications.
                            </p>
                            <a href="/portfolio/assets/docs/Aadhar_Gaur_CV.pdf" download="Aadhar_Gaur_CV.pdf"
                                className="btn btn-lg btn-primary btn-theme">
                                <i className="fas fa-download me-2"></i> Download CV
                            </a>
                            <a href="/portfolio/assets/docs/Aadhar_Gaur_Projects.pdf" download="Aadhar_Gaur_Projects.pdf"
                                className="btn btn-lg btn-outline-primary btn-theme">
                                <i className="fas fa-file-pdf me-2"></i> Projects Lists
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="experience" className="section bg-light">
                <div className="container">
                    <h2 className="section-title" data-aos="fade-up">Professional Experience</h2>
                    <div className="timeline">
                        {[
                            {
                                title: "Senior PHP Developer",
                                company: "RG InfoTech (Recursive Global InfoTech Pvt. Ltd.)",
                                date: "Jan 2024 - Mar 2025",
                                location: "Jaipur, Rajasthan, India",
                                badges: ["PHP", "Laravel", "MySQL", "RESTful APIs"],
                                items: [
                                    "Led development of 6-7 concurrent Laravel projects, ensuring 100% on-time delivery",
                                    "Designed and implemented RESTful APIs for third-party service integration",
                                    "Implemented coding best practices and maintained 95% code quality standards",
                                    "Mentored 3 junior developers and improved team productivity"
                                ],
                                badgeClass: "bg-primary"
                            },
                            {
                                title: "Senior Software Engineer",
                                company: "SimplifyVMS",
                                date: "Jun 2022 - Dec 2023",
                                location: "Noida, Uttar Pradesh, India",
                                badges: ["PHP", "MySQL", "RESTful APIs", "Agile"],
                                items: [
                                    "Engineered backend services for large-scale Vendor Management System serving 10,000+ users",
                                    "Optimized database queries improving system performance by 40%",
                                    "Collaborated with frontend developers and QA teams for seamless integration",
                                    "Maintained 99.9% system uptime through comprehensive testing"
                                ],
                                badgeClass: "bg-secondary"
                            },
                            {
                                title: "Software Engineer III",
                                company: "Matellio Inc.",
                                date: "Nov 2021 - Jun 2022",
                                location: "Jaipur, Rajasthan, India",
                                badges: [],
                                items: [
                                    "Developed and maintained client-based applications using PHP",
                                    "Created and integrated APIs for seamless data exchange",
                                    "Successfully managed multiple projects with 100% deadline adherence"
                                ],
                                badgeClass: ""
                            },
                            {
                                title: "PHP Developer",
                                company: "The NineHertz",
                                date: "May 2019 - Nov 2020",
                                location: "Jaipur, Rajasthan, India",
                                badges: [],
                                items: [
                                    "Developed web applications using Yii 1 framework and CakePHP",
                                    "Contributed to both frontend and backend development",
                                    "Worked with MongoDB and relational databases"
                                ],
                                badgeClass: ""
                            }
                        ].map((exp, idx) => (
                            <div className="timeline-item" data-aos="fade-left" key={exp.title}>
                                <div className="card">
                                    <div className="card-body">
                                        <h5 className="card-title">{exp.title}</h5>
                                        <h6 className="text-muted">{exp.company} | {exp.date}</h6>
                                        <p className="text-muted mb-2"><i className="fas fa-map-marker-alt me-1"></i>{exp.location}</p>
                                        <ul>
                                            {exp.items.map((item, i) => <li key={i}>{item}</li>)}
                                        </ul>
                                        {exp.badges.length > 0 && (
                                            <div className="mt-3">
                                                {exp.badges.map((badge, i) => (
                                                    <span className={`badge ${exp.badgeClass} me-1`} key={badge}>{badge}</span>
                                                ))}
                                            </div>
                                        )}
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            <section id="projects" className="section">
                <div className="container">
                    <h2 className="section-title" data-aos="fade-up">Featured Projects</h2>
                    <div className="row">
                        {[
                            {
                                name: "Vendor Management System",
                                company: "SimplifyVMS",
                                description: "A comprehensive VMS serving 10,000+ concurrent users with optimized performance and 99.9% uptime.",
                                badges: ["Laravel", "REST APIs", "Mobile Backend"],
                                features: [
                                    "Mobile API development",
                                    "Cross-platform support",
                                    "Real-time data sync",
                                    "40% performance improvement",
                                    "Large-scale user management",
                                    "Real-time data processing"
                                ],
                                badgeClass: "bg-danger",
                                delay: 100
                            },
                            {
                                name: "HRMS System",
                                company: "RG InfoTech",
                                description: "Optimized and restructured HRMS code for enhanced performance and maintainability with custom modules.",
                                badges: ["Laravel", "MySQL", "UI/UX"],
                                features: [
                                    "Code optimization",
                                    "Custom module development",
                                    "UI enhancements"
                                ],
                                badgeClass: "bg-secondary",
                                delay: 200
                            },
                            {
                                name: "Gaming Platform",
                                company: "Gamepro11 & Vision11",
                                description: "Integrated third-party Evoplay services and implemented 2FA security with invoice generation.",
                                badges: ["Laravel", "Third-party APIs", "Security"],
                                features: [
                                    "API integration",
                                    "2FA implementation",
                                    "Payment processing"
                                ],
                                badgeClass: "bg-info",
                                delay: 300
                            },
                            {
                                name: "Medical Staff Recruitment",
                                company: "Appinop Technologies",
                                description: "Comprehensive web application for recruiting medical staff with job postings and applicant tracking.",
                                badges: ["PHP", "JavaScript", "MySQL"],
                                features: [
                                    "Applicant tracking",
                                    "Communication system",
                                    "Job management"
                                ],
                                badgeClass: "bg-success",
                                delay: 400
                            },
                            {
                                name: "Car Rental Management",
                                company: "Multiple Companies",
                                description: "Efficient car rental management system with vehicle reservations, returns, and customer management.",
                                badges: ["PHP", "CodeIgniter", "Bootstrap"],
                                features: [
                                    "Booking system",
                                    "Vehicle management",
                                    "Customer portal"
                                ],
                                badgeClass: "bg-warning",
                                delay: 500
                            },
                            {
                                name: "Mobile App APIs",
                                company: "Various Projects",
                                description: "Built RESTful APIs for mobile applications including React Native and iOS apps with Laravel backend.",
                                badges: ["PHP", "MySQL", "REST APIs"],
                                features: [
                                    "Authentication & security",
                                    "Push notifications",
                                    "App analytics"
                                ],
                                badgeClass: "bg-primary",
                                delay: 600
                            }
                        ].map((project, idx) => (
                            <div className="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay={project.delay} key={project.name}>
                                <div className="card h-100">
                                    <div className="card-header">
                                        <h5 className="mb-0">{project.name}</h5>
                                        <small>{project.company}</small>
                                    </div>
                                    <div className="card-body">
                                        <p>{project.description}</p>
                                        <div className="mb-3">
                                            {project.badges.map(badge => (
                                                <span className={`badge ${project.badgeClass} me-1`} key={badge}>{badge}</span>
                                            ))}
                                        </div>
                                        <ul className="list-unstyled small">
                                            {project.features.map(feature => (
                                                <li key={feature}><i className="fas fa-check text-success me-2"></i>{feature}</li>
                                            ))}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                    <div className="text-center mt-3" data-aos="fade-up" data-aos-delay="300">
                        <a href="projects.html" className="btn btn-secondary btn-lg btn-theme">View All Projects <i className="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </section>

            <section id="education" className="section bg-light">
                <div className="container">
                    <h2 className="section-title" data-aos="fade-up">Education &amp; Certifications</h2>
                    <div className="row">
                        <div className="col-lg-6" data-aos="fade-right">
                            <div className="card">
                                <div className="card-header">
                                    <h5 className="mb-0"><i className="fas fa-graduation-cap me-2"></i>Education</h5>
                                </div>
                                <div className="card-body">
                                    <div className="mb-4">
                                        <h6 className="fw-bold">Bachelor of Technology (B.Tech.) in Information Technology</h6>
                                        <p className="text-muted mb-1">Rajasthan Technical University, Kota</p>
                                        <small className="text-muted">2008 - 2012</small>
                                    </div>
                                    <div>
                                        <h6 className="fw-bold">Senior Secondary in Science and Mathematics</h6>
                                        <p className="text-muted mb-1">D.B.N. School, Ajmer</p>
                                        <small className="text-muted">2006 - 2008</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-6" data-aos="fade-left">
                            <div className="card">
                                <div className="card-header">
                                    <h5 className="mb-0"><i className="fas fa-certificate me-2"></i>Certifications</h5>
                                </div>
                                <div className="card-body">
                                    <ul className="list-unstyled">
                                        <li className="mb-2">
                                            <i className="fas fa-award text-primary me-2"></i>
                                            British Council English Score
                                        </li>
                                        <li className="mb-2">
                                            <i className="fas fa-award text-primary me-2"></i>
                                            Learn SQL Course
                                        </li>
                                        <li className="mb-2">
                                            <i className="fas fa-award text-primary me-2"></i>
                                            Learn Git Course
                                        </li>
                                        <li className="mb-2">
                                            <i className="fas fa-award text-primary me-2"></i>
                                            Learn Command Line Course
                                        </li>
                                        <li className="mb-2">
                                            <i className="fas fa-award text-primary me-2"></i>
                                            Learn Java Course
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="blog" className="section">
                <div className="container">
                    <h2 className="section-title text-center mb-5" data-aos="fade-up">Latest Blog Posts</h2>
                    <div className="row g-4 justify-content-center">
                        {[
                            {
                                image: "/portfolio/assets/img/blog-laravel-api.webp",
                                date: "May 25, 2024",
                                tag: "Laravel, API",
                                title: "Building RESTful APIs with Laravel: A Comprehensive Guide",
                                excerpt: "Dive into the world of Laravel API development. Learn how to structure your routes, controllers, and resources for clean and efficient APIs.",
                                link: "blog-detail.html",
                                badgeClass: "bg-primary"
                            },
                            {
                                image: "/portfolio/assets/img/blog-docker.webp",
                                date: "April 18, 2024",
                                tag: "Docker, DevOps",
                                title: "Demystifying Docker for PHP Developers: A Beginner's Guide",
                                excerpt: "Understand the basics of Docker and how it can revolutionize your PHP development workflow. From setup to deployment.",
                                link: "blog-detail.html",
                                badgeClass: "bg-info"
                            },
                            {
                                image: "/portfolio/assets/img/blog-eloquent.webp",
                                date: "March 10, 2024",
                                tag: "Laravel, Database",
                                title: "Eloquent Performance Tips: Speeding Up Your Laravel Queries",
                                excerpt: "Learn practical tips and tricks to optimize your Laravel Eloquent queries for better performance and faster application response times.",
                                link: "blog-detail.html",
                                badgeClass: "bg-danger"
                            }
                        ].map((blog, idx) => (
                            <div className="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay={idx * 100} key={blog.title}>
                                <article className="card blog-card h-100 shadow border-0 rounded-4 overflow-hidden">
                                    <div className="ratio ratio-4x3">
                                        <img src={blog.image} alt={blog.title} className="img-fluid object-fit-cover w-100 h-100" />
                                    </div>
                                    <div className="card-body d-flex flex-column">
                                        <div className="mb-2 small text-muted d-flex justify-content-between align-items-center">
                                            <span><i className="fas fa-calendar-alt me-1"></i> {blog.date}</span>
                                            <span className={`badge ${blog.badgeClass} bg-opacity-10 text-primary fw-normal px-2 py-1 rounded-pill`}>
                                                <i className="fas fa-tag me-1"></i>{blog.tag}
                                            </span>
                                        </div>
                                        <h3 className="card-title h5 mb-2">
                                            <a href={blog.link} className="stretched-link text-decoration-none text-dark">{blog.title}</a>
                                        </h3>
                                        <p className="card-text blog-excerpt mb-3 text-secondary">{blog.excerpt}</p>
                                        <div className="mt-auto">
                                            <a href={blog.link} className={`btn btn-outline-primary btn-sm rounded-pill px-3`}>Read More <i className="fas fa-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        ))}
                    </div>
                    <div className="text-center mt-5" data-aos="fade-up" data-aos-delay="300">
                        <a href="blog.html" className="btn btn-secondary btn-lg rounded-pill px-4 shadow-sm btn-theme">View All Posts <i className="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </section>

            <section id="contact" className="section bg-light">
                <div className="container">
                    <h2 className="section-title" data-aos="fade-up">Get In Touch</h2>
                    <div className="row">
                        <div className="col-lg-6" data-aos="fade-right">
                            <div className="contact-info">
                                <h4 className="mb-4">Contact Information</h4>
                                <div className="contact-item">
                                    <i className="fas fa-envelope"></i>
                                    <div>
                                        <h6 className="mb-0">Email</h6>
                                        <a href="mailto:aadhar41@gmail.com" className="text-decoration-none">aadhar41@gmail.com</a>
                                    </div>
                                </div>
                                <div className="contact-item">
                                    <i className="fas fa-phone"></i>
                                    <div>
                                        <h6 className="mb-0">Phone</h6>
                                        <a href="tel:+917737138843" className="text-decoration-none">+91-7737138843</a>
                                    </div>
                                </div>
                                <div className="contact-item">
                                    <i className="fas fa-map-marker-alt"></i>
                                    <div>
                                        <h6 className="mb-0">Location</h6>
                                        <p className="mb-0">Jaipur, Rajasthan, India</p>
                                    </div>
                                </div>
                                <div className="contact-item">
                                    <i className="fab fa-linkedin"></i>
                                    <div>
                                        <h6 className="mb-0">LinkedIn</h6>
                                        <a href="https://linkedin.com/in/aadhar-gaur" target="_blank" className="text-decoration-none">linkedin.com/in/aadhar-gaur</a>
                                    </div>
                                </div>
                                <div className="contact-item">
                                    <i className="fab fa-github"></i>
                                    <div>
                                        <h6>GitHub</h6>
                                        <a href="https://github.com/aadhar-gaur" target="_blank" rel="noopener noreferrer">github.com/aadhar-gaur</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-6" data-aos="fade-left">
                            <div className="card">
                                <div className="card-header">
                                    <h5 className="mb-0">Send a Message</h5>
                                </div>
                                <div className="card-body">
                                    <form id="contactForm">
                                        <div className="row">
                                            <div className="col-md-6 mb-3">
                                                <label htmlFor="firstName" className="form-label">First Name</label>
                                                <input type="text" className="form-control" id="firstName" required />
                                            </div>
                                            <div className="col-md-6 mb-3">
                                                <label htmlFor="lastName" className="form-label">Last Name</label>
                                                <input type="text" className="form-control" id="lastName" required />
                                            </div>
                                        </div>
                                        <div className="mb-3">
                                            <label htmlFor="email" className="form-label">Email</label>
                                            <input type="email" className="form-control" id="email" required />
                                        </div>
                                        <div className="mb-3">
                                            <label htmlFor="subject" className="form-label">Subject</label>
                                            <input type="text" className="form-control" id="subject" required />
                                        </div>
                                        <div className="mb-3">
                                            <label htmlFor="message" className="form-label">Message</label>
                                            <textarea className="form-control" id="message" rows="4" required></textarea>
                                        </div>
                                        <button type="submit" className="btn btn-primary btn-theme">
                                            <i className="fas fa-paper-plane me-2"></i>Send Message
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer className="footer bg-dark text-light pt-5 pb-3">
                <div className="container">
                    <div className="row align-items-center mb-4">
                        <div className="col-lg-6 mb-4 mb-lg-0">
                            <h5 className="fw-bold mb-2 text-primary">Aadhar Gaur</h5>
                            <p className="mb-0 text-secondary">Senior PHP Developer sharing knowledge and insights about web development.</p>
                        </div>
                        <div className="col-lg-6 text-lg-end">
                            <nav className="footer-nav mb-3 d-inline-flex flex-wrap gap-2 justify-content-lg-end justify-content-center">
                                <a href="index.html" className="footer-link px-3 py-1 rounded-pill text-light text-decoration-none border border-secondary border-opacity-25 transition-all" style={{ background: "rgba(255,255,255,0.03)" }}>Home</a>
                                <a href="about.html" className="footer-link px-3 py-1 rounded-pill text-light text-decoration-none border border-secondary border-opacity-25 transition-all" style={{ background: "rgba(255,255,255,0.03)" }}>About</a>
                                <a href="projects.html" className="footer-link px-3 py-1 rounded-pill text-light text-decoration-none border border-secondary border-opacity-25 transition-all" style={{ background: "rgba(255,255,255,0.03)" }}>Projects</a>
                                <a href="blog.html" className="footer-link px-3 py-1 rounded-pill text-light text-decoration-none border border-secondary border-opacity-25 transition-all" style={{ background: "rgba(255,255,255,0.03)" }}>Blog</a>
                                <a href="contact.html" className="footer-link px-3 py-1 rounded-pill text-light text-decoration-none border border-secondary border-opacity-25 transition-all" style={{ background: "rgba(255,255,255,0.03)" }}>Contact</a>
                            </nav>
                            <div className="social-links">
                                <a href="mailto:aadhar41@gmail.com" title="Email" className="btn btn-outline-light btn-sm rounded-circle me-2">
                                    <i className="fas fa-envelope"></i>
                                </a>
                                <a href="https://linkedin.com/in/aadhar-gaur" target="_blank" title="LinkedIn" className="btn btn-outline-light btn-sm rounded-circle me-2">
                                    <i className="fab fa-linkedin-in"></i>
                                </a>
                                <a href="tel:+917737138843" title="Phone" className="btn btn-outline-light btn-sm rounded-circle me-2">
                                    <i className="fas fa-phone"></i>
                                </a>
                                <a href="https://github.com/aadhar-gaur" target="_blank" title="GitHub" className="btn btn-outline-light btn-sm rounded-circle">
                                    <i className="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr className="border-secondary my-4" />
                    <div className="row">
                        <div className="col-12 text-center">
                            <p className="mb-0 small text-secondary">&copy; 2025 Aadhar Gaur. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>

            <button className="scroll-top" id="scrollTop">
                <i className="fas fa-arrow-up"></i>
            </button>
        </>
    );
}
