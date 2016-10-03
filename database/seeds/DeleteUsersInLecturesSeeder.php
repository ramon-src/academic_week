<?php

use Illuminate\Database\Seeder;
use AcademicDirectory\Domains\Lectures\Lecture;
class DeleteUsersInLecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        deleteUsersLecturesByLectureId(27);
        Lecture::find(27)->delete();

        Lecture::find(36)->update([
            'local' => 'Prédio 97 Global Tecnopuc - Auditório Sala 109'
        ]);
    }
}
