
# Laravel LMS SMAN 12

Learning Management System untuk SMAN 12 Antang yang dibuat menggunakan framework Laravel


## Run Locally

Clone the project

```bash
  git clone https://github.com/alwijein/laravel_lms_sman12.git
```

Go to the project directory

```bash
  cd laravel_lms_sman12
```

Install dependencies

```bash
  composer install
```

Copy env.example

```bash
  cp .env.example .env
```

Generate key

```bash
  php artisan key:generate
```

Migrate into database

```bash
  php artisan serve --seed
```

Start the server

```bash
  php artisan serve
```


## Email and Password Default Admin


| Name | Email     | Password                |
| :-------- | :------- | :------------------------- |
| `admin` | `admin@mail.io` | admin123 |


## Tech Stack

**Client:** Boostrap, Ajax.

**Server:** PHP, Laravel, Mysql


## Feedback

If you have any feedback, please reach out to us at alwijein@gmail.com

