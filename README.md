<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

# Movie Library API

## Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
  - [API Endpoints](#api-endpoints)
  - [Postman Collection](#postman-collection)
- [Database Schema](#database-schema)
- [Contributing](#contributing)
- [License](#license)



  ## Overview
**Movie Library API** is a RESTful API built using Laravel, designed to manage a movie library. The API supports basic CRUD operations for movies, including advanced features such as pagination, filtering, and sorting.

## Features
- **CRUD Operations**: Create, Read, Update, and Delete movies.
- **Pagination**: Efficiently paginate movie lists.
- **Filtering**: Filter movies by genre or director.
- **Sorting**: Sort movies by release year, either in ascending or descending order.
- **Rating Management**: Manage user ratings for movies.

## Technologies Used
- **Backend Framework**: Laravel 10
- **Database**: MySQL
- **Authentication**: JWT (JSON Web Token)
- **API Testing**: Postman

## Installation
To set up the project locally, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/movie-library-api.git
   cd movie-library-api


Install dependencies:
composer install

Create a copy of the .env file:
cp .env.example .env


Generate an application key:
php artisan key:generate

Set up JWT Authentication:
php artisan jwt:secret
Configuration

    Database Configuration:
        Update your .env file with your database credentials:

        env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=movie_library
    DB_USERNAME=root
    DB_PASSWORD=your_password

Migrate the database:

bash

php artisan migrate

Seed the database (optional):

bash

    php artisan db:seed

Usage
API Endpoints

The API provides the following endpoints:
Movies

    GET /api/movies: Retrieve a list of all movies (supports pagination, filtering, and sorting).
    GET /api/movies/{id}: Retrieve a single movie by its ID.
    POST /api/movies: Create a new movie.
    PUT /api/movies/{id}: Update an existing movie.
    DELETE /api/movies/{id}: Delete a movie.

Ratings

    POST /api/ratings: Create a new rating for a movie.
    PUT /api/ratings/{id}: Update an existing rating.
    DELETE /api/ratings/{id}: Delete a rating.

Postman Collection

To facilitate testing, a Postman collection is included with this project. Import the collection to your Postman workspace to quickly test the API endpoints.

    Download Postman Collection

Database Schema

The database schema consists of the following tables:
Movies Table
Column	Type	Description
id	bigint	Primary key
title	varchar	Title of the movie
director	varchar	Director of the movie
genre	varchar	Genre of the movie
release_year	integer	Year the movie released
description	text	Description of the movie
created_at	timestamp	Creation timestamp
updated_at	timestamp	Update timestamp
Ratings Table
Column	Type	Description
id	bigint	Primary key
user_id	bigint	ID of the user who rated the movie
movie_id	bigint	ID of the rated movie
rating	integer	Rating value (1-5)
review	text	Review of the movie (optional)
created_at	timestamp	Creation timestamp
updated_at	timestamp	Update timestamp
Contributing

Contributions are welcome! Please follow these steps to contribute:

    Fork the repository.
    Create a new branch (git checkout -b feature-branch).
    Make your changes.
    Commit your changes (git commit -m 'Add new feature').
    Push to the branch (git push origin feature-branch).
    Open a Pull Request.

License

This project is licensed under the MIT License - see the LICENSE file for details.

markdown


### ملاحظات إضافية:
- **Postman Collection**: تأكد من إنشاء مجموعة (Collection) في Postman تشمل جميع العمليات المدعومة في الـ API، ثم قم بتصدير المجموعة وإرفاق الرابط في ملف README.
- **License**: إذا كان المشروع مفتوح المصدر، يمكنك تحديد ترخيص مثل MIT.
- **Contributing**: إذا كنت تعمل على مشروع مفتوح المصدر، يمكنك توضيح كيفية المساهمة فيه.

هذا الملف يقدم وصفًا شاملًا للمشروع ويساعد أي شخص يريد إعداد المشروع أو المساهمة فيه.

