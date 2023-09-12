<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create(
            [
                'id' => '1',
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'password' => bcrypt('password'),
            ],
            [
                'id' => '2',
                'name' => 'Rommel Eduardo',
                'email' => 'urommel@test.com',
                'password' => bcrypt('password'),
            ],
            [
                'id' => '3',
                'name' => 'Victor Manuel',
                'email' => 'uvictor@test.com',
                'password' => bcrypt('password'),
            ],
            [
                'id' => '4',
                'name' => 'Jorge Luis',
                'email' => '
            );
    }
}
