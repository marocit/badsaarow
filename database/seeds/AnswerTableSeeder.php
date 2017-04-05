<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //DB::statemanet('SET FOREIGN_KEY_CHECKS=0');
        //$faker = Factory::create('de_DE');
        DB::table('answers')->truncate();

        DB::table('answers')->insert([
            [
            'answer' => "Ja",
            ],
             [
            'answer' => "Nein",
            ],
             [
            'answer' => "Weiß noch nicht",
            ],
        ]);
    }
    }

