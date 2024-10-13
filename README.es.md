# X/Twitter Clone with Laravel, Livewire, and TailwindCSS

This is the repository for a Twitter clone tutorial using Laravel, Livewire, and TailwindCSS.

## Instalación

This project is a standard Laravel application; it is based on Laravel 11 and uses Livewire and Tailwind CSS for the frontend. If you are familiar with Laravel, you should feel comfortable working on this project.

For local development, you can use the following requirements:

- PHP 8.3 with SQLite, GD, and other common extensions.
- Node.js 16 or later.

If you meet these requirements, you can start by cloning the repository and installing the dependencies.

Using [Composer](https://getcomposer.org) and [NPM](https://www.npmjs.com):

```bash
composer install

npm install
```

After that, set up your `.env` file:

```bash
cp .env.example .env

php artisan key:generate
```

Set up your database and run the migrations:

```bash
touch database/database.sqlite

php artisan migrate
```

Link the storage to the public folder.

```bash
php artisan storage:link
```

In a **separate terminal**, build the assets in watch mode:

```bash
npm run dev
```

Finally, start the development server:

```bash
php artisan serve
```
