## GitHub Repository

Find the code and more on GitHub: [04-section-database Repository](https://github.com/victor90braz/04-section-database.git)

## https://github.com/victor90braz/04-section-database.git

# Installation

To create a new Laravel project named "app-example," run the following command:

```bash
composer create-project laravel/laravel app-example
```

# Running the Application

To start the development server, use the following command:

```bash
php artisan serve
```

# connect to database

mysql -u root -p

# migrate

php artisan migrate

# steps to create a new user and add to database by using the terminal ''thinker''

$ php artisan thinker

Command "thinker" is not defined.

Do you want to run "tinker" instead? (yes/no) [no]:

> yes

Psy Shell v0.11.22 (PHP 8.2.10 — cli) by Justin Hileman

> $user = new User();
> [!] Aliasing 'User' to 'App\Models\User' for this Tinker session.
> = App\Models\User {#6280}

> $user->name = 'mario';
> = "mario"

> $user->email = 'mario@gmail.com';
> = "mario@gmail.com"

> $user->password = bcrypt('!mario');
= "$2y$10$eEy.LteLu8oG6Qko.vhv/ulBuWW409DVPcGBseodYU2Iu7MKTl2fO"

> $user->save();
> = true
