<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' =>"asd@asd.asd",
            'password' => '$2y$10$mXwEFI/nQub9PmCejn59zuozRujElm4bu5D01y.wXpciRnKjHRWNm', // secret
            'remember_token' => str_random(10),
            'role' =>1,
        ]);
       

       factory('App\Pref',1)->create();
         factory('App\Project',5)->create();
         factory('App\News',10)->create();
         factory('App\Blog',9)->create();
        factory('App\Video',10)->create();

       
        
        
       
    }
}
