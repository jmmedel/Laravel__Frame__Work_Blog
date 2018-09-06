# Laravel__Frame__Work_Blog
Laravel__Frame__Work_Blog

#How to use 
1. install  (composer install)
2. php artisan key:generate 
(Set your env file database create database in phpmyadmin)
3. php artisan migrate
4. composer dump-autoload
5. setup Database (php artisan db:seed --class=CommentSeeder )
6. setup Database (php artisan db:seed --class=Users  )
7. setup Database (php artisan db:seed --class=PostSeeder  )
8. php artisan serve 






# How to Reset Migration
Rollback all migrations and run them all again
php artisan migrate:refresh


