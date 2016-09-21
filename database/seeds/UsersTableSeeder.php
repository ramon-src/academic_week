<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'name' => 'Ramon Schmidt Rocha',
                'email' => 'ramonroc@gmail.com',
                'password' => bcrypt('*dr4m0n2486*'),
                'active' => true,
                'role_id' => DB::table('roles')->where('name', 'Root')->value('id')
            ], [
                'name' => 'DAI Admin',
                'email' => 'daipucrs2016@gmail.com',
                'password' => bcrypt('admdai2016'),
                'active' => true,
                'role_id' => DB::table('roles')->where('name', 'Administrador')->value('id')
            ]
        ]);
    }
}
