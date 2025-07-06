# Prueba Técnica

Este proyecto consiste en un formulario desarrollado con **React** que interactúa con una API REST creada con **Laravel**. 
La API implementa los métodos **GET**, **POST**, **PUT** y **DELETE**, y utiliza una base de datos **MySQL** a través de **Laragon**.

---

## Base de Datos

Para crear la tabla y los campos necesarios, asegúrate de ejecutar el archivo `.sql` en tu base de datos MySQL.

---

## Frontend (React)

La carpeta `formulario` contiene el código del frontend desarrollado en **React**.

### Requisitos previos:

- Tener instalado **Node.js**
- Un editor de código como **Visual Studio Code**

### Pasos para ejecutar:

1. Abrir la carpeta `formulario` con Visual Studio Code.

2. Abrir una terminal integrada y ejecutar:
   
   npm install
   npm start
  

3. Si aparecen errores relacionados con dependencias faltantes, ejecuta el siguiente comando:

   npm install bootstrap bootstrap-icons react-router-dom


4. Luego vuelve a ejecutar:

   npm start


---

## Backend (Laravel)

El archivo `servicio.zip` contiene el proyecto Laravel.

### Pasos para ejecutar:

1. Descomprimir **ervicio.zip**
2. Abrir la carpeta del proyecto Laravel con Visual Studio Code.
3. Verificar las credenciales de conexión a la base de datos en el archivo **.env**.
4. En la terminal, ejecutar el siguiente comando:
   
   php artisan serve
   

Esto iniciará el servidor de desarrollo de Laravel y la API estará lista para recibir solicitudes desde el frontend.

