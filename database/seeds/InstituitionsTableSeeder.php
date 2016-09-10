<?php

use Illuminate\Database\Seeder;

class InstituitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instituitions')->insert([
            [
                'name' => 'Pontifícia Universidade Católica do Rio Grande do Sul',
                'initials' => 'PUCRS'
            ]
        ]);
    }
}
