<?php

namespace Database\Seeders;

use App\Models\FederalEntity;
use Illuminate\Database\Seeder;

class FederalentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [
            ['name' => 'Aguascalientes', 'code' => '01'],
            ['name' => 'Baja California', 'code' => '02'],
            ['name' => 'Baja California Sur', 'code' => '03'],
            ['name' => 'Campeche', 'code' => '04'],
            ['name' => 'Coahuila de Zaragoza', 'code' => '05'],
            ['name' => 'Colima', 'code' => '06'],
            ['name' => 'Chiapas', 'code' => '07'],
            ['name' => 'Chihuahua', 'code' => '08'],
            ['name' => 'Ciudad de México', 'code' => '09'],
            ['name' => 'Durango', 'code' => '10'],
            ['name' => 'Guanajuato', 'code' => '11'],
            ['name' => 'Guerrero', 'code' => '12'],
            ['name' => 'Hidalgo', 'code' => '13'],
            ['name' => 'Jalisco', 'code' => '14'],
            ['name' => 'Estado de México', 'code' => '15'],
            ['name' => 'Michoacán de Ocampo', 'code' => '16'],
            ['name' => 'Morelos', 'code' => '17'],
            ['name' => 'Nayarit', 'code' => '18'],
            ['name' => 'Nuevo León', 'code' => '19'],
            ['name' => 'Oaxaca', 'code' => '20'],
            ['name' => 'Puebla', 'code' => '21'],
            ['name' => 'Querétaro', 'code' => '22'],
            ['name' => 'Quintana Roo', 'code' => '23'],
            ['name' => 'San Luis Potosí', 'code' => '24'],
            ['name' => 'Sinaloa', 'code' => '25'],
            ['name' => 'Sonora', 'code' => '26'],
            ['name' => 'Tabasco', 'code' => '27'],
            ['name' => 'Tamaulipas', 'code' => '28'],
            ['name' => 'Tlaxcala', 'code' => '29'],
            ['name' => 'Veracruz de Ignacio de la Llave', 'code' => '30'],
            ['name' => 'Yucatán', 'code' => '31'],
            ['name' => 'Zacatecas', 'code' => '32']
        ];
        FederalEntity::insert($data);
    }
}
