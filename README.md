# IT0049 TFA5 — Laravel POS Foundations

A four-page POS sample built with Laravel: Home, About, Customer Accounts, and User Accounts. The account pages use controller-defined PHP arrays and Blade `@foreach` loops, as required by the activity.

## Requirements

- PHP 8.2+ with the extensions required by Laravel (including `pdo_sqlite`, `mbstring`, `openssl`, `tokenizer`, and `xml`)
- Composer

## Run locally

From this `TFA5` directory:

```sh
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Open `http://127.0.0.1:8000`. In PowerShell, `Copy-Item .env.example .env` can be used instead of `copy`.

Routes: `/`, `/about`, `/customers`, `/users`.

## Data note

Customer and user lists are intentionally hard-coded in `CustomerController` and `UserController`, then looped through in Blade. The migration and seeder are included for the submission's database-file requirement; the pages do not query those tables, because the activity specifically asks for arrays as the temporary listing source.

## Submission checklist

1. Create a GitHub repository and push the contents of this `TFA5` folder (include `composer.json`, migration, seeder, source and views; exclude `.env` and `vendor`).
2. Deploy the application to a PHP host that supports Laravel, set its environment variables and writable `storage` / `bootstrap/cache`, install Composer dependencies, and run migrations/seeding if required by the host. Submit the repository URL and working site URL.
3. Capture screenshots of all four pages if your instructor or LMS requires visual proof.

This local workspace does not contain GitHub credentials or a hosting account, so repository publication and deployment still need to be completed from your accounts.
