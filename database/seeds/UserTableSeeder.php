<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_obj = \App\Role::where('role_name', '=', 'Admin')->first();
        $role_obj1 = \App\Role::where('role_name', '=', 'FreeLancer')->first();
        $fields = [
            'first_name' => 'Admin',
            'last_name' => 'Admin Role',
            'gender' => 1,
            'birthdate' => '2018-09-08',
            'age' => 24,
            'email' => 'asd@gmail.com',
            'password' => bcrypt('123456'),

        ];
        $user=new \App\User();
        $user->fill($fields);
        $user->save();
        $user->roles()->attach($role_obj);
        $fields2 = [
            'first_name' => 'Admin 123',
            'last_name' => 'Admin Role',
            'gender' => 1,
            'birthdate' => '2018-09-08',
            'age' => 24,
            'email' => 'asd@gmail.com',
            'password' => bcrypt('123456'),

        ];
        $user=new \App\User();
        $user->fill($fields2);
        $user->save();
        $user->roles()->attach($role_obj1);
    }
}
