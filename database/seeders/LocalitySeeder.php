<?php

namespace Database\Seeders;

use App\Models\Locality;
use Illuminate\Database\Seeder;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Ciudad de México'],
            ['name' => 'Nava'],
            ['name' => 'Zaragoza'],
            ['name' => 'San Buenaventura'],
            ['name' => 'Ciudad Melchor Múzquiz'],
            ['name' => 'Viesca'],
            ['name' => 'Morelos'],
            ['name' => 'Arteaga'],
            ['name' => 'Allende'],
            ['name' => 'Acala'],
            ['name' => 'Villagrán'],
            ['name' => 'Yuriria'],
            ['name' => 'Apaseo el Grande'],
            ['name' => 'Purísima de Bustos'],
            ['name' => 'Salvatierra'],
            ['name' => 'Marfil'],
            ['name' => 'San José Iturbide'],
            ['name' => 'Apaseo el Alto'],
            ['name' => 'Ciudad Manuel Doblado'],
            ['name' => 'Jaral del Progreso'],
            ['name' => 'San Diego de la Unión'],
            ['name' => 'Santa Cruz Juventino Rosas'],
            ['name' => 'Doctor Mora'],
            ['name' => 'Dolores Hidalgo Cuna de la Independencia Nacional'],
            ['name' => 'Copala'],
            ['name' => 'Zihuatanejo'],
            ['name' => 'El Quince (San José el Quince)'],
            ['name' => 'San José el Verde (El Verde)'],
            ['name' => 'Jocotepec'],
            ['name' => 'Tecalitlán'],
            ['name' => 'Chapala'],
            ['name' => 'Ajijic'],
            ['name' => 'San Ignacio Cerro Gordo'],
            ['name' => 'Zacoalco de Torres'],
            ['name' => 'Huejuquilla el Alto'],
            ['name' => 'Villa Hidalgo'],
            ['name' => 'Unión de San Antonio'],
            ['name' => 'Las Pintitas'],
            ['name' => 'Tamazula de Gordiano'],
            ['name' => 'Acatlán de Juárez'],
            ['name' => 'Valle de Guadalupe'],
            ['name' => 'El Salto'],
            ['name' => 'Villa Purificación'],
            ['name' => 'San Antonio de la Cal'],
            ['name' => 'Soledad de Doblado'],
            ['name' => 'Cerro Azul'],
            ['name' => 'Tezonapa'],
            ['name' => 'Sihuapan'],
            ['name' => 'El Higo'],
            ['name' => 'Paso del Macho'],
            ['name' => 'Tlapacoyan'],
            ['name' => 'Álamo'],
            ['name' => 'Martínez de la Torre'],
            ['name' => 'Perote']
        ];

        Locality::insert($data);
    }
}
