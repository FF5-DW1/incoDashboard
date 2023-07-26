# incoDashboard
El proyecto "incoDashboard" es una aplicación web desarrollada con el framework Laravel que permite registrar y gestionar información de alumnos a través de un formulario. Los datos de los alumnos se almacenan en una base de datos y se presentan en una tabla para facilitar su visualización, búsqueda y edición.

## Características
* Gestión de cuentas de usuario: Existen perfiles de Admin (manipulacion total de la web) y Coordinador (restricciones para el uso de la tabla).
* Subida, edición y visualización: Se puede visualizar la tabla con alumnos, editarlos y eliminar alguno si fuera necesario.
* Formulario de entrada a basa de datos: La aplicación contiene un formulario para que cada persona onteresada rellene los datos y se guarden en la base de datos de la empresa.
* Búsqueda de usuarios: El administrador puede buscar y filtrar los resultados contenidos en toda la tabla.
* Seguimiento de usuarios: El Dashboard contiene tarjetas que se actualizan segun la base de datos con la información mas importante.

## Requisitos Previos
* PHP o Docker
* MySQL o XAMPP
* Composer o Docker

  ## Instalación
1. Clona el repositorio de getCode:
git clone git@github.com:FF5-DW1/incoDashboard.git
2. Accede al directorio del proyecto:
cd incoDashboard
3. Instala las dependencias de PHP utilizando Composer:
composer install o composer update
4. Copia el archivo de configuración .env.example y renómbralo a .env. Luego, actualiza las variables de entorno segun tu base de datos en el archivo .env
5. Configura tu base de datos en funcion de los archivos Docker-Compose-yml y el .env
6. Genera una clave de aplicación:
php artisan key:generate
7. Ejecuta las migraciones y los seeders:
php artisan migrate --seed


## Fuentes
* Laravel: https://laravel.com
* Docker: https://www.docker.com
* DataTable: https://datatables.net


## Desarrolladores
[Jesús Cabral](https://github.com/JesCab29)  

[Anderson Almendarez](https://github.com/A3C2112)  

[Dalia Mercado](https://github.com/seisporseis)
  
[Gladys Guanín](https://github.com/GladysGC)
