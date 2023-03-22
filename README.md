# Complete E-Commerce Web Application-Project V-1

## About CodexWise-Laravel-ECommerce V-1

It is a Laravel 9 blade template based project reflecting full features of a single vendor eCommerce platform. This Project is Developed by [Mokammel Hossain Tanvir](https://github.com/mokammeltanvir) as Backend Developer, [Mehedin Hasan Anik](https://github.com/mehedihanik) as Frontend Developer and [Nayem Islam](https://github.com/nayem18) as Web Designer. This project for learning purpose for ICT-3204-Project-2 Course is a part of B.Sc. in Computer Science and Engineering (CSE) program of [Shanto-Mariam University of Creative Technology](https://smuct.ac.bd/).

##

## :card_index_dividers: Tech Stack

**FrontEnd:**

1. HTML
2. CSS
3. JavaScript
4. jQuery/JS Plugins
5. Bootstrap 4

**BackEnd:**

1. Laravel: ^9.19
2. PHP: ^8.0.2
3. bumbummen99/shoppingcart ^4.2
4. intervention/image
5. Sweet Alert 2.0
6. Notification Alert -Toastr
7. Datatables
8. MySQL

## Getting Started Step by Step

1. In your root folder, clone the project file using git clone https://github.com/mokammeltanvir/ICT3204-Project-Ecommerce.git
2. Open terminal (bash/cmd). Then go to project folder using command

```sh
cd ICT3204-Project-Ecommerce
```

3. Then install required files and libraries using

```sh
composer install
```

4. Then create a .env file and generate key for this project using command

```sh
cp .env.example .env

php artisan key:generate
```

5. Then compile all CSS & JS files together using this command

```sh
npm install && npm run dev
```

or

```sh
yarn install && yarn run dev
```

6. Create a database in MYSQL and connect it with your project via updating .env file.
7. After connecting the db with project, then run command

```sh
php artisan migrate:fresh --seed
```

After completing the migration and seeding of db, you will have 1 System Admin ready for login in this project.

A. Admin -> Admin
Email -> admin@superadmin.com
Pass -> 12345678

Finally we are ready to run our project using this command 😄

```sh
php artisan serve
```

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
