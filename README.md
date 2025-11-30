# 🚀 Laravel LMS Project

**A modern Learning Management System (LMS) built with Laravel 9 and Voyager. Easily manage courses, lessons, users, and media.**

---

## ✨ Main Features

- **📚 Full CRUD for courses, lessons, and content**
- **👤 User roles:** Admin, Instructor, Student
- **🛠 Voyager Admin Panel for effortless management**
- **🔒 Secure login, registration, and password reset**
- **🖼 Media management (videos, documents, images)**

---

## 🖥️ Demo Screenshots

Place screenshots from your running project in the `screenshots/` folder 👇

### Admin Dashboard
> Effortlessly manage users, courses, and content.

### Courses List
> View and edit all courses.

### Student Dashboard
> Students can view enrolled courses and lessons.

---

## ⚙️ Requirements

- **PHP >= 8.0**
- **Composer**
- **MySQL**
- **Node.js & npm**

---

## 🛠️ Installation & Setup

1. **Clone the project:**
    ```bash
    git clone https://github.com/HishamELSayedAli/laravel-lms-project.git
    cd laravel-lms-project
    ```

2. **Install dependencies:**
    ```bash
    composer install
    npm install
    ```

3. **Configure environment:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

    > Update your .env file with database credentials.

4. **Run migrations:**
    ```bash
    php artisan migrate
    ```

5. **(Optional) Seed database:**
    ```bash
    php artisan db:seed
    ```

6. **Create storage link:**
    ```bash
    php artisan storage:link
    ```

7. **Serve the application:**
    ```bash
    php artisan serve
    ```

    > Visit [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

---

## 🛡️ Admin Panel

- Default Voyager admin path: `/admin`
- For extra security, consider changing `/admin` in `routes/web.php`.

---

## 🔐 Security Tips

- In production, set `APP_ENV=production` and `APP_DEBUG=false`.
- Limit admin panel access strictly to admins.

---

## 📝 Notes

- Frontend uses **Blade** & **Alpine.js**.
- Easy to extend with more features or UI improvements.

---

> **Developed by [HishamELSayedAli](https://github.com/HishamELSayedAli)**
