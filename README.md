# KwikeMart

A **Laravel 8 grocery/marketplace REST API** with nested category trees (kalnoy/nestedset), multi-store product listings, Stripe card management, voucher/discount engine, order scheduling, and an admin panel.

![Laravel](https://img.shields.io/badge/Laravel-8.65-FF2D20?style=flat&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=flat&logo=php)
![Sanctum](https://img.shields.io/badge/Sanctum-2.12-FF2D20?style=flat&logo=laravel)
![NestedSet](https://img.shields.io/badge/kalnoy%2Fnestedset-6.0-green?style=flat)
![Stripe](https://img.shields.io/badge/Stripe-7.x-008CDD?style=flat&logo=stripe)
![Telescope](https://img.shields.io/badge/Laravel_Telescope-4.6-FF2D20?style=flat&logo=laravel)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql)

## Features

**Public/Guest** — Register, login, home screen (banners + featured categories), product detail, category product listing.

**Authenticated** — Favorites (add/remove/list), address book (with lat/lng), cart (per-store with tax/sub-total/total), order placement (address + payment + voucher + scheduled delivery + Stripe card nonce), saved Stripe card management (list/add/remove), voucher application, profile update.

**Admin Panel (web)** — Category management (`kalnoy/nestedset` unlimited hierarchy), driver, product/product-store, nutrition, tags, stores, banners, roles, app settings.

## Database Schema

| Table | Key Columns | Purpose |
|---|---|---|
| `users` | `id` (UUID), `name`, `email`, `phone`, `otp` | Customers |
| `categories` | `id`, `name`, `image`, `background_color`, `parent_id`, `active` | Nested category tree |
| `products` | `id`, `title`, `slug`, `price`, `discount`, `unit`, `min_order`, `is_18_plus`, `is_featured` | Product catalogue |
| `stores` | `id`, `name`, `latitude`, `longitude`, `opening_Closing_time`, `active` | Stores |
| `product_stores` | `product_id`, `store_id` | Product-store availability |
| `carts` | `user_id` (UUID), `store_id`, `tax`, `voucher_code`, `voucher_discount`, `sub_total`, `total` | Shopping carts |
| `cart_items` | `cart_id`, `product_store_id`, `quantity`, `price` | Cart line items |
| `orders` | `id`, `order_no`, `user_id`, `payment_method_id`, `voucher_code`, `schedule_date`, `nonce`, `status` | Orders |
| `vouchers` | `id`, `code`, `discount`, `applied_total`, `no_of_use`, `start_date`, `end_date` | Voucher codes |
| `user_addresses` | `user_id`, `address`, `city`, `flat_no`, `postal_code`, `latitude`, `longitude` | Delivery addresses |

## Architecture

- **Repository Pattern** — `AuthRepository`, `StoreRepository`, `StripeRepository`, `UserRepository`
- **Nested Categories** — `kalnoy/nestedset` for unlimited depth with efficient SQL
- **Stripe** — server-side tokenization, saved payment methods per Stripe customer
- **Telescope** — API request/query introspection for development

## Getting Started

```bash
composer install
cp .env.example .env && php artisan key:generate
php artisan migrate --seed && php artisan storage:link
php artisan serve
```

## License
MIT
