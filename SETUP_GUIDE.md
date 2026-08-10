# Portfolio Setup Guide

This guide will walk you through setting up your Laravel portfolio website from scratch.

## Step 1: Environment Setup

### Prerequisites
Make sure you have the following installed:
- PHP 8.1+ - [Download](https://www.php.net/downloads)
- Composer - [Download](https://getcomposer.org/download/)
- MySQL Server - [Download](https://dev.mysql.com/downloads/mysql/)
- A text editor or IDE (VSCode, PhpStorm, etc.)

### Check Installation
```bash
php --version
composer --version
mysql --version
```

## Step 2: Database Setup

### For MySQL Users

1. **Start MySQL Server**
   - Windows: Use MySQL Workbench or run `mysqld` from command line
   - macOS: `brew services start mysql-server`
   - Linux: `sudo systemctl start mysql`

2. **Create Database**
   ```bash
   mysql -u root
   ```
   
   Then in MySQL prompt:
   ```sql
   CREATE DATABASE portfolio;
   EXIT;
   ```

3. **Verify Connection**
   ```bash
   mysql -u root -p -h 127.0.0.1 -e "USE portfolio; SHOW TABLES;"
   ```

### For PostgreSQL Users

1. **Update `.env` file**
   ```env
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=portfolio
   DB_USERNAME=postgres
   DB_PASSWORD=
   ```

2. **Create Database**
   ```bash
   createdb portfolio
   ```

## Step 3: Laravel Setup

1. **Navigate to Portfolio Directory**
   ```bash
   cd d:\portfolio
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```
   
   This will download and install all PHP packages listed in `composer.json`

3. **Configure Environment**
   
   The `.env` file should already be created. Verify these settings:
   ```env
   APP_NAME="My Portfolio"
   APP_ENV=local
   APP_DEBUG=true
   
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=portfolio
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate App Key** (if not already done)
   ```bash
   php artisan key:generate
   ```

## Step 4: Database Migrations

1. **Run Migrations**
   ```bash
   php artisan migrate
   ```
   
   This will create the database tables:
   - `projects` - Your projects
   - `skills` - Your technical skills
   - `abouts` - Your profile information

2. **Verify Tables Were Created**
   ```bash
   mysql -u root portfolio -e "SHOW TABLES;"
   ```

## Step 5: Seed Sample Data

1. **Load Sample Data**
   ```bash
   php artisan db:seed
   ```
   
   This will populate your database with:
   - 4 sample projects
   - 13 sample skills
   - 1 sample about section

2. **View the Data**
   ```bash
   php artisan tinker
   ```
   
   Then:
   ```php
   App\Models\Project::all();
   App\Models\Skill::all();
   App\Models\About::all();
   exit();
   ```

## Step 6: Start Development Server

1. **Run Development Server**
   ```bash
   php artisan serve
   ```
   
   You should see:
   ```
   INFO  Server running on [http://127.0.0.1:8000].
   ```

2. **Access Your Portfolio**
   - Open browser and go to: `http://localhost:8000`
   - You should see your portfolio home page

## Step 7: Customize Your Portfolio

### Add Your Information

1. **Update About Section**
   ```bash
   php artisan tinker
   ```
   
   ```php
   $about = App\Models\About::first();
   $about->update([
       'bio' => 'Your bio goes here...',
       'email' => 'your-email@example.com',
       'phone' => '+1 (555) 123-4567',
       'location' => 'Your City, Country',
       'avatar_url' => 'https://your-image-url.jpg',
       'social_links' => [
           'github' => 'https://github.com/yourprofile',
           'linkedin' => 'https://linkedin.com/in/yourprofile',
           'twitter' => 'https://twitter.com/yourprofile',
       ],
   ]);
   exit();
   ```

2. **Add Your Projects**
   ```bash
   php artisan tinker
   ```
   
   ```php
   App\Models\Project::create([
       'title' => 'Your Project Title',
       'description' => 'A detailed description of your project...',
       'image_url' => 'https://your-image-url.jpg',
       'github_url' => 'https://github.com/username/project',
       'live_url' => 'https://project-live-url.com',
       'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS'],
       'order' => 1,
       'featured' => true,
   ]);
   exit();
   ```

3. **Add Your Skills**
   ```bash
   php artisan tinker
   ```
   
   ```php
   App\Models\Skill::create([
       'name' => 'JavaScript',
       'category' => 'frontend',
       'proficiency' => 95,
       'order' => 1,
   ]);
   exit();
   ```

### Edit Views (Optional)

1. **Edit Navigation** - `resources/views/layouts/app.blade.php`
2. **Edit Home Page** - `resources/views/portfolio/index.blade.php`
3. **Edit Projects Page** - `resources/views/projects/index.blade.php`

## Troubleshooting

### Database Connection Error
**Problem**: "SQLSTATE[HY000] [2002] No connection could be made..."

**Solution**:
- Ensure MySQL is running
- Check `.env` database credentials
- Try: `mysql -u root` to verify access

### Port 8000 Already in Use
**Problem**: "Address already in use"

**Solution**:
```bash
php artisan serve --port=8001
```

### Migrations Failed
**Problem**: Migration errors

**Solution**:
```bash
php artisan migrate:rollback
php artisan migrate
```

### Can't Connect to Database
**Problem**: "Unknown database 'portfolio'"

**Solution**:
```bash
mysql -u root -e "CREATE DATABASE portfolio;"
```

## Useful Artisan Commands

```bash
# View all routes
php artisan route:list

# Access database shell
php artisan tinker

# Clear all caches
php artisan cache:clear

# Refresh migrations and seed
php artisan migrate:refresh --seed

# Check application status
php artisan about

# Generate new app key
php artisan key:generate

# Create a new migration
php artisan make:migration migration_name

# Create a new model
php artisan make:model ModelName

# Create a new controller
php artisan make:controller ControllerName
```

## Next Steps

After setup:

1. **Customize your portfolio** with your own information
2. **Add your projects** to the database
3. **Update your skills** with your technical expertise
4. **Deploy your portfolio** to a hosting provider

## Getting Help

### Laravel Documentation
- Official Docs: https://laravel.com/docs
- API Reference: https://laravel.com/api

### Community Resources
- Laravel Discussions: https://github.com/laravel/framework/discussions
- Stack Overflow: Tag with `laravel`

### Common Issues
Check the [README.md](README.md) for more information

---

**Happy coding!** 🚀
