# Ticket support system
## Setup
 `cd laravel-support-tickets-system`
 ` composer install`
 `cp .env.example .env`
 `php artisan key:generate`
 `php artisan migrate`
 ` npm run dev`
 `php artisan db:seed --class=DepartmentSeeder`

`php artisan db:seed --class=CategorySeeder`

 `php artisan db:seed --class=UserSeeder`

 `php artisan db:seed --class=TicketSeeder`

 `php artisan db:seed --class=CommentSeeder`

All user passwords are 'password' and the admin email is 'admin@gmail.com'.