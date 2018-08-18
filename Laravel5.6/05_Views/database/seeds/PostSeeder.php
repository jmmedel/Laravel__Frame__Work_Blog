<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TEST
        factory(App\Post::class,10)->create()->each(function($u){
            $u->make();
        });
    }
}
