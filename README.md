Ticket Support System
Welcome to the Ticket Support System documentation. This system provides a comprehensive solution for managing support tickets, departments, categories, users, and comments.

Setup
Follow these steps to set up the system locally:

Clone the Repository: Navigate to your desired directory and clone the repository.
bash
Copy code
git clone <repository-url>
Install Dependencies: Move into the project directory and install the PHP dependencies using Composer.
bash
Copy code
cd laravel-support-tickets-system
composer install
Environment Configuration: Copy the .env.example file to .env and generate an application key.
bash
Copy code
cp .env.example .env
php artisan key:generate
Database Setup: Migrate the database schema and seed it with sample data.
bash
Copy code
php artisan migrate
php artisan db:seed --class=DepartmentSeeder
php artisan db:seed --class=CategorySeeder
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=TicketSeeder
php artisan db:seed --class=CommentSeeder
Note: All user passwords are 'password', and the admin email is 'admin@gmail.com'.

Compile Assets: Compile your assets using npm.
bash
Copy code
npm run dev
Usage
Once the setup is complete, you can start using the Ticket Support System. Here are the key features:

Ticket Management: Create, update, and resolve support tickets.
Department and Category Management: Organize tickets by departments and categories.
User Management: Manage users and their roles.
Comment System: Add comments to tickets for communication and updates.
Contributors
Noureldeen Kamal (noureldeen.kam05@gmail.com)
License
This project is licensed under the MIT License. See the LICENSE file for details.

