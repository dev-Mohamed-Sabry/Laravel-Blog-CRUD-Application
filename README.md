<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# 🚀 Laravel Blog (CRUD Application)

A simple Blog application built with **Laravel**, allowing users to create, edit, and delete posts.  
This project was created as part of learning **Laravel fundamentals**, MVC architecture, Eloquent ORM, validation, and database relationships.

---

## ✨ Features
- 📝 CRUD operations (Create, Read, Update, Delete)
- 👤 Each post belongs to a user
- ✔️ Form validation
- 🗄️ Database migrations
- ⚡ Eloquent ORM
- 🧩 Blade Templates
- 🎨 Bootstrap UI

---

## 🧰 Tech Stack
| Technology | Description |
|----------|-------------|
| PHP | Backend |
| Laravel | Framework |
| MySQL | Database |
| Bootstrap 5 | UI |

---

## 📦 Installation & Setup

```bash
git clone https://github.com/dev-Mohamed-Sabry/Laravel-Blog-CRUD-Application.git
```
```bash
cd laravel-blog
```
```bash
composer install
```
```bash
cp .env.example .env
```
```bash
php artisan key:generate
```
➡️ Edit .env and add your database credentials
```bash
php artisan migrate   # optional if you imported SQL (laravel-blog)
php artisan serve
```

Now open:
```bash
http://127.0.0.1:8000/

```
