<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CatTypeServicePlan;

class CatTypesServicePlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CatTypeServicePlan::create([
            'slug' => 'plan-basico',
            'name' => 'Plan Básico',
            'description' => 'Plan Básico'
        ]);
        CatTypeServicePlan::create([
            'slug' => 'plan-plus',
            'name' => 'Plan Plus',
            'description' => 'Plan Plus'
        ]);
        CatTypeServicePlan::create([
            'slug' => 'plan-premium',
            'name' => 'Plan Premium',
            'description' => 'Plan Premium'
        ]);
    }
}
