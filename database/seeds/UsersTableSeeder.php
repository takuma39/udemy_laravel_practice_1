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
                'name' => 'あああ',
                'email' => 'test@test',
                'password' => Hash::make('password123'),
            ], [
                'name' => 'いいい',
                'email' => 'test2@test',
                'password' => Hash::make('password123'),
            ], [
                'name' => 'ううう',
                'email' => 'test3@test',
                'password' => Hash::make('password123'),
            ]

        ]);
    }
}
