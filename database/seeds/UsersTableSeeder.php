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
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
                'active' => true,
                'role_id' => DB::table('roles')->where('name', 'Root')->value('id')
            ], [
                'email' => 'casarao@gmail.com',
                'password' => bcrypt('12345'),
                'active' => true,
                'role_id' => DB::table('roles')->where('name', 'Administrador')->value('id')
            ]
        ]);
    }
}
