# SIMRS – Modular Laravel Backend

This is a modular Laravel 12-based backend for SIMRS (Hospital Information System), structured with clean and maintainable architecture principles.

---

## Features

- Service Pattern for business logic
- Request Validation using FormRequest
- Consistent API Resource responses
- Policy-based Authorization (simple fallback by default)
- Ready for expansion into multiple modules

---

## Structure

```
app/
├── Http/
│ ├── Controllers/
│ ├── Requests/
│ ├── Resources/
├── Models/
├── Services/
├── Policies/
routes/
└── api.php
```
---

## Getting Started

```bash
git clone https://github.com/aslammaududy/simrs.git
cd simrs

composer install
cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan serve
```

---

## Article
More details & explanation available here:
[Article](https://www.linkedin.com/pulse/rewriting-patient-registration-simrs-using-laravel-aslam-maududy)

