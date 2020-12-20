<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spps = [
        [
            "student_id" => "1",
            "tanggal pembayaran" => "2020-06-12"
        ],
        [
            "student_id" => "1",
            "tanggal pembayaran" => "2020-07-10"
        ],
        [
            "student_id" => "1",
            "tanggal pembayaran" => "2020-08-20"
        ],
        [
            "student_id" => "1",
            "tanggal pembayaran" => "2020-09-02"
        ]];
        DB::table('spps')->insert($spps);
    }
}
