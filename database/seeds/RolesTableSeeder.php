<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
          [
              'id' => 1,
              'name' => 'guest'
          ],
          [
              'id' => 2,
              'name' => 'friend'
          ],
          [
              'id' => 3,
              'name' => 'member'
          ],
          [
              'id' => 4,
              'name' => 'voter'
          ],
          [
              'id' => 5,
              'name' => 'officer'
          ],
          [
              'id' => 6,
              'name' => 'thingsman'
          ],
          [
              'id' => 7,
              'name' => 'admin'
          ]
        ];
        DB::table('roles')->insert($roles);
    }
}
