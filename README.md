## Ticket Support System: Supercharge Your Support Operations!

**[TOC]**

**Overview:**

This comprehensive support system empowers you to manage tickets, departments, categories, users, and comments with unparalleled efficiency. Streamline your support workflow and deliver exceptional customer experiences.

**Key Features:**

- **Intuitive Ticket Management:** Create, edit, and resolve support tickets with ease. Keep track of ticket status, priority, and communication history for a clear overview.
- **Organized Departments & Categories:** Group tickets logically based on departments and categories, enabling efficient routing and resolution.
- **Granular User Management:** Set up user accounts with appropriate roles and permissions, ensuring secure access control.
- **Robust Comment System:** Facilitate seamless communication by adding comments to tickets. Maintain a clear record of interactions and updates.
- - **Inventroty:** you can add product or part from database.
##download file csv  is work but you maust download the library

**Getting Started (Lightspeed Setup):**

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/Nourwp/laravel-support-tickets-system.git
   ```


2. **Install Dependencies (Fuel Your System):**

   ```bash
   cd laravel-support-tickets-system
   composer install
   ```

3. **Configure Your Environment (Tailor the Experience):**

   - Copy `.env.example` to `.env`.
   - Generate an application key: `php artisan key:generate`
   - Edit `.env` to customize your database credentials, email configuration, and other settings. Refer to the Laravel documentation for detailed environment variable options.

4. **Database Setup (Fill the Tank):**

   - Migrate the database schema to match the system's structure: `php artisan migrate`
   - Seed the database with sample data to get a feel for the system:
     ```bash
     php artisan db:seed --class=DepartmentSeeder
     php artisan db:seed --class=CategorySeeder
     php artisan db:seed --class=UserSeeder
     php artisan db:seed --class=TicketSeeder
     php artisan db:seed --class=CommentSeeder
     ```
   - Note: All user passwords are initially set to "password". Modify user passwords and other seeded data as needed.

5. **Compile Assets (Polish the Interface):**

   ```bash
   npm run dev
   ```
5. **Compile backend :**

   ```bash
   php artisan serve
**Now, You're Ready to Launch!:**

Navigate to your Laravel application's base URL in your browser (http://127.0.0.1:8000) to begin using the Ticket Support System. 
# Documentation : http://127.0.0.1:8000/api/documentation


**Pro Tip: Customize Your System (Unleash Its Potential):**

- Explore the Laravel framework's vast capabilities to tailor the system to your specific needs. Customize views, extend functionalities, and integrate seamlessly with other applications.

**Contributing (Fuel the Growth):**

We welcome your contributions to this project! Refer to the CONTRIBUTING.md file for guidelines on how to submit pull requests and get involved in the development process.

**License:**


This project is licensed under the MIT License. See the LICENSE file for details.

**Support:**

For any questions or issues, feel free to create an issue on this GitHub repository. We're committed to providing prompt and helpful support.
