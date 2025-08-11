---
# 📝 BOP Attendance System - AIA Philippines (Cebu Esma District)

A web-based attendance tracking system built with **Laravel** and **Livewire**. It enables attendees to check in via QR code scanning and view attendance history through a user-friendly dashboard. The app features responsive design and real-time validation.

---

## 📌 Features

- 📆 **BOP Attendance Tracker**
  - View attendance records for today or previous dates.
  - Search attendees by name, email, contact number, date of birth, or attendance date.

- 📷 **QR Code Generator**
  - Generates a scannable QR code linking to the public attendance form.
  - Includes a print-friendly layout for physical distribution.

---

## 🛠️ Tech Stack

- **Backend**: Laravel 12
- **Frontend**: Blade + Livewire v3
- **Authentication**: Laravel Breeze
- **Styling**: Tailwind CSS
- **QR Code**: QR Code API generator
- **Pagination**: Livewire pagination

---

## ⚙️ Installation

1. **Clone the repository:**

  ```bash
   git clone https://github.com/rafael-miano/bop-esma.git
   cd bop-esma
  ```

2. **Install dependencies:**
  
  ```bash
  composer install
  npm install && npm run dev
  ```
  
3. **Set up the environment:**
  
  ```bash
  cp .env.example .env
  php artisan key:generate
  ```
  
4. **Configure the database:**
  
  Update your `.env` file:
  
  ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=bop_esma
    DB_USERNAME=root
    DB_PASSWORD=
  ```
  
  Then run migrations and seed data:
  
  ```bash
  php artisan migrate --seed
  ```
  
5. **Serve the application:**
  
  ```bash
  php artisan serve
  ```
  

---

## ✅ Usage

- Visit `/dashboard` to manage attendance records (login required).
  
- Visit `/qr-code` to view or print the public attendance form QR code.
  

**Public Attendance Form**

- Visit `/attendance` or scan the QR code to access the form.

---

## 📄 License

This project is licensed for internal use by AIA Philippines – Cebu Esma District.

---
