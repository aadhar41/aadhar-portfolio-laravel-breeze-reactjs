// Blog page JS logic

// Sample blog data
const blogPosts = [
    {
        id: 1,
        title: "Advanced Laravel Performance Optimization Techniques",
        excerpt: "Discover powerful methods to boost your Laravel application's performance, from database optimization to caching strategies.",
        category: "laravel",
        date: "2025-06-08",
        readTime: "8 min read",
        image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23667eea'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='24' font-family='Arial'>Laravel</text></svg>"
    },
    {
        id: 2,
        title: "Building Scalable RESTful APIs with PHP",
        excerpt: "Learn best practices for creating robust and scalable APIs that can handle thousands of requests efficiently.",
        category: "api",
        date: "2025-06-05",
        readTime: "12 min read",
        image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23764ba2'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='24' font-family='Arial'>API</text></svg>"
    },
    {
        id: 3,
        title: "MySQL Query Optimization: From Slow to Lightning Fast",
        excerpt: "Transform your slow database queries into high-performance operations with these proven optimization strategies.",
        category: "database",
        date: "2025-06-03",
        readTime: "10 min read",
        image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23e74c3c'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='20' font-family='Arial'>MySQL</text></svg>"
    },
    {
        id: 4,
        title: "PHP 8.3 New Features Every Developer Should Know",
        excerpt: "Explore the latest PHP 8.3 features including readonly classes, new array functions, and performance improvements.",
        category: "php",
        date: "2025-06-01",
        readTime: "6 min read",
        image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23667eea'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='24' font-family='Arial'>PHP 8.3</text></svg>"
    },
    {
        id: 5,
        title: "Laravel Livewire: Building Dynamic UIs Without JavaScript",
        excerpt: "Create interactive, dynamic user interfaces using Laravel Livewire without writing a single line of JavaScript.",
        category: "laravel",
        date: "2025-05-29",
        readTime: "15 min read",
        image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23764ba2'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='20' font-family='Arial'>Livewire</text></svg>"
    },
    {
        id: 6,
        title: "Top 10 PHP Security Best Practices for 2025",
        excerpt: "Essential security practices every PHP developer must implement to protect their applications from common vulnerabilities.",
        category: "tips",
        date: "2025-05-27",
        readTime: "9 min read",
        image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect width='400' height='200' fill='%233498db'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='20' font-family='Arial'>Security</text></svg>"
    },
    {
        id: 7,
        title: "Creating Custom Artisan Commands in Laravel",
        excerpt: "Step-by-step tutorial on building powerful custom Artisan commands to automate your Laravel development workflow.",
        category: "tutorial",
        date: "2025-05-25",
        readTime: "11 min read",
        image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23e67e22'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='20' font-family='Arial'>Artisan</text></svg>"
    },
    {
        id: 8,
        title: "Docker for PHP Developers: Complete Setup Guide",
        excerpt: "Learn how to containerize your PHP applications with Docker for consistent development and deployment environments.",
        category: "tutorial",
        date: "2025-05-23",
        readTime: "13 min read",
        image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect width='400' height='200' fill='%232c3e50'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='20' font-family='Arial'>Docker</text></svg>"
    },
    {
        id: 9,
        title: "Advanced PHP Design Patterns in Real-World Applications",
        excerpt: "Implement sophisticated design patterns in PHP to create maintainable, scalable, and robust applications.",
        category: "php",
        date: "2025-05-21",
        readTime: "14 min read",
        image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23667eea'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='18' font-family='Arial'>Patterns</text></svg>"
    },
    {
        id: 10,
        title: "GraphQL vs REST: When to Choose What",
        excerpt: "Compare GraphQL and REST APIs, understand their strengths and weaknesses, and learn when to use each approach.",
        category: "api",
        date: "2025-05-19",
        readTime: "7 min read",
        image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23764ba2'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='20' font-family='Arial'>GraphQL</text></svg>"
    },
    {
        id: 11,
        title: "Implementing Redis Caching in Laravel Applications",
        excerpt: "Boost your Laravel app performance with Redis caching strategies, from basic setup to advanced implementation techniques.",
        category: "laravel",
        date: "2025-05-17",
        readTime: "10 min read",
        image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23e74c3c'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='24' font-family='Arial'>Redis</text></svg>"
    },
    {
        id: 12,
        title: "Database Migration Strategies for Large Applications",
        excerpt: "Learn effective database migration strategies for large-scale applications without downtime or data loss.",
        category: "database",
        date: "2025-05-15",
        readTime: "12 min read",
        image: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'><rect width='400' height='200' fill='%233498db'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='18' font-family='Arial'>Migration</text></svg>"
    }
];

