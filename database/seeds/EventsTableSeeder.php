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
                'description'=>'Inserir descrição',
                'active' => true,
                'instituition_id' => 1
            ], [
                'name' => 'Hackatruck',
                'description'=>'Inserir descrição',
                'active' => false,
                'instituition_id' => 1
            ],[
                'name' => 'Hackatruck PUCSP',
                'description'=>'Inserir descrição',
                'active' => true,
                'instituition_id' => 2
            ]
        ]);
    }
}
