<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryFolderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery_folders')->insert(['gallery_src' => "public/borisenkogallery"]);
        DB::table('gallery_folders')->insert(['gallery_src' => "public/fialkovskayagallery"]);
        DB::table('gallery_folders')->insert(['gallery_src' => "public/kharchenkogallery"]);
        DB::table('gallery_folders')->insert(['gallery_src' => "public/novikovagallery"]);
        DB::table('gallery_folders')->insert(['gallery_src' => "public/syutkinagallery"]);
        DB::table('gallery_folders')->insert(['gallery_src' => "public/yakimovagallery"]);
        DB::table('gallery_folders')->insert(['gallery_src' => "public/zinovievagallery"]);
    }
}
