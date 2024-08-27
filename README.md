# Proyecto de Phishing Educativo - Clon de Login de Steam

## Descripción

Este proyecto consiste en un **clon de la página de inicio de sesión de Steam** diseñado con fines educativos para demostrar cómo funciona una página de phishing. **Este proyecto no debe ser utilizado con fines maliciosos**; su único objetivo es la enseñanza sobre la seguridad informática y la protección contra ataques de phishing.

El proyecto incluye un formulario HTML y un script en PHP que captura las credenciales de inicio de sesión proporcionadas por el usuario y las almacena en una base de datos local utilizando MySQL a través de XAMPP.

## Estructura del Proyecto

- **Index.html**: Es una réplica del formulario de inicio de sesión de Steam. Este archivo contiene el diseño y los campos para que el usuario ingrese su nombre de usuario y contraseña.

- **phishing_script.php**: Script en PHP encargado de capturar y almacenar las credenciales en una base de datos MySQL local.

## Requisitos

Para ejecutar este proyecto en tu entorno local, necesitarás lo siguiente:

- [XAMPP](https://www.apachefriends.org/es/index.html) instalado en tu máquina.
- Un navegador web para acceder al sitio localmente.
- phpMyAdmin (incluido con XAMPP) para gestionar la base de datos.

## Instrucciones de Instalación

### 1. Configurar XAMPP

1. Descarga e instala XAMPP desde el [sitio oficial](https://www.apachefriends.org/es/index.html).
2. Inicia los servicios de **Apache** y **MySQL** desde el panel de control de XAMPP.

### 2. Crear la Base de Datos

1. Accede a [phpMyAdmin](http://localhost/phpmyadmin/) desde tu navegador.
2. Crea una nueva base de datos llamada `credenciales_db`.
3. Dentro de esta base de datos, crea una tabla llamada `usuarios` con la siguiente estructura:

    ```sql
    CREATE TABLE usuarios (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    );
    ```

### 3. Configurar el Proyecto

1. Coloca los archivos `Index.html` y `phishing_script.php` en una carpeta dentro del directorio `htdocs` de XAMPP, por ejemplo: `C:\xampp\htdocs\phishing_steam`.


### 4. Ejecutar el Proyecto

1. Abre tu navegador y escribe `http://localhost/phishing_steam/` para acceder a la página.
2. Al enviar las credenciales, se almacenarán en la base de datos `credenciales_db` en la tabla `usuarios`, y el usuario será redirigido a la página de Steam.

## Agradecimientos

Este proyecto ha sido desarrollado con fines educativos, basándome en recursos que promueven la educación en ciberseguridad:

- [OWASP: Open Web Application Security Project](https://owasp.org/)
- [XAMPP Documentation](https://www.apachefriends.org/faq_windows.html)
- [PHP: Manual Oficial](https://www.php.net/manual/es/index.php)

**Advertencia**: Este proyecto es solo para fines educativos y de concienciación. **No está destinado para ser utilizado en actividades ilegales o no éticas**. Asegúrate de tener siempre el permiso necesario para realizar pruebas de seguridad en sistemas y redes.

