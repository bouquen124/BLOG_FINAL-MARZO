<?php

use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('servicios')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'Programación Orientada a Objetos POO',
            'descripcion' => 'tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primertercer',
            'costo' => '256'
    
        ]);
        
        DB::table('servicios')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'Programación en Arduino',
            'descripcion' => 'tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primertercer',
            'costo' => '556'
    
        ]);

        
        DB::table('servicios')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'Clases diseño 3D',
            'descripcion' => 'tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primertercer',
            'costo' => '856'
    
        ]);

        
        DB::table('servicios')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'Clases modelado 3D',
            'descripcion' => 'tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primer tercer Esta es una descripciondel primertercer',
            'costo' => '124'
    
        ]);
    
            
    
    }
}
