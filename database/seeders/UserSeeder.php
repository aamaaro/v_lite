<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alberto Amaro',
            'phone' => '04161462763',
            'email' => 'alberto@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Dihane Ramirez',
            'phone' => '04243087264',
            'email' => 'dihane.ramirez@gmail.com',
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('12345678')
        ]);
    }
}
