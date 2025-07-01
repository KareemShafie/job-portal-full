# 💼 Job Portal

A simple and complete full-stack job portal web application for job seekers and companies.  
Built with **Angular** (frontend) and **Laravel 12** (backend).

---

## 🚀 Features

- 🔍 Search and filter jobs by category, type, location, and salary
- 📝 View job details and apply
- 💾 Save jobs for later
- 🏢 Company admin panel to manage job listings
- ⚙️ RESTful Laravel API
- 🌐 Frontend-backend HTTP integration

---

## 🧰 Tech Stack

- Frontend: Angular
- Backend: Laravel 12
- Database: MySQL

---

## ⚙️ Setup

### Backend (Laravel)
```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

### Frontend (Angular)
```bash
cd frontend/job-portal
npm install
ng serve

