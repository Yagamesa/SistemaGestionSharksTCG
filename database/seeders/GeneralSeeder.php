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
      // Primera inserción
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

// Segunda inserción
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