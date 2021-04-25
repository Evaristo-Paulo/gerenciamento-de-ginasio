<?php

use App\Models\Ocupation;
use Illuminate\Database\Seeder;

class OcupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ocupation::create([
            'name' => 'Personnal trainer',
            'description' => 'Treinador de musculação e aeróbica',
            'salary_id' => 3
        ]);
        Ocupation::create([
            'name' => 'Secretária',
            'description' => 'Atendimento no balção',
            'salary_id' => 2
        ]);
    }
}
