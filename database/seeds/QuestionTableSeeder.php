<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Question;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$users = User::all();
        $users = User::inRandomOrder();
        for ($i = 1; $i <= 20; $i++) {
            $users->each(function ($user) {
                $question = factory(Question::class)->make();
                $question->user()->associate($user);
                $question->save();
            });
        }
    }
}
