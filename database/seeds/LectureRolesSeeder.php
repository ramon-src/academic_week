<?php

use Illuminate\Database\Seeder;

class LectureRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('lecture_roles')->insert([
            [
                'name'=> 'Palestrante'
            ],[
                'name'=> 'Participante'
            ],[
                'name'=> 'Organizador'
            ],
            ]);
    }
}
