# Real Estate Booking Admin Panel :

This project is a Laravel-based web application for managing real estate properties and bookings. It features an admin login system, property management (create, list, delete), and booking management (create, list, delete).

---

## Admin Login :

The admin must log in to access the dashboard.
![alt text](img/image-4.png)
![alt text](img/image-5.png)

---

## Property List

After login, the admin can view a list of all properties in the system.
![alt text](img/image-6.png)

---

## Add a Property

Admins can add new properties using a form.
![alt text](img/image-7.png)

---

## Add a Property

Admins can edit properties using a form.
![alt text](img/image-8.png)

---

## Delete a Property

Each property can be individually deleted from the list.
![alt text](img/image-9.png)

---

## Booking List

Admins can view all bookings linked to properties.
![alt text](img/image-10.png)

---

## Add a Booking

Admins can create a booking by selecting a user, a property, and the booking dates.
![alt text](img/image-11.png)

---

## Delete a Booking

Admins can also delete existing bookings.
![alt text](img/image-12.png)

---

## Technologies Used

-   Laravel 9
-   PHP 8
-   MySQL
-   Blade (template engine)
-   Bootstrap (or another CSS framework)
-   Laravel Breeze / Laravel UI (if used for auth)

---

## Installation

```bash
git clone https://github.com/your-repo/real-estate-admin.git
cd real-estate-admin
composer install
cp .env.example .env
php artisan key:generate
```
