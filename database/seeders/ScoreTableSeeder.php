<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scores = [
        [   "student_id" => "1",
            "subject_id" => "2",
            "nilai" => "80"
        ],
        [
            "student_id" => "1",
            "subject_id" => "3",
            "nilai" => "90"
        ],
        [
            "student_id" => "1",
            "subject_id" => "4",
            "nilai" => "85"
        ]];
        DB::table('scores')->insert($scores);
    }
}
