<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Limpiar la tabla antes de agregar datos
        Products::truncate();


        // Agregar datos de ejemplo
        Products::create([
            'name' => 'MASCARILLA FACIAL',
            'description' => 'CARBÓN MASCARILLA 30 GR',
            'price' => 4.045,
            'stock_quantity' => 07,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/e8d9dc915939459.jpg',
        ]);

        Products::create([
            'name' => 'VITAMINAS',
            'description' => 'CEBIÓN MULTISABORES',
            'price' => 1.974,
            'stock_quantity' => 27,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/f7e7a3b86894641-CEBION-MINIS.jpg',
        ]);

        Products::create([
            'name' => 'PROTECTOR SOLAR',
            'description' => 'EUCERIN SUN FACIAL',
            'price' => 11.670,
            'stock_quantity' => 33,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/c2e82b203749477-650X450px.jpg',
        ]);

        Products::create([
            'name' => 'PHARMATON WOMEN',
            'description' => 'TABLETAS RECUBIERTAS',
            'price' => 7.340,
            'stock_quantity' => 30,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/b6c3fabb5549793-650x450.jpg',
        ]);

        Products::create([
            'name' => 'VITAMINAS',
            'description' => 'DAYAMINERAL 240 ML',
            'price' => 5.500,
            'stock_quantity' => 12,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/26c5e6aa3201460-DAYAMINERAL-JBE-X240-MLb.jpg',
        ]);

        Products::create([
            'name' => 'AMPOLLA',
            'description' => 'ENTEROGERMINA PLUS',
            'price' => 6.700,
            'stock_quantity' => 22,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/3f060ca45541563-ENTEROGERMINA-PLUS-5ML-X5.jpg',
        ]);

        Products::create([
            'name' => 'JARABE',
            'description' => 'ALLEGRA PEDIATRICO',
            'price' => 4.800,
            'stock_quantity' => 11,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/3e30d2e95540009-Caja-Pediatrico-30mg.jpg',
        ]);

        Products::create([
            'name' => 'PROTECTOR SOLAR',
            'description' => 'URIAGE BARIESUN',
            'price' => 9.221,
            'stock_quantity' => 39,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/1dc6acde3511376.png',
        ]);

        Products::create([
            'name' => 'JARABE',
            'description' => 'PHARMATON KIDDI',
            'price' => 6.239,
            'stock_quantity' => 30,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/c325d1387783800-Pharmaton-Kiddi-Jarabe-100ml.jpg',
        ]);

        Products::create([
            'name' => 'PROTECTOR SOLAR',
            'description' => 'HAWAIIAN TROPIC ISLAND',
            'price' => 12.769,
            'stock_quantity' => 19,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/c8ea9a403070289.png',
        ]);

        Products::create([
            'name' => 'VITAMINAS',
            'description' => 'SUNVIT LIFE MULTI',
            'price' => 10.874,
            'stock_quantity' => 31,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/649e7ff799001834.png',
        ]);

        Products::create([
            'name' => 'UNGÜENTO TÓPICO',
            'description' => 'VICK VAPORUB',
            'price' => 2.940,
            'stock_quantity' => 30,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/5980214d8128287-VICK-VAPORUB-UNG-X100-G.jpg',
        ]);

        Products::create([
            'name' => 'VITAMINAS PARA NIÑOS',
            'description' => 'GOMAS VITAMINA C',
            'price' => 5.090,
            'stock_quantity' => 44,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/f599b85f1694033.jpg',
        ]);

        Products::create([
            'name' => 'PROTECTOR SOLAR',
            'description' => 'BANANA BOAT DRY',
            'price' => 10.881,
            'stock_quantity' => 30,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/9f13d407215250.png',
        ]);

        Products::create([
            'name' => 'PEPTO-BISMOL',
            'description' => 'SABOR CEREZA 236 ML',
            'price' => 4.018,
            'stock_quantity' => 30,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/8a75f1428125975-Peptobismol-236-ml.jpg',
        ]);

        Products::create([
            'name' => 'CÁPSULAS DE BACALAO',
            'description' => 'PARA ADULTO x 25 unds',
            'price' => 674.74,
            'stock_quantity' => 30,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/99055441.jpg',
        ]);

        Products::create([
            'name' => 'PRUDENCE CONDONES',
            'description' => 'SABOR Y AROMA MIX',
            'price' => 4.500,
            'stock_quantity' => 18,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/3ba7db5c1192811-Prudence-Mix-650x450px.png',
        ]);

        Products::create([
            'name' => 'BANANA BOAT',
            'description' => 'GEL HUMECTANTE CON ALOE',
            'price' => 2.035,
            'stock_quantity' => 22,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/1bfa3ae00213999-2.jpg',
        ]);

        Products::create([
            'name' => 'SUNVIT LIFE COLÁGENO',
            'description' => '500 MG 60 CÁPSULAS',
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/7106629d99001824.png',
            'price' => 13.249,
            'stock_quantity' => 26,
        ]);

        Products::create([
            'name' => 'TOTAL NATURAL ARTRIFIN',
            'description' => '900 MG 60 CÁPSULAS',
            'price' => 8.220,
            'stock_quantity' => 13,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/58ef18f79150885-artrifin-c-psulas-x-600.jpg',
        ]);
    }
}
