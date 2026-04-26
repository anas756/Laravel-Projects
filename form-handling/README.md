<p align="center">
  <img width="247" height="270" alt="image" src="https://github.com/user-attachments/assets/d4052053-aa85-4167-b79c-3772324aabb3" />


</p>

# 📝 Laravel Form Handling & Validation

A lightweight Laravel application focused entirely on mastering backend data flow: from client submission and secure server-side validation, to dynamic view repopulation.

## ⚡ Core Features

* **Strict Validation:** Custom controller rules enforcing data integrity (emails, dates, arrays).
* **State Preservation:** Seamless form repopulation upon failure using Laravel's `old()` helper.
* **Modern Blade Syntax:** Clean, logic-less views utilizing native directives (`@error`, `@checked`, `@selected`).
* **Clean Architecture:** Strict `GET`/`POST` routing separation and structured object iteration.

> **🤖 UI Note:** My priority is backend engineering. To keep 100% of my development time focused on the Laravel engine, routing, and logic, I leveraged AI to generate the modern CSS/UI styling for these views.

## 📸 Previews

* **The Form UI:**

  <img width="960" height="466" alt="image" src="https://github.com/user-attachments/assets/ed414985-0fc0-4b59-8f72-798351ccabef" />


* **Validation Errors in Action:**

  
  <img width="960" height="540" alt="image" src="https://github.com/user-attachments/assets/3cf2de35-738d-4f96-8837-53f02f251713" />



* **Data Recap View:**

  <img width="960" height="468" alt="image" src="https://github.com/user-attachments/assets/3a014bd7-20be-4196-872d-1a00385f22fb" />

## 🚀 How to Run Locally

If you'd like to test the validation logic yourself:

1. Clone the repository: `git clone https://github.com/anas756/Laravel-Projects.git`
2. Navigate to the project directory: `cd Laravel-Projects/form-handling`
3. Install dependencies: `composer install`
4. Copy the environment file: `cp .env.example .env`
5. Generate the application key: `php artisan key:generate`
6. Start the local development server: `php artisan serve`
