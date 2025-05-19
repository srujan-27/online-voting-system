# 🗳️ Online Voting System (Laravel)

A secure, role-based online voting platform built with Laravel and MySQL. This project allows registered users to vote for candidates and provides an admin panel to manage candidates and view real-time results. Built as a proof of concept for secure and simple election systems.

---

## 🚀 Features

### 👤 User Panel
- Voter registration and login
- View list of candidates
- Cast vote (one-time only)
- Logout functionality

### 🔐 Admin Panel
- Admin authentication
- Add, edit, or delete candidates
- View real-time vote counts
- Control and monitor the voting process

### ✅ Security & Logic
- Role-based access control
- One vote per user logic
- Password hashing and secure sessions

---

## 🧱 Built With

| Layer         | Stack                      |
|---------------|----------------------------|
| Framework     | Laravel (PHP)              |
| Frontend      | Blade, HTML, CSS           |
| Database      | MySQL                      |
| Server        | XAMPP / Laravel Artisan    |

---

## 🛠️ Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/srujan-27/online-voting-system.git
cd online-voting-system/votingSystemLaravel-master
1)composer install
2)cp .env.example .env
php artisan key:generate
3)DB_DATABASE=votingsystem
DB_USERNAME=root
DB_PASSWORD=root
4)4. Import Database
Create a database named votingsystem in phpMyAdmin.

Import the provided votingsystem.sql file.
5)php artisan serve
