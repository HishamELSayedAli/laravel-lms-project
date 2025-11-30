🚀 Laravel Learning Management System (LMS)A robust and secure Learning Management System (LMS) built with the Laravel framework, featuring comprehensive course management, user roles, and a powerful administrative interface.✨ Features and CapabilitiesThis platform is designed to handle all aspects of online education delivery and management:Course Management: Full CRUD (Create, Read, Update, Delete) operations for courses, lessons, and content modules.User Roles & Authorization: Dedicated roles for Students, Instructors, and Administrators.Voyager Integration: Utilizes TCG Voyager for a ready-to-use, powerful Admin Dashboard for managing all database resources.Authentication System: Secure user login, registration, and password reset functionalities.Media Management: Integrated file management for handling course assets (videos, documents, images).🛠 Tech Stack OverviewThe project is built using modern PHP and JavaScript technologies:CategoryTechnologyVersionPurposeBackend FrameworkLaravel^9.0The core PHP foundation for the application logic.DatabaseMySQLN/APrimary relational database for data persistence.Admin PanelTCG Voyager^1.7Provides the ready-made interface for administrative tasks.Frontend UtilitiesBlade/Alpine.jsN/ATemplating and simple client-side interactivity.Build ToolVite / Laravel MixN/ACompiling front-end assets (CSS/JS).PHP VersionPHP^8.0Required PHP version for Laravel 9.📂 Project StructureThis project follows the standard, clean Laravel directory structure:.
├── app/                  # Application core (Models, Controllers, Providers)
├── config/               # All application configuration files
├── database/             # Migrations, Seeders, and Factories
├── public/               # The entry point of the application
├── resources/            # Views, language files, and uncompiled assets
├── routes/               # All web, API, and console routes
├── storage/              # Storage for logs, sessions, and user-uploaded files
└── vendor/               # Third-party libraries (excluded via .gitignore)
⚙️ Getting Started (Setup Guide)Follow these steps to get the LMS project running on your local machine.PrerequisitesYou must have the following installed:PHP 8.0 or higherComposerNode.js & npm (for front-end assets)MySQL or other supported database serverInstallation StepsClone the Repository and Navigate:git clone [YOUR_REPOSITORY_URL]
cd laravel-lms-project
Install Dependencies:# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
Configure Environment:# Create the environment file (it ignores sensitive keys)
cp .env.example .env

# Generate the unique application key
php artisan key:generate
➡️ IMPORTANT: Open the newly created .env file and update your database credentials (DB_DATABASE, DB_USERNAME, DB_PASSWORD).Database Setup:# Run migrations to create database tables
php artisan migrate

# (Optional) Seed the database with dummy data (e.g., initial Admin User, dummy courses)
# php artisan db:seed

# Create the symbolic link for storage/public access (crucial for Voyager media)
php artisan storage:link
Run the Application:php artisan serve
Your application will now be running at http://127.0.0.1:8000.🔒 Security Best PracticesPlease adhere to the following security guidelines when developing or deploying this application:Production Mode: Always ensure APP_ENV=production and APP_DEBUG=false on live servers.Voyager Access: Restrict admin privileges strictly. Consider changing the default admin URI (/admin) for added security through obscurity.Input Validation: Every piece of user input must be rigorously validated using Laravel's validation features to prevent malicious data injection.Dependency Maintenance: Regularly update all project dependencies (composer update and npm update) to patch known security vulnerabilities.
