<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre' => 'Pablo', 
            'apellido_primer' => 'Tovar',
            'apellido_segundo' => 'Tovar2',
            'direccion' => 'Este es el texto de la direción, incluye puntuación especial; Esto es acentos y letras eñe',
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
