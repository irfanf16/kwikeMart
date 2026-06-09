# KwikeMart - Multi-Category Marketplace

A **feature-rich Laravel marketplace** with nested product categories and multi-vendor support.

## Tech Stack

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=flat&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)

## Features

- Nested category tree (kalnoy/nestedset)
- Multi-vendor product listings
- Smart search and category filtering
- Cart, wishlist, and checkout
- Order tracking
- Fully responsive

## Getting Started

```bash
composer install && npm install
cp .env.example .env && php artisan key:generate
php artisan migrate --seed && php artisan serve
```

## License
MIT
