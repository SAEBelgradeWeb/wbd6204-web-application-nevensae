## Introduction
This project is coded in Laravel Jetstream Livewire framework. The website is an art competition webpage that comes with full administrator features for the contests. To hit the administrator route navigate to the /dashboard and register as an admin. You can also go directly to the /register route. To load already prepared content load the mysql file "db_to_get_you_started". Website is clean without it so make sure to load the file to get you started. You will need a MySQL program to load the file. Good luck and thanks for checking this project out!

## Requirements
For this project you need the following installed Composer, Node.js, Laragon, and PHPStorm

## Instructions
To use this project close the repository in the root directory of your Laragon usually www folder. Restart the Laragon service and load it in the browser. Inside the terminal navigate to the project and run "composer install" and "npm install" commands. After they are done open your project using PHPStorm and create a .env file copy the existing .env-example into it and make sure that your DB_NAME matches the record in your database. Once that is done all you need to do is run php artisan key:generate and you have succesfuly mounted the project. Good luck and have fun!

To register as an admin and see the admin panel hit /register route and register as an admin there or go to the /login route and use the already prepared admin user;  username:neven@example.com password:admin123 

