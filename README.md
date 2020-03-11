# TODOAPP

:grey_question: TODO APP is just a simple CRUD functionality using laravel framework and bootstrap.

:pushpin: To enable to run the project kindly follow the steps below:

:small_blue_diamond: *Goto it's app root directory and run the command:*
```
$ composer install
```
:small_blue_diamond: *Create .env file*  

:small_blue_diamond: *configure .env to connect your database*  

:small_blue_diamond: *Create new APP_KEY encryption:*  
```
$ php artisan key:generate
```



:open_file_folder: **Database tables and sample data**  

:small_blue_diamond: *Run the following commands:*  
> to create tables on the database
```
$ php artisan migrate
```
> to generate sample data
```
$ php artisan db:seed 
```
> Or you can just simply run:
```
$ php artisan migrate:refresh --seed
```


:sparkler: :tada: :sparkler: That's it! :smiley:

Created by kevinlebadesos.com
