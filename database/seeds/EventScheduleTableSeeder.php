<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('event_schedule')->insert([
            [
                'date' => '2016-10-04',
                'description' => 'Inserir descrição',
                'event_id' => 1
            ], [
                'date' => '2016-10-05',
                'description' => 'Inserir descrição',
                'event_id' => 1
            ], [
                'date' => '2016-10-06',
                'description' => 'Inserir descrição',
                'event_id' => 1
            ]
        ]);
    }
}
