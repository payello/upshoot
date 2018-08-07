Upshoot coding test.

Instructions

1) Clone the repository using either ssh or https
2) Run ``` git init ```
2) In the command line cd into the project name.
3) Setup the .env file run ``` cp .env.example .env ``` in the command line then complete the details in the .env file 
for your local machine.
4) Add a database to MySQL. I have called mine 'magazine'.
5) Run ```php artisan key:generate ``` in the command line
6) Run ```php artisan migrate ``` to set up the database tables.
7) Run ```php artisan db:seed``` for the seeders - this is optional.
8) Task one database queries are inside the ``` database/task_one ``` directory. You can view the queries for each of the tasks there
9) The code for the first task is in a separate branch - 'cards'. 
