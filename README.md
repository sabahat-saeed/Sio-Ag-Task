# SIO management with Docker Support

## Project is based on Laravel 10.*


# SIO management

## Project is based on  Laravel 10.* 
* [Programing Languages](#programing)
* [Features](#feature1)
* [Requirements](#feature2)
* [How to install](#feature3)
* [Troubleshooting](#feature4)
* [License](#feature5)

<a name="programing"></a>
## Programing Languages used in this project:
* Html
* Css
* Bootstrap
* Jquery
* Php
* MySql
* Frameworks: 
	* Laravel 10.x

-----
<a name="feature1"></a>
## Starter Site Features:
* Laravel 10.x
* Back-end
	* Automatic install and setup system.
	* time logs.
    * evalution report.
	* Edit time log.
	* Delete time log
    * Only Admin can access.
* Packages included:
	* Datatables Bundle

-----
<a name="feature2"></a>
## Requirements

	PHP >= 8.2.
	Composer

-----
<a name="feature3"></a>
## How to install:
* [Step 1: Get the code in src Folder](#step1)
* [Step 2: Use Composer to install dependencies](#step2)
* [Step 3: Create database](#step3)
* [Step 4: Install](#step4)
* [Step 5: Start Page](#step5)


-----
<a name="step1"></a>
### Step 1: Get the code, is it in src folder- 

-----
<a name="step2"></a>
### Step 2: Use Composer to install dependencies

Laravel utilizes [Composer](http://getcomposer.org/) to manage its dependencies. First, download a copy of the composer.phar.
Once you have the PHAR archive, you can either keep it in your local project directory or move to
usr/local/bin to use it globally on your system.
On Windows, you can use the Composer [Windows installer](https://getcomposer.org/Composer-Setup.exe).
Open terminal and go to the project foleder
Then run:

    composer dump-autoload
    composer install --no-scripts
	
	Note: If there is any error during composer update or composer install then run this following command.
	composer update --ignore-platform-reqs

-----
<a name="step3"></a>
### Step 3: Create database

If you finished first two steps, now you can create database on your database server(MySQL). You must create database
Just go to the phpmyadmin and create the new database
After that, copy .env.example and rename it as .env and put connection and change default database connection name, only database connection, put name database, database username and password.

-----
<a name="step4"></a>
### Step 4: Install

Go to your cmd or terminal then type your project root path and after that type the following:

php artisan key:generate

npm install && npm run dev

Now that you have the environment configured, you need to create a database configuration for it. For create database tables use this command:

    php artisan migrate

And to initial populate database use this:

    php artisan db:seed

If you install on your localhost in folder ProjectFolder, you can type on web browser:

	http://localhost/ProjectFolder/

OR Run the command " php artisan serve ", and open on the browser the url you get in console :):

-----
<a name="step5"></a>
### Step 5: Start Page

You can now login or register into system


-----
<a name="feature4"></a>
## Troubleshooting

### RuntimeException : No supported encrypter found. The cipher and / or key length are invalid.

    php artisan key:generate

### Site loading very slow

	composer dump-autoload --optimize
OR

    php artisan dump-autoload

-----
<a name="feature5"></a>
## License

This is free software distributed under the terms of the MIT license





## Docker Setup for Laravel

# docker-laravel 🐳

<p align="center">
    <img src="https://user-images.githubusercontent.com/35098175/145682384-0f531ede-96e0-44c3-a35e-32494bd9af42.png" alt="docker-laravel">
</p>
<p align="center">
    <img src="https://github.com/ucan-lab/docker-laravel/actions/workflows/laravel-create-project.yml/badge.svg" alt="Test laravel-create-project.yml">
    <img src="https://github.com/ucan-lab/docker-laravel/actions/workflows/laravel-git-clone.yml/badge.svg" alt="Test laravel-git-clone.yml">
    <img src="https://img.shields.io/github/license/ucan-lab/docker-laravel" alt="License">
</p>

## Introduction

Build a simple laravel development environment with docker-compose. Compatible with Windows(WSL2), macOS(M1) and Linux.

## Usage

```bash

$ docker compose build
$ docker compose up -d
$ docker compose exec app composer create-project --prefer-dist laravel/laravel .
$ docker compose exec app php artisan key:generate
$ docker compose exec app php artisan storage:link
$ docker compose exec app chmod -R 777 storage bootstrap/cache
$ docker compose exec app php artisan migrate
```

http://localhost


## Tips

- Read this [Taskfile](https://github.com/ucan-lab/docker-laravel/blob/main/Taskfile.yml).
- Read this [Makefile](https://github.com/ucan-lab/docker-laravel/blob/main/Makefile).
- Read this [Wiki](https://github.com/ucan-lab/docker-laravel/wiki).

## Container structures

```bash
├── app
├── web
└── db
```

### app container

- Base image
  - [php](https://hub.docker.com/_/php):8.3-fpm-bullseye
  - [composer](https://hub.docker.com/_/composer):2.6

### web container

- Base image
  - [nginx](https://hub.docker.com/_/nginx):1.25

### db container

- Base image
  - [mysql/mysql-server](https://hub.docker.com/r/mysql/mysql-server):8.0

### mailpit container

- Base image
  - [axllent/mailpit](https://hub.docker.com/r/axllent/mailpit)
