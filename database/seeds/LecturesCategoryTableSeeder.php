<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturesCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('lectures_category')->insert([
            [
                'name' => 'Palestras'
            ], [
                'name' => 'Cursos'
            ]
        ]);
    }
}
