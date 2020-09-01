<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::insert(['name'=>'Dúvidas', 'description' => 'Tirar duvidas usuarios']);
        Categoria::insert(['name'=>'Sugestões', 'description' => 'Sugerir novas funções']);
        Categoria::insert(['name'=>'Críticas', 'description' => 'Críticas sobre o sistema']);
        Categoria::insert(['name'=>'Outros', 'description' => 'Outros assuntos']);
    }
}
