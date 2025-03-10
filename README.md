# 🎮 Tienda de Videojuegos - Laravel

## 📌 Descripción
Este proyecto es una tienda de videojuegos desarrollada en **Laravel** como parte del curso de **Tecnologías Web**. La tienda permite a los usuarios explorar, comprar y gestionar videojuegos, mientras que los administradores pueden administrar los productos, categorías y usuarios del sistema.

## Link de acceso disponible para la organización: 
https://docs.google.com/document/d/13i-G9IA9c_S_4NsJP6jZGLdvIMLQExBr/edit?usp=sharing&ouid=111755846278060453309&rtpof=true&sd=true

## 🚀 Características
- 🔹 **Autenticación y roles**: Diferenciación entre clientes y administradores.
- 🔹 **Gestión de videojuegos**: CRUD para videojuegos, desarrolladores y plataformas (entre otros).
- 🔹 **Sistema de promociones**: Aplicación de descuentos en videojuegos.
- 🔹 **Carrito de compras**: Carrito de compras para agregar multiples elementos.
- 🔹 **Lista de deseos**: Los usuarios pueden ver sus juegos y tarjetas deseados.
- 🔹 **Interfaz amigable**: UI diseñada con Blade y componentes reutilizables.

## 🛠️ Tecnologías Utilizadas
- **Backend**: Laravel
- **Frontend**: Blade Templates y microservicio React.js (separado en componentes reutilizables)
- **Base de datos**: MySQL
- **Autenticación**: Middleware de roles
- **Gestión de dependencias**: Composer, yarn & NPM

## 📂 Estructura del Proyecto
```
📦 videogame-store
 ┣ 📂 app
 ┣ 📂 database
 ┣ 📂 public
 ┣ 📂 resources
 ┃ ┣ 📂 views (Blade Templates)
 ┃ ┣ 📂 js (JS & Vue)
 ┣ 📂 routes
 ┣ 📜 .env
 ┣ 📜 README.md
```

## ⚡ Instalación
1. Clona este repositorio:
   ```bash
   git clone https://github.com/Therealdavi836/8bit-Emporium.git
   cd 8bit-Emporium
   ```
2. Instala las dependencias:
   ```bash
   composer install
   npm install
   ```
3. Configura el archivo `.env` y genera la clave de la aplicación:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Configura la base de datos en el `.env` y ejecuta las migraciones:
   ```bash
   php artisan migrate --seed
   ```
5. Inicia el servidor:
   ```bash
   php artisan serve
   ```
6. Accede a la tienda en `http://localhost:8000`

## 👤 Roles y Accesos
- **Administrador**: Puede gestionar productos, usuarios y categorías.
- **Cliente**: Puede explorar videojuegos, agregarlos al carrito y comprarlos.

## 📜 Licencia
Este proyecto está bajo la **Licencia MIT**.
- El proyecto fue desarrollado y presentado para los docentes
- **Docente encargado**: Valentina Tabares Morales
- **Docente auxiliar**: Jose Albeiro Montes Gil

---
💡 *Contribuciones y mejoras son bienvenidas.* 🚀
