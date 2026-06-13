# KwikeMart — Grocery & Retail eCommerce API

> **Laravel 8 API backend** for a location-aware grocery/retail marketplace. Features an unlimited-depth category tree via `kalnoy/nestedset`, a clean repository pattern architecture, Sanctum API auth, Stripe card management, voucher system, and a location-based nearest store finder.

![Laravel](https://img.shields.io/badge/Laravel-8.65-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.0-777BB4?style=flat-square&logo=php&logoColor=white)
![Sanctum](https://img.shields.io/badge/Laravel_Sanctum-2.12-FF2D20?style=flat-square)
![Stripe](https://img.shields.io/badge/Stripe-7.x-635BFF?style=flat-square&logo=stripe&logoColor=white)
![MongoDB](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)

---

## Tech Stack

| Package | Version | Purpose |
|---|---|---|
| `laravel/framework` | ^8.65 | Core framework |
| `laravel/sanctum` | ^2.12 | API token authentication |
| `kalnoy/nestedset` | ^6.0 | Unlimited-depth category tree |
| `stripe/stripe-php` | ^7.114 | Card management (stored payment methods) |
| `laravel/telescope` | ^4.6 | Request/query monitoring |
| `laravel/breeze` | ^1.5 | Admin web UI scaffolding |
| `barryvdh/laravel-debugbar` | ^3.6 | Debug toolbar (dev) |

---

## Architecture

**Repository pattern** — controllers depend on interfaces, concrete repository classes handle DB logic.

```
API Route
  |
  v
Controller
  |  depends on interface
  v
Repository (StoreRepository, AuthRepository, StripeRepository, UserRepository)
  |
  v
Eloquent Model / Stripe SDK
```

**API key gate:** `VerifyAPIAccess` middleware validates `APP_KEY` header against `env('APP_KEY')` on every request before Sanctum token auth — lightweight machine-to-machine security layer.

---

## Route Structure

**REST API** (`routes/api.php`) — all under `VerifyAPIAccess` + `throttle:60,1`:

| Route | Auth | Description |
|---|---|---|
| `POST /api/register` | Public | Email/password registration |
| `POST /api/login` | Public | Token issuance |
| `POST /api/guest/user/home` | Public | Nearest store + homepage categories by location |
| `GET /api/guest/user/product/detail/{id}` | Public | Product detail |
| `POST /api/guest/user/category/products` | Public | Browse products in category |
| `POST /api/favorites` | Sanctum | List saved products |
| `POST /api/favorites/add` | Sanctum | Save product |
| `POST /api/favorites/remove` | Sanctum | Remove saved product |
| `GET /api/address` | Sanctum | Saved addresses |
| `POST /api/address/add` / `/remove` | Sanctum | Manage delivery addresses |
| `GET /api/cart` | Sanctum | View cart |
| `POST /api/cart/add` | Sanctum | Add to cart |
| `POST /api/order/place` | Sanctum | Place order |
| `GET /api/stripe/card/list` | Sanctum | List saved Stripe cards |
| `POST /api/stripe/add/card` | Sanctum | Save new card (Stripe payment method) |
| `POST /api/stripe/remove/card` | Sanctum | Remove card |
| `GET /api/payment/methods` | Sanctum | Available payment methods |
| `POST /api/apply/voucher` | Sanctum | Validate and apply voucher code |

**Admin web panel** (`routes/admin.php`, Breeze auth, `/admin/*` prefix):
Users, Roles, Drivers, Categories (flat/sub/sub-sub), Products, Tags, Nutritions (soft delete + restore), Product-nutrition/tag attachments, Retailers.

---

## Database Schema (25 Migrations)

| Table | Key Columns |
|---|---|
| `categories` | id, `parent_id` (self-referential unlimited depth), name, image, status. kalnoy nestedset adds `_lft`, `_rgt`, `depth` columns for efficient tree queries |
| `products` | id, store_id, category_id, name, description, price, stock, image, status |
| `stores` | id, name, lat, lng, address (location-aware) |
| `user_store` | user_id, store_id |
| `product_stores` | product_id, store_id |
| `users` | Standard Laravel + Sanctum |
| `personal_access_tokens` | Sanctum tokens |
| `roles` / `users_roles` | Simple RBAC |
| `banners` | Promotional banners |
| `tags` / `product_tags` | Product tagging system |
| `nutritions` / `product_nutrition` | Nutrition data per product (softDeletes on nutritions) |
| `user_favorites` | user_id, product_id |
| `payment_methods` | id, name |
| `user_addresses` | user_id, address, lat, lng, label |
| `carts` / `cart_items` | Cart with line items |
| `orders` / `order_items` | Order records |
| `vouchers` | code, discount_type, discount_value, expiry, usage_limit |
| `app_settings` | key-value config store |

---

## Key Features

### Unlimited-Depth Category Tree
Single `categories` table with `parent_id`. `kalnoy/nestedset` adds nested set index columns (`_lft`, `_rgt`, `depth`) — enables efficient `ancestors()`, `descendants()`, and `children()` queries without recursive CTEs.

```php
// Eager load unlimited levels of subcategories
Category::with('subCategories.subCategories')->whereIsRoot()->get();
```

### Location-Aware Storefront
`getNearestStore()` in `StoreRepository` calculates distance from user coordinates to each store's lat/lng, returns the closest available store. Homepage API returns store + categories + featured products in one call.

### Stripe Card Management
`StripeRepository` wraps `stripe/stripe-php`:
- List saved payment methods by Stripe customer ID
- Add card (attach payment method + set as default)
- Remove card (detach from customer)

### Voucher System
`POST /api/apply/voucher` validates voucher code against `vouchers` table — checks expiry, usage limit, and returns discount value.

### Nutrition Data
Products can have multiple nutrition entries (protein, carbs, fat, etc.) via `product_nutrition` pivot. Nutritions support soft-delete with hard-restore in the admin panel.

---

## Getting Started

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan telescope:install
php artisan serve
```

**Required environment variables:**
```env
STRIPE_KEY=
STRIPE_SECRET=
APP_KEY=        # also used as VerifyAPIAccess header value
```
