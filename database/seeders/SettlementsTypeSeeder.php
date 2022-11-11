<?php

namespace Database\Seeders;

use App\Models\SettlementsType;
use Illuminate\Database\Seeder;

class SettlementsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Aeropuerto', 'code' => '01'],
            ['name' => 'Barrio', 'code' => '02'],
            ['name' => 'Campamento', 'code' => '04'],
            ['name' => 'Colonia', 'code' => '09'],
            ['name' => 'Condominio', 'code' => '10'],
            ['name' => 'Congregación', 'code' => '11'],
            ['name' => 'Conjunto habitacional', 'code' => '12'],
            ['name' => 'Ejido', 'code' => '15'],
            ['name' => 'Estación', 'code' => '16'],
            ['name' => 'Equipamiento', 'code' => '17'],
            ['name' => 'Exhacienda', 'code' => '18'],
            ['name' => 'Finca', 'code' => '20'],
            ['name' => 'Fraccionamiento', 'code' => '21'],
            ['name' => 'Granja', 'code' => '23'],
            ['name' => 'Hacienda', 'code' => '24'],
            ['name' => 'Parque industrial', 'code' => '26'],
            ['name' => 'Poblado comunal', 'code' => '27'],
            ['name' => 'Pueblo', 'code' => '28'],
            ['name' => 'Ranchería', 'code' => '29'],
            ['name' => 'Residencial', 'code' => '30'],
            ['name' => 'Unidad habitacional', 'code' => '31'],
            ['name' => 'Villa', 'code' => '32'],
            ['name' => 'Zona comercial', 'code' => '33'],
            ['name' => 'Zona federal', 'code' => '34'],
            ['name' => 'Zona industrial', 'code' => '37'],
            ['name' => 'Puerto', 'code' => '40'],
            ['name' => 'Paraje', 'code' => '45'],
            ['name' => 'Zona naval', 'code' => '46'],
            ['name' => 'Zona militar', 'code' => '47'],
            ['name' => 'Rancho', 'code' => '48']
        ];
        SettlementsType::insert($data);
    }
}
