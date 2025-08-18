<?php

namespace Database\Seeders;
use App\Models\Actividad;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actividades = [
            [
                'titulo' => 'Campaña de esterilización',
                'descripcion' => 'Refugio Patitas del Sur organiza una campaña de esterilización en la veterinaria Mis Patitas Pets, ubicado en el Jirón Junín. Programado para el día 10 de marzo del 2024. Puedes traer a tu perrito o gatito para que sea esterilizado a costo social.',
                'imagen' => 'actividades/esterilizacion.jpg',
                'fecha' => Carbon::now()->addDays(15),
                'comentarios_count' => 20,
                'likes_count' => 15,
            ],
            [
                'titulo' => 'Jornada de adopción',
                'descripcion' => 'Ven y encuentra a tu nuevo mejor amigo en nuestra jornada de adopción. Perros y gatos en busca de un hogar amoroso estarán esperándote.',
                'imagen' => 'actividades/adopcion.jpg',
                'fecha' => Carbon::now()->addDays(30),
                'comentarios_count' => 12,
                'likes_count' => 8,
            ],
            [
                'titulo' => 'Taller de cuidado animal',
                'descripcion' => 'Aprende sobre alimentación, higiene y salud preventiva para tus mascotas en este taller gratuito impartido por veterinarios expertos.',
                'imagen' => 'actividades/taller.jpg',
                'fecha' => Carbon::now()->subDays(5), // Ya pasó
                'comentarios_count' => 5,
                'likes_count' => 3,
            ],
        ];

        foreach ($actividades as $actividad) {
            Actividad::create($actividad);
        }
    
    }
}
