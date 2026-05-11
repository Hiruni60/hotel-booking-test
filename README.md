<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Hotel Room Booking System (Full Stack Assessment)

A full-stack hotel booking management system built using Laravel 10, Blade, Tailwind CSS, and MySQL.

The system handles:
- Role-based access control (Admin, Manager, Receptionist)
- Room management
- Guest-based booking system
- Booking history & filtering
- Room availability tracking

---

#  Tech Stack

- PHP 8.1+
- Laravel 10
- MySQL
- Blade Templates
- Tailwind CSS
- Laravel Breeze (Authentication)
- Sanctum (optional API support)
- Vite (Frontend assets)
- Laragon (Local Development)

---

#  Local Setup Instructions

## 1. Clone the Project

```bash
git clone <repo-url>
cd hotel-booking-system


## 2. Install Dependencies
    **PHP dependencies ----> composer install
    **Node dependencies --->npm install

## 3. Environment Setup

** Copy .env file:---->  cp .env.example .env

##  Update database config:

DB_DATABASE=hotel_booking
DB_USERNAME=root
DB_PASSWORD=

4. Generate App Key
php artisan key:generate

5. Run Migrations
php artisan migrate

6. Run Seedeers
php artisan db:seed

7. Build Frontend Assets
npm run dev

8. Run Development Server (use seperate terminal to run backend and frontend)
php artisan serve

this is need to run laragon environment :

Place project in www folder
Start Apache + MySQL
Access via:
http://hotel-booking.test



🔑 Admin Login Credentials
## Default Admin Account

After running the seeders (or manual DB insert), use the following credentials:

📧 Email:
admin@example.com

🔒 Password:
password

---

## note ====> i added simply super admin and other user you can change any user rolesand log into the system accordingly . i only added two users .
