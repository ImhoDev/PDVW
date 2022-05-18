<?php

namespace Database\Seeders;

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
            DB::table('cat_unit_types')->insert([
            ['id' => 'ZZ',  'active' => true, 'symbol' => null, 'description' => 'Servicio'],
            ['id' => 'BX',  'active' => true, 'symbol' => null, 'description' => 'Caja'],
            ['id' => 'GLL', 'active' => true, 'symbol' => null, 'description' => 'Galones'],
            ['id' => 'GRM', 'active' => true, 'symbol' => null, 'description' => 'Gramos'],
            ['id' => 'KGM', 'active' => true, 'symbol' => null, 'description' => 'Kilos'],
            ['id' => 'LTR', 'active' => true, 'symbol' => null, 'description' => 'Litros'],
            ['id' => 'MTR', 'active' => true, 'symbol' => null, 'description' => 'Metros'],
            ['id' => 'FOT', 'active' => true, 'symbol' => null, 'description' => 'Pies'],
            ['id' => 'INH', 'active' => true, 'symbol' => null, 'description' => 'Pulgadas'],
            ['id' => 'NIU', 'active' => true, 'symbol' => null, 'description' => 'Unidades'],
            ['id' => 'YRD', 'active' => true, 'symbol' => null, 'description' => 'Yardas'],
            ['id' => 'HUR', 'active' => true, 'symbol' => null, 'description' => 'Hora'],
        ]);

    }
}
