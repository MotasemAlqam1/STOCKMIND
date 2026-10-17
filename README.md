
# STOCKMIND
### Smart Auto Parts Warehouse Management System

## Project Overview

STOCKMIND is a web-based warehouse management system
designed for automotive spare parts businesses.

The platform aims to help companies organize spare parts,
manage multiple warehouses, track inventory movements,
manage suppliers and purchase orders, and monitor stock levels.

This project is being developed as a graduation project
at Orange Coding Academy - Cohort 7.

## Technologies Used

### Frontend
- HTML5
- CSS3
- Bootstrap 5 RTL

### Backend (Planned)
- PHP
- MySQL

### Development Tools
- Visual Studio Code
- XAMPP
- Git & GitHub

## Frontend Pages

1. Landing Page
2. Login Page
3. Company Registration Page
4. Dashboard Overview
5. Warehouses Management
6. Parts Inventory
7. Stock Movements
8. Suppliers Management
9. Purchase Orders Management
10. Incoming Shipments Management
11. Reports & Analytics

## Main Features

- Multi-Warehouse Management
- Spare Parts and SKU Management
- Inventory Stock Tracking
- Stock Movements (IN, OUT, TRANSFER)
- Supplier Management
- Purchase Order Management
- Incoming Shipment Tracking
- Receiving Inspection
- Low Stock Alerts
- Inventory Reports and Analytics

## Current Development Status

The project is currently in the Frontend Development phase.

Completed:
- Responsive user interfaces
- Arabic RTL layout
- Landing Page
- Authentication UI
- Dashboard pages
- Inventory management interfaces
- Static tables, forms, and reports

Planned:
- PHP Backend Integration
- MySQL Database Integration
- Authentication and Authorization
- CRUD Operations
- Dynamic Inventory Tracking
- Arabic/English Language Switching
- Light/Dark Mode
- Advanced Analytics

Note: The current frontend uses demonstration data.
Forms, filters, and inventory operations are not connected
to a database.

## How to Run Locally

1. Install XAMPP.
2. Copy the STOCKMIND folder into `C:\xampp\htdocs\`.
3. Start Apache from XAMPP.
4. Open your browser.
5. Visit:

http://localhost/STOCKMIND/public/

### Dashboard

http://localhost/STOCKMIND/public/dashboard.php

## Project Structure

    STOCKMIND/
    ├── app/
    │   ├── Controllers/
    │   ├── Helpers/
    │   └── Models/
    ├── config/
    ├── database/
    ├── public/
    │   ├── assets/
    │   │   ├── css/
    │   │   ├── images/
    │   │   └── js/
    │   ├── index.php
    │   ├── login.php
    │   ├── register.php
    │   ├── dashboard.php
    │   ├── warehouses.php
    │   ├── parts.php
    │   ├── stock-movements.php
    │   ├── suppliers.php
    │   ├── purchase-orders.php
    │   ├── shipments.php
    │   └── reports.php
    ├── storage/
    │   └── uploads/
    ├── views/
    └── README.md

## Future Improvements

- Implement SOLID Principles in PHP architecture
- Connect forms with MySQL using PDO
- Implement secure authentication
- Add role-based access control
- Support multiple companies
- Implement automated stock updates
- Build interactive analytics dashboards

## Author

Orange Coding Academy - Cohort 7

Graduation Project - 2026

## Disclaimer

STOCKMIND is currently an educational project.
The frontend uses simulated data and is not ready
for production use.
