# Proyecto formativo: Modelado Backend de un sistema para la tienda "SharksTCG".
- Sebastian Eguez Mendoza
- [Facebook](https://www.facebook.com/sebastianeguezmendoza/)




# Sistema de Gestión SharksTCG

![Laravel Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)

El sistema de gestión SharksTCG se ha creado para administrar las operaciones de almacenes, compra/venta y torneos/premios de la tienda "SharksTCG". Proporciona una plataforma eficiente para gestionar productos, ventas, clientes y más.


## Introducción

El proyecto actual tiene como finalidad solucionar los problemas de gestion tanto en inventario asi como la compra/venta de la tienda "SharksTCG". Ademas la tienda al dedicarse a comercializacion de diversos juegos de cartas a nivel competitivo global, se realiza tambien una gestion para los torneos y sus respectivos participantes y ganadores

## Objetivos

Desarrollar el backend del sistema utilizando mediante Laravel para cumplir con las necesidades de la tienda:

- Análisis de requisitos.
- Modelado de la base de datos.
- Implementación de migraciones, modelos y seeders.
- Creación de una API REST.

## Marco Teórico

### Laravel
#### Instalación y Creación de Proyecto

Para trabajar en lo que concierne al este sistema, se trabajo con laravel, por ende se especifica los pasos para instalar laravel en caso de no tenerlo previamente instalado y la creacion del proyecto:

1. **Instalar Composer:**
   Si aún no tienes Composer instalado, descárgalo e instálalo desde [getcomposer.org](https://getcomposer.org/).

2. **Crear un Nuevo Proyecto Laravel:**
   Utiliza Composer para crear un nuevo proyecto de Laravel ejecutando el siguiente comando en tu terminal:

    ```bash
    composer create-project --prefer-dist laravel/laravel nombreProyecto
    ```

    Este comando descargará e instalará la última versión estable de Laravel y sus dependencias.

3. **Configurar el Entorno de Desarrollo:**
   Accede al directorio del proyecto y copia el archivo `.env.example` a `.env`. Luego, genera una nueva clave de aplicación ejecutando:

    ```bash
    php artisan key:generate
    ```

4. **Configurar la Base de Datos:**
   Ajusta las configuraciones de la base de datos en el archivo `.env` y luego ejecuta las migraciones y seeders para preparar la base de datos:

    ```bash
    php artisan migrate --seed
    ```

    Esto creará las tablas necesarias y poblara la base de datos con datos de prueba.

5. **Iniciar el Servidor de Desarrollo:**
   Ejecuta el siguiente comando para iniciar el servidor de desarrollo:

    ```bash
    php artisan serve
    ```

    ingresa en el buscador a: [http://localhost:8000](http://localhost:8000).

Con esto el proyecto estara creado y configurado para su uso. 


### Modelo Vista Controlador (MVC)

El patrón MVC se utiliza para organizar la arquitectura del proyecto, separando la lógica de negocios, la presentación y la manipulación de datos.

## Metodología

## Metodología Scrum

La metodología Scrum es un marco de trabajo ágil que se ha aplicado en el desarrollo de este sistema de gestión de almacenes, compra/venta y torneos/premios. Scrum se basa en principios iterativos e incrementales, lo que significa que el proyecto se divide en ciclos de desarrollo llamados "sprints".

### Principales Componentes de Scrum:

1. **Sprint:** Un sprint es un periodo de tiempo fijo y corto, generalmente de 2 a 4 semanas, durante el cual se realiza el desarrollo de una parte específica del proyecto.

2. **Product Backlog:** Es una lista dinámica que contiene todas las funcionalidades, mejoras y correcciones que se desean implementar en el sistema. El Product Owner prioriza esta lista.

3. **Product Owner:** Es el representante del cliente y tiene la responsabilidad de definir y priorizar las funcionalidades del sistema. Su participación es crucial para asegurar que el producto final cumpla con las expectativas del cliente.

4. **Scrum Master:** El Scrum Master es un facilitador y líder que asegura que el equipo de desarrollo siga los principios y reglas de Scrum. También elimina obstáculos que puedan afectar el progreso del equipo.

5. **Equipo de Desarrollo:** Este equipo es autoorganizado y multidisciplinario, capaz de trabajar de manera colaborativa para completar las tareas definidas en el sprint.

### Beneficios de Scrum en este Proyecto:

- **Entrega Incremental:** Scrum permite entregas incrementales en cada sprint, lo que significa que se obtienen resultados tangibles de forma regular.

- **Adaptabilidad:** Scrum se adapta fácilmente a cambios en los requisitos del proyecto, lo cual es crucial en un entorno donde los detalles pueden evolucionar durante el desarrollo.

- **Colaboración Eficiente:** La colaboración constante entre el Product Owner, el Scrum Master(al no contarse con un equipo de trabajo retrasa el trabajo, pero de igual modo la metodologia para este caso en particular agiliza el desarrollo) asegura una comunicación efectiva y resultados alineados con las expectativas del cliente.

La implementación de Scrum en este proyecto ha proporcionado una estructura eficiente para la planificación, desarrollo y entrega del mismo de manera agil y eficiente para el correcto desarrollo y entrega.

## Laravel API REST
### Configuración Inicial

Para comenzar el desarrollo de la API REST en Laravel, sigue estos pasos iniciales:

1. **Configuración de la Base de Datos:**
   Asegúrate de haber configurado las credenciales de la base de datos en el archivo `.env`. Laravel utiliza Eloquent ORM para interactuar con la base de datos.

2. **Creación de Rutas API:**
   En el archivo `routes/api.php`, define las rutas para tu API. Puedes asignar rutas a métodos del controlador o trabajar directamente con funciones de cierre.

    Ejemplo de ruta:

    ```php
    Route::get('/endpoint', function () {
        return response()->json(['message' => '¡Bienvenido a la API!']);
    });
    ```

3. **Middleware y Autenticación (Opcional):**
   Si es necesario, configura middleware para manejar la autenticación y la autorización. Puedes aplicar middleware a rutas o controladores.

4. **Pruebas de API:**
   Utiliza herramientas como [Postman](https://www.postman.com/) para realizar pruebas de tus endpoints de API y asegurarte de que funcionan correctamente.

5. **Documentación:**
  Para la documentacion al momento de empezar el trabajo con el Frontend developer se puede considerar el uso de [Swagger](https://swagger.io/) para generar documentación interactiva.


## Modelado o Sistematización

### Diagrama de Clases
[![SysSharks](https://live.staticflickr.com/65535/53558770308_2f10da4d39_c.jpg)](https://flic.kr/p/2pANGsh)

### Diagrama Entidad-Relación


### Migraciones

```bash
<<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class General extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Tabla categoria
        Schema::create('categoria', function (Blueprint $table) {
            $table->id('id_categoria');
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla producto
        Schema::create('producto', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
            $table->string('stock')->nullable();
            $table->decimal('precio_compra')->nullable();
            $table->decimal('precio_venta')->nullable();
            $table->decimal('precio_preventa')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Resto de las tablas y relaciones aquí ...
// Tabla proveedor
Schema::create('proveedor', function (Blueprint $table) {
    $table->id('id_proveedor');
    $table->string('nombre');
    $table->string('direccion');
    $table->string('telefono');
    $table->string('contacto_correo'); 
    $table->softDeletes();
    $table->timestamps();
});
        // Tabla compra
        Schema::create('compra', function (Blueprint $table) {
            $table->id('id_compra');
            $table->unsignedBigInteger('id_proveedor');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedor');
            $table->foreign('id_usuario')->references('id')->on('users'); // Referencia a la tabla users
            $table->date('fecha_compra');
            $table->softDeletes();
            $table->timestamps();
        });

        // Resto de las tablas y relaciones aquí ...
          // Tabla cliente
          Schema::create('cliente', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('nombre');
            $table->string('celular');
            $table->string('codigo_yugioh');
            $table->string('codigo_digimon');
            $table->string('codigo_onepiece');
            $table->softDeletes();
            $table->timestamps();
        });
        // Tabla venta
        Schema::create('venta', function (Blueprint $table) {
            $table->id('id_venta');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');
            $table->foreign('id_usuario')->references('id')->on('users'); // Referencia a la tabla users
            $table->date('fecha_venta');
            $table->softDeletes();
            $table->timestamps();
        });

        // Resto de las tablas y relaciones aquí ...

        // Tabla preventa
        Schema::create('preventa', function (Blueprint $table) {
            $table->id('id_preventa');
            $table->string('nombre_producto');
            $table->integer('cantidad');
            $table->decimal('precio_unitario');
            $table->decimal('total');
            $table->string('estado'); // pagado/pendiente
            $table->date('fecha_pago');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_usuario')->references('id')->on('users'); // Referencia a la tabla users
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');
            $table->softDeletes();
            $table->timestamps();
        });

     
        // Tabla torneo
        Schema::create('torneo', function (Blueprint $table) {
            $table->id('id_torneo');
            $table->string('nombre');
            $table->date('fecha');
            $table->softDeletes();
            $table->timestamps();
        });

       
   

       

        // Tabla ganador_torneo
        Schema::create('ganador_torneo', function (Blueprint $table) {
            $table->id('id_ganador');
            $table->unsignedBigInteger('id_torneo');
            $table->foreign('id_torneo')->references('id_torneo')->on('torneo');
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');
            $table->decimal('premio');
            $table->boolean('entregado');
            $table->timestamps();
            $table->softDeletes();
        });
             // Tabla torneo_cliente (Tabla Pivot)
             Schema::create('torneo_cliente', function (Blueprint $table) {
                $table->unsignedBigInteger('id_torneo');
                $table->foreign('id_torneo')->references('id_torneo')->on('torneo');
                $table->unsignedBigInteger('id_cliente');
                $table->foreign('id_cliente')->references('id_cliente')->on('cliente');
                $table->decimal('pago_torneo');
                $table->date('fecha_pago');
                $table->primary(['id_torneo','id_cliente']);
                $table->softDeletes();
                $table->timestamps();
                
            });
       
        // Tabla compra_proveedor (Tabla Pivot)
        Schema::create('compra_proveedor', function (Blueprint $table) {
            $table->unsignedBigInteger('id_compra');
            $table->foreign('id_compra')->references('id_compra')->on('compra');
            $table->unsignedBigInteger('id_proveedor');
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedor');
            $table->string('nombre_producto');
            $table->integer('cantidad');
            $table->decimal('precio_unitario');
            $table->decimal('total');
            $table->primary(['id_compra','id_proveedor']);
            $table->softDeletes();
            $table->timestamps();
        });

       

        // Tabla producto_venta (Tabla Pivot)
        Schema::create('producto_venta', function (Blueprint $table) {
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id_producto')->on('producto');
            $table->unsignedBigInteger('id_venta');
            $table->foreign('id_venta')->references('id_venta')->on('venta');
            $table->integer('cantidad');
            $table->decimal('precio_unitario');
            $table->decimal('total');
            $table->primary(['id_producto','id_venta']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Eliminar tablas en orden inverso para evitar restricciones de clave externa
        Schema::dropIfExists('producto_venta');
        Schema::dropIfExists('compra_proveedor');
        Schema::dropIfExists('torneo_cliente');
        Schema::dropIfExists('ganador_torneo');
        Schema::dropIfExists('torneo');
        Schema::dropIfExists('preventa');
        Schema::dropIfExists('venta');
        Schema::dropIfExists('cliente');
        Schema::dropIfExists('compra');
        Schema::dropIfExists('proveedor');
        Schema::dropIfExists('producto');
        Schema::dropIfExists('categoria');
    }
}
```
### explicacion de un caso de modelado.
Relacion entre la tabla Venta y la tabla Producto.
Estas dos tablas tienen una relacion de Muchos a Muchos, en ese caso se procede a generar una tabla pivot llamada ProductoVenta. La logica de esto es detallar que, cuanto y el precio del o los productos que se realizan en la venta teniendo la ids de las dos tablas
en el Model de estas deos tablas se tiene de la siguiente manera
### Model Product
``` bash
<?php
// app/Models/Product.php
// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'descripcion',
        'id_categoria',
        'stock',
        'precio_compra',
        'precio_venta',
        'precio_preventa',
    ];

    protected $table = 'producto';

    // Relación muchos a uno con Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categoria', 'id_categoria');
    }

    // Relación muchos a muchos con Sale
    public function sales()
    {
        return $this->belongsToMany(Sale::class, 'producto_venta');
    }
}
```
### Model Sale
```bash
<?php
// app/Models/Sale.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_cliente',
        'id_usuario',
        'fecha_venta',
        
    ];

    protected $table = 'venta';

    // Relación muchos a muchos con Product
    public function products()
    {
        return $this->belongsToMany(Product::class, 'producto_venta');
    }

    // Relación muchos a uno con Cliente
    public function client()
    {
        return $this->belongsTo(Client::class, 'id_cliente', 'id_cliente');
    }

    // Relación muchos a uno con Usuario (User)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id');
    }
}


```
### Model ProductSale
```bash
<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSale extends Pivot
{
    protected $table = 'producto_venta';

    // Puedes agregar otros campos si los necesitas

    // Relación muchos a muchos con Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_producto');
    }

    // Relación muchos a muchos con Sale
    public function sale()
    {
        return $this->belongsTo(Sale::class, 'id_venta');
    }
}

```

### Datos seeder
### APi.

##	Conclusiones
Mediante los pasos especificados y las logicas para los modelados y creacion tanto de migraciones y models mediante Laravel, se logra satisfacer al menos en lo que backend se refiere, las necesidades de la tienda "SharksTCG".
##	Bibliografía
-  Laravel 8 Overview and Introduction to Jetstream - Livewire and Inertia,  https://www.youtube.com/watch?v=abcd1234
##	Anexos
### foto de la empresa para la cual estan desarrollando
### ubicacion
