<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        DB::table('users')->insert([
            
            'name' => 'aslan1',
            'email' => 'aslan1@gmail.com',
            'password' => Hash::make('aslan1'),
            'level' => 'admin',
            'status' => 'active',

        ]);

        DB::table('users')->insert([
            
            'name' => 'aslan2',
            'email' => 'aslan2@gmail.com',
            'password' => Hash::make('aslan2'),
            'level' => 'user',
            'status' => 'active',

        ]);
    }
}
