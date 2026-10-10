<?php

namespace Database\Seeders;

use App\Models\PqrType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class PqrTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Petición general / Interés general o particular', 'response_time_business_days' => 15],
            ['name' => 'Queja', 'response_time_business_days' => 15],
            ['name' => 'Reclamo', 'response_time_business_days' => 15],
            ['name' => 'Denuncia', 'response_time_business_days' => 15],
            ['name' => 'Solicitud de documentos e información', 'response_time_business_days' => 10],
            ['name' => 'Sugerencia o felicitación', 'response_time_business_days' => 8]
        ];

        foreach($types as $type){
            PqrType::updateOrCreate(
                ['name' => $type['name']],
                ['response_time_business_days' => $type['response_time_business_days']],
            );
        }
    }
}
