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
                'date' => '2016-09-12',
                'description' => 'Inserir descrição',
                'event_id' => 1
            ], [
                'date' => '2016-09-13',
                'description' => 'Inserir descrição',
                'event_id' => 1
            ], [
                'date' => '2016-09-14',
                'description' => 'Inserir descrição',
                'event_id' => 1
            ], [
                'date' => '2016-09-15',
                'description' => 'Inserir descrição',
                'event_id' => 1
            ], [
                'date' => '2016-09-16',
                'description' => 'Inserir descrição',
                'event_id' => 1
            ], [
                'date' => '2016-09-17',
                'description' => 'Inserir descrição',
                'event_id' => 1
            ], [
                'date' => '2016-09-11',
                'description' => 'Inserir descrição',
                'event_id' => 3
            ]
        ]);
    }
}
