🚀 Laravel LMS Project

A Learning Management System (LMS) built with Laravel 9 and Voyager. Manage courses, lessons, users, and media easily.

✨ Features

📚 Full CRUD for courses, lessons, and content.

👤 User roles: Admin, Instructor, Student.

🛠 Voyager Admin Panel for easy management.

🔒 Secure login, registration, and password reset.

🖼 Media management (videos, documents, images).

🖼 Demo Screenshots
🖥 Admin Dashboard


Easily manage users, courses, and content.

📖 Courses List


View and edit all courses.

👩‍🎓 Student Dashboard


Students can view enrolled courses and lessons.

💡 Tip: Take screenshots from your running project and save them in screenshots/ folder.

⚙️ Requirements

PHP >= 8.0

Composer

MySQL

Node.js & npm

🛠 Installation

Clone the project

git clone https://github.com/HishamELSayedAli/laravel-lms-project.git
cd laravel-lms-project


Install dependencies

composer install
npm install


Configure environment

cp .env.example .env
php artisan key:generate


Update .env with your database credentials.

Run migrations

php artisan migrate


(Optional) Seed database

php artisan db:seed


Create storage link

php artisan storage:link


Serve the application

php artisan serve


Visit http://127.0.0.1:8000.

🛡 Admin Panel

Default Voyager admin: /admin

Consider changing /admin in routes/web.php for extra security.

🔐 Security Tips

In production, set APP_ENV=production and APP_DEBUG=false.

Limit admin access strictly.

📝 Notes

Frontend uses Blade + Alpine.js.

Easy to extend with more features or UI improvements.
