# 📝 Laravel Posts App

A clean, full-featured blog post manager built with **Laravel**. Create, read, update, and delete posts through a modern, minimal UI.

---

## ✨ Features

- 📋 **List all posts** — browse every post at a glance
- ✍️ **Create posts** — write and publish new entries instantly
- ✏️ **Edit posts** — update any post's title or body
- 🗑️ **Delete posts** — remove posts with a confirmation prompt
- ⚠️ **Validation** — inline error messages on all forms
- 💅 **Modern UI** — editorial-style design with custom CSS

---

## 🛠️ Tech Stack

| Layer      | Technology        |
|------------|-------------------|
| Framework  | Laravel 10+       |
| Templating | Blade             |
| Styling    | Custom CSS        |
| Database   | MySQL / SQLite    |
| Language   | PHP 8.1+          |

---

## 🚀 Getting Started

### Prerequisites

Make sure you have the following installed:

- PHP >= 8.1
- Composer
- Node.js & npm
- A database (MySQL or SQLite)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/your-repo-name.git
   cd your-repo-name
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Copy the environment file**
   ```bash
   cp .env.example .env
   ```

4. **Generate the application key**
   ```bash
   php artisan key:generate
   ```

5. **Configure your database** in `.env`
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

8. **Visit the app**
   ```
   http://localhost:8000/posts
   ```

---

## 📁 Project Structure

```
resources/
├── views/
│   ├── app.blade.php        # Main layout
│   └── posts/
│       ├── index.blade.php  # All posts
│       ├── create.blade.php # Create form
│       └── edit.blade.php   # Edit form
public/
└── css/
    └── posts.css            # App stylesheet
```

---

## 🗺️ Routes

| Method | URI                | Action         |
|--------|--------------------|----------------|
| GET    | `/posts`           | List all posts |
| GET    | `/posts/create`    | Show create form |
| POST   | `/posts`           | Store new post |
| GET    | `/posts/{id}/edit` | Show edit form |
| PUT    | `/posts/{id}`      | Update post    |
| DELETE | `/posts/{id}`      | Delete post    |

---

## 🙋 About

Built as a learning project to practice **Laravel CRUD operations**, **Blade templating**, and **form validation**.

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).
