<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Controllers\ZipCodesController;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FederalentitySeeder::class);
        $this->call(LocalitySeeder::class);
        $this->call(MunicipalitySeeder::class);
        $this->call(SettlementsTypeSeeder::class);
    }
}
