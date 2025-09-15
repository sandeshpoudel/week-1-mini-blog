# 📝 Week 1 — Mini Blog (Laravel)

This is a **Week 1 learning project** built with [Laravel](https://laravel.com/).  
The goal was to practice **Authentication** and **CRUD** basics by creating a **Personal Blog** application.

---

## 🚀 Features
- Landing page with a welcome message
- User authentication (Sign up, Login, Logout)
- Blog post creation, editing, and deletion (CRUD)
- Categories for organizing posts
- Only authenticated users can create posts
- Stylish landing page (photo + welcome text)

---

## 🛠️ Tech Stack
- [Laravel 11.x](https://laravel.com/)
- PHP 8+
- MySQL / SQLite (for local development)
- TailwindCSS (styling)

---

## 📂 Project Setup

### 1. Clone the repo
```bash
git clone https://github.com/your-username/week-1-mini-blog.git
cd week-1-mini-blog
````

### 2. Install dependencies

```bash
composer install
npm install && npm run dev
```

### 3. Create environment file

```bash
cp .env.example .env
```

Update `.env` with your database details.

### 4. Generate app key

```bash
php artisan key:generate
```

### 5. Run migrations

```bash
php artisan migrate
```

### 6. Serve the app

```bash
php artisan serve
```

Visit → `http://127.0.0.1:8000`

---

## 📸 Screenshots

*(Add screenshots of your landing page / dashboard here when ready!)*

---

## 🎯 Learning Outcomes

* Learned how to scaffold authentication in Laravel
* Built CRUD operations with routes, controllers, and views
* Gained hands-on experience with Blade templates and TailwindCSS
* Practiced Git & GitHub for version control

---

## 📌 Next Steps

* Add image upload for posts
* Improve UI design
* Deploy the project online (Heroku / Laravel Forge / Render)

---

## 🙌 Acknowledgements

* [Laravel Documentation](https://laravel.com/docs)
* [TailwindCSS](https://tailwindcss.com/)
* AI + self-practice

```

---

