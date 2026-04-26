<p align="center">
  <img width="247" height="270" alt="image" src="https://github.com/user-attachments/assets/1ef0028f-ad6f-4ca9-a0c3-4e81356dbe00" />

</p>

# 📝 Laravel Posts App — Full CRUD

A clean Laravel application focused on mastering the full **CRUD cycle**: creating, reading, updating, and deleting records through a RESTful resource controller, with server-side validation and a polished editorial UI.

## ⚡ Core Features

* **RESTful Resource Controller:** Full `index`, `create`, `store`, `edit`, `update`, and `destroy` actions following Laravel conventions.
* **Server-Side Validation:** Controller rules enforcing required fields with inline error feedback using Laravel's `@error` directive.
* **State Preservation:** Form repopulation on validation failure using Laravel's `old()` helper.
* **Soft Delete Confirmation:** Browser-level confirmation prompt before any destructive action.
* **Clean Blade Architecture:** Logic-less views using native directives (`@csrf`, `@method`, `@error`, `@foreach`).
* **Modern Editorial UI:** Minimal, typography-first design with a custom CSS stylesheet.

> **🤖 UI Note:** My priority is backend engineering. To keep 100% of my development time focused on the Laravel engine, routing, and CRUD logic, I leveraged AI to generate the modern CSS/UI styling for these views.

## 🗺️ Routes

| Method | URI | Action |
|--------|-----|--------|
| GET | `/posts` | List all posts |
| GET | `/posts/create` | Show create form |
| POST | `/posts` | Store new post |
| GET | `/posts/{id}/edit` | Show edit form |
| PUT | `/posts/{id}` | Update post |
| DELETE | `/posts/{id}` | Delete post |

## 📸 Previews

* **All Posts View:**
<img width="959" height="471" alt="image" src="https://github.com/user-attachments/assets/56940976-3f42-4635-adde-5cace9ba6234" />


* **Create / Edit Form:**
<img width="960" height="468" alt="image" src="https://github.com/user-attachments/assets/646a72ac-8097-475c-81d8-e8cc4c6bce58" />
<img width="960" height="469" alt="image" src="https://github.com/user-attachments/assets/25f63f9a-7a86-4884-a1f0-fea096aa3d49" />



* **Validation Errors in Action:**
<img width="960" height="467" alt="image" src="https://github.com/user-attachments/assets/8afcf72b-5592-4b5b-9726-847ec9dcebf1" />


## 🚀 How to Run Locally

If you'd like to test the CRUD logic yourself:

1. Clone the repository: `git clone https://github.com/anas756/Laravel-Projects.git`
2. Navigate to the project directory: `cd Laravel-Projects/posts-app`
3. Install dependencies: `composer install`
4. Copy the environment file: `cp .env.example .env`
5. Generate the application key: `php artisan key:generate`
6. Configure your database in `.env` and run migrations: `php artisan migrate`
7. Start the local development server: `php artisan serve`
8. Visit: `http://localhost:8000/posts`
