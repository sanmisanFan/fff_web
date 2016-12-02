<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();
        $this->call('TagTableSeeder');
        $this->call('PostTableSeeder');
        Model::reguard();

    }
}

/**
* 随机生成10篇post
* 
*/
/* class PostTableSeeder extends Seeder{
    public function run(){
        App\Post::truncate();
        factory(App\Post::class, 10)->create();

    }
} */
