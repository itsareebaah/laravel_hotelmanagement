Laravel Restaurant Management System

A full-stack restaurant management application built with Laravel, designed to handle menu management, table reservations, order processing, and delivery tracking within a unified platform.

Overview

This project provides a structured solution for managing restaurant operations from both customer and administrative perspectives. It demonstrates real-world implementation of authentication, CRUD operations, and order lifecycle management using modern Laravel tools and practices.

Demo

https://drive.google.com/file/d/1akNXOjOAZrSOQwOivzh0SvlKzFQ7gOrk/view

Features
Customer Functionality
Secure authentication using Laravel Jetstream and Sanctum
Online table reservation system
Browse menu and place orders
Add items to cart
Streamlined checkout experience
Administrative Functionality
Full CRUD operations for menu items
Central dashboard with operational insights
Order and reservation management
Delivery status tracking:
Pending
On the way
Delivered
Cancelled

## 📽️ View Demo
[Click here to view demo](https://drive.google.com/file/d/1akNXOjOAZrSOQwOivzh0SvlKzFQ7gOrk/view?usp=sharing)



## 🖼️ Screenshots

### 🏠 Home Page
![Home Page](https://github.com/user-attachments/assets/93b1f614-21c4-4367-9a9d-e38fa80b36ea)

### 📊 Dashboard
![Dashboard](https://github.com/user-attachments/assets/7b57b42a-b1bb-4a74-aee0-532c1c77f763)

### 🍔 Add Food
![Add Food](https://github.com/user-attachments/assets/16be1ab2-ac84-4c99-82c7-57af03cec18f)

### 🍕 View Food
![View Food](https://github.com/itsareebaah/laravel_hotelmanagement/blob/89b77296fd2d6f289717712572029f6e48924fae/veiw_food.png)

### 🚚 View Orders & Manage Delivery Status
![Orders & Delivery](https://github.com/itsareebaah/laravel_hotelmanagement/blob/89b77296fd2d6f289717712572029f6e48924fae/Orders.png)

### 🛒 Add to Cart
![Add to Cart](https://github.com/itsareebaah/laravel_hotelmanagement/blob/89b77296fd2d6f289717712572029f6e48924fae/cart.png)


Tech Stack

Backend

Laravel (v12.x)
Eloquent ORM

Frontend

Blade Templates
Tailwind CSS

Authentication

Laravel Jetstream
Laravel Sanctum

Database

MySQL
Installation
Clone Repository
git clone https://github.com/itsareebaah/laravel-restaurant-management.git
cd laravel-restaurant-management
Install Dependencies
composer install
npm install
npm run dev
Configure Environment
cp .env.example .env
php artisan key:generate

Update database credentials in .env.

Database Setup
php artisan migrate --seed
Run Application
php artisan serve

Application URL:
http://127.0.0.1:8000

Default Admin Access

Email: admin@gmail.com
Password: 12345678

System Capabilities
Menu management system
Order lifecycle handling
Reservation tracking
Delivery status monitoring
Admin dashboard insights
Limitations
No payment gateway integration
No real-time notifications
Single-role admin system
Future Improvements
Payment gateway integration (Stripe / PayPal)
Role-based access control
Real-time order updates
Multi-branch support
License

MIT License

Author

Areeba Ahmad
