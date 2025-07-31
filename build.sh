#!/usr/bin/env bash

# Install composer dependencies
composer install --no-dev --optimize-autoloader

# Set Laravel storage permissions
chmod -R 775 storage bootstrap/cache

# Generate app key
php artisan key:generate

# Run migrations (opsional, kalau kamu pakai database)
# php artisan migrate --force
