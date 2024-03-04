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
           
            $table->foreign('id_usuario')->references('id')->on('users'); // Referencia a la tabla users
            $table->date('fecha_compra');
            $table->softDeletes();
            $table->timestamps();
        });

        // Resto de las tablas y relaciones aquí ...
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

        // Resto de las tablas y relaciones aquí ...

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

       
   

       

        // Tabla ganador_torneo
       # Schema::create('ganador_torneo', function (Blueprint $table) {
          #  $table->id('id_ganador');
          ##  $table->unsignedBigInteger('id_torneo');
           # $table->foreign('id_torneo')->references('id_torneo')->on('torneo');
           # $table->unsignedBigInteger('id_cliente');
            #$table->foreign('id_cliente')->references('id_cliente')->on('cliente');
           # $table->decimal('premio');
           # $table->boolean('entregado');
          #  $table->timestamps();
           # $table->softDeletes();
        #});
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
        // Eliminar tablas en orden inverso para evitar restricciones de clave externa
        Schema::dropIfExists('producto_venta');
        Schema::dropIfExists('compra_proveedor');
        Schema::dropIfExists('torneo_cliente');
       #Schema::dropIfExists('ganador_torneo');
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
