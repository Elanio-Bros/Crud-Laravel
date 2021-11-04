<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['codigo'=>1,'nome'=>'Admin']);
        Categoria::create(['codigo'=>2,'nome'=>'Gerente']);
        Categoria::create(['codigo'=>3,'nome'=>'Normal']);
    }
}