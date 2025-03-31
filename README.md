# Livewire app sample

This is a sample project to show how to use Livewire in a Laravel project.

## Installation

```bash
composer require livewire/livewire
```

## Create a new component

```bash
php artisan make:livewire hello-world
```

## Create a migration

```bash
php artisan make:migration create_posts_table
```

### Run the migration

```bash
php artisan migrate
```

### Run the seeder

```bash
php artisan db:seed --class=PostSeeder
```

### Create a seeder

```bash
php artisan make:seeder PostSeeder
```

## Layout

```bash
php artisan livewire:layout
```

## Create a component with a test

```bash
php artisan make:livewire create-post --test
```

### Run the test

```bash
phpunit

# or

php artisan test
```
