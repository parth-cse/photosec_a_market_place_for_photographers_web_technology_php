![Screenshot of Home Page](static/img/index.php.png)
# Photosec: A Photographer's Marketplace

Photosec is a web application designed to be an Amazon-like marketplace specifically for photographers. It empowers photographers to showcase their work, attract clients, and build their brand, while providing clients with a convenient platform to find and book talented photographers.

**Features**

* ***Photographer Profiles:*** Photographers can create profiles to showcase their expertise, experience, and portfolio.
* ***Client Booking Requests:*** Clients can search for photographers based on their needs and send booking requests. 
* ***Photographer Booking Management:*** Photographers can accept or reject booking requests, manage their schedules, and communicate with clients.
* ***Admin Feature Management:*** An admin role governs user verification, photographer featuring, and competition management.
* ***Competitions:*** Photosec hosts monthly and weekly competitions to incentivize photographers and recognize top talent. (Details on prize structure and submission process to be added later)

**Getting Started**

This section will be filled in once you have a deployment process in place. Here are some general steps to consider:

1. ***Prerequisites:*** 
    
    * Xampp Control Panel
    * Apache Server
    * phpMyAdmin
    * MySQL
2. ***Installation:*** 
    * Install Xampp
    * Create a Directory in htdocs directory of Xammp
    * Clone the Repository in that Directory
3. ***Configuration:*** 
    * In Xammp Control Panel start Apache Server and MySQL
    * Confirm the MySQL port is 3306
    * If it's not 3306 then change the $servername="127.0.0.1:<your port no>"; in "includes/config.php" and "includes/db_creation.php"
4. ***Running the Application:***
    
    * Open A Web Browser
    * Go to URL http://localhost/your_directory_name_in_htdocs/includes/db_creation.php
    * Then go to URL http://localhost/your_directory_name_in_htdocs"/tables/bookings.php
    * Repeat for all the files in tables directory
    * Now you are all set and with the project Go to URL http://localhost/your_directory_name_in_htdocs/index.php and explore the Photosec Web app 
    * Login Credentials for Admin of the website is EMAIL: admin@photosec.in and PASSWORD: 12345

**Authors**

1.  *Parth Jamkhedkar*

**License**

*Licensed under the MIT License*



