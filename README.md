# Clon de X/Twitter con Laravel, Livewire y TailwindCSS

Este es el repositorio para un tutorial de clon de X/Twitter  usando Laravel, Livewire y TailwindCSS.

## Instalación

Este proyecto es una aplicación Laravel regular; se basa en Laravel 11 y utiliza Livewire y Tailwind CSS para el frontend. Si estás familiarizado con Laravel, deberías sentirte cómodo trabajando en este proyecto.

En lo que respecta al desarrollo local, puedes usar los siguientes requisitos:

- PHP 8.3 - con SQLite, GD y otras extensiones comunes.
- Node.js 16 o más reciente.

Si tienes estos requisitos, puedes empezar clonando el repositorio y instalando las dependencias.

Usando [Composer](https://getcomposer.org) y [NPM](https://www.npmjs.com):

```bash
composer install

npm install
```

Después de eso, configura tu archivo `.env`:

```bash
cp .env.example .env

php artisan key:generate
```

Configura tu base de datos y ejecuta las migraciones:

```bash
touch database/database.sqlite

php artisan migrate
```

Enlaza el almacenamiento a la carpeta pública:

```bash
php artisan storage:link
```

En un **terminal separado**, construye los activos en modo watch:

```bash
npm run dev
```

Finalmente, inicia el servidor de desarrollo:

```bash
php artisan serve
```
