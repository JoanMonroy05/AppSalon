# 📚 AppSalon (Proyecto Laravel)

Este es un proyecto desarrollado en **Laravel**, que gestiona una peluquería.

## 🚀 Requisitos previos

Antes de empezar, asegúrate de tener instalado:

* [PHP 8.x](https://www.php.net/downloads.php)
* [Composer](https://getcomposer.org/)
* [MySQL](https://dev.mysql.com/downloads/) o [MariaDB](https://mariadb.org/)
* [Node.js y NPM](https://nodejs.org/) (para compilar assets si usas Vue/React/Tailwind)
* [Git](https://git-scm.com/)
* [Xampp, WampServer o Laragon](https://www.apachefriends.org/es/index.html) (opcional, para un entorno local fácil, si ya tienes un servicio disponible ignora este punto)

---

## 📥 Instalación del proyecto

### 1️⃣ Clonar el repositorio

```bash
git clone https://github.com/JoanMonroy05/AppSalon.git
cd AppSalon
```

### 2️⃣ Instalar dependencias de PHP

```bash
composer install
```

### 3️⃣ Instalar dependencias de Node (para instalar tailwind, Vue, etc.)

```bash
npm install
```

---

## ⚙️ Configuración del entorno

### 4️⃣ Crear el archivo `.env`

El archivo `.env` contiene la configuración sensible (como credenciales de base de datos).

Copia el archivo de ejemplo:

```bash
cp .env.example .env
```

### 5️⃣ Generar la clave de la aplicación

```bash
php artisan key:generate
```

---

## 🗄️ Configuración de la base de datos

1. Ingresa a MySQL y crea la base de datos:

   ```sql
   CREATE DATABASE appsalon_mvc;
   ```

2. Abre el archivo `.env` y modifica la sección de base de datos con tus credenciales:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=appsalon_mvc
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

---

## 📑 Migraciones y seeders

Ejecuta las migraciones para crear las tablas necesarias:

```bash
php artisan migrate
```

Ejecuta los seeders para poblar la base de datos con datos iniciales:

```bash
php artisan db:seed
```

---

## ▶️ Levantar el servidor local

Ejecuta el servidor de Laravel:

```bash
php artisan serve
```

Por defecto, el proyecto estará disponible en:
👉 [http://localhost:8000](http://localhost:8000)

Ejecuta también:

```bash
npm run dev
```

---

## 🔑 Resumen de pasos rápidos

```bash
git clone https://github.com/JoanMonroy05/AppSalon.git
cd AppSalon
composer install
npm install
cp .env.example .env
php artisan key:generate
# Crear base de datos appsalon_mvc en MySQL
php artisan migrate --seed
php artisan serve
npm run dev
```