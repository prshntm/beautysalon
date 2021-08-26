<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ServiceCategoryTableSeeder::class);
        $this->call(
            JobTableSeeder::class);
        $this->call(GalleryFolderTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
    }
}
