# Contact APP

Suitable for those of you who want to make
contact records of each company

## Features

- Filtering by Companies
- Search Functionality
- View Model Binding
- CRUD Functionality

## Require

| Need             | Version                 |
| ---------------- | ----------------------- |
| PHP | ^7.3 |
| Laravel | 8 |

## Run Locally

Clone the project

```bash
  git clone https://github.com/reimiii/Contact.git
```

Go to the project directory

```bash
  cd Contact
```

Install with [Composer](https://getcomposer.org)

```bash
  composer install
```

## Environment Variables

To run this project,
you will need to add the
following environment
variables to your `.env` file. copy `.env.example`
to `.env` and Create database name `contact`
in your database

Connect to database in `.env`

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contact
DB_USERNAME=root
DB_PASSWORD=
```

## Artisan Command

run `key:generate` with artisan command

```bash
  php artisan key:generate
```

run `migrate:fresh --seed` with artisan command

```bash
  php artisan migrate:fresh --seed
``` 

run `serve` with artisan command

```bash
  php artisan serve
``` 

