# Quanti assignment

Assignment was created via Laravel.

# Set up

1. create an .env file

```bash
cp .env.example .env
```

2. install dependencies

```bash
composer install
```

3. run migrations (create SQLite db automatically)

```bash
php artisan migrate
```

4. generate key

```bash
php artisan key:generate
```

5. run server

```bash
php artisan serve
```
