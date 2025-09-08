# Luxury-tents-reservation
A web-based reservation platform for booking luxury tents, built as part of a coding challenge. The project demonstrates front-end development, WordPress/PHP backend integration, and MySQL database support.

 Features

Responsive Frontend built with HTML, CSS, JavaScript, and Bootstrap.

Dynamic Reservation System:

Select check-in / check-out dates.

Choose number of tents and guests.

View availability and total price calculation.

Save reservation details to database.

Content Management via WordPress (intended integration).

Git Version Control with separate main (stable) and dev (active development) branches.

Tech Stack

Frontend: HTML5, CSS3, JavaScript, Bootstrap

Backend: PHP (WordPress as CMS)

Database: MySQL

Version Control: Git & GitHub

Design Reference: Figma

## Database Setup
1. Import `camp_booking.sql` using phpMyAdmin or MySQL CLI.
2. Update `dbconnection.php` with your DB credentials:
   - Host: localhost
   - User: root
   - Password: (leave blank for XAMPP default)
   - Database: luxury_tents


luxury-tents-reservation/
│── index.html          # Homepage  
│── reservation.html    # Reservation form & guest info  
│── confirmation.html   # Reservation success page  
│── about.html          # About the camps  
│── css/                # Stylesheets  
│── js/                 # JavaScript files  
│── images/             # Assets & tent images  
│── README.md           # Project documentation  
