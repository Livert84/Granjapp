<?php

namespace Database\Seeders;

use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            [
                'name' => 'Melocotones bandeja de 4',
                'slug' => Str::slug('Melocotones bandeja de 4'. time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/melocotones.jpg',
                'price' => 2.89,
                'stock' => 70,
                'category_id' => 1,
            ],
            [
                'name' => 'Platanos Canarios bandeja de 6',
                'slug' => Str::slug('Platanos Canarios bandeja de 6' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/platanos.jpg',
                'price' => 2.39,
                'stock' => 82,
                'category_id' => 1,
            ],
            [
                'name' => 'Sandía',
                'slug' => Str::slug('Sandía Enorme' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/sandias.jpg',
                'price' => 2.89,
                'stock' => 74,
                'category_id' => 1,
            ],
            [
                'name' => 'Manzanas Rojas',
                'slug' => Str::slug('Manzanas Rojas' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/manzanas-rojas.jpg',
                'price' => 3.89,
                'stock' => 23,
                'category_id' => 1,
            ],
            [
                'name' => 'Naranjas rojas en bolso de 1 Kg',
                'slug' => Str::slug('Naranjas rojas en bolso de 1 Kg' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/naranjas.jpg',
                'price' => 3.49,
                'stock' => 50,
                'category_id' => 1,
            ],
            [
                'name' => 'Uva Blanca bandeja de 500g',
                'slug' => Str::slug('Uva Blanca bandeja de 500g' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/uvas-blancas.jpg',
                'price' => 2.29,
                'stock' => 55,
                'category_id' => 1,
            ],
            [
                'name' => 'Uva Negra bandeja de 500g',
                'slug' => Str::slug('Uva Negra bandeja de 500g' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/uvas-negras.jpg',
                'price' => 2.39,
                'stock' => 34,
                'category_id' => 1,
            ],
            [
                'name' => 'Mandarinas del padrón bolso de 1 Kg',
                'slug' => Str::slug('Mandarinas del padrón bolso de 1 Kg' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/mandarinas.jpg',
                'price' => 3.19,
                'stock' => 20,
                'category_id' => 1,
            ],
            [
                'name' => 'Berenjenas negras en bandeja de 4',
                'slug' => Str::slug('Berenjenas negras en bandeja de 4' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/berenjenas.jpg',
                'price' => 2.49,
                'stock' => 30,
                'category_id' => 2,
            ],
            [
                'name' => 'Cebolla blanca bandeja de 4',
                'slug' => Str::slug('Cebolla blanca bandeja de 4' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/cebollas-blancas.jpg',
                'price' => 2.49,
                'stock' => 44,
                'category_id' => 2,
            ],
            [
                'name' => 'Papas grandes en bolso de 1Kg',
                'slug' => Str::slug('Papas grandes en bolso de 1Kg' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/papas.jpg',
                'price' => 1.49,
                'stock' => 78,
                'category_id' => 2,
            ],
            [
                'name' => 'Lechuga a rabiar',
                'slug' => Str::slug('Lechuga a rabiar' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/lechugas.jpg',
                'price' => 2.49,
                'stock' => 87,
                'category_id' => 2,
            ],
            [
                'name' => 'Aguacates en bandeja de 5',
                'slug' => Str::slug('Aguacates en bandeja de 5' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/aguacates.jpg',
                'price' => 4.49,
                'stock' => 66,
                'category_id' => 2,
            ],
            [
                'name' => 'Tomates en caja de 500 g',
                'slug' => Str::slug('Tomates en caja de 500 g' . time()),
                'short_description' => 'Este producto utiliza envoltorio en cera de abeja',
                'picture' => '/images/tomates.jpg',
                'price' => 2.59,
                'stock' => 89,
                'category_id' => 2,
            ],
            [
                'name' => 'Alioli en bote de 300ml',
                'slug' => Str::slug('Alioli en bote de 300 ml' . time()),
                'short_description' => 'Este producto utiliza cristal 100% reciclado',
                'picture' => '/images/alioli.jpg',
                'price' => 2.59,
                'stock' => 73,
                'category_id' => 3,
            ],
            [
                'name' => 'Humus de garbanzos en bote de 300 ml',
                'slug' => Str::slug('Humus de garbanzos en bote de 300 ml' . time()),
                'short_description' => 'Este producto utiliza cristal 100% reciclado',
                'picture' => '/images/humus-garbanzos.jpg',
                'price' => 2.59,
                'stock' => 34,
                'category_id' => 3,
            ],
            [
                'name' => 'Gazpacho en bote de 300 ml',
                'slug' => Str::slug('Gazpacho en bote de 300 ml' . time()),
                'short_description' => 'Este producto utiliza brick 100% reciclado',
                'picture' => '/images/gazpacho.jpg',
                'price' => 2.59,
                'stock' => 56,
                'category_id' => 3,
            ],
            [
                'name' => 'Mayonesa en bote de 300 ml',
                'slug' => Str::slug('Mayonesa en bote de 300 ml' . time()),
                'short_description' => 'Este producto utiliza cristal 100% reciclado',
                'picture' => '/images/mayonesa.jpg',
                'price' => 2.59,
                'stock' => 47,
                'category_id' => 3,
            ],
            [
                'name' => 'Mojo verde en bote de 300 ml',
                'slug' => Str::slug('Mojo verde en bote de 300 ml' . time()),
                'short_description' => 'Este producto utiliza cristal 100% reciclado',
                'picture' => '/images/mojo-verde.jpg',
                'price' => 2.59,
                'stock' => 88,
                'category_id' => 3,
            ],
            [
                'name' => 'Mojo rojo en bote de 300 ml',
                'slug' => Str::slug('Mojo rojo en bote de 300 ml' . time()),
                'short_description' => 'Este producto utiliza cristal 100% reciclado',
                'picture' => '/images/mojo-rojo.jpg',
                'price' => 2.59,
                'stock' => 76,
                'category_id' => 3,
            ],
            [
                'name' => 'Mojo rojo picón en bote de 300 ml',
                'slug' => Str::slug('Mojo rojo picón en bote de 300 ml' . time()),
                'short_description' => 'Este producto utiliza cristal 100% reciclado',
                'picture' => '/images/mojo-rojo.jpg',
                'price' => 2.59,
                'stock' => 77,
                'category_id' => 3,
            ],
            [
                'name' => 'Pesto en bote de 300 ml',
                'slug' => Str::slug('pesto en bote de 300 ml' . time()),
                'short_description' => 'Este producto utiliza cristal 100% reciclado',
                'picture' => '/images/pesto.jpg',
                'price' => 2.59,
                'stock' => 57,
                'category_id' => 3,
            ],
            [
                'name' => 'Salsa de tomate en bote de 300 ml',
                'slug' => Str::slug('Salsa de tomate en bote de 300 ml' . time()),
                'short_description' => 'Este producto utiliza brick 100% reciclado',
                'picture' => '/images/salsa-tomate.jpg',
                'price' => 2.59,
                'stock' => 35,
                'category_id' => 3,
            ],
            [
                'name' => 'Vino blanco en botella de 750 ml',
                'slug' => Str::slug('Vino blanco en botella de 750 ml' . time()),
                'short_description' => 'Este producto utiliza cristal 100% reciclado',
                'picture' => '/images/vino-blanco.jpg',
                'price' => 2.59,
                'stock' => 23,
                'category_id' => 5,
            ],
            [
                'name' => 'Vino blanco afrutado en botella de 750 ml',
                'slug' => Str::slug('Vino blanco afrutado en botella de 750 ml' . time()),
                'short_description' => 'Este producto utiliza cristal 100% reciclado',
                'picture' => '/images/vino-afrutado.jpg',
                'price' => 2.59,
                'stock' => 34,
                'category_id' => 5,
            ],
            [
                'name' => 'Vino tinto en botella de 750 ml',
                'slug' => Str::slug('Vino tinto en botella de 750 ml' . time()),
                'short_description' => 'Este producto utiliza cristal 100% reciclado',
                'picture' => '/images/vino-tinto.jpg',
                'price' => 2.59,
                'stock' => 66,
                'category_id' => 5,
            ],
            [
                'name' => 'Vino rosado en botella de 750 ml',
                'slug' => Str::slug('Vino rosado en botella de 750 ml' . time()),
                'short_description' => 'Este producto utiliza cristal 100% reciclado',
                'picture' => '/images/vino-rosado.jpg',
                'price' => 2.59,
                'stock' => 43,
                'category_id' => 5,
            ],

        ];

        DB::table('products')->insert($data);
    }
}
