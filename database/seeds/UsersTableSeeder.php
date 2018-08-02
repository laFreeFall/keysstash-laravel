<?php

use Illuminate\Database\Seeder;

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
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'test',
                'email' => 'test@mail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'user',
                'email' => 'user@mail.com',
                'password' => bcrypt('password')
            ]
        ]);
    }
}
