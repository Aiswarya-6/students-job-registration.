                                                               **Student Job-Registration**

1.	Download and Installation(V9-laravel) create a new Laravel project by using Composer directly.by using 
    command : composer create-project Laravel/Laravel student-job-registration
    
2.	Environment Files This package ships with a .env file in the root of the project.

4.	Composer Laravel project dependencies are managed through the PHP Composer tool. The first step is to install 
    the dependencies by navigating into your project in terminal and typing this 
    command : composer install
    
4.	Create Database You must create your database on your server and on your .env file update the following lines: 
	
DB_CONNECTION=mysql 
DB_HOST=127.0.0.1 
DB_PORT=3306 
DB_DATABASE=student-job-registration 
DB_USERNAME=root 
DB_PASSWORD=

5.	Artisan Commands You should see a green message stating your key was successfully generated. As well as you should see 
    the APP_KEY variable in your .env file reflected. 

    • run the built in migrations to create the database tables using 
      command : php artisan migrate 
    • The admi Panel credentials are inserted by using seeder ,so use the command below to run the seeder file 
      command : php artisan db:seed --class=UserSeeder 
    • running applications on the PHP development server using 
      command : php artisan serve
      
**Route Details**
**Register**
 • Run the URL with prefix ( example : http://127.0.0.1:8000/)
 
(GET) - http://127.0.0.1:8000/register/insert - Add data to Form
(POST) - http://127.0.0.1:8000/register/create - Create a new registration
(GET) - http://127.0.0.1:8000/dashboard - Display the register user  list

