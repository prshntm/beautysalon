<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialisationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialisations')->insert([
            'job_Id' => 14,
            'staff_Id' => 1
        ]);
        DB::table('specialisations')->insert([
            'job_Id' => 14,
            'staff_Id' => 2
        ]);
        DB::table('specialisations')->insert([
            'job_Id' => 19,
            'staff_Id' => 3
        ]);
        DB::table('specialisations')->insert([
            'job_Id' => 15,
            'staff_Id' => 3
        ]);
        DB::table('specialisations')->insert([
            'job_Id' => 14,
            'staff_Id' => 4
        ]);
        DB::table('specialisations')->insert([
            'job_Id' => 19,
            'staff_Id' => 5
        ]);
        DB::table('specialisations')->insert([
            'job_Id' => 15,
            'staff_Id' => 6
        ]);
        DB::table('specialisations')->insert([
            'job_Id' => 16,
            'staff_Id' => 6
        ]);
        DB::table('specialisations')->insert([
            'job_Id' => 17,
            'staff_Id' => 6
        ]);
        DB::table('specialisations')->insert([
            'job_Id' => 18,
            'staff_Id' => 6
        ]);
        DB::table('specialisations')->insert([
            'job_Id' => 14,
            'staff_Id' => 7
        ]);
    }
}
