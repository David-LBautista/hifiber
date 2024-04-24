<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ServicePlan;

class ServicesPlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ?  WIRELESS con renta equipo
        ServicePlan::create([
            'ordering' => '1',
            'slug' => 'plan-basico',
            'cat_type_service' => '1',
            'cat_type_service_plan' => '1',
            'cat_type_equipment' => '1',
            'name' => 'PLAN BÁSICO',
            'price' => '450',
            'color' => '#1C61D0',
            'description_short' => 'Hasta 10 Mbps (Descarga), Hasta 5 Mbps (Subida), Internet Ilimitado',
            'description_long' => '
                <p class="flex items-center text-gray-600 mb-2">
                <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                >
                    <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2.5"
                    class="w-3 h-3"
                    viewBox="0 0 24 24"
                    >
                    <path d="M20 6L9 17l-5-5"></path>
                    </svg> </span
                >Hasta 10 Mbps (Descarga)
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                >
                    <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2.5"
                    class="w-3 h-3"
                    viewBox="0 0 24 24"
                    >
                    <path d="M20 6L9 17l-5-5"></path>
                    </svg> </span
                >Hasta 5 Mbps (Subida)
                </p>
                <p class="flex items-center text-gray-600 mb-6">
                <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                >
                    <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2.5"
                    class="w-3 h-3"
                    viewBox="0 0 24 24"
                    >
                    <path d="M20 6L9 17l-5-5"></path>
                    </svg> </span
                >Internet Ilimitado
                </p>
            ',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServicePlan::create([
            'ordering' => '2',
            'slug' => 'plan-plus',
            'cat_type_service' => '1',
            'cat_type_service_plan' => '2',
            'cat_type_equipment' => '1',
            'name' => 'PLAN PLUS',
            'price' => '550',
            'color' => '#05D913',
            'description_short' => 'Hasta 15 Mbps (Descarga), Hasta 5 Mbps (Subida), Internet Ilimitado',
            'description_long' => '
                <p class="flex items-center text-gray-600 mb-2">
                    <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
                    >
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg> </span
                    >Hasta 15 Mbps (Descarga)
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                    <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
                    >
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                    </span>
                    Hasta 5 Mbps (Subida)
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                    <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
                    >
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg> </span
                    >Internet Ilimitado
                </p>
                <p class="flex items-center text-gray-600 mb-6">
                    <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
                    >
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg> </span
                    >Soporte Técnico
                </p>
            ',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServicePlan::create([
            'ordering' => '3',
            'slug' => 'plan-premium',
            'cat_type_service' => '1',
            'cat_type_service_plan' => '3',
            'cat_type_equipment' => '1',
            'name' => 'PLAN PREMIUM',
            'price' => '650',
            'color' => '#1C61D0',
            'description_short' => 'Hasta 20 Mbps (Descarga), Hasta 5 Mbps (Subida), Internet Ilimitado',
            'description_long' => '
                <p class="flex items-center text-gray-600 mb-2">
                    <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                    >
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg> </span
                    >Hasta 20 Mbps (Descarga)
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                    <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                    >
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                    </span>
                    Hasta 5 Mbps (Subida)
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                    <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                    >
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg> </span
                    >Internet Ilimitado
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                    <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                    >
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                    </span>
                    Soporte Técnico
                </p>
            ',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ?  WIRELESS con compra equipo
        ServicePlan::create([
            'ordering' => '1',
            'slug' => 'plan-basico',
            'cat_type_service' => '1',
            'cat_type_service_plan' => '1',
            'cat_type_equipment' => '2',
            'name' => 'PLAN BÁSICO',
            'price' => '350',
            'color' => '#1C61D0',
            'description_short' => 'Hasta 10 Mbps (Descarga), Hasta 5 Mbps (Subida), Internet Ilimitado',
            'description_long' => '
            <p class="flex items-center text-gray-600 mb-2">
                <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                >
                <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2.5"
                    class="w-3 h-3"
                    viewBox="0 0 24 24"
                >
                    <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
                >Hasta 10 Mbps (Descarga)
            </p>
            <p class="flex items-center text-gray-600 mb-2">
                <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                >
                <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2.5"
                    class="w-3 h-3"
                    viewBox="0 0 24 24"
                >
                    <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
                >Hasta 5 Mbps (Subida)
            </p>
            <p class="flex items-center text-gray-600 mb-6">
                <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                >
                <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2.5"
                    class="w-3 h-3"
                    viewBox="0 0 24 24"
                >
                    <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
                >Internet Ilimitado
            </p>
            ',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServicePlan::create([
            'ordering' => '2',
            'slug' => 'plan-plus',
            'cat_type_service' => '1',
            'cat_type_service_plan' => '2',
            'cat_type_equipment' => '2',
            'name' => 'PLAN PLUS',
            'price' => '450',
            'color' => '#05D913',
            'description_short' => 'Hasta 10 Mbps (Descarga), Hasta 5 Mbps (Subida), Internet Ilimitado',
            'description_long' => '
                <p class="flex items-center text-gray-600 mb-2">
                    <span
                        class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                    >
                        <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                        >
                        <path d="M20 6L9 17l-5-5"></path>
                        </svg> </span
                    >Hasta 10 Mbps (Descarga)
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                    <span
                        class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                    >
                        <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                        >
                        <path d="M20 6L9 17l-5-5"></path>
                        </svg> </span
                    >Hasta 5 Mbps (Subida)
                    </p>
                    <p class="flex items-center text-gray-600 mb-6">
                    <span
                        class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
                    >
                        <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                        >
                        <path d="M20 6L9 17l-5-5"></path>
                        </svg> </span
                    >Internet Ilimitado
                </p>
            ',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServicePlan::create([
            'ordering' => '3',
            'slug' => 'plan-premium',
            'cat_type_service' => '1',
            'cat_type_service_plan' => '3',
            'cat_type_equipment' => '2',
            'name' => 'PLAN PREMIUM',
            'price' => '550',
            'color' => '#1C61D0',
            'description_short' => 'Hasta 15 Mbps (Descarga), Hasta 5 Mbps (Subida), Internet Ilimitado',
            'description_long' => '
                <p class="flex items-center text-gray-600 mb-2">
                    <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
                    >
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg> </span
                    >Hasta 15 Mbps (Descarga)
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                    <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
                    >
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                    </span>
                    Hasta 5 Mbps (Subida)
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                    <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
                    >
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg> </span
                    >Internet Ilimitado
                </p>
                <p class="flex items-center text-gray-600 mb-6">
                    <span
                    class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
                    >
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2.5"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                    >
                        <path d="M20 6L9 17l-5-5"></path>
                    </svg> </span
                    >Soporte Técnico
                </p>
            ',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ?  FIBRA OPTICA con compra equipo
        ServicePlan::create([
            'ordering' => '1',
            'slug' => 'acceso-premium-internet',
            'cat_type_service' => '2',
            'cat_type_service_plan' => null,
            'cat_type_equipment' => null,
            'name' => 'Acceso Premium a Internet',
            'price' => '350',
            'color' => '#1C61D0',
            'description_short' => 'Explora la revolución de la conectividad con nuestra oferta de fibra óptica con planes',
            'description_long' => '
                Explora la revolución de la conectividad con nuestra oferta de fibra óptica con planes desde 30 Megas. Navega a velocidades ultra rápidas y disfruta de una conexión estable y confiable para tus necesidades digitales. Con nuestra tecnología de vanguardia, tendrás acceso a una experiencia en línea sin interrupciones y sin límites. Desde streaming fluido hasta videoconferencias sin interrupciones, nuestra fibra óptica te ofrece todo lo que necesitas para estar siempre conectado.
                ¡Haz de la velocidad y la fiabilidad una parte integral de tu experiencia en línea hoy mismo!.
            ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
