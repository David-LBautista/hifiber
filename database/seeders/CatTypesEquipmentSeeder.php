<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\CatTypeEquipment;

class CatTypesEquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CatTypeEquipment::create([
            'slug' => 'renta-de-equipo',
            'name' => 'Renta de Equipo',
            'description' => 'Renta de Equipo'
        ]);
        CatTypeEquipment::create([
            'slug' => 'compra-de-equipo',
            'name' => 'Compra de Equipo',
            'description' => 'Compra de Equipo'
        ]);
    }
}
