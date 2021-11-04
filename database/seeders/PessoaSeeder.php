<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pessoa;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pessoa::create(['nome'=>'Jorge da Silva','e-mail'=>'jorge@terra.com.br','categoria'=>1]);
        Pessoa::create(['nome'=>'Flavia Monteiro','e-mail'=>'flavia@globo.com','categoria'=>2]);
        Pessoa::create(['nome'=>'Marcos Frota Ribeiro','e-mail'=>'ribeiro@gmail.com','categoria'=>2]);
        Pessoa::create(['nome'=>'Raphael Souza Santos','e-mail'=>'rsantos@gmail.com','categoria'=>1]);
        Pessoa::create(['nome'=>'Pedro Paulo Mota','e-mail'=>'ppmota@gmail.com','categoria'=>1]);
        Pessoa::create(['nome'=>'Winder Carvalho da Silva','e-mail'=>'winder@hotmail.com','categoria'=>3]);
        Pessoa::create(['nome'=>'Maria da Penha Albuquerque','e-mail'=>'mpa@hotmail.com','categoria'=>3]);
        Pessoa::create(['nome'=>'Rafael Garcia Souza','e-mail'=>'rgsouza@hotmail.com','categoria'=>3]);
        Pessoa::create(['nome'=>'Tabata Costa','e-mail'=>'tabata_costa@gmail.com','categoria'=>2]);
        Pessoa::create(['nome'=>'Ronil Camarote','e-mail'=>'camarote@terra.com.br','categoria'=>1]);
        Pessoa::create(['nome'=>'Joaquim Barbosa','e-mail'=>'barbosa@globo.com','categoria'=>1]);
        Pessoa::create(['nome'=>'Eveline Maria Alcantra','e-mail'=>'ev_alcantra@gmail.com','categoria'=>2]);
        Pessoa::create(['nome'=>'João Paulo Vieira','e-mail'=>'jpvieria@gmail.com','categoria'=>1]);
        Pessoa::create(['nome'=>'Carla Zamborlini','e-mail'=>'zamborlini@terra.com.br','categoria'=>3]);
    }
}
