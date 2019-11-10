<?php

use Illuminate\Database\Seeder;

class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('grupos')->insert([
            'nombre_grupo' => 'Programacion para internet',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        \App\Grupo::create([
          'nombre_grupo' => 'Algoritmia'
        ]);
    }
}
