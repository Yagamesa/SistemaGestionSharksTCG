# Proyecto formativo: Modelado Backend de un sistema para la tienda "SharksTCG".
- Sebastian Eguez Mendoza
- [Facebook](https://www.facebook.com/sebastianeguezmendoza/)
- [Github](https://github.com/Yagamesa)



# Sistema de Gestión SharksTCG
![WhatsApp Image 2024-03-04 at 15.58.42 (1)](https://live.staticflickr.com/65535/53566963307_a83c9da181_b.jpg)
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


2. **Creación de Controladores y Rutas API:**
   Antesde las rutas se debe crear los controladores de cada modelo utilizando el comando: `php artisan make:controller nombredelcontrolador` En el archivo `routes/api.php`, define las rutas para tu API. Puedes asignar rutas a métodos del controlador o trabajar directamente con funciones de cierre.

    Ejemplo de ruta:

    ```php
    Route::get('/users', [UserController::class, 'index']);//Mostrar Usuarios
    ```

3. **Middleware y Autenticación (Opcional):**
   Si es necesario, configura middleware para manejar la autenticación y la autorización. Puedes aplicar middleware a rutas o controladores.

4. **Pruebas de API:**
   Utiliza herramientas como [Postman](https://www.postman.com/) para realizar pruebas de tus endpoints de API y asegurarte de que funcionan correctamente.
5. Ejemplo de ruta en postman: 
    ```php
   http://127.0.0.1:8000/api/tournament-clients/1/1
    ```



## Modelado o Sistematización

### Diagrama de Clases
[![SysSharks](https://live.staticflickr.com/65535/53558770308_2f10da4d39_c.jpg)](https://flic.kr/p/2pANGsh)

### Diagrama Entidad-Relación
![Captura de pantalla (95)](https://live.staticflickr.com/65535/53568237399_0251ac6ef9_c.jpg)


### Migraciones

```bash
<?php

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
            $table->id();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Tabla producto
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categoria');
            $table->string('stock')->nullable();
            $table->decimal('precio_compra')->nullable();
            $table->decimal('precio_venta')->nullable();
            $table->decimal('precio_preventa')->nullable();
            $table->decimal('precio_sharkcoins')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Resto de las tablas y relaciones aquí ...
// Tabla proveedor
Schema::create('proveedor', function (Blueprint $table) {
    $table->id();
    $table->string('nombre');
    $table->string('direccion');
    $table->string('telefono');
    $table->string('contacto_correo'); 
    $table->softDeletes();
    $table->timestamps();
});
        // Tabla compra
        Schema::create('compra', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
           
            $table->foreign('id_usuario')->references('id')->on('users'); 
            $table->date('fecha_compra');
            $table->softDeletes();
            $table->timestamps();
        });

      
          // Tabla cliente
          Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('celular');
            $table->string('codigo_yugioh');
            $table->string('codigo_digimon');
            $table->string('codigo_onepiece');
            $table->decimal('sharkCoins');
            $table->decimal('deuda');
            $table->softDeletes();
            $table->timestamps();
        });
        // Tabla venta
        Schema::create('venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->foreign('id_usuario')->references('id')->on('users'); // Referencia a la tabla users
            $table->date('fecha_venta');
            $table->softDeletes();
            $table->timestamps();
        });

       

        // Tabla preventa
        Schema::create('preventa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->integer('cantidad');
            $table->decimal('precio_unitario');
            $table->decimal('total');
            $table->decimal('saldo'); // pagado/pendiente
            $table->date('fecha_pago');
            $table->string('tipoDePago');
            $table->decimal('ingreso');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_usuario')->references('id')->on('users'); // Referencia a la tabla users
            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->softDeletes();
            $table->timestamps();
        });

     
        // Tabla torneo
        Schema::create('torneo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha');
            $table->softDeletes();
            $table->timestamps();
        });

       
             // Tabla torneo_cliente (Tabla Pivot)
             Schema::create('torneo_cliente', function (Blueprint $table) {
                $table->unsignedBigInteger('id_torneo');
                $table->foreign('id_torneo')->references('id')->on('torneo');
                $table->unsignedBigInteger('id_cliente');
                $table->foreign('id_cliente')->references('id')->on('cliente');
                $table->decimal('pago_torneo');
                $table->string('tipoDePago');
                $table->date('fecha_pago');
                $table->decimal('ingreso');
                $table->primary(['id_torneo','id_cliente']);
                $table->softDeletes();
                $table->timestamps();
                
            });
       
        // Tabla compra_proveedor (Tabla Pivot)
        Schema::create('compra_proveedor', function (Blueprint $table) {
            $table->unsignedBigInteger('id_compra');
            $table->foreign('id_compra')->references('id')->on('compra');
            $table->unsignedBigInteger('id_proveedor');
            $table->foreign('id_proveedor')->references('id')->on('proveedor');
            $table->string('nombre_producto');
            $table->integer('cantidad');
            $table->decimal('precio_unitario');
            $table->decimal('total');
            $table->string('tipoDePago');
            $table->decimal('egreso');
            $table->primary(['id_compra','id_proveedor']);
            $table->softDeletes();
            $table->timestamps();
        });

       

        // Tabla producto_venta (Tabla Pivot)
        Schema::create('producto_venta', function (Blueprint $table) {
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('producto');
            $table->unsignedBigInteger('id_venta');
            $table->foreign('id_venta')->references('id')->on('venta');
            $table->integer('cantidad');
            $table->decimal('total');
            $table->decimal('saldoPagado');
            $table->decimal('descuento');
            $table->string('tipoDePago');
            $table->decimal('ingreso');
            $table ->decimal('precio_unitario');
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
        
        Schema::dropIfExists('producto_venta');
        Schema::dropIfExists('compra_proveedor');
        Schema::dropIfExists('torneo_cliente');
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
        'precio_sharkcoins'
    ];

    protected $table = 'producto';

    // Relación muchos a uno con Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación muchos a muchos con Sale
    public function sales()
    {
        return $this->belongsToMany(Sale::class, 'producto_venta', 'id_producto', 'id_venta');
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
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


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

       // Relación BelongsToMany con Product
       public function products(): BelongsToMany
       {
           return $this->belongsToMany(Product::class, 'producto_venta', 'id_venta', 'id_producto')
               ->withPivot(['cantidad', 'total', 'descuento', 'saldoPagado', 'tipoDePago', 'ingreso'])
               ->withTimestamps();
       }
   
       // Relación BelongsTo con Client
       public function client(): BelongsTo
       {
           return $this->belongsTo(Client::class, 'id_cliente');
       }
   
       // Relación BelongsTo con User
       public function user(): BelongsTo
       {
           return $this->belongsTo(User::class, 'id_usuario');
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

    use HasFactory;
    use SoftDeletes;
    protected $table = 'producto_venta';
    public $timestamps = true;
    protected $fillable = [
        'cantidad',
        'precio_unitario',
        'total',
        'descuento',
        'saldoPagado',
        'tipoDePago',
        'ingreso',
    ];

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
``` Bash
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Client;
use App\Models\PreSale;
use App\Models\Product;
use App\Models\ProductSale;
use App\Models\Purchase;
use App\Models\PurchaseSupplier;
use App\Models\Sale;
use App\Models\Supplier;
use App\Models\Tournament;
use App\Models\TournamentClient;
use App\Models\User;
class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       

        //
        #Category
        Category::create(['nombre'=>'Yu-gi-oh', 'descripcion'=>'Cartas de Yugioh en Producto Sellado']);
        Category::create(['nombre'=>'Digimon TCG', 'descripcion'=>'Cartas de Digimon en Producto Sellado']);
        Category::create(['nombre'=>'OnePieceTCG', 'descripcion'=>'Cartas de One Piece en Producto Sellado']);
        Category::create(['nombre'=>'MagicTheGathering', 'descripcion'=>'Cartas de Magic the gathering en Producto Sellado']);
        Category::create(['nombre'=>'DragonBallTCG', 'descripcion'=>'Cartas de Dragon Ball en Producto Sellado']);
        Category::create(['nombre'=>'Accesorios_Yu-gi-oh', 'descripcion'=>'Accesorios relacionados al juego Yugioh']);
        Category::create(['nombre'=>'Accesorios_Digimon', 'descripcion'=>'Accesorios relacionados al juego Digimon']);
        Category::create(['nombre'=>'Accesorios_OnePieceTCG', 'descripcion'=>'Accesorios relacionados al juego One Piece']);
        Category::create(['nombre'=>'Accesorios', 'descripcion'=>'Accesorios relacionados a diversos TCG o Juegos de mesa']);
        Category::create(['nombre'=>'JuegosDeMesa', 'descripcion'=>'Juegos de Mesa varios']);

        #User
        User::create([
            'name'=>'Admin',
            'rol'=>'ADMBD',
            'email'=>'admin@gmail.com',
            'password'=>'12345678',
        ]);
        User::create([
            'name'=>'Cajero',
            'rol'=>'Cajero',
            'email'=>'cajero@gmail.com',
            'password'=>'12345678',
        ]);
        #Product
        Product::create(['nombre'=>'Phantom nightmare Booster Box',
        'descripcion'=> 'Caja sellada de 24 sobres',
        'id_categoria'=>1,
        'stock'=>10,
        'precio_compra'=>700,
        'precio_venta'=>850,
        'precio_preventa'=>800,'precio_sharkcoins'=>200]);

        Product::create(['nombre'=>'Maze of milenia Booster Box',
        'descripcion'=> 'Caja sellada de 24 sobres',
        'id_categoria'=>1,
        'stock'=>10,
        'precio_compra'=>700,
        'precio_venta'=>850,
        'precio_preventa'=>800,'precio_sharkcoins'=>200]);

        Product::create(['nombre'=>'OP 05 Booster Box',
        'descripcion'=> 'Caja sellada de 36 sobres',
        'id_categoria'=>3,
        'stock'=>10,
        'precio_compra'=>850,
        'precio_venta'=>1000,
        'precio_preventa'=>900,'precio_sharkcoins'=>220]);
        Product::create(['nombre'=>'Sleeves Dragon Shield 60 unidades Standard matte',
        'descripcion'=> 'Protectores para cartas de 60 unidades, textura mate, 60 unidades',
        'id_categoria'=>9,
        'stock'=>120,
        'precio_compra'=>60,
        'precio_venta'=>70,
        'precio_preventa'=>65,'precio_sharkcoins'=>2]);
        Product::create(['nombre'=>'Sleeves Yugi&Kaiba 60 unidades Standard',
        'descripcion'=> 'Protectores para cartas de 60 unidades, diseño de kaiba y yugi, 60 unidades',
        'id_categoria'=>6,
        'stock'=>20,
        'precio_compra'=>70,
        'precio_venta'=>90,
        'precio_preventa'=>80,'precio_sharkcoins'=>3]);

        #Supplier
        Supplier::create([ 'nombre'=>'Devir',
        'direccion'=>'USA',
        'telefono'=>'',
        'contacto_correo'=>'devir@konami.org']);

        Supplier::create([ 'nombre'=>'Embol',
        'direccion'=>'Parque Industrial',
        'telefono'=>'+591 77015894',
        'contacto_correo'=>'embol@outlook.com']);
        
        #Client
        Client::create(['nombre'=>'Sebastian Eguez',
        'celular'=>77013637,
        'codigo_yugioh'=>'042240068',
        'codigo_digimon'=>'',
        'codigo_onepiece'=>'',
        'sharkcoins'=>0,
        'deuda'=>0
        ]);
        Client::create(['nombre'=>'Oscar Adamel',
        'celular'=>460884578,
        'codigo_yugioh'=>'0402256068',
        'codigo_digimon'=>'55896969',
        'codigo_onepiece'=>'',
        'sharkcoins'=>0,
        'deuda'=>0]);

        #Sale
        Sale::create([
            'id_cliente'=>1,
        'id_usuario'=>2,
        'fecha_venta'=>'2024-03-03',
        
        ]);
        Sale::create([
            'id_cliente'=>2,
        'id_usuario'=>2,
        'fecha_venta'=>'2024-03-03',
        
        ]);

        #ProductSale
        $producto_id = 1; // ID del producto que deseas asociar
        $venta_id = 1; // ID de la venta a la que deseas asociar el producto
        $descuento = 10;
        $producto = Product::find($producto_id);
        $cantidad = 5; // Cantidad de productos
        
        $precio_producto = $producto->precio_venta;
        $total = $cantidad * $precio_producto;
        
        $Venta1 = Sale::find($venta_id);
        
      
        $Venta1->products()->attach($producto_id, [
            'cantidad' => $cantidad,
            'precio_unitario'=>$precio_producto,
            'total' => $total,
            'descuento' => $descuento,
            'saldoPagado' => $total - $descuento,
            'tipoDePago' => 'Efectivo',
            'ingreso' => $total/2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        #ProductSale
        $producto_id = 3; 
        $venta_id = 2; 
        $descuento = 0;
        $producto = Product::find($producto_id);
        $cantidad = 1; 
        
        $precio_producto = $producto->precio_venta;
        $total = $cantidad * $precio_producto;
        
        $Venta1 = Sale::find($venta_id);
        
       
        $Venta1->products()->attach($producto_id, [
            'cantidad' => $cantidad,
            'precio_unitario'=>$precio_producto,
            'total' => $total,
            'descuento' => $descuento,
            'saldoPagado' => $total - $descuento,
            'tipoDePago' => 'Efectivo',
            'ingreso' => $total,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        

        #Presale
        $cantidad = 2;
        $precio= 800;
        $total= $precio*$cantidad;
        $saldo = 200;
        PreSale::create([   'nombre_producto'=>'Caja 24 boosrter Legacy Of destruction',
        'cantidad'=> $cantidad,
        'precio_unitario'=>$precio,
        'total'=> $total ,
        'saldo'=> $saldo ,
        'fecha_pago'=> now(),
        'tipoDePago'=>'Efectivo',
        'ingreso'=> $total - $saldo,
        'id_usuario'=>2 ,
        'id_cliente'=>1]);

        $cantidad = 2;
        $precio= 900;
        $total= $precio*$cantidad;
        $saldo = 900;
        PreSale::create([   'nombre_producto'=>'Caja 24 boosters OP5',
        'cantidad'=> $cantidad,
        'precio_unitario'=>$precio,
        'total'=> $total ,
        'saldo'=> $saldo ,
        'fecha_pago'=> now(),
        'tipoDePago'=>'Efectivo',
        'ingreso'=> $total - $saldo,
        'id_usuario'=>2 ,
        'id_cliente'=>2]);
        

        #torneo
        Tournament::create([ 'nombre'=>'otsChampionship PHNM',
        'fecha'=>'2024-03-02',]);
        Tournament::create([ 'nombre'=>'Store Tournament',
        'fecha'=>'2024-03-01',]);

        

        #TournamentClient
        
        $client = Client::find(1);
        $tournament = Tournament::find(1);


        $tournament->clients()->attach($client->id, [
        'pago_torneo' => 35,
        'fecha_pago' => now(), 
        'tipoDePago' => 'Efectivo',
        'ingreso' => 35, 
        ]);

        $client =  Client::find(2);
        $tournament->clients()->attach($client->id, [
            'pago_torneo' => 35,
            'fecha_pago' => now(), 
            'tipoDePago' => 'Efectivo',
            'ingreso' => 35, 
            ]);

        $client = Client::find(1);
        $tournament = Tournament::find(1);

        $client = Client::find(2);
        $tournament = Tournament::find(2);
        $tournament->clients()->attach($client->id, [
        'pago_torneo' => 70,
        'fecha_pago' => now(), 
        'tipoDePago' => 'Efectivo',
        'ingreso' => 70, 
        'created_at' => now(),
            'updated_at' => now(),
        ]);

        #Purchase
        Purchase::create([ 'id_usuario'=>2,
        'fecha_compra'=>'2024-02-15'
        ]);
        Purchase::create([ 'id_usuario'=>2,
        'fecha_compra'=>'2024-02-15'
        ]);


        #PurchaseSupplier
      
$supplier1 = Supplier::find(1);
$purchase1 = Purchase::find(1);
$cantidad1 = 20;
$precio1 = 700;
$total1 = $cantidad1 * $precio1;

$purchase1->suppliers()->attach($supplier1, [
    'nombre_producto' => 'Legacy Of Destruction',
    'cantidad' => $cantidad1,
    'precio_unitario' => $precio1,
    'total' => $total1,
    'tipoDePago' => 'Efectivo',
    'egreso' => $total1,
    'created_at' => now(),
            'updated_at' => now(),
]);


$supplier2 = Supplier::find(1);
$purchase2 = Purchase::find(2);
$cantidad2 = 10;
$precio2 = 850;
$total2 = $cantidad2 * $precio2;

$purchase2->suppliers()->attach($supplier2, [
    'nombre_producto' => 'Caja 24 boosters OP5',
    'cantidad' => $cantidad2,
    'precio_unitario' => $precio2,
    'total' => $total2,
    'tipoDePago' => 'Efectivo',
    'egreso' => $total2,
    'created_at' => now(),
            'updated_at' => now(),
]);

        




    }
}   
 ```
### APi.
```Bash
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductSaleController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PurchaseSupplierController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PreSaleController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TournamentClientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Rutas de usuarios
Route::get('/users', [UserController::class, 'index']);//Mostrar Usuarios
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);


// Rutas de categorías
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('{id}', [CategoryController::class, 'show']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::put('{id}', [CategoryController::class, 'update']);
    Route::delete('{id}', [CategoryController::class, 'destroy']);
   
});

//rutas de product

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('{id}', [ProductController::class, 'show']);
    Route::post('/', [ProductController::class, 'store']);
    Route::put('{id}', [ProductController::class, 'update']);
    Route::delete('{id}', [ProductController::class, 'destroy']);
   
});


//rutas Sale


Route::prefix('sales')->group(function () {
    Route::get('/', [SaleController::class, 'index']);
    Route::get('{id}', [SaleController::class, 'show']);
    Route::post('/', [SaleController::class, 'store']);
    Route::put('{id}', [SaleController::class, 'update']);
    Route::delete('{id}', [SaleController::class, 'destroy']);
});


//rutes productSale


Route::prefix('product-sales')->group(function () {
    Route::get('/', [ProductSaleController::class, 'index']);
    Route::get('{productId}/{saleId}', [ProductSaleController::class, 'show']);
    Route::post('/', [ProductSaleController::class, 'store']);
    Route::put('{productId}/{saleId}', [ProductSaleController::class, 'update']);
    Route::delete('{productId}/{saleId}', [ProductSaleController::class, 'destroy']);
});

//Purchase


Route::prefix('purchases')->group(function () {
    Route::get('/', [PurchaseController::class, 'index']);
    Route::get('{id}', [PurchaseController::class, 'show']);
    Route::post('/', [PurchaseController::class, 'store']);
    Route::put('{id}', [PurchaseController::class, 'update']);
    Route::delete('{id}', [PurchaseController::class, 'destroy']);
});

//Supplier


Route::prefix('suppliers')->group(function () {
    Route::get('/', [SupplierController::class, 'index']);
    Route::get('{id}', [SupplierController::class, 'show']);
    Route::post('/', [SupplierController::class, 'store']);
    Route::put('{id}', [SupplierController::class, 'update']);
    Route::delete('{id}', [SupplierController::class, 'destroy']);
});

//PurchaseSupplier


Route::prefix('purchase-suppliers')->group(function () {
    Route::get('/', [PurchaseSupplierController::class, 'index']);
    Route::get('{purchaseId}/{supplierId}', [PurchaseSupplierController::class, 'show']);
    Route::post('/', [PurchaseSupplierController::class, 'store']);
    Route::put('{purchaseId}/{supplierId}', [PurchaseSupplierController::class, 'update']);
    Route::delete('{purchaseId}/{supplierId}', [PurchaseSupplierController::class, 'destroy']);
});

//client


Route::prefix('clients')->group(function () {
    Route::get('/', [ClientController::class, 'index']);
    Route::get('{id}', [ClientController::class, 'show']);
    Route::post('/', [ClientController::class, 'store']);
    Route::put('{id}', [ClientController::class, 'update']);
    Route::delete('{id}', [ClientController::class, 'destroy']);
});

//preSale


Route::prefix('presales')->group(function () {
    Route::get('/', [PreSaleController::class, 'index']);
    Route::get('{id}', [PreSaleController::class, 'show']);
    Route::get('client/{clientId}', [PreSaleController::class, 'findByClientId']);
    Route::post('/', [PreSaleController::class, 'store']);
    Route::put('{id}', [PreSaleController::class, 'update']);
    Route::delete('{id}', [PreSaleController::class, 'destroy']);
});

//tournament


Route::prefix('tournaments')->group(function () {
    Route::get('/', [TournamentController::class, 'index']);
    Route::get('{id}', [TournamentController::class, 'show']);
    Route::post('/', [TournamentController::class, 'store']);
    Route::put('{id}', [TournamentController::class, 'update']);
    Route::delete('{id}', [TournamentController::class, 'destroy']);
});

//tournamentClient

Route::get('tournament-clients', [TournamentClientController::class, 'index']);
Route::get('tournament-clients/{tournamentId}/{clientId}', [TournamentClientController::class, 'show']);
Route::post('tournament-clients', [TournamentClientController::class, 'store']);
Route::put('tournament-clients/{tournamentId}/{clientId}', [TournamentClientController::class, 'update']);
Route::delete('tournament-clients/{tournamentId}/{clientId}', [TournamentClientController::class, 'destroy']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

```

##	Conclusiones
Mediante los pasos especificados y las logicas para los modelados y creacion tanto de migraciones y models mediante Laravel, se logra satisfacer al menos en lo que backend se refiere, las necesidades de la tienda "SharksTCG".El objetivo final era dejar lista las consultas y datos de prueba insertados mediante seeders ademas de que las consultas deberias poder hacer todo lo que en cuanto a crud se habla, se logro completar el proceso de creado de controladores y rutas para la api, ademas de las funcionalidades principales de un crud. Se podria decir que se cumplio con los propuesto en los objetivos.
##	Bibliografía
-  Laravel 8 Overview and Introduction to Jetstream - Livewire and Inertia,  https://www.youtube.com/watch?v=abcd1234
##	Anexos
### Sharks TCG
![WhatsApp Image 2024-03-04 at 15.58.42 (1)](https://live.staticflickr.com/65535/53566963307_a83c9da181_b.jpg)
### Tienda
![WhatsApp Image 2024-03-04 at 15.44.47 (1)](https://live.staticflickr.com/65535/53568010928_d5df786441_b.jpg)
![WhatsApp Image 2024-03-04 at 15.44.47 (2)](https://live.staticflickr.com/65535/53567814871_c77419cb16_b.jpg)
### Preventas
![WhatsApp Image 2024-03-04 at 15.58.42](https://live.staticflickr.com/65535/53568256990_63f745a591_b.jpg)

### Sistema de torneos
![WhatsApp Image 2024-03-04 at 15.58.42 (2)](https://live.staticflickr.com/65535/53568256985_39a9ea7567_b.jpg)

### ubicacion

Buenos Aires 142, Santa Cruz de la Sierra
[![Ubicación](https://maps.googleapis.com/maps/api/staticmap?center=-17.78045876671921,-63.18326839815042&zoom=15&size=400x300&sensor=false)](https://maps.app.goo.gl/bpMzSPPsyKSw6onh6)

