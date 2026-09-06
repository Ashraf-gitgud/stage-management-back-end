# Stage Management — Backend

Laravel REST API for internship (stage) management. Roles: **ADMIN**, **SUPERVISOR**, **STUDENT**.

## Stack

- Laravel 13 + PHP 8.3+
- Laravel Sanctum (API tokens)
- MySQL
- L5-Swagger (OpenAPI / Swagger UI)

## Requirements

- PHP 8.3+
- Composer
- MySQL

## Setup

```bash
cd stage-management-back-end
composer install
cp .env.example .env
php artisan key:generate
```

Configure the database in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=csm
DB_USERNAME=root
DB_PASSWORD=
```

Then migrate and seed:

```bash
php artisan migrate:fresh --seed
php artisan serve
```

API: `http://localhost:8000`  
Swagger UI: [http://localhost:8000/api/documentation](http://localhost:8000/api/documentation)

## Seeded accounts

All passwords: `password`


| Role       | Email                                             | Notes                  |
| ---------- | ------------------------------------------------- | ---------------------- |
| ADMIN      | [admin@example.com](mailto:admin@example.com)     | Full management access |
| SUPERVISOR | [ahmed@example.com](mailto:ahmed@example.com)     | 3 assigned students    |
| SUPERVISOR | [sara@example.com](mailto:sara@example.com)       | 3 assigned students    |
| STUDENT    | [youssef@example.com](mailto:youssef@example.com) | Supervisor: Ahmed      |
| STUDENT    | [imane@example.com](mailto:imane@example.com)     | Supervisor: Ahmed      |
| STUDENT    | [omar@example.com](mailto:omar@example.com)       | Supervisor: Ahmed      |
| STUDENT    | [nour@example.com](mailto:nour@example.com)       | Supervisor: Sara       |
| STUDENT    | [karim@example.com](mailto:karim@example.com)     | Supervisor: Sara       |
| STUDENT    | [salma@example.com](mailto:salma@example.com)     | Supervisor: Sara       |




## Auth API


| Method | Endpoint      | Auth   | Description                |
| ------ | ------------- | ------ | -------------------------- |
| POST   | `/api/login`  | Public | Returns user + token       |
| POST   | `/api/logout` | Bearer | Revokes current token      |
| GET    | `/api/me`     | Bearer | Current authenticated user |


Use the returned token as `Authorization: Bearer {token}`.

