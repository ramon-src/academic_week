<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('events')->insert([
            [
                'name' => 'Semana Acadêmica',
                'description'=>'Os temas apresentados durante os três dias da Semana Acadêmica, foram sugestões de alunos e professores sobre os principais assuntos e tendências na área da Informática.',
                'active' => true,
                'instituition_id' => 1
            ]
        ]);
    }
}
