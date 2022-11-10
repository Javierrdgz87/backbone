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
            ['name' => 'Campamento', 'code' => '03'],
            ['name' => 'Colonia', 'code' => '04'],
            ['name' => 'Condominio', 'code' => '05'],
            ['name' => 'Congregación', 'code' => '06'],
            ['name' => 'Conjunto habitacional', 'code' => '07'],
            ['name' => 'Ejido', 'code' => '08'],
            ['name' => 'Estación', 'code' => '09'],
            ['name' => 'Equipamiento', 'code' => '10'],
            ['name' => 'Exhacienda', 'code' => '11'],
            ['name' => 'Finca', 'code' => '12'],
            ['name' => 'Fraccionamiento', 'code' => '13'],
            ['name' => 'Granja', 'code' => '14'],
            ['name' => 'Hacienda', 'code' => '15'],
            ['name' => 'Parque industrial', 'code' => '16'],
            ['name' => 'Poblado comunal', 'code' => '17'],
            ['name' => 'Pueblo', 'code' => '18'],
            ['name' => 'Ranchería', 'code' => '19'],
            ['name' => 'Residencial', 'code' => '20'],
            ['name' => 'Unidad habitacional', 'code' => '21'],
            ['name' => 'Villa', 'code' => '22'],
            ['name' => 'Zona comercial', 'code' => '23'],
            ['name' => 'Zona federal', 'code' => '24'],
            ['name' => 'Zona industrial', 'code' => '25'],
            ['name' => 'Puerto', 'code' => '26'],
            ['name' => 'Paraje', 'code' => '27'],
            ['name' => 'Zona naval', 'code' => '28'],
            ['name' => 'Zona militar', 'code' => '29'],
            ['name' => 'Rancho', 'code' => '30']
        ];
        SettlementsType::insert($data);
    }
}
