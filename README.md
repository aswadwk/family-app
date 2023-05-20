<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Family App

Family App is a web application that allows users to create a family tree and add family parent and children.

## How to run the project

1. Clone the project
2. Run `composer install`
3. run `cp .env.example .env`
4. Cretae a database and add the database name to the .env file
5. Run `php artisan migrate`
6. Run `php artisan serve`
7. Open the project in the browser

## Endpoints Resful API

1. `GET /api/families` - Get all families
2. `POST /api/families` - Create a new family
3. `GET /api/families/{id}` - Get a family by id
4. `PUT /api/families/{id}` - Update a family by id
5. `DELETE /api/families/{id}` - Delete a family by id