// Global variables
let filteredPosts = [...blogPosts];
let currentPage = 1;
const postsPerPage = 6;
let currentCategory = 'all';
let currentSearch = '';

// DOM elements
const searchInput = document.getElementById('searchInput');
const searchBtn = document.getElementById('searchBtn');
const filterTags = document.getElementById('filterTags');
const blogGrid = document.getElementById('blogGrid');
const loading = document.getElementById('loading');
const noResults = document.getElementById('noResults');
const paginationWrapper = document.getElementById('paginationWrapper');
const pagination = document.getElementById('pagination');
const scrollTopBtn = document.getElementById('scrollTop');

// Format date
function formatDate(dateString) {
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    return new Date(dateString).toLocaleDateString('en-US', options);
}

// Create blog card HTML
function createBlogCard(post) {
    return `
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <article class="blog-card">
                <div class="blog-image">
                    <img src="${post.image}" alt="${post.title}">
                    <span class="category-badge">${post.category.toUpperCase()}</span>
                </div>
                <div class="blog-content">
                    <h3 class="blog-title"><a href="blog-detail.html?id=${post.id}">${post.title}</a></h3> <div class="blog-excerpt">${post.excerpt}</div>
                    <div class="blog-meta">
                        <span class="blog-date"><i class="far fa-calendar-alt"></i> ${formatDate(post.date)}</span>
                        <span class="read-time"><i class="far fa-clock"></i> ${post.readTime}</span>
                    </div>
                </div>
            </article>
        </div>
    `;
}

// Render blog posts
function renderPosts() {
    loading.classList.remove('show');
    blogGrid.innerHTML = '';
    noResults.style.display = 'none';

    const start = (currentPage - 1) * postsPerPage;
    const end = start + postsPerPage;
    const postsToShow = filteredPosts.slice(start, end);

    if (postsToShow.length === 0) {
        noResults.style.display = 'block';
        paginationWrapper.style.display = 'none';
        return;
    }

    postsToShow.forEach(post => {
        blogGrid.innerHTML += createBlogCard(post);
    });

    paginationWrapper.style.display = filteredPosts.length > postsPerPage ? 'flex' : 'none';
    renderPagination();
    AOS.refresh();
}

// Render pagination
function renderPagination() {
    const totalPages = Math.ceil(filteredPosts.length / postsPerPage);
    pagination.innerHTML = '';

    if (totalPages <= 1) return;

    for (let i = 1; i <= totalPages; i++) {
        pagination.innerHTML += `
            <li class="page-item${i === currentPage ? ' active' : ''}">
                <a class="page-link" href="#">${i}</a>
            </li>
        `;
    }

    // Add click events
    document.querySelectorAll('#pagination .page-link').forEach((link, idx) => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            if (currentPage !== idx + 1) {
                currentPage = idx + 1;
                renderPosts();
                window.scrollTo({ top: blogGrid.offsetTop - 120, behavior: 'smooth' });
            }
        });
    });
}

// Filter posts
function filterPosts() {
    loading.classList.add('show');
    setTimeout(() => {
        filteredPosts = blogPosts.filter(post => {
            const matchesCategory = currentCategory === 'all' || post.category === currentCategory;
            const matchesSearch = post.title.toLowerCase().includes(currentSearch) ||
                post.excerpt.toLowerCase().includes(currentSearch);
            return matchesCategory && matchesSearch;
        });
        currentPage = 1;
        renderPosts();
    }, 300);
}

// Search events
searchInput.addEventListener('input', function () {
    currentSearch = this.value.trim().toLowerCase();
    filterPosts();
});
searchBtn.addEventListener('click', function () {
    currentSearch = searchInput.value.trim().toLowerCase();
    filterPosts();
});

// Filter tag events
filterTags.querySelectorAll('.filter-tag').forEach(tag => {
    tag.addEventListener('click', function () {
        filterTags.querySelectorAll('.filter-tag').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
        currentCategory = this.dataset.category;
        filterPosts();
    });
});

// Scroll to top button
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

// Init AOS and render posts on load
window.addEventListener('DOMContentLoaded', function () {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });
    filterPosts();
});