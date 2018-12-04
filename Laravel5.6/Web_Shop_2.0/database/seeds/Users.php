<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
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

            ['id' => 1,'name' =>"kagaya",'email' => "jm_sasuke25@yahoo.com",'password' => '$2y$10$L8rosX.8rBY6pUVjMahew.MWiXC5GC8.SDHmBi4ysBg2A4g9nSHaa', 'admin' =>1,'author' =>1, 'created_at' => now(),'updated_at' => now()],

           
         ]);

    }
}
