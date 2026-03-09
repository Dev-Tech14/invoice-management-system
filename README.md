# Invoice Management System (Laravel + mPDF)

## Overview

This project is a simple **Invoice Management System** built using **Laravel** and **MySQL**.
It allows authenticated users to manage invoices and generate downloadable PDF invoices using the **mPDF** library.

The system implements authentication, invoice CRUD operations, and dynamic PDF generation.

---

## Features

### 1. User Authentication

* User registration
* User login
* Secure password hashing
* Authentication using Laravel's built-in authentication system

### 2. Invoice Management

Users can perform the following operations:

* Create a new invoice
* View all invoices
* Edit invoice details
* Delete invoices

Each invoice contains:

* Invoice Number
* Customer Name
* Customer Email
* Invoice Date
* Amount

### 3. PDF Generation

Invoices can be downloaded as **PDF files**.

PDFs are generated dynamically using the **mPDF** library and include:

* Invoice Number
* Customer Name
* Customer Email
* Invoice Date
* Amount

---

## Tech Stack

* PHP
* Laravel
* MySQL
* Bootstrap
* mPDF (for PDF generation)
* Composer
* Node.js / NPM

---

## Project Structure

The project follows **Laravel MVC architecture**.

Main components:

Controllers
`app/Http/Controllers`

Models
`app/Models`

Views
`resources/views`

Routes
`routes/web.php`

Database migrations
`database/migrations`

---

## Installation & Setup

### 1. Clone the repository

```bash
git clone <repository-url>
cd invoice-system
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install frontend dependencies

```bash
npm install
npm run dev
```

### 4. Configure Environment

Copy the environment file:

```bash
cp .env.example .env
```

Update database credentials in `.env`:

```
DB_DATABASE=invoice_system
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Run Database Migrations

```bash
php artisan migrate
```

### 7. Start Development Server

```bash
php artisan serve
```

Application will run at:

```
http://127.0.0.1:8000
```

---

## Usage

### Register User

Create a new user account using the register page.

### Login

Login with your registered credentials.

### Manage Invoices

After login you can:

* Create invoices
* Edit invoices
* Delete invoices
* View invoice list

### Download PDF

Click the **PDF button** on the invoice list page to download the invoice as a PDF.

---

## PDF Generation

PDF invoices are generated using **mPDF**, installed via Composer.

Command used:

```bash
composer require mpdf/mpdf
```

PDFs are generated dynamically and downloaded directly without storing files on the server.

---

## Author

Machine Test Implementation using **Laravel + mPDF**.
