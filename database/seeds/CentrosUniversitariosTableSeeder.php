<?php

use Illuminate\Database\Seeder;

class CentrosUniversitariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\CentroUniversitario::create(['centro' => 'CUCEI']);
        App\CentroUniversitario::create(['centro' => 'CUCBA']);
    }
}
