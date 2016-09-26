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
                'rg' => '1483515422',
                'password' => bcrypt('*dr4m0n2486*'),
                'active' => true,
                'role_id' => DB::table('roles')->where('name', 'Root')->value('id')
            ], [
                'name' => 'DAI Admin',
                'email' => 'daipucrs2016@gmail.com',
                'rg' => '1483515422',
                'password' => bcrypt('admdai2016'),
                'active' => true,
                'role_id' => DB::table('roles')->where('name', 'Administrador')->value('id')
            ], [
                'name' => 'Criciuma',
                'email' => 'default@gmail.com',
                'rg' => '1483515422',
                'password' => bcrypt('def'),
                'active' => true,
                'role_id' => DB::table('roles')->where('name', 'Default')->value('id')
            ], [
                'name' => 'Rafael',
                'email' => 'defau2lt@gmail.com',
                'rg' => '1483558622',
                'password' => bcrypt('def'),
                'active' => true,
                'role_id' => DB::table('roles')->where('name', 'Default')->value('id')
            ], [
                'name' => 'João Rodrigues',
                'email' => 'defaul3t@gmail.com',
                'rg' => '1483558622',
                'password' => bcrypt('def'),
                'active' => true,
                'role_id' => DB::table('roles')->where('name', 'Default')->value('id')
            ]
        ]);
    }
}
