# 📌 Blog con Laravel y TailwindCSS

Este es un proyecto de blog desarrollado con Laravel 11 y TailwindCSS. Permite la creación, edición y eliminación de publicaciones sin autenticación.

## 🚀 Características

-   📄 CRUD completo de publicaciones (crear, leer, actualizar y eliminar).
-   🎨 Interfaz optimizada con TailwindCSS.
-   ✅ Validaciones visuales para mejorar la experiencia del usuario.
-   🔔 Mensajes de éxito tras cada operación.
-   📌 Confirmaciones antes de eliminar o actualizar un post.
-   🏠 Página de inicio mostrando los posts más recientes.

## 🛠️ Instalación y Configuración

### 1️⃣ Clonar el repositorio

```bash
git clone https://github.com/tu-usuario/tu-repositorio.git
cd tu-repositorio
```

### 2️⃣ Instalar dependencias

```bash
composer install
npm install
```

### 3️⃣ Configurar la base de datos

```bash
cp .env.example .env
```

Configura las credenciales de MySQL en el archivo `.env`:

```env
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 4️⃣ Ejecutar migraciones

```bash
php artisan migrate
```

### 5️⃣ Iniciar el servidor

```bash
php artisan serve
```

Accede en el navegador: **http://127.0.0.1:8000**

## 📂 Estructura del Proyecto

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── PostController.php
├── Models/
│   ├── Post.php
├── Views/
│   ├── layouts/
│   │   ├── app.blade.php
│   ├── home.blade.php
│   ├── posts/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   ├── edit.blade.php
│   │   ├── show.blade.php
```

## ✨ Funcionalidades Implementadas

-   **📌 Crear Post:** Permite agregar un título, contenido y autor.
-   **🔍 Ver Posts:** Página de inicio con todos los posts.
-   **✏ Editar Post:** Modifica un post existente con validaciones.
-   **🗑 Eliminar Post:** Opción con confirmación antes de eliminar.
-   **📌 Estilos con TailwindCSS:** Diseño responsivo y limpio.

## 📜 Autor

👤 **Juan Pablo Campuzano**  
🔗 GitHub: [JuanCM](https://github.com/Juan17Informatico)

## 📝 Licencia

Este proyecto está bajo la licencia MIT.