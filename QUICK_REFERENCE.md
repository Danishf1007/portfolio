# Portfolio - Quick Reference

## Project Overview

Your Laravel portfolio is now set up and ready for customization. This document provides quick access to key information.

## Getting Started (5 Minutes)

```bash
cd d:\portfolio
php artisan serve
```

Visit: `http://localhost:8000`

## Key Files

### Models (Business Logic)
- [app/Models/Project.php](app/Models/Project.php) - Project data model
- [app/Models/Skill.php](app/Models/Skill.php) - Skill data model
- [app/Models/About.php](app/Models/About.php) - About/profile model

### Controllers (Request Handling)
- [app/Http/Controllers/PortfolioController.php](app/Http/Controllers/PortfolioController.php) - Home page logic
- [app/Http/Controllers/ProjectController.php](app/Http/Controllers/ProjectController.php) - Projects logic

### Views (Frontend Templates)
- [resources/views/layouts/app.blade.php](resources/views/layouts/app.blade.php) - Main layout
- [resources/views/portfolio/index.blade.php](resources/views/portfolio/index.blade.php) - Home page
- [resources/views/projects/index.blade.php](resources/views/projects/index.blade.php) - Projects list
- [resources/views/projects/show.blade.php](resources/views/projects/show.blade.php) - Project detail

### Database
- [database/migrations/](database/migrations/) - Database schema definitions
- [database/seeders/](database/seeders/) - Sample data loaders

### Configuration
- [.env](.env) - Environment variables (database, app settings)
- [routes/web.php](routes/web.php) - URL routes

## Quick Commands

### Database
```bash
# Create tables
php artisan migrate

# Load sample data
php artisan db:seed

# Reset database
php artisan migrate:refresh --seed
```

### Data Management (Tinker)
```bash
php artisan tinker

# View all data
App\Models\Project::all();
App\Models\Skill::all();
App\Models\About::all();

# Add data
App\Models\Project::create([...]);
App\Models\Skill::create([...]);

# Update data
$about = App\Models\About::first();
$about->update([...]);
```

### Server
```bash
# Start server (port 8000)
php artisan serve

# Start on different port
php artisan serve --port=8001
```

### Maintenance
```bash
# Clear caches
php artisan cache:clear

# View all routes
php artisan route:list

# Check app status
php artisan about
```

## Project URLs

| URL | Description |
|-----|-------------|
| `http://localhost:8000/` | Home page (featured projects, skills, about) |
| `http://localhost:8000/projects` | All projects list |
| `http://localhost:8000/projects/{id}` | Project detail page |

## Database Tables

### projects
- id, title, description, image_url
- github_url, live_url, technologies (JSON)
- order, featured, created_at, updated_at

### skills
- id, name, category
- proficiency (0-100), order
- created_at, updated_at

### abouts
- id, bio, email, phone
- location, avatar_url
- social_links (JSON), created_at, updated_at

## Customization Checklist

- [ ] Update About section with your bio
- [ ] Upload your avatar image
- [ ] Add your social media links
- [ ] Add your projects (at least 3)
- [ ] List your skills with proficiency levels
- [ ] Update navigation links
- [ ] Customize contact email
- [ ] Test all pages on mobile

## Common Customizations

### Change Site Title
Edit `.env`:
```env
APP_NAME="Your Portfolio Title"
```

### Update Email
Edit in Tinker:
```php
$about = App\Models\About::first();
$about->email = 'your-email@example.com';
$about->save();
```

### Change Colors
Edit Tailwind classes in blade files:
- Change `from-indigo-600` to `from-blue-600`
- Change `to-purple-600` to `to-blue-400`

### Add New Navigation Item
Edit [resources/views/layouts/app.blade.php](resources/views/layouts/app.blade.php):
```html
<a href="your-link" class="text-gray-700 hover:text-indigo-600">Your Link</a>
```

## Directory Structure

```
portfolio/
├── app/
│   ├── Models/              # Data models
│   └── Http/Controllers/    # Request handlers
├── database/
│   ├── migrations/          # Database schema
│   └── seeders/             # Sample data
├── resources/
│   └── views/               # HTML templates
├── routes/
│   └── web.php              # URL routes
├── .env                     # Configuration
├── README.md                # Full documentation
└── SETUP_GUIDE.md           # Setup instructions
```

## Environment Variables

Key settings in `.env`:

```env
APP_DEBUG=true              # Enable debug mode (set to false in production)
DB_CONNECTION=mysql         # Database type
DB_DATABASE=portfolio       # Database name
DB_USERNAME=root            # Database user
DB_PASSWORD=                # Database password
```

## Important Notes

⚠️ **Before Deploying**:
- Set `APP_DEBUG=false` in `.env`
- Update `APP_URL` to your domain
- Configure proper database backups
- Use HTTPS in production
- Set strong app key (already done)

## Resources

### Documentation
- [Laravel Docs](https://laravel.com/docs)
- [Blade Templates](https://laravel.com/docs/blade)
- [Eloquent ORM](https://laravel.com/docs/eloquent)

### Support
- Check [README.md](README.md) for detailed documentation
- Check [SETUP_GUIDE.md](SETUP_GUIDE.md) for setup help
- Review [routes/web.php](routes/web.php) for available routes

## Next Steps

1. **Run migrations**: `php artisan migrate`
2. **Seed data**: `php artisan db:seed`
3. **Customize**: Edit your information
4. **Test**: Open `http://localhost:8000`
5. **Deploy**: Follow deployment guide in README

---

**Happy building!** 🚀

For detailed help, see [SETUP_GUIDE.md](SETUP_GUIDE.md) or [README.md](README.md)
