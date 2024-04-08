<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [
            'name' => 'Wilbert Santiago',
            'email' => 'wilbert@gmail.com',
            'password' => Hash::make('1234567890'),
            'role' => 'Admin',
        ],
 
        ]);

        DB::table('abouts')->insert([
            [
                'description' => '
                As an IT fresher, I am passionate and eager to learn about exploring the dynamic world of technology. I am ready to contribute my skills to innovative projects and learn from seasoned professionals in the field.',
                'name' => 'Wilbert Santiago',
                'birthday' => 'September 16, 2001',
                'place_of_birth' => 'Hilongos',
                'age' => '22',
                'address' => 'Brgy. Cantandog 1',
                'phone' => '09380357529',
                'email' => 'w.santiago091601@gmail.com',
                'degree' => 'Bachelor Degree',
            ]
            ]);


    }
}
