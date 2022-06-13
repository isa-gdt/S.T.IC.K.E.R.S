<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(15)->create();
        //  \App\Models\Etiqueta::factory(15)->create();
        //  \App\Models\Pack::factory(15)->create();
        //  \App\Models\Sticker::factory(15)->create();

         $this->call([packEtiquetaSeeder::class]);
    }
}
