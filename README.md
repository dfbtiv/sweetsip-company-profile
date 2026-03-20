# Sweet n Sip Company Profile Website

## 📌 Overview

Sweet n Sip Company Profile Website is a web-based application developed to enhance the digital presence of Sweet n Sip. This project is a continuation of the previous frontend-only company profile and is now extended into a full-stack web application using Laravel.

The website not only presents company information but also introduces an admin management system to handle content dynamically.

---

## 🚀 Features

### User Side

* Company profile homepage
* Product showcase / best sellers
* Gallery section
* Reservation or contact feature

### Admin Side

* Admin login authentication
* Dashboard for managing website content
* Manage products (add, edit, delete)
* Manage gallery content
* Manage reservations (if implemented)

---

## 🛠️ Tech Stack

* **Frontend**: HTML, CSS, JavaScript
* **Backend**: PHP (Laravel Framework)
* **Database**: MySQL

---

## 🔄 Project Background

This project is a continuation of a previously developed frontend company profile repository. The initial version focused on static UI/UX design, while this version integrates backend functionality and database management to create a fully dynamic web application.

---

## ⚙️ Installation & Setup

1. Clone the repository

```bash
git clone https://github.com/dfbtiv/sweetsip-company-profile
```

2. Navigate to the project folder

```bash
cd your-repo
```

3. Install dependencies

```bash
composer install
```

4. Copy environment file

```bash
cp .env.example .env
```

5. Generate application key

```bash
php artisan key:generate
```

6. Set up database in `.env`

```env
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
```

7. Run migration

```bash
php artisan migrate
```

8. Run the server

```bash
php artisan serve
```

9. Open in browser

```
http://127.0.0.1:8000
```

---

## 🔐 Admin Access

Admin login page:

```
/admin/login
```

---

## 📌 Project Status

This project is currently under development. Core features such as admin authentication and content management are being actively implemented.

---

## 👤 Author

* Dwi Febriyanti

---
