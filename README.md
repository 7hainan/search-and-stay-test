# Project: Book Store CRUD

This Project PHP/Laravel is a CRUD implementation (Create, Read, Update, Delete) for a entity Book.

## Requirements

- Docker / Docker-Compose
- IDE (Integrated Development Environment)
- MySQL

## Features

The project implements the following features:

- **Book create (Book):** Insert on DB a new book.
- **Book Update(Book):** Update information for an existing book.
- **Exclusão de Livro (Book):** Remove a book from the database.
- **Buscar Livro por ID (Book):** Returns information for a specific book based on ID.
- **Buscar todos os Livros (Book):** Returns all information of all registered books.


## Step by step to run the project
Clone the Repo
```sh
git clone https://github.dev/7hainan/search-and-stay-test.git app-laravel
```
```sh
cd app-laravel/
```


Create the file .env
```sh
cp .env.example .env
```


Update file environment variables .env
```dosini
APP_NAME=SearchAndStay
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=chose_a_db_name
DB_USERNAME=user_name
DB_PASSWORD=your_pass
```


Run the project container
```sh
docker-compose up -d
```


Access to container
```sh
docker-compose exec app bash
```


Install the project dependencies
```sh
composer install
```


Generate the laravel key
```sh
php artisan key:generate
```
Laravel Tips (for starting a db with fake data)
```sh
php artisan migrate:fresh --seed
```
Postman collection is on the project : postman-collection.json

Project Access
[http://localhost:8989](http://localhost:8989)
