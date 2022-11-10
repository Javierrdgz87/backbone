## Backbone Zip Code Test
Al descargar el archivo de los códigos postales, analicé la información para crear algunas de las tablas y crear las migraciones, modelos y seeders.

Una vez que cree las migraciones, ejecute los siguientes comandos:
``` bash
php artisan migrate
```
y 
``` bash
php artisan seed
```

Importe el archivo csv con los codigos postales directamente a la base de datos (se encuentra en la ruta public/csv)

Una vez que la base de datos estuvo alimentada con la información, cree el controlador ZipCodesController el cual contiene el método que muestra la información de los códigos postales. Utilizando la Cache de Laravel implemente el método correspondiente para mejorar el rendimiento de la petición y se redujera el tiempo de respuesta; para entregar la información que se muestra como resultado final utilice un Api Resource y darle formato a la respuesta.

# backbone
