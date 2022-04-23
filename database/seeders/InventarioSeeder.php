<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\categorias_productos::factory(10)->create();
        \App\Models\productos::factory(200)->create();
    }
}
