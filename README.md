🍽️ Laravel Restaurant Management System

A modern restaurant management web application built with Laravel, Blade, Jetstream, and Sanctum. This project provides a full-featured system for managing food items, table reservations, online orders, and delivery status. Designed for both customers and administrators, it streamlines restaurant operations from ordering to delivery.

✨ Features
👨‍🍳 Customer Side

🔐 User authentication with Laravel Jetstream & Sanctum

📅 Reserve tables online

🍕 Browse menu & order food

🛒 Add food items to cart

💳 Place orders securely

🛠️ Admin Side

➕ Add, ✏️ edit, ❌ delete food items

📊 Dashboard with insights:

Number of orders

Table reservations

Delivery status statistics

🚚 Manage delivery statuses:

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
![View Food](https://github.com/itsareebaah/laravel_hotelmanagement/issues/4#issue-3381434292)

### 🚚 View Orders & Manage Delivery Status
![Orders & Delivery](https://github.com/itsareebaah/laravel_hotelmanagement/issues/5#issue-3381438436)

### 🛒 Add to Cart
![Add to Cart](https://github.com/itsareebaah/laravel_hotelmanagement/issues/6#issue-3381444213)

### 🛍️ Cart View
![Cart View](https://github.com/itsareebaah/laravel_hotelmanagement/issues/7#issue-3381447078)


⚙️Tech Stack

Backend: Laravel Framework 12.26.4

Frontend: Blade Templates, TailwindCSS

Authentication: Laravel Jetstream & Sanctum

Database: MySQL

Other: RESTful APIs, Eloquent ORM


Installation & Setup
1️⃣ Clone the Repository
git clone https://github.com/itsareebaah/laravel_hotelmanagement.git
cd laravel_hotelmanagement
2️⃣ Install Dependencies
composer install
npm install && npm run dev
3️⃣ Configure Environment
cp .env.example .env
php artisan key:generate

Update .env file with your database credentials.

4️⃣ Run Migrations & Seeders
php artisan migrate --seed
5️⃣ Serve the Application
php artisan serve

Visit http://127.0.0.1:8000

🔑 Default Admin Credentials
Email: admin@gmail.com
Password: 12345678

(You can change these in the seeder or database.)


📊 Project Highlights

✅ Complete CRUD for menu items

✅ Seamless order & reservation management

✅ Secure authentication system

✅ Real-time delivery status tracking

✅ Responsive UI with Blade & TailwindCSS
