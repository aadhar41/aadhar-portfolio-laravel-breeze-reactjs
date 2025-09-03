# Aadhar Portfolio - Laravel Breeze + ReactJS

This project is a personal portfolio for Aadhar Gaur, built using Laravel Breeze for authentication and ReactJS for the frontend UI.

## Features

- Laravel Breeze authentication
- ReactJS SPA portfolio pages
- Inertia.js for seamless Laravel + React integration
- Bootstrap 5 and Font Awesome for styling
- AOS for scroll animations
- All assets and images stored in `public/portfolio/assets`

## Getting Started

1. **Clone the repository**
2. **Install dependencies**
   ```sh
   composer install
   npm install
   ```
3. **Copy `.env.example` to `.env` and update your environment variables**
4. **Run migrations**
   ```sh
   php artisan migrate
   ```
5. **Start the development servers**
   ```sh
   php artisan serve
   npm run dev
   ```
6. **Access the app**
   - Visit [http://localhost:8000](http://localhost:8000)

## Folder Structure

- `resources/js/Pages/Portfolio/` - ReactJS portfolio pages
- `public/portfolio/assets/` - Images, CSS, JS assets
- `resources/views/app.blade.php` - Main Blade layout with external CSS/JS includes

## External Libraries

- [Bootstrap 5](https://getbootstrap.com/)
- [Font Awesome 6](https://fontawesome.com/)
- [AOS Animate On Scroll](https://michalsnik.github.io/aos/)
- [Inertia.js](https://inertiajs.com/)

## Customization

- Update portfolio content in React components under `resources/js/Pages/Portfolio/`
- Add images and assets to `public/portfolio/assets/`

## Acknowledgements

- Inspired by the need for a personal branding platform
- Leveraged Laravel Breeze and ReactJS for modern web development practices
