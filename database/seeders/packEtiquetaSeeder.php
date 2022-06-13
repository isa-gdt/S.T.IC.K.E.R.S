<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class packEtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $datos = [];

        for($i=1; $i<15; $i++)
        array_push($datos,['idEti'=>$faker->numberBetween(1,15), 'idSti'=>$faker->numberBetween(1,15)]);

            DB::table('pack_etiqueta')->insert($datos);
    }
}
