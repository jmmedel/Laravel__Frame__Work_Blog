# Laravel__Frame__Work_Blog
Laravel__Frame__Work_Blog

#How to use 
1. install  (composer install)
2. php artisan key:generate 
3. php artisan migrate
4. composer dump-autoload
5. setup Database (php artisan db:seed --class=CommentSeeder )
6. setup Database (php artisan db:seed --class=DatabaseSeeder  )
7. setup Database (php artisan db:seed --class=PostSeeder  )
8. php artisan serve 







Rollback all migrations and run them all again
php artisan migrate:refresh

php artisan migrate:refresh --seed

