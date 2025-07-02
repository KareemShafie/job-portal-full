# 💼 Job Portal

A simple and complete full-stack job portal web application for job seekers and companies.  
Built with **Angular** (frontend) and **Laravel 12** (backend).

---

## 🚀 Features

- 🔍 Advanced filtering options including: job title, location, salary range, job type, experience level, company sector, and company size
- 📝 View job details and apply
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

