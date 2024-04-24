<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CatTypeService;

class CatTypesServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CatTypeService::create([
            'slug' => 'wireless',
            'name' => 'Wireless',
            'description' => 'Servicio Tipo Wireless'
        ]);
        CatTypeService::create([
            'slug' => 'fibra-optica',
            'name' => 'Fibra Óptica',
            'description' => 'Servicio Fibra Óptica'
        ]);
    }
}
