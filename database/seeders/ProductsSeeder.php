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
            'name' => 'SUNVIT LIFE COLÁGENO',
            'description' => '500 MG 60 CÁPSULAS',
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/7106629d99001824.png',
            'price' => 13249,
            'stock_quantity' => 26,
        ]);


        Products::create([
            'name' => 'PRUDENCE CONDONES',
            'description' => 'SABOR Y AROMA MIX 5 UNIDADES',
            'price' => 4.500,
            'stock_quantity' => 18,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/3ba7db5c1192811-Prudence-Mix-650x450px.png',
        ]);

        Products::create([
            'name' => 'Protector Solar',
            'description' => 'EUCERIN SUN FACIAL HYDRO FLUID ULTRA LIGERA 50 ML',
            'price' => 11.670,
            'stock_quantity' => 33,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/c2e82b203749477-650X450px.jpg',
        ]);

        Products::create([
            'name' => 'PHARMATON WOMEN',
            'description' => 'TABLETAS RECUBIERTAS VÍA ORAL 30 UNIDADES',
            'price' => 7.340,
            'stock_quantity' => 30,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/b6c3fabb5549793-650x450.jpg',
        ]);

        Products::create([
            'name' => 'Jarabe complemento de vitaminas',
            'description' => 'DAYAMINERAL 240 ML JARABE VIA ORAL',
            'price' => 5.500,
            'stock_quantity' => 12,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/26c5e6aa3201460-DAYAMINERAL-JBE-X240-MLb.jpg',
        ]);

        Products::create([
            'name' => 'AMPOLLA',
            'description' => 'ENTEROGERMINA PLUS 5 ML AMPOLLA BEBIBLE VIA ORAL',
            'price' => 6.700,
            'stock_quantity' => 22,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/3f060ca45541563-ENTEROGERMINA-PLUS-5ML-X5.jpg',
        ]);

        Products::create([
            'name' => 'Jarabe',
            'description' => 'ALLEGRA PEDIATRICO 150 ML JARABE VIA ORAL',
            'price' => 4.800,
            'stock_quantity' => 11,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/3e30d2e95540009-Caja-Pediatrico-30mg.jpg',
        ]);

        Products::create([
            'name' => 'Protector Solar',
            'description' => 'URIAGE BARIESUN SPF50+ 50ML',
            'price' => 9.221,
            'stock_quantity' => 39,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/1dc6acde3511376.png',
        ]);

        Products::create([
            'name' => 'Jarabe',
            'description' => 'PHARMATON KIDDI JARABE 100 ML VIA ORAL',
            'price' => 6.239,
            'stock_quantity' => 30,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/c325d1387783800-Pharmaton-Kiddi-Jarabe-100ml.jpg',
        ]);

        Products::create([
            'name' => 'Protector Solar',
            'description' => 'HAWAIIAN TROPIC ISLAND SPORT CREMA 240 ML',
            'price' => 12.769,
            'stock_quantity' => 19,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/c8ea9a403070289.png',
        ]);

        Products::create([
            'name' => 'Vitaminas',
            'description' => 'SUNVIT LIFE MULTI ESTUDIANTES 60 TABLETAS',
            'price' => 10.874,
            'stock_quantity' => 31,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/649e7ff799001834.png',
        ]);

        Products::create([
            'name' => 'Ungüento Tópico',
            'description' => 'VICK VAPORUB UNGÜENTO 100 GR',
            'price' => 2.940,
            'stock_quantity' => 30,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/5980214d8128287-VICK-VAPORUB-UNG-X100-G.jpg',
        ]);

        Products::create([
            'name' => 'Vitaminas para niños',
            'description' => 'BENET KIDS GOMAS VITAMINA C + ZINC 48 UNIDADES',
            'price' => 5.090,
            'stock_quantity' => 44,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/f599b85f1694033.jpg',
        ]);

        Products::create([
            'name' => 'Protector Solar',
            'description' => 'BANANA BOAT DRY BALANCE SPORT LOCIÓN 180 ML',
            'price' => 10.881,
            'stock_quantity' => 30,
            'image_url' => 'https://app.farmacialabomba.com/Images/Upload/1/2/9f13d407215250.png',
        ]);

        Products::create([
            'name' => 'PEPTO-BISMOL',
            'description' => 'SUSPENSIÓN SABOR CEREZA 236 ML',
            'price' => 4.018,
            'stock_quantity' => 30,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/8a75f1428125975-Peptobismol-236-ml.jpg',
        ]);

        Products::create([
            'name' => 'Cápsulas de bacalao',
            'description' => 'CAPSULAS ACEITE DE HIGADO DE BACALAO PARA ADULTO x 25 unds',
            'price' => 674.74,
            'stock_quantity' => 30,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/99055441.jpg',
        ]);

        Products::create([
            'name' => 'Vitaminas',
            'description' => 'CEBIÓN MINISMASTICABLES MULTISABORES',
            'price' => 1.974,
            'stock_quantity' => 27,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/f7e7a3b86894641-CEBION-MINIS.jpg',
        ]);

        Products::create([
            'name' => 'Mascarilla facial',
            'description' => 'ASEPXIA CARBÓN MASCARILLA 30 GR',
            'price' => 4.045,
            'stock_quantity' => 07,
            'image_url' => 'https://app.farmacialabomba.com//Images/Upload/1/2/e8d9dc915939459.jpg',
        ]);

    }
}
