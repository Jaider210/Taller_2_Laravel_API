# 📱 Phones API – Laravel + PostgreSQL

Este proyecto es una **API RESTful** construida con **Laravel 11** y **PostgreSQL** para gestionar teléfonos móviles.  
Incluye migraciones, modelo Eloquent, validaciones, seeders, factories y rutas API estándar.

---

## 🚀 Requisitos

Antes de comenzar asegúrate de tener instalado:

- [PHP 8.1+](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/download/)
- [PostgreSQL](https://www.postgresql.org/download/)
- [Git](https://git-scm.com/downloads)
- Opcional: [Postman](https://www.postman.com/downloads/) para probar la API

---

## ⚙️ Instalación

### 1. Clonar el repositorio
```bash
git clone https://github.com/TU_USUARIO/phones_api.git
cd phones_api
```

### 2. Instalar dependencias
```bash
composer install
```

### 3. Configurar archivo `.env`
Copia el archivo de ejemplo y edítalo:
```bash
cp .env.example .env   # macOS/Linux
# En Windows copia manualmente .env.example a .env
```

Genera la clave de la aplicación:
```bash
php artisan key:generate
```

Configura en `.env` tu base de datos PostgreSQL:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=phones_db
DB_USERNAME=phones_user
DB_PASSWORD=phones_pass
```

> ⚠️ Usa tus credenciales reales de PostgreSQL.

---

## 🗄️ Migraciones y Seeders

Ejecuta las migraciones y llena la base de datos con datos falsos:

```bash
php artisan migrate --seed
```

Si deseas reiniciar la base desde cero:

```bash
php artisan migrate:fresh --seed
```

---

## ▶️ Servidor de desarrollo

Inicia el servidor integrado de Laravel:

```bash
php artisan serve
```

La API estará disponible en:
```
http://127.0.0.1:8000
```

---

## 📌 Rutas de la API

| Método | Endpoint             | Descripción                  |
|--------|----------------------|------------------------------|
| GET    | `/api/phones`        | Listar todos los teléfonos   |
| POST   | `/api/phones`        | Crear un nuevo teléfono      |
| GET    | `/api/phones/{id}`   | Ver un teléfono específico   |
| PUT    | `/api/phones/{id}`   | Actualizar un teléfono       |
| DELETE | `/api/phones/{id}`   | Eliminar un teléfono         |

---

## 📬 Ejemplo de petición POST

```http
POST /api/phones
Content-Type: application/json
Accept: application/json
```

Body:
```json
{
  "phone_brand": "Samsung",
  "phone_model": "Galaxy S25 Ultra",
  "phone_price": 950,
  "phone_display_size": 7,
  "phone_is_smartphone": true
}
```

---

## 🛠️ Tecnologías usadas

- **Laravel 11** – Framework backend PHP
- **PostgreSQL** – Base de datos relacional
- **Eloquent ORM** – Mapear objetos y consultas
- **Factories & Seeders** – Generación de datos de prueba
- **Postman** – Testing de endpoints

---

## ✨ Autor

Proyecto desarrollado por **Jhaider Ramírez Cardona**  
📧 Contacto: jhaider.ramirez42957@ucaldas.edu.co
