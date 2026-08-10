# Portfolio Website - Laravel

A modern, responsive portfolio website built with Laravel, Tailwind CSS, and a sleek design. Perfect for showcasing your projects, skills, and professional experience.

## Features

- 🎨 Beautiful, responsive design with Tailwind CSS
- 📁 Project showcase with featured projects
- 💼 Skills management with proficiency levels
- 👤 About section with social links
- 🔍 SEO-friendly
- 📱 Mobile responsive
- 🚀 Built with Laravel 13

## Project Structure

```
portfolio/
├── app/
│   ├── Models/
│   │   ├── Project.php
│   │   ├── Skill.php
│   │   └── About.php
│   └── Http/
│       └── Controllers/
│           ├── PortfolioController.php
│           ├── ProjectController.php
│           └── SkillController.php
├── database/
│   ├── migrations/
│   │   ├── create_projects_table.php
│   │   ├── create_skills_table.php
│   │   └── create_abouts_table.php
│   └── seeders/
│       ├── ProjectSeeder.php
│       ├── SkillSeeder.php
│       ├── AboutSeeder.php
│       └── DatabaseSeeder.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── portfolio/
│       │   └── index.blade.php
│       └── projects/
│           ├── index.blade.php
│           └── show.blade.php
└── routes/
    └── web.php
```

## Installation & Setup

### Prerequisites
- PHP 8.1 or higher
- Composer
- MySQL 5.7+ or PostgreSQL 10+

### Quick Start

1. **Navigate to the portfolio directory**
   ```bash
   cd d:\portfolio
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Configure database in `.env` file**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=portfolio
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Create the database**
   ```bash
   mysql -u root -e "CREATE DATABASE portfolio;"
   ```

5. **Run migrations and seed data**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Start development server**
   ```bash
   php artisan serve
   ```

Access the portfolio at: `http://localhost:8000`

## Database Schema

### Projects Table
- `title` - Project title
- `description` - Project description
- `image_url` - Project image URL
- `github_url` - GitHub repository link
- `live_url` - Live project URL
- `technologies` - JSON array of technologies used
- `featured` - Boolean to mark featured projects
- `order` - Display order

### Skills Table
- `name` - Skill name
- `category` - Skill category (backend, frontend, database, tools)
- `proficiency` - Proficiency level (0-100)
- `order` - Display order

### About Table
- `bio` - Biography/about text
- `email` - Email address
- `phone` - Phone number
- `location` - Location
- `avatar_url` - Avatar image URL
- `social_links` - JSON array of social media links

## Routes

- `GET /` - Portfolio home page
- `GET /projects` - Projects listing page
- `GET /projects/{project}` - Project detail page

## Customization

### Add a New Project
Use Laravel tinker to add projects:
```bash
php artisan tinker
```

```php
App\Models\Project::create([
    'title' => 'My Project',
    'description' => 'Description here',
    'technologies' => ['Laravel', 'Vue.js'],
    'featured' => true,
    'order' => 1,
]);
```

### Update About Section
```php
$about = App\Models\About::first();
$about->update([
    'bio' => 'Your bio here',
    'email' => 'your-email@example.com',
]);
```

### Edit Views
- **Layout**: `resources/views/layouts/app.blade.php`
- **Home**: `resources/views/portfolio/index.blade.php`
- **Projects**: `resources/views/projects/index.blade.php`
- **Project Detail**: `resources/views/projects/show.blade.php`

## Styling

The portfolio uses Tailwind CSS for styling. Customize colors and styles by:
- Modifying Tailwind classes in blade templates
- Updating classes directly in the view files

## Sample Data

The seeder includes:
- 4 sample projects (2 featured)
- 13 skills across 4 categories
- Sample about section

## Deployment

### Production Setup
1. Update `.env`:
   ```env
   APP_ENV=production
   APP_DEBUG=false
   ```

2. Optimize for production:
   ```bash
   composer install --optimize-autoloader --no-dev
   php artisan config:cache
   php artisan route:cache
   ```

3. Run migrations:
   ```bash
   php artisan migrate --force
   ```

### Hosting Recommendations
- Laravel Forge
- DigitalOcean
- Heroku
- AWS
- Shared hosting

## License

This project is open source under the MIT License.

---

**Happy portfolio building!** 🚀

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
