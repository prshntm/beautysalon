<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            DB::table('jobs')->insert([
            'job_name'=>"Парикмахер-стилист"]);
            DB::table('jobs')->insert([
            'job_name'=> "Мастер ногтевого сервиса"]);
            DB::table('jobs')->insert([
            'job_name'=>"Бровист"]);
            DB::table('jobs')->insert([
            'job_name'=>"Визажист"]);
            DB::table('jobs')->insert([
            'job_name'=>"Специалист по перманентному макияжу"]);
            DB::table('jobs')->insert([
            'job_name'=>"Парикмахер"]);
    }
}
