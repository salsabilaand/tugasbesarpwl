<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            "nama" => " Salsabila Rachma Aninda",
            "nim" => "1931710012",
            "jurusan" => "TI",
            "prodi" => "D3 MI",
            "email" => "salsabilarachmaaninda@gmail.com"
        ]);
    }
}
