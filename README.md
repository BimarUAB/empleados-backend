# Empleados Backend - Laravel API

Proyecto backend desarrollado con **Laravel 11** y **MySQL** que expone una API REST para gestionar empleados.

## 🧱 Tecnologías

- PHP 8.2+
- Laravel 11
- MySQL
- Composer
- Git + GitHub

## ⚙️ Instalación

1. Clonar el repositorio:

git clone https://github.com/tu-usuario/empleados-backend.git
cd empleados-backend
Instalar dependencias:

composer install
Crear archivo .env a partir de .env.example:

cp .env.example .env
Generar clave de aplicación:

php artisan key:generate
Configurar base de datos en .env:
env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=empleados_db
DB_USERNAME=root
DB_PASSWORD=
Ejecutar migraciones y seeders:

php artisan migrate --seed
Levantar servidor:

php artisan serve
📡 Endpoints API

Método	URL	Descripción
GET	/api/empleados	Listar todos los empleados
POST	/api/empleados	Crear nuevo empleado
Ejemplo de body (POST)
JSON

{
  "nombre": "Juan",
  "apellido": "Pérez",
  "correo": "juan@example.com",
  "salario": 2500.50
}
📂 Estructura
app/Models/Empleado.php – Modelo
app/Http/Controllers/EmpleadoController.php – Controlador API
database/migrations/ – Migraciones
database/seeders/EmpleadoSeeder.php – Seeder de prueba
🧪 Pruebas
Puedes probar los endpoints con:
Navegador: http://localhost:8000/api/empleados
Postman o Thunder Client
📌  Notas
El campo correo debe ser único.
El seeder crea 10 empleados de ejemplo.
Asegúrate de tener MySQL activo (XAMPP, Laragon, etc.).
Hecho con ❤️ por BIMAR QUISPE LUCANA – Tecnologías de Internet – UAB

¿Cómo me fue en el examen?
Me sentí cómodo con el backend; Laravel me resulta familiar, pero el frontend me tomó más tiempo del previsto.
¿Qué complicaciones tuve?
Angular me lanzó varios errores (NG0908, NG0201) por Zone.js y HttpClient; al final eran temas de configuración.
En Laravel tuve que migrar de SQLite a MySQL porque el seeder fallaba por columnas faltantes.
¿Qué aprendí?
A habilitar HttpClient con provideHttpClient() en app.config.ts.
A usar php artisan migrate:fresh --seed para rehacer la BD sin conflictos.
A ordenar commits con mensajes semánticos y ramas (dev → master).
¿Qué haría diferente?
Revisaría la configuración inicial de Angular antes de empezar, y subiría cada cambio a Git en cuanto lo tuviera listo para no hacer commits grandes al final.