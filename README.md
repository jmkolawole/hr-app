## About Hr-App

It is a standalone application built to handle staff members of an organization. The application is very straightforward. Basically, to clone and use this project, you need a good understanding and working knowldge of PHP, Laravel and Javascript, with focus on Jquery and AJax. 


## :heavy_check_mark: Getting Started
This sets of instructions will get the application running on your system. As, stated above a good understanding of the languages and packages stated is very important.


## :rocket: Installation

#### 1. Clone the project

Via SSH (recommended):
```
git@github.com:jmkolawole/hr-app.git
```

Or via HTTPS:
```
https://github.com/jmkolawole/hr-app.git
```

#### 2. Install Dependencies With Composer
Change directory to your project folder and run:
```
composer install
```

#### 3. Setup Environment Configuration
Create a _.env_ file from _.env.example_ file provided in the cloned project
```
cp .env.example .env
```
Create a _.env.testing_ file from _.env.testing.example_ file provided in the cloned project
```
cp .env.testing.example .env.testing
```

#### 4. Generate App Key
```
php artisan key:generate
```

#### 5. Run Migration and Seeders for the application

```
php artisan migrate --database=mysql --seed
```

Cheers! You have successfully setup Hr-app  on your local machine.
:+1: :+1: :+1:

## :package: Built With

* [Laravel](http://laravel.com/docs/)
* [Composer](https://getcomposer.org/)

## :handshake: Contributors
Hr- App
- JIMOH Mofoluwasho Kolawole (jmkolawole@gmail.com_) - Product Owner / Developer / Maintainer

