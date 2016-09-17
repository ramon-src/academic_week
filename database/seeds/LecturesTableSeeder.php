<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Category ID = 1 => Palestras
         *          ID = 2 => Cursos
         */
        DB::table('lectures')->insert([
            [
                'subject' => 'Métodos Ágeis', 'description' => 'Inserir descrição', 'local' => 'Prédio 32 FACIN - Sala 2',
                'init_hour' => setHourAndMinute(8, 0), 'end_hour' => setHourAndMinute(8, 30),
                'max_people' => 40, 'event_schedule_id' => 1, 'lecture_category_id' => 1
            ], [
                'subject' => 'Bad Smells e Refactoring', 'description' => 'Inserir descrição', 'local' => 'Prédio 32 FACIN - Sala 5',
                'init_hour' => setHourAndMinute(8, 0), 'end_hour' => setHourAndMinute(8, 30),
                'max_people' => 60, 'event_schedule_id' => 1, 'lecture_category_id' => 1
            ], [
                'subject' => 'Direto ao Ponto', 'description' => 'Inserir descrição', 'local' => 'Prédio 32 FACIN - Sala 207',
                'init_hour' => setHourAndMinute(8, 30), 'end_hour' => setHourAndMinute(12, 0),
                'max_people' => 40, 'event_schedule_id' => 1, 'lecture_category_id' => 2
            ], [
                'subject' => 'Carreiras', 'description' => 'Inserir descrição', 'local' => 'Prédio 32 FACIN - Sala 405',
                'init_hour' => setHourAndMinute(8, 0), 'end_hour' => setHourAndMinute(8, 30),
                'max_people' => 40, 'event_schedule_id' => 1, 'lecture_category_id' => 2
            ]
        ]);
    }
}
