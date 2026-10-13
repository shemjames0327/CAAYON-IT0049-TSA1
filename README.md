# Tasks for Today Management System

A web-based task management dashboard built with CodeIgniter 4 and Bootstrap 5. This project is submitted as the Technical Summative Assessment 1 (TSA1) for IT0049 (Web System Technologies)[cite: 92].

## Developer Information
* **Student Name:** Caayon, Shem James D.[cite: 92]
* **Section:** TB32[cite: 92]
* **Professor:** Mr. Joseph Calleja[cite: 92]

## System Features
* **Welcome Page:** A filtered dashboard displaying only tasks scheduled for the current day[cite: 92].
* **Task List:** A complete, unfiltered directory of all tasks ordered by date[cite: 92].
* **User Profile:** Displays the system's demo user record[cite: 92].
* **About Page:** Static developer identification page[cite: 92].

## Local Setup Instructions (XAMPP)

1. **Clone or Move the Repository**
   Move the `Caayon_TSA1` project folder into your XAMPP `htdocs` directory (e.g., `C:\xampp\htdocs\Caayon_TSA1`).

2. **Set Up the Database**
   * Open XAMPP and start the **Apache** and **MySQL** modules.
   * Go to `http://localhost/phpmyadmin/`.
   * Create a new database named `tasks_for_today`.
   * Click on the `tasks_for_today` database, go to the **Import** tab, and upload the included `tasks_for_today.sql` file[cite: 92].

3. **Configure the Environment**
   * Locate the `env` file in the project's root folder and rename it to `.env`.
   * Open the `.env` file and update the following lines to connect the database and set the base URL:
     ```ini
     CI_ENVIRONMENT = development
     app.baseURL = 'http://localhost/Caayon_TSA1/public/'

     database.default.hostname = localhost
     database.default.database = tasks_for_today
     database.default.username = root
     database.default.password = 
     database.default.DBDriver = MySQLi
     ```

4. **Run the Application**
   Open your web browser and navigate to: `http://localhost/Caayon_TSA1/public/`
