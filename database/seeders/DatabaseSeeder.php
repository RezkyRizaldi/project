<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(MenuSeeder::class);
    }
}
