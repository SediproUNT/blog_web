<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('users')->insert(
            [
            'name' => 'Rommel',
            //'username' => 'rommel26',
            'email' => 'rommel@test.com',
            'apellidoP'=> 'Ulco',
            'apellidoM'=> 'Chavarria',
            'password' => bcrypt('password')
            ],
            [
            'name' => '',
            'username' => '',
            'email' => ''
            ]);
    }
}
