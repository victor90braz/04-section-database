````markdown
## GitHub Repository

Find the code and more on GitHub: [04-section-database Repository](https://github.com/victor90braz/04-section-database.git)

## [Repository Link](https://github.com/victor90braz/04-section-database.git)

# Installation

To create a new Laravel project named "app-example," run the following command:

```bash
composer create-project laravel/laravel app-example
```
````

# Running the Application

To start the development server, use the following command:

```bash
php artisan serve
```

# Connect to the Database

You can connect to your MySQL database using the following command:

```bash
mysql -u root -p
```

# Migrate the Database

To create the necessary database tables, run the migration with:

```bash
php artisan migrate
```

# Steps to Create a New User and Add to the Database Using the Terminal (Tinker)

To create a new user and add it to the database, you can use Laravel's Tinker. First, run Tinker with the following command:

```bash
php artisan tinker
```

Then, follow these steps in the Tinker session:

```php
$user = new User();
// Aliasing 'User' to 'App\Models\User' for this Tinker session.
// Example: $user = App\Models\User {#6280}

$user->name = 'mario';
// Set the name attribute to "mario"

$user->email = 'mario@gmail.com';
// Set the email attribute to "mario@gmail.com"

$user->password = bcrypt('!mario');
// Hash and set the password attribute

$user->save();
// Save the user to the database

$user;
// Display the user object with its details
```

To retrieve a user from the database, you can use the following command:

```php
$user->find(1);
// Find the user with ID 1
```

> $user->pluck('name');
> = Illuminate\Support\Collection {#7237

    all: [
      "mario",
    ],

}

# steps

php artisan make:migration
php artisan migration
php artisan make:model Post
