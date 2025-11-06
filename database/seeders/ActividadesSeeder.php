<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actividad;
class ActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Actividad::create([
            'titulo' => 'Campaña de Adopción',
            'descripcion' => 'Evento especial para encontrar hogar a nuestros rescatados.',
            'fecha' => now(),
        ]);

        Actividad::create([
            'titulo' => 'Voluntariado',
            'descripcion' => 'Invitamos a todos a participar en nuestras jornadas de voluntariado.',
            'fecha' => now()->addDays(7),
        ]);
    }
}
