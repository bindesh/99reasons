<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['role_name' => 'Admin',
            'role_description' => 'Admin Role'
             ],
            [
                'role_name' => 'FreeLancer',
                'role_description' => 'Free Lancer Role'
            ],
        ];
        \App\Role::insert($roles);
    }
}
