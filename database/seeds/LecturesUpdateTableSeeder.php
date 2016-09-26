<?php

use Illuminate\Database\Seeder;
use AcademicDirectory\Domains\Lectures\Lecture;

class LecturesUpdateTableSeeder extends Seeder
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
        /*
         * Event_schedule_id = ao id do dia da programação
         */
        Lecture::find(5)->delete();
        Lecture::find(11)->update(['lecture_category_id'=>1]);
        Lecture::find(12)->update(['lecture_category_id'=>1]);
        Lecture::find(13)->update(['lecture_category_id'=>1]);
        Lecture::find(14)->update(['lecture_category_id'=>1]);

        DB::table('lectures')->insert([
            [
                'subject' => 'Reaject.js',
                'description' => 'Curso básico de Reaject.js realizado pela empresa E-core.',
                'local' => 'Prédio 32 FACIN - AGES Sala 105',
                'init_hour' => setHourAndMinute(19, 00),
                'end_hour' => setHourAndMinute(22, 30),
                'max_people' => 30,
                'event_schedule_id' => 2, 'lecture_category_id' => 2
            ], [
                'subject' => 'Ruby',
                'description' => 'Curso básico de Ruby realizado pela empresa E-core.',
                'local' => 'Prédio 32 FACIN - AGES Sala 105',
                'init_hour' => setHourAndMinute(19, 00),
                'end_hour' => setHourAndMinute(22, 30),
                'max_people' => 30,
                'event_schedule_id' => 2, 'lecture_category_id' => 2
            ],
            [
                'subject' => 'Descomplicando o ShareLatex',
                'description' => 'Anderson, irá dar um curso básico sobre ShareLatex. Uma  ferramenta para facilitar o desenvolvimento de artigos, de acordo com as normas da ABNT.',
                'local' => 'Prédio 32 FACIN - AGES Sala 105',
                'init_hour' => setHourAndMinute(8, 30),
                'end_hour' => setHourAndMinute(10, 30),
                'max_people' => 30,
                'event_schedule_id' => 3, 'lecture_category_id' => 2
            ]

        ]);
    }
}
