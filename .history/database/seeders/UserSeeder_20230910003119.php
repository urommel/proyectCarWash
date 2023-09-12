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
                [
                    'id' => '1',
                    'name' => 'Admin',
                    'email' => 'admin@test.com',
                    'password' => bcrypt('password'),
                    'created_at' => '2023-01-01 00:00:00',
                    'updated_at' => '2023-01-01 00:00:00',

                ],
                [
                    'id' => '2',
                    'name' => 'Rommel Eduardo',
                    'email' => 'urommel@test.com',
                    'password' => bcrypt('password'),
                    'created_at' => '2023-10-10 00:00:00',
                    'updated_at' => '2023-10-10 00:00:00',
                ],
                [
                    'id' => '3',
                    'name' => 'Victor Manuel',
                    'email' => 'uvictor@test.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'id' => '4',
                    'name' => 'Giomar',
                    'email' => 'cgiomar@test.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'id' => '5',
                    'name' => 'Bryan',
                    'email' => 'gbryan@test.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'id' => '6',
                    'name' => 'Jorge',
                    'email' => 'gjorge@test.com',
                    'password' => bcrypt('password'),
                ]
            ]
        );
    }
}
