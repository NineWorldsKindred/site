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
                'id' => 1,
                'name' => 'Shauna Gordon',
                'email' => 'shauna@shaunagordon.com',
                'created_at' => date('Y-m-d H:i', strtotime('NOW')),
                'updated_at'  => date('Y-m-d H:i', strtotime('NOW'))
            ],
            [
                'id' => 2,
                'name' => 'Ryan Spellman',
                'email' => 'ryanspellman@gmail.com',
                'created_at' => date('Y-m-d H:i', strtotime('NOW')),
                'updated_at'  => date('Y-m-d H:i', strtotime('NOW'))
            ]
        ]);
    }
}
