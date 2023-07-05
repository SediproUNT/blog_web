Instalación 💾
Para ejecutar el proyecto necesitas seguir los siguientes pasos:

Abrimos la línea de comandos y llegamos a la ruta donde vamos a clonar la aplicación.

$ cd ../blog_web

$ git clone https://github.com/SediproUNT/blog_web.git

$ composer install

Luego hacer copia a la carpeta
.env.example

Y renombrar a 
.env

Finalmente colocar 

$ php artisan key:generate
