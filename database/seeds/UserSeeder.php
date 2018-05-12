<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * insert default solution provider in to database
     * @return void
     */
    public function run()
    {
        //create timestamp with carbon
        $timeStamp    = Carbon::now();

        //insert dummy solution provider to users table
        DB::table('users')->insert(
            [
                'email'         => 'rafey270@gmail.com',
                'password'      => Hash::make('123123'),
                'name'			=> 'Guru G',
                'created_at'    =>  $timeStamp,
                'updated_at'    =>  $timeStamp

            ]
        );
    }
}
