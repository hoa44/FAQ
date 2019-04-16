<?php


use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        factory(App\User::class, 50)->create()->each(function ($u) {

           // $u->posts()->save(factory(App\Post::class)->make());
            //$u->cars()->save(factory(App\Cars::class)->make());
        });
    }
}
