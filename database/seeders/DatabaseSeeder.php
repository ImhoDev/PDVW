<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            ['name' => 'master',  'email' => 'master@master.com', 'password' => bcrypt('master'), 'remember_token' => null],
        ]);
        DB::table('medidas')->insert([
            ['nombre' => 'Servicio', 'codigo_sunat' => 'ZZ',  'active' => true],
            ['nombre' => 'Caja', 'codigo_sunat' => 'BX',  'active' => true],
            ['nombre' => 'Galones', 'codigo_sunat' => 'GLL', 'active' => true],
            ['nombre' => 'Gramos', 'codigo_sunat' => 'GRM', 'active' => true],
            ['nombre' => 'Kilos', 'codigo_sunat' => 'KGM', 'active' => true],
            ['nombre' => 'Litros', 'codigo_sunat' => 'LTR', 'active' => true],
            ['nombre' => 'Metros', 'codigo_sunat' => 'MTR', 'active' => true],
            ['nombre' => 'Pies', 'codigo_sunat' => 'FOT', 'active' => true],
            ['nombre' => 'Pulgadas', 'codigo_sunat' => 'INH', 'active' => true],
            ['nombre' => 'Unidades', 'codigo_sunat' => 'NIU', 'active' => true],
            ['nombre' => 'Yardas', 'codigo_sunat' => 'YRD', 'active' => true],
            ['nombre' => 'Hora', 'codigo_sunat' => 'HUR', 'active' => true],
        ]);

    }
}
