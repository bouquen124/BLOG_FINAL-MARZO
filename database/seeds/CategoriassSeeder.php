<?php

use Illuminate\Database\Seeder;

class CategoriassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'estado_id' => '1',
            'nombre' => 'Diseño',
            'descripcion' => 'descripcion'
        ]);
        
        DB::table('categorias')->insert([
            'estado_id' => '1',
            'nombre' => 'Programación',
            'descripcion' => 'descripcion'
        ]);
        
        DB::table('categorias')->insert([
            'estado_id' => '1',
            'nombre' => 'Hardware',
            'descripcion' => 'descripcion'
        ]);
        
        DB::table('categorias')->insert([
            'estado_id' => '1',
            'nombre' => 'Modelado 3D',
            'descripcion' => 'descripcion'
        ]);
 
    }
}
