<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('productos')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'Primer producto',
            'descripcion' => 'Este Producto es para este tipo de publico, este producto es para ti Este Producto es para este tipo de publico, este producto es para ti Este Producto es para este tipo de publico, este producto es para ti',
            'costo' => '123'
    
        ]);

        
        DB::table('productos')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'segundo producto',
            'descripcion' => 'Este Producto es para este tipo de publico, este producto es para ti Este Producto es para este tipo de publico, este producto es para ti Este Producto es para este tipo de publico, este producto es para ti',
            'costo' => '23'
    
        ]);

        
        DB::table('productos')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'tercer producto',
            'descripcion' => 'Este Producto es para este tipo de publico, este producto es para ti Este Producto es para este tipo de publico, este producto es para ti Este Producto es para este tipo de publico, este producto es para ti',
            'costo' => '638'
    
        ]);

        
        DB::table('productos')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'Cuerto producto',
            'descripcion' => 'Este Producto es para este tipo de publico, este producto es para ti Este Producto es para este tipo de publico, este producto es para ti Este Producto es para este tipo de publico, este producto es para ti',
            'costo' => '253'
    
        ]);

    }
}
