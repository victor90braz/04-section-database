````markdown
# Laravel Database Interaction README

## GitHub Repository

Find the code and more on GitHub: [04-section-database Repository](https://github.com/victor90braz/04-section-database.git)

## Repository Link

[Repository Link](https://github.com/victor90braz/04-section-database.git)

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

Now, let's explore the steps to create and interact with a new user and a new post in your Laravel application.

# Creating a New User and Adding It to the Database Using Tinker

To create a new user and add it to the database, you can use Laravel's Tinker. First, run Tinker with the following command:

```bash
php artisan tinker
```

Now, let's go through the steps in the Tinker session.

1. Create a new user instance:

```php
$user = new User();
```

2. Set the user's name, email, and password:

```php
$user->name = 'mario';
$user->email = 'mario@gmail.com';
$user->password = bcrypt('!mario');
```

3. Save the user to the database:

```php
$user->save();
```

4. Retrieve the user from the database (for example, by ID):

```php
$user->find(1);
```

This sequence of commands creates a new user with the provided information and stores it in your database.

# Creating a New Post and Adding It to the Database Using Tinker

To create a new post and add it to the database, you can follow similar steps in Tinker:

1. Create a new post instance:

```php
$post = new Post();
```

2. Set the post's title, excerpt, and body:

```php
$post->title = 'My First Post Database';
$post->excerpt = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$post->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec facilisis risus...';
```

3. Save the post to the database:

```php
$post->save();
```
