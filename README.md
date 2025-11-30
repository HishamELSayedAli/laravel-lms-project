

🚀 Laravel Learning Management System (LMS)
A robust and secure Learning Management System (LMS) built with the Laravel framework, featuring comprehensive course management, user roles, and a powerful administrative interface.

✨ Features and Capabilities
Course Management: Full CRUD (Create, Read, Update, Delete) operations for courses, lessons, and content modules.

User Roles & Authorization: Dedicated roles for Students, Instructors, and Administrators.

Voyager Integration: Utilizes TCG Voyager for a ready-to-use, powerful Admin Dashboard for managing all database resources.

Authentication System: Secure user login, registration, and password reset functionalities.

Media Management: Integrated file management for handling course assets (videos, documents, images).

🛠 Tech Stack Overview
Category	Technology	Version	Purpose
Backend Framework	Laravel	^9.0	The core PHP foundation for the application logic.
Database	MySQL	N/A	Primary relational database for data persistence.
Admin Panel	TCG Voyager	^1.7	Provides the ready-made interface for administrative tasks.
Frontend Utilities	Blade/Alpine.js	N/A	Templating and simple client-side interactivity.
Build Tool	Vite / Laravel Mix	N/A	Compiling front-end assets (CSS/JS).
PHP Version	PHP	^8.0	Required PHP version for Laravel 9.

التصدير إلى "جداول بيانات Google"

📂 Project Structure
This project follows the standard Laravel directory structure with dedicated modules for the Voyager administration.

.
├── app/                  # Application core (Models, Controllers, Providers)
├── bootstrap/            # Framework bootstrap files
├── config/               # All application configuration files
├── database/             # Migrations, Seeders, and Factories
├── public/               # The entry point of the application
├── resources/            # Views, language files, and uncompiled assets
├── routes/               # All web, API, and console routes
├── storage/              # Storage for logs, sessions, and user-uploaded files
└── vendor/               # Third-party libraries (excluded via .gitignore)
⚙️ Getting Started (Setup Guide)
Follow these steps to get the LMS project running on your local machine.

Prerequisites
PHP 8.0 or higher

Composer

Node.js & npm (for front-end assets)

MySQL or other supported database server

Installation Steps
Clone the Repository and Navigate to the Directory:

Bash

git clone [YOUR_REPOSITORY_URL]
cd laravel-lms-project
Install Dependencies:

Bash

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
Configure Environment:

Bash

# Create the environment file (it ignores sensitive keys)
cp .env.example .env

# Generate the unique application key
php artisan key:generate
ACTION: Open the newly created .env file and update your database credentials (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

Database Setup:

Bash

# Run migrations to create database tables
php artisan migrate

# (Optional) Seed the database with dummy data (e.g., initial Admin User, dummy courses)
# php artisan db:seed

# Create the symbolic link for storage/public access (crucial for Voyager media)
php artisan storage:link
Run the Application:

Bash

php artisan serve
Your application will now be running at http://127.0.0.1:8000.

🔒 Security Best Practices
Please adhere to the following security guidelines when developing or deploying this application:

Production Mode: Always ensure APP_ENV=production and APP_DEBUG=false on live servers.

Voyager Access: Restrict admin privileges strictly. Consider changing the default admin URI (/admin) for added security through obscurity.

Input Validation: Every piece of user input must be rigorously validated using Laravel's validation features to prevent malicious data injection.

Dependency Maintenance: Regularly update all project dependencies (composer update and npm update) to patch known security vulnerabilities.
