# TODOAPP

:grey_question: TODO APP is just a simple CRUD functionality using laravel framework and bootstrap.

:pushpin: To enable to run the project kindly follow the steps below:

- *Goto it's app root directory and run the command:*
```
$ composer install
```
- *Create .env file*  

- *configure .env to connect your database*  

- *Create new APP_KEY encryption:*  
```
$ php artisan key:generate
```



:open_file_folder: **Database tables and sample data**  

- *Run the following commands:*  
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

Created by https://kevinlebadesos.com
