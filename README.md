<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<img src="https://github.com/user-attachments/assets/5c5f59e3-e90e-4636-a6f1-c7563109203c">

# Microblogging Laravel Project

This is a microblogging web application built with Laravel. The application allows users to create, edit, delete, and comment on blog posts.

# Installation

Follow these steps to set up the project on your local environment.

### Prerequisites

Ensure you have the following installed:
- PHP (version 8.1 or higher)
- Composer
- Node.js and npm
- MySQL or any other database supported by Laravel

### Installation Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/DannJohnrem/comment-blade-microblog
   ```
   ```bash
   cd comment-blade-microblog
   ```
2. **Install Dependencies**
   ```bash
       composer install
   ```
   and
   
   ```bash
       npm install
   ```
3. **Environment Configuration**
   Create a `.env` file by copying the `.env.example`:
   
   ```bash
       cp .env.example .env
   ```

   Update the `.env` file with your database credentials and other configurations:

    ```bash
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_database_name
        DB_USERNAME=your_username
        DB_PASSWORD=your_password
   ```
4. **Generate Application Key**
    ```bash
        php artisan migrate
    ```
    or if you're using laravel sail with wsl:

   ```bash
        ./vendor/bin/sail artisan migrate
   ```    

6. **Run Migrations and Seeders**
    ```bash
        php artisan migrate --seed
    ```
    or if you're using laravel sail with wsl:

   ```bash
        ./vendor/bin/sail artisan migrate --seed
   ```    

7. **Build Frontend Assets**
    Compile the frontend assets:
   
    ```bash
        npm run dev
    ```

9. **Run the Development Server**
   - if you're using docker just run the container or you can run command `sail up`.
   - and if herd just run the services provided by herd
   - `php artisan serve` if you want the laravel serve the localhost

  You actually can use variety of development environment like:
    - XAMPP
    - Herd
    - Docker
    - WAMP
    - Others

# Features
- User authentication (registration and login)
- Create, read, update, delete (CRUD) operation
- Creating a comment
- Input validations for comments
- Ability to edit and delete your own comments
- Restricted editing and deleting of others' comments

   

