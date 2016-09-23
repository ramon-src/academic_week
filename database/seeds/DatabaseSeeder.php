<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(InstituitionsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(EventScheduleTableSeeder::class);
        $this->call(LecturesCategoryTableSeeder::class);
        $this->call(LecturesTableSeeder::class);
        $this->call(UsersLectureTableSeeder::class);
        $this->call(EventsSubscribersSeeder::class);
    }
}
