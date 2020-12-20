<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
        [
            "nama" => "Desain Multimedia Interaktif",
            "kode" => "DMI",
            "pengajar" => "Lin Mulyati"
        ],
        [
            "nama" => "Pemograman Dasar",
            "kode" => "PD",
            "pengajar" => "Maria Ulfa"
        ],
        [
            "nama" => "Desain Proyek",
            "kode" => "DP",
            "pengajar" => "Yasir Arafat"
        ]];
        DB::table('subjects')->insert($subjects);
    }
}
