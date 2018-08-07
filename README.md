Upshoot coding test.

Instructions

1) Clone the repository using either ssh or https - run ``` git clone git@github.com:payello/upshoot.git . ```
2) Run ``` git init ```
3) Setup the .env file run ``` cp .env.example .env ``` in the command line then complete the details in the .env file 
for your local machine.
4) Add a database to MySQL. I have called mine 'magazine'.
5) If running MacOS - Install Valet - ``` composer global require laravel/valet```
NB if you are not running MacOS set up homestead by following the instructions here - https://laravel.com/docs/5.6/homestead and skip steps 6 and 7.
6) Run ``` valet install``` in the command line
7) Run ``` valet park ``` then ```valet link ``` and you can see the link to browse this at ``` valet links```
8) Run ```composer install```
5) Run ```php artisan key:generate ``` in the command line.
6) Run ```php artisan migrate ``` to set up the database tables.
7) Run ```php artisan db:seed``` for the seeders - this is optional.
8) Task one database queries are inside the ``` database/task_one ``` directory. You can view the queries for each of the tasks there
9) The code for the first task is in a separate branch - 'cards'.
    Run the following commands:
        ```git fetch origin```
```        git checkout -b cards origin/cards```
   ```     git merge master```
10) The code for the final task is in the branch called 'bookstore_page'
    Run the following commands:
       ``` git fetch origin```
```        git checkout -b bookstore_page origin/bookstore_page```
```        git merge master```
