<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Question;
use App\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::inRandomOrder();
       // $users = User::All();
        $users->each(function ($user) {
            $question = Question::inRandomOrder()->first();
            $answer = factory(Answer::class)->make();
            $answer->user()->associate($user);
            $answer->question()->associate($question);
            $answer->save();
        });
    }
}