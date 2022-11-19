<?php

namespace Database\Seeders;

use Dotenv\Parser\Value;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
            [
                [
                    'name' => 'Frutas',
                    'slug' => Str::slug('Frutas' . time()),
                ],
                [
                    'name' => 'Verduras',
                    'slug' => Str::slug('Verduras' . time()),
                ],
                [
                    'name' => 'Salsas y mojos',
                    'slug' => Str::slug('Salsas y mojos' . time()),
                ],
                [
                    'name' => 'Marmeladas',
                    'slug' => Str::slug('Marmeladas' . time()),
                ],
                [
                    'name' => 'Vinos',
                    'slug' => Str::slug('Vinos' . time()),
                ],
            ];

        DB::table('categories')->insert($data);
    }
}
