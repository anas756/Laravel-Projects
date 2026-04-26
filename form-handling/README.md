<p align="center">
 <img width="247" height="270" alt="image" src="https://github.com/user-attachments/assets/72e763d4-ce91-4227-952b-def370b707e3" />
</p>
# 📝 Laravel Form Handling & Validation
A lightweight Laravel application focused entirely on mastering backend data flow: from client submission and secure server-side validation, to dynamic view repopulation.
## ⚡ Core Features
* **Strict Validation:** Custom controller rules enforcing data integrity (emails, dates, arrays).
* **State Preservation:** Seamless form repopulation upon failure using Laravel's old() helper.
* **Modern Blade Syntax:** Clean, logic-less views utilizing native directives (@error, @checked, @selected).
* **Clean Architecture:** Strict GET/POST routing separation and structured object iteration.
> **🤖 UI Note:** My priority is backend engineering. To keep 100% of my development time focused on the Laravel engine, routing, and logic, I leveraged AI to generate the modern CSS/UI styling for these views. 
## 📸 Previews
* **The Form UI:** <img width="960" height="540" alt="image" src="https://github.com/user-attachments/assets/701a12b9-be74-4f6d-a576-2a323b677657" />
* **Validation Errors in Action:** <img width="960" height="540" alt="image" src="https://github.com/user-attachments/assets/00fa2e29-193a-4014-9b67-b621960d6129" />
* **Data Recap View:** <img width="696" height="435" alt="image" src="https://github.com/user-attachments/assets/f9d2620d-90e9-4b56-9355-45503e10ef4e" />
## 🚀 How to Run Locally
If you'd like to test the validation logic yourself:
1. Clone the repository: git clone https://github.com/anas756/Laravel-Projects.git
2. Navigate to the project directory.
3. Install dependencies: composer install
4. Copy the environment file: cp .env.example .env
5. Generate the application key: php artisan key:generate
6. Start the local development server: php artisan serve
