
#  Ejemplos de Laravel Livewire

### Introducción

Este repositorio contiene una colección de ejemplos de código para casos comunes en los cuales se puede hacer uso de Livewire, una biblioteca de componentes de Laravel que permite crear interfaces de usuario dinámicas y reactivas sin escribir JavaScript.

Estos ejemplos pueden útiles para quienes se están iniciando en Livewire y  también pueden ser una buena referencia para quienes ya tengan experiencia previa con Livewire.

**Funciones:**
* Paginación de scroll infinito
* Subida de imagen con vista previa
    
### Instalación

Requisitos de la instalación
* PHP 8.1 mínimo
* Node v18 mínimo

1. Clonar el repositorio
2. Ejecutar: ``` composer install ```
2. Crear el archivo de configuaración copiando el .env.example, se puede copiar este archivo desde la consola con: ``` copy .env.example .env ```
3.  Configurar la conexión a la base de datos en el .env, ejemplo:
```
DB_HOST=localhost
DB_DATABASE=tu_base_de_datos
DB_USERNAME=root
DB_PASSWORD=
```
4. Crear un nuevo API key usando la consola: ``` php artisan key:generate ``` 
5. Crear las tablas y poblarlas en la base de datos con las migraciones y seeders, ejecutar: ``` php artisan migrate --seed ```
6. Instalar las dependencias de npm, ejecutar: ``` npm install ```
7. Ejecutar comando artisan:  ``` php artisan storage:link ```

### Ejemplos de uso 

* [Componente de Scroll Infinito](/app/Http/Livewire/InfiniteScroll.php)
* [Componente de Subida de imagen con vista previa](/app/Http/Livewire/UploadImageWithPreview.php)

### Documentaciones oficiales / Referencias
* https://laravel-livewire.com/
