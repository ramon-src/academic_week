<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersLectureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users_lecture')->insert([
            [
                'user_id' => 1,
                'lecture_id' => 5,
            ]
        ]);
    }
}
